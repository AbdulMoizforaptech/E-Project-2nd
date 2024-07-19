<?php
include("../admin/config.php");
session_start();

if (!isset($_SESSION['patient_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Test Appointments</title>
</head>
<body>
    <?php
    include_once 'include/header.php';
    include_once 'include/navbar.php';
    include_once 'include/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List of Covid Test Appointments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">  
                <li class="btn btn-sm btn-primary mx-3"><a class="text-white" href="get_covid_appointment.php">Apply for Covid Test</a></li>  
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Hospital Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Result</th>
                        <th>Record Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT tbl_patient.name AS 'p', tbl_hospital.name AS 'h', tbl_test.* FROM tbl_test INNER JOIN tbl_patient ON tbl_test.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_test.h_id = tbl_hospital.id WHERE tbl_patient.id = $_SESSION[patient_session]";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $row){
                        echo
                        "<tr>
                            <td>$row[h]</td>
                            <td>$row[date]</td>
                            <td>$row[time]</td>
                            <td>$row[result]</td>
                            <td>$row[created_at]</td>";
                            if ($row["result"] != "process"){
                              echo
                              "<td>
                              <a href = '#'>Download Report</a>
                            </td>";
                            }
                        "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>  <!-- card-body -->
                    
                    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <?php
    include_once 'include/footer.php';
    ?>
</body>
</html>