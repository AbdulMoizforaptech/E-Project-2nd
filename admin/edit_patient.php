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
    <title>Edit Patient</title>
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
            <h1 class="m-0">Edit Patient Details</h1>
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
        <div class="row">
                <div class="col-md-6">
                    <div class="updateform" style=" padding-left:50px; max-width:600px; width:100%;">
                        <form method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cnic">National Identity Number (CNIC)</label>
                            <input type="text" class="form-control" id="cnic" name="cnic" required value="<?php echo $row['cnic']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="phone" required value="<?php echo $row['phone']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required value="<?php echo $row['password']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="custom-select" name="city">
                                <!-- <option selected><?php echo $row['c_name']; ?></option> -->
                                <?php

                                $c_query = "SELECT * FROM tbl_city";
                                $c_result = mysqli_query($conn,$c_query);

                                if (mysqli_num_rows($c_result)>0){
                                    $num = 0;
                                    foreach ($c_result as $c_row){
                                        $num++;
                                        ?>
                                            <option <?php if($c_row['id'] == $row['c_id'])echo 'selected' ?> value="<?php echo $c_row['id']?>"><?php echo $c_row['name'] ?></option>
                                            <!-- <option value="<?php echo $c_row['id']?>"><?php echo $c_row['name']?></option>"; -->
                                    <?php }
                                }

                                ?>
                            
                                
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Patient Address</label>
                            <input type="text" class="form-control" id="address" name="address" required value="<?php echo $row['address']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="custom-select" name="gender">
                                <!-- <option selected><?php echo $row['gender']; ?></option> -->
                                <option <?php if($row['gender'] == 'Male')echo 'selected' ?> value="Male">Male</option>
                                <option <?php if($row['gender'] == 'Female')echo 'selected' ?> value="Female">Female</option>
                                <option <?php if($row['gender'] == 'Other')echo 'selected' ?> value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select" name="status">
                                <!-- <option selected><?php echo $row['status']; ?></option> -->
                                <option <?php if($row['status'] == 'activate')echo 'selected' ?> value="activate">Activate</option>
                                <option <?php if($row['status'] == 'deactivate')echo 'selected' ?> value="deactivate">Deactivate</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </form>
                    </div>  <!-- updateform -->
                    <?php
                    if (isset($_POST['update'])){
                        $name = $_POST['name'];
                        $cnic = $_POST['cnic'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $city = $_POST['city'];
                        $address = $_POST['address'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
 
                        $query = "UPDATE tbl_patient SET name = '$name', cnic = '$cnic', phone = '$phone', email = '$email', password = '$password', c_id = '$city', address = '$address', gender = '$gender', status = '$status' WHERE id =  $_GET[id]";
                        $result = mysqli_query($conn, $query);

                        if ($result){
                            echo
                            "<script>
                            alert('Patient details updated successfully');
                            window.location.href = 'patient.php';
                            </script>";
                        } else {
                            echo
                            "<script>
                            alert('Patient details update failed');
                            </script>";
                        }
                    }
                    ?>
                </div>  <!-- col -->

        
                <div class="col-md-6">
                    <div class="image my-4 mx-5" style="width: 200px; height:200px; border: 1px solid black;">
                        <img src="<?php echo $row['image']; ?>" alt="Patient Picture"  style="width: 200px; height:200px; object-fit:contain; border: 1px solid black;">
                    </div>  <!-- image -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group my-4 mx-5">
                            <input type="file" name="image">
                        </div>  <!-- form-group -->
                        <div class="form-group my-4 mx-5">
                            <input type="submit" class="btn btn-primary" value="Image upload" name="updateimg">
                        </div>  <!-- form-group -->
                    </form>
                    <?php
        if (isset($_POST['updateimg'])){
            $imageName = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            $path = "assests/dist/img/patient/$imageName";
            move_uploaded_file($tmpName, $path);

            $query = "UPDATE tbl_patient SET image = '$path' WHERE id = $_GET[id]";
            $result = mysqli_query($conn, $query);

            if ($result){
                echo
                "<script>
                alert('Patient image updated');
                window.location.href = 'patient.php';
                </script>";
            } else {
                echo
                "<script>
                alert('Patient Image Upload failed');
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