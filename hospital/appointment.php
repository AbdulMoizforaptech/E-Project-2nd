<?php
include("../admin/config.php");
session_start();

if (!isset($_SESSION['hospital_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Appointments</title>
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
            <h1 class="m-0">List of Vaccination Appointments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">   
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
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Vaccine</th>
                        <th>Status</th>
                        <th>Record Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT tbl_patient.name AS 'p', tbl_hospital.name AS 'h', tbl_vaccine.name AS 'v', tbl_appointment.* FROM tbl_appointment INNER JOIN tbl_patient ON tbl_appointment.p_id = tbl_patient.id INNER JOIN tbl_hospital ON tbl_appointment.h_id = tbl_hospital.id INNER JOIN tbl_vaccine ON tbl_appointment.v_id = tbl_vaccine.id WHERE tbl_hospital.id = $_SESSION[hospital_session]";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $row){
                        echo
                        "<tr>
                            <td>$row[p]</td>
                            <td>$row[date]</td>
                            <td>$row[time]</td>
                            <td>$row[v]</td>
                            <td>$row[status]</td>
                            <td>$row[created_at]</td>
                            <td>";
                              if ($row["status"] == "pending"){
                                echo "<a href = 'include/vaccine_status_accept.php?id=$row[id]'>Accept</a> || ";
                                echo "<a href = 'include/vaccine_status_decline.php?id=$row[id]'>Decline</a>";
                              }
                            "</td>
                        </tr>";
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