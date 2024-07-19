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
    <title>View Patient</title>
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
            <h1 class="m-0">Patient Details</h1>
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
        <?php
        $query = "SELECT tbl_patient.*, tbl_city.name AS 'c_name' FROM tbl_patient INNER JOIN tbl_city ON tbl_patient.c_id = tbl_city.id  WHERE tbl_patient.id = $_GET[id]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
                    
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Image</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><img src="<?php echo "$row[image]" ?>" style="height:130px; object-fit:contain;"></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">ID</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[id]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Patient Name</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[name]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">National Identity Number (CNIC)</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[cnic]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Phone Number</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[phone]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Email Address</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[email]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Password</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[password]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">City</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[c_name]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Patient Address</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[address]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Gender</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[gender]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Status</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[status]" ?></td>
                    <!-- </tbody> -->
                </tr>
                <tr>    
                    <!-- <thead> -->
                        <th style="width: 15%;">Record time</th>
                    <!-- </thead> -->
                    <!-- <tbody> -->
                        <td><?php echo "$row[created_at]" ?></td>
                    <!-- </tbody> -->
                </tr>
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