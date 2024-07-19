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
    <title>Add Hospital</title>
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
            <h1 class="m-0">Add Hospital</h1>
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
        $query = "SELECT tbl_hospital.*, tbl_city.name AS 'c_name' FROM tbl_hospital INNER JOIN tbl_city ON tbl_hospital.c_id = tbl_city.id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
                    
        <div class="card-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="addhospital" style=" padding-left:50px; max-width:600px; width:100%;">
                        <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Hospital Name">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" id="phone" name="phone" required placeholder="Enter phone number">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="custom-select" name="city">
                                <option selected>Select City</option>
                                <?php

                                $c_query = "SELECT * FROM tbl_city";
                                $c_result = mysqli_query($conn,$c_query);

                                if (mysqli_num_rows($c_result)>0){
                                    $num = 0;
                                    foreach ($c_result as $c_row){
                                        $num++;
                                        ?>
                                            <option value="<?php echo $c_row['id']?>"><?php echo $c_row['name']?></option>";
                                    <?php }
                                }

                                ?>
                            
                                
                            
                            </select>
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Email Address">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required placeholder="Enter Password">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="address">Hospital Address</label>
                            <input type="text" class="form-control" id="address" name="address" required placeholder="Enter Hospital address">
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select" name="status">
                                <option selected><?php echo $row['status']; ?></option>
                                <option value="activate">Activate</option>
                                <option value="deactivate">Deactivate</option>
                            </select>
                        </div>  <!-- form-group -->
                        <div class="form-group">
                            <label for="image">Choose an image</label>
                            <input type="file" class="form-control" name="image">
                        </div>  <!-- form-group -->
                        <button type="submit" class="btn btn-primary" name="add">Add Hospital</button>
                        </form>
                    </div>  <!-- addhospital -->
                    <?php
                    if (isset($_POST['add'])){
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $city = $_POST['city'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $address = $_POST['address'];
                        $status = $_POST['status'];
                        $image = $_FILES['image']['name'];
                        $tmpName = $_FILES['image']['tmp_name'];
                        $path = "assests/dist/img/hospital/$image";
                        move_uploaded_file($tmpName, $path);
 
                        $query = "INSERT INTO tbl_hospital (name, phone, c_id, email, password, address, status, image) VALUES ('$name', '$phone', '$city', '$email', '$password', '$address', '$status', '$path')";
                        $result = mysqli_query($conn, $query);

                        if ($result){
                            echo
                            "<script>
                            alert('Hospital added successfully');
                            window.location.href = 'hospital.php';
                            </script>";
                        } else {
                            echo
                            "<script>
                            alert('Add Hospital failed');
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