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
    <title>Edit Hospital</title>
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
            <h1 class="m-0">Edit Hospital Details</h1>
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
        $query = "SELECT tbl_hospital.*, tbl_city.name AS 'c_name' FROM tbl_hospital INNER JOIN tbl_city ON tbl_hospital.c_id = tbl_city.id  WHERE tbl_hospital.id = $_GET[id]";
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
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="phone" required value="<?php echo $row['phone']; ?>">
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required value="<?php echo $row['password']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Hospital Address</label>
                            <input type="text" class="form-control" id="address" name="address" required value="<?php echo $row['address']; ?>">
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
                        $phone = $_POST['phone'];
                        $city = $_POST['city'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $address = $_POST['address'];
                        $status = $_POST['status'];
 
                        $query = "UPDATE tbl_hospital SET name = '$name', phone = '$phone', c_id = '$city', email = '$email', password = '$password', address = '$address', status = '$status' WHERE id =  $_GET[id]";
                        $result = mysqli_query($conn, $query);

                        if ($result){
                            echo
                            "<script>
                            alert('Hospital details updated successfully');
                            window.location.href = 'hospital.php';
                            </script>";
                        } else {
                            echo
                            "<script>
                            alert('Hospital details update failed');
                            </script>";
                        }
                    }
                    ?>
                </div>  <!-- col -->

        
                <div class="col-md-6">
                    <div class="image my-4 mx-5" style="width: 200px; height:200px; border: 1px solid black;">
                        <img src="<?php echo $row['image']; ?>" alt="Hospital Picture"  style="width: 200px; height:200px; object-fit:contain; border: 1px solid black;">
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
            $path = "assests/dist/img/hospital/$imageName";
            move_uploaded_file($tmpName, $path);

            $query = "UPDATE tbl_hospital SET image = '$path' WHERE id = $_GET[id]";
            $result = mysqli_query($conn, $query);

            if ($result){
                echo
                "<script>
                alert('Hospital image updated');
                window.location.href = 'hospital.php';
                </script>";
            } else {
                echo
                "<script>
                alert('Hospital Image Upload failed');
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