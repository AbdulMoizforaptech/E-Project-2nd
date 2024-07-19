<?php
include("../admin/config.php");
session_start();

if (isset($_SESSION['patient_session'])){
    echo "<script>window.location.href= 'index.php'</script>";
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>

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

    <div class="heading mt-5 text-center">
        <h3>Patient Login</h3>
    </div>

    <div class="container mt-5" style="max-width:600px; width:100%;">
        <form method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>

        <div class="container mt-2 text-black">
            <a href="register.php">Don't have an account. Signup</a>
        </div>

        <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT * FROM tbl_patient WHERE email = '$email' AND password = '$password' LIMIT 1";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result)> 0){
                $row = mysqli_fetch_assoc($result);

                if ($row['status'] == "activate") {
                    $_SESSION['patient_session'] = $row['id'];
                    $_SESSION['username'] = $row['name'];
                    echo 
                    "<script>
                        alert('login Successful');
                        window.location.href= 'index.php';
                    </script>";
                } else {
                    echo "<script> alert('Your account is not active'); </script>";
                }
                
            } else {
                echo 
                "<script>
                    alert('Incorrect Email or Password');
                </script>";
            }
        }
        ?>
    </div>  <!-- container -->

</body>
</html>