<?php
include("../admin/config.php");
session_start();

if (isset($_SESSION['hospital_session'])){
    echo "<script>window.location.href= 'index.php'</script>";
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registration</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assests/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assests/css/jquery-ui.css">
    <link rel="stylesheet" href="../assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assests/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assests/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../assests/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../assests/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../assests/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../assests/fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="../assests/css/aos.css">

    <link rel="stylesheet" href="../assests/css/style.css">

</head>
<body style="background-color: rgba(111, 66, 193, 0.1);">

    <div class="container mt-5" style="max-width:600px; width:100%;">
        <form method="POST"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Hospital Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter hospital name..." required>
        </div>  <!-- form-group -->
        <div class="form-group">
            <label for="phone">Hospital Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter hospital phone number..." required>
        </div>  <!-- form-group -->
        <div class="form-group">
                            <label for="city">Select the City</label>
                            <select class="custom-select" name="city" required>
                                <option selected hidden>Select City</option>
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
            <label for="address">Hospital Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter hospital address..." required>
        </div>  <!-- form-group -->
        <div class="form-group">
            <label for="email">Hospital Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter hospital email address..." required>
        </div>  <!-- form-group -->
        <div class="form-group">
            <label for="password">Create login Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password..." required>
        </div>  <!-- form-group -->
        <div class="form-group">
            <label for="image">Choose an image</label>
            <input type="file" class="form-control" name="image" required>
        </div>  <!-- form-group -->
        <button type="submit" class="btn btn-primary" name="signup">Signup</button>
        </form>

        <div class="container mt-2 mb-5 text-black">
            <a href="login.php">If you already have an account goto Login page.</a>
        </div>

        <?php
        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            $path = "assests/dist/img/$image";
            move_uploaded_file($tmpName, $path);
 
            $query = "INSERT INTO tbl_hospital (name, phone, c_id, address, email, password, image) VALUES ('$name', '$phone', '$city', '$address', '$email', '$password', '$path')";
            $result = mysqli_query($conn, $query);

            if ($result){
                echo
                "<script>
                alert('Account created successfully');
                window.location.href = 'login.php';
                </script>";
            } else {
                echo
                "<script>
                alert('Account creation failed');
                </script>";
            }
        }
        ?>
    </div>  <!-- container -->

</body>
</html>