<?php
    include("admin/config.php");
    session_start();
    if (isset($_SESSION['admin_session'])){
        $query = "SELECT * FROM tbl_admin WHERE id = $_SESSION[admin_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      } elseif (isset($_SESSION['hospital_session'])){
        $query = "SELECT * FROM tbl_hospital WHERE id = $_SESSION[hospital_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      } elseif (isset($_SESSION['patient_session'])){
        $query = "SELECT * FROM tbl_patient WHERE id = $_SESSION[patient_session]";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID TEST and VACCINATION System</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link rel="stylesheet" href="assests/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/jquery-ui.css">
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assests/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assests/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assests/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assests/fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="assests/css/aos.css">

    <link rel="stylesheet" href="assests/css/style.css">
    <style>
        /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: rgba(111, 66, 193, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
}
.center{
    display: flex;
  
  align-items: center;
  justify-content: center;
 
  margin: 20px 0;
  border-radius: 10px;
  transition: all 0.3s ease-in-out;
}
.container1{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container1 .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container1 .content .left-side{
  width: 25%;
  height: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #6f42c1;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: grey;
}
.container1 .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #6f42c1;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="submit"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #6f42c1;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="submit"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container1{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container1 .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container1{
    margin: 40px 0;
    height: 100%;
  }
  .container1 .content{
    flex-direction: column-reverse;
  }
 .container1 .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container1 .content .left-side::before{
   display: none;
 }
 .container1 .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}1
    </style>
    
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap">

<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
    <span class="icon-close2 js-menu-toggle"></span>
    </div>
</div>
<div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

<div class="container">
    <div class="row align-items-center">

    <div class="col-6 col-xl-2">
        <div class="mb-0 site-logo"><a href="#" class="mb-0"><img src="assests/images/1.png" alt=""style="width:150px;"><span class="text-primary"></span> </a></div>
    </div>

    <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li class="has-children">
            <a href="#prevention" class="nav-link">Prevention</a>
            <ul class="dropdown">
                <li><a href="#safe" class="nav-link">Stay at home</a></li>
                <li><a href="#safe" class="nav-link">Keep social distancing</a></li>
                <li><a href="#safe1" class="nav-link">Wear facemask</a></li>
                <li><a href="#safe1" class="nav-link">Wash your hands</a></li>
                <li class="has-children">
                </li>
            </ul>
            </li>
            <li><a href="#symptoms" class="nav-link">Symptoms</a></li>

            <li><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="has-children">
            <a href="" class="nav-link">
                <?php if(isset($_SESSION['admin_session']))  echo $row['name'];
                elseif(isset($_SESSION['hospital_session'])) echo $row['name'];
                elseif(isset($_SESSION['patient_session'])) echo $row['name']; else echo "Login"; ?>
            </a>
            <ul class="dropdown">
                <li><a href="admin/login.php" class="nav-link">Admin</a></li>
                <li><a href="hospital/login.php" class="nav-link">Hospital</a></li>
                <li><a href="patient/login.php" class="nav-link">Patient</a></li>
            </ul>
            </li>
            <!-- <li><a href="#" class="nav-link" onclick="GoTOLogin()"><?php if(isset($_SESSION['admin_session'])) echo $row['name']; else echo "Login"; ?></a></li> -->
        </ul>
        </nav>
    </div>


    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

    </div>
</div>

</header>

<div class="center">       
  <div class="container1">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14472.55141650622!2d67.0330334!3d24.9273733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1721438892760!5m2!1sen!2s" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </div> 
</body>
</html>