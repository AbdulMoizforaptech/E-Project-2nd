<?php
include("config.php");
session_start();

if (!isset($_SESSION['admin_session'])){
  echo "<script>window.location.href= 'login.php'</script>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
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
            <h1 class="m-0">List of Patients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="btn btn-sm btn-primary mx-3"><a class="text-white" href="add_patient.php">Add new Patient</a></li>  
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Action</th>
                        <th>Record Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT tbl_patient.*, tbl_city.name AS 'c_name' FROM tbl_patient INNER JOIN tbl_city ON tbl_patient.c_id = tbl_city.id";
                    $result = mysqli_query($conn, $query);
                    foreach ($result as $row){
                        echo
                        "<tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[phone]</td>
                            <td>$row[c_name]</td>
                            <td>
                            <a href= 'view_patient.php?id=$row[id]'>View</a> || 
                            <a href= 'edit_patient.php?id=$row[id]'>Edit</a>
                            </td>
                            <td>$row[created_at]</td>
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