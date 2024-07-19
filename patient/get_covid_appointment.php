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
    <title>Covid Test Appointment</title>
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
            <h1 class="m-0">Covid Test Appointment</h1>
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
        $query = "SELECT * FROM tbl_patient WHERE id = $_SESSION[patient_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        ?> 
        <div class="card-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="covidtest" style=" padding-left:50px; max-width:600px; width:100%;">
                        <form method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="p_id" name="p_id" required value="<?php echo $row['id'] ?>">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $row['name'] ?>" readonly>
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="hospital">Hospital</label>
                            <select class="custom-select" name="hospital" required>
                                <option value="" selected hidden>Select Hospital</option>
                                <?php

                                $h_query = "SELECT * FROM tbl_hospital WHERE status = 'activate'";
                                $h_result = mysqli_query($conn,$h_query);

                                if (mysqli_num_rows($h_result)>0){
                                    $num = 0;
                                    foreach ($h_result as $h_row){
                                        $num++;
                                        ?>
                                            <option value="<?php echo $h_row['id']?>"><?php echo $h_row['name']?></option>";
                                    <?php }
                                }

                                ?>
                            </select>
                        </div>  <!-- form-group -->
                        <button type="submit" class="btn btn-primary" name="apply">Apply for Covid Test</button>
                        </form>
                    </div>  <!-- covidtest -->
                    <?php
                    if (isset($_POST['apply'])){
                        $p_id = $_POST['p_id'];
                        $hospital = $_POST['hospital'];

                        $query = "INSERT INTO tbl_test (p_id, h_id) VALUES ($p_id, $hospital)";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo 
                            "<script>
                                alert('Request for Covid Test has been sent successfully');
                                window.location.href = 'covid_test.php';
                            </script>";
                        } else {
                            echo 
                            "<script>
                                alert('Request failed');
                            </script>";
                        }
                    }
                    ?>
                </div>  <!-- col -->
            </div>  <!-- row -->
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