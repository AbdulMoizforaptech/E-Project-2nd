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
    <title>New Vaccination Appointment</title>
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
            <h1 class="m-0">New Vaccination Appointment</h1>
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
                    <div class="getappointment" style=" padding-left:50px; max-width:600px; width:100%;">
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
                        <div class="form-group">
                            <label for="date">Select Date</label>
                            <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d', strtotime("+3 days")); ?>">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="time">Select the time</label>
                            <select class="custom-select" name="time" required>
                                <option value="" selected hidden>Select Time</option>
                                <option>9am-11am</option>
                                <option>11am-1pm</option>
                                <option>1pm-3pm</option>
                                <option>3pm-5pm</option>
                                <option>5pm-7pm</option>
                                <option>7pm-9pm</option>
                            </select>
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="vaccine">Select Vaccine</label>
                            <select class="custom-select" name="vaccine" required>
                                <option value="" selected hidden>Select Vaccine</option>
                                <?php

                                $v_query = "SELECT * FROM tbl_vaccine WHERE status = 'available'";
                                $v_result = mysqli_query($conn,$v_query);

                                if (mysqli_num_rows($v_result)>0){
                                    $num = 0;
                                    foreach ($v_result as $v_row){
                                        $num++;
                                        ?>
                                            <option value="<?php echo $v_row['id']?>"><?php echo $v_row['name']?></option>";
                                    <?php }
                                }

                                ?>
                            </select>
                        </div>  <!-- form-group -->
                        <button type="submit" class="btn btn-primary" name="add">Get Appointment</button>
                        </form>
                    </div>  <!-- get appointment -->
                    <?php
                    if (isset($_POST['add'])){
                        $p_id = $_POST['p_id'];
                        $name = $_POST['name'];
                        $hospital = $_POST['hospital'];
                        $date = $_POST['date'];
                        $time = $_POST['time'];
                        $vaccine = $_POST['vaccine'];

                        $appointment_query = "SELECT * FROM tbl_appointment WHERE date = '$date' AND p_id = '$_SESSION[patient_session]'";
                        $appointment_result = mysqli_query($conn, $appointment_query);
                        $appointment_exist=mysqli_num_rows($appointment_result);

                        if ($appointment_exist > 0){
                            echo
                            "<script>
                            alert('Appointment already exist');
                            </script>";
                        }
                        else {

                            $vaccine_query = "SELECT * FROM tbl_appointment WHERE v_id != '$vaccine' AND p_id = '$_SESSION[patient_session]'";
                            $vaccine_result = mysqli_query($conn, $vaccine_query);

                            $vaccine_exist = mysqli_num_rows($vaccine_result);

                            if ($vaccine_exist > 0){
                                echo
                                    "<script>
                                    alert('You must have to select same vaccine');
                                    </script>";
                            } else {
                                $query = "INSERT INTO tbl_appointment (p_id, h_id, date, time, v_id) VALUES ('$p_id', '$hospital', '$date', '$time', '$vaccine')";
                                $result = mysqli_query($conn, $query);

                                if ($result){
                                    echo
                                    "<script>
                                    alert('Appointment booked successfully');
                                    window.location.href = 'appointment.php';
                                    </script>";
                                }
                        
                                
                            }
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