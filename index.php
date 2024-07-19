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
                    <li class="active"><a href="#" class="nav-link">Home</a></li>
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

        

        <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6 mr-auto text-center text-lg-left">
                <span class="d-block subheading">Covid-19 Awareness</span>
                <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
                <p class="mb-5">To stay safe during the COVID-19 pandemic, it's crucial to stay home as much as possible, reducing your exposure to the virus.</p>
                <p class="mb-4"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#prevent">How to prevent</a></p>


                
                <!-- Modal -->
                <div class="modal fade" id="prevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">How to prevent from Corona Virus?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p>To prevent the spread of the coronavirus, follow these key guidelines:</p>
                    <p><b>1. Practice Good Hygiene:</b> Wash your hands frequently with soap and water for at least 20 seconds, use hand sanitizer with at least 60% alcohol, and avoid touching your face.</p>
                    <p><b>2. Wear a Mask:</b> Wear a mask that covers your nose and mouth in public settings, especially where social distancing measures are difficult to maintain.</p>
                    <p><b>3. Maintain Social Distance:</b> Keep a distance of at least 6 feet (about 2 meters) from others, particularly those who are not in your household.</p>
                    <p><b>4. Avoid Crowded Places and Close Contact:</b> Avoid large gatherings and close contact with individuals who are sick.</p>
                    <p><b>5. Clean and Disinfect:</b> Regularly clean and disinfect frequently touched surfaces daily, such as doorknobs, light switches, and phones.</p>
                    <p><b>6. Monitor Your Health:</b> Be alert for symptoms such as fever, cough, and shortness of breath. If you feel unwell, stay home and seek medical advice.</p>
                    <p><b>7. Get Vaccinated:</b> Receive the COVID-19 vaccine and any recommended booster doses to help protect against severe illness and reduce the spread of the virus.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>  <!-- Modal -->


            </div>
            <div class="col-lg-6">
                <figure class="illustration">
                <img src="assests/images/illustration.png" alt="Image" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6"></div>
            </div>
        </div>
        </div>


        <!-- MAIN -->
        
        <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
            <div class="col-lg-7 text-center mx-auto">
                <h2 class="section-heading">Coronavirus Statistics</h2>
                <p>Coronavirus statistics track the number of confirmed cases, recoveries, and deaths globally, providing crucial data for understanding the spread and impact of the virus.</p>
            </div>
            </div>
            <div class="container">
        <div class="row"> 
            <div class="col-lg-4">
                <div class="data">
                    <span class="icon text-primary">
                        <span class="flaticon-virus"></span>
                    </span> 
                    <strong class="d-block number" id="active-cases">14,112,077</strong>
                    <span class="label">Active Cases</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="data">
                    <span class="icon text-primary">
                        <span class="flaticon-virus"></span>
                    </span>
                    <strong class="d-block number" id="deaths">595,685</strong>
                    <span class="label">Deaths</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="data">
                    <span class="icon text-primary">
                        <span class="flaticon-virus"></span>
                    </span>
                    <strong class="d-block number" id="recovered-cases">8,397,665</strong>
                    <span class="label">Recovered Cases</span>
                </div>
            </div>
            </div>
        </div>
        </div>

        <script>
      function animateValue(id, start, end, duration) {
            let range = end - start;
            let current = start;
            let increment = end > start ? 1 : -1;
            let stepTime = Math.abs(Math.floor(duration / range));
            let obj = document.getElementById(id);
            let timer = setInterval(function() {
                current += increment;
                obj.innerHTML = current.toLocaleString();
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        document.addEventListener("DOMContentLoaded", function() {
            animateValue("active-cases", 14110000, 14112077, 1);
            animateValue("deaths", 595000, 595685, 1);
            animateValue("recovered-cases", 8394000, 8397665, 1);
        });
</script>


        <div class="site-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <figure class="img-play-vid">
                <img src="assests/images/hero_1.jpg" alt="Image" class="img-fluid">
                <div class="absolute-block d-flex">
                    <span class="text">Watch the Video</span>
                    <a href="https://youtu.be/fPbYaTKKtmA?si=6FRk8cCeg5f9AS_S" data-fancybox class="btn-play">
                    <span class="icon-play"></span>
                    </a>
                </div>
                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
                <p>Coronavirus is a type of virus that can cause respiratory illnesses in humans, ranging from the common cold to more severe diseases like COVID-19. COVID-19, caused by the novel coronavirus SARS-CoV-2, emerged in late 2019 and led to a global pandemic.</p>
                <p class="mt-5"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#coronavirus">Learn more</a></p>

                <!-- Modal -->
                <div class="modal fade" id="coronavirus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">What is Coronavirus?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p><b>1. Virus Family:</b> Coronaviruses are a large family of viruses that can cause illnesses in animals and humans, ranging from the common cold to more severe diseases such as MERS and SARS.</p>
                    <p><b>2. COVID-19 Cause:</b> The novel coronavirus, SARS-CoV-2, is responsible for causing COVID-19, which emerged in Wuhan, China, in late 2019.</p>
                    <p><b>3. Transmission:</b> It primarily spreads through respiratory droplets from coughs, sneezes, or talking, and can also spread by touching surfaces contaminated with the virus.</p>
                    <p><b>4. Symptoms:</b> Common symptoms include fever, cough, and shortness of breath, but it can also cause fatigue, loss of taste or smell, and more severe respiratory issues.</p>
                    <p><b>5. Global Impact:</b> The COVID-19 pandemic has led to widespread health, social, and economic disruptions, resulting in extensive public health measures to control its spread.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>  <!-- Modal -->


            </div>
            </div>
        </div>
        </div>

        <div class="container pb-5">
        <div class="row">
            <div class="col-lg-3">
            <div class="feature-v1 d-flex align-items-center">
                <div class="icon-wrap mr-3">
                <span class="flaticon-protection"></span>
                </div>
                <div>
                <h3>Protection</h3>
                <span class="d-block">Mask, sanitize, distance.</span>
                </div>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="feature-v1 d-flex align-items-center">
                <div class="icon-wrap mr-3">
                <span class="flaticon-patient"></span>
                </div>
                <div>
                <h3>Prevention</h3>
                <span class="d-block">Vaccinate, isolate, educate.</span>
                </div>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="feature-v1 d-flex align-items-center">
                <div class="icon-wrap mr-3">
                <span class="flaticon-hand-sanitizer"></span>
                </div>
                <div>
                <h3>Treatments</h3>
                <span class="d-block">Monitor, support, medicate.</span>
                </div>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="feature-v1 d-flex align-items-center">
                <div class="icon-wrap mr-3">
                <span class="flaticon-virus"></span>
                </div>
                <div>
                <h3>Symptoms</h3>
                <span class="d-block">Fever, cough, fatigue.</span>
                </div>
            </div>
            </div>
        </div>
        </div>


        <div class="site-section bg-primary-light">
        <div class="container" id="safe">
            <div class="row align-items-center">
            <div class="col-lg-6">

                <div class="row">
                <div class="col-6 col-lg-6 mt-lg-5">
                    <div class="media-v1 bg-1">
                    <div class="icon-wrap">
                        <span class="flaticon-stay-at-home"></span>
                    </div>
                    <div class="body">
                        <h3>Stay at home</h3>
                        <p>Staying at home during the coronavirus pandemic helps reduce the spread of the virus and protects vulnerable individuals in the community.</p>
                    </div>
                    </div>

                    <div class="media-v1 bg-1" id="safe1">
                    <div class="icon-wrap">
                        <span class="flaticon-patient"></span>
                    </div>
                    <div class="body">
                        <h3>Wear facemask</h3>
                        <p>Wearing a facemask during the coronavirus pandemic is recommended to reduce the transmission of the virus and protect both oneself and others.</p>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="media-v1 bg-1">
                    <div class="icon-wrap">
                        <span class="flaticon-social-distancing"></span>
                    </div>
                    <div class="body">
                        <h3>Keep social distancing</h3>
                        <p>Keeping social distancing during the coronavirus pandemic helps minimize the risk of virus transmission and protects individuals from potential exposure.</p>
                    </div>
                    </div>

                    <div class="media-v1 bg-1">
                    <div class="icon-wrap">
                        <span class="flaticon-hand-washing"></span>
                    </div>
                    <div class="body">
                        <h3>Wash your hands</h3>
                        <p>Washing your hands frequently with soap and water for at least 20 seconds is essential in the coronavirus pandemic to reduce the spread of the virus and maintain personal hygiene.</p>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
                <p>To prevent coronavirus, it's crucial to practice good hygiene by washing hands frequently with soap and water for at least 20 seconds. Wearing masks in public settings and maintaining physical distance of at least 6 feet from others helps reduce transmission. Avoiding large gatherings and crowded places, and staying updated with reliable information from health authorities are also important measures in preventing the spread of coronavirus.</p>

                <ul class="list-check list-unstyled mb-5">
                <li>Practice Good Hygiene</li>
                <li>Wear a Mask</li>
                <li>Maintain Social Distance</li>
                </ul>

                <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#prevent">Read more about prevention</a></p>
            </div>
            </div>
        </div>
        </div>

        <div class="site-section">
        <div class="container">
            <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading">What you need to do</span>
                <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
                <p>Protect yourself from coronavirus by practicing regular handwashing, wearing masks in crowded areas, and maintaining physical distance from others.</p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 ">
                <div class="row mt-5 pt-5">
                <div class="col-lg-6 do ">
                    <h3>You should do</h3>
                    <ul class="list-unstyled check">
                    <li>Stay at home</li>
                    <li>Wear mask</li>
                    <li>Use Sanitizer</li>
                    <li>Disinfect your home</li>
                    <li>Wash your hands</li>
                    <li>Frequent self-isolation</li>
                    </ul>
                </div>
                <div class="col-lg-6 dont ">
                    <h3>You should avoid</h3>
                    <ul class="list-unstyled cross">
                    <li>Avoid infected people</li>
                    <li>Avoid animals</li>
                    <li>Avoid handshaking</li>
                    <li>Aviod infected surfaces</li>
                    <li>Don't touch your face</li>
                    <li>Avoid droplets</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assests/images/protect.png" alt="Image" class="img-fluid">
            </div>
            </div>
        </div>
        </div>


        <div class="site-section bg-primary-light"  id="symptoms">
        <div class="container">
            <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
                <p>Common symptoms of coronavirus include fever, cough, and difficulty breathing.</p>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex">
                <div class="img">
                    <img src="assests/images/symptom_high-fever.png" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <h3>High Fever</h3>
                    <p>Coronavirus infection can often present with a high fever, typically above 100.4°F (38°C), which may persist for several days and require medical attention if severe or prolonged. Monitoring fever closely and seeking medical advice for persistent high temperatures is crucial in managing coronavirus symptoms.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex">
                <div class="img">
                    <img src="assests/images/symptom_cough.png" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <h3>Cough</h3>
                    <p>A persistent dry cough is a common symptom of coronavirus, often accompanied by fatigue and shortness of breath, necessitating medical evaluation for potential infection and proper management. Prompt recognition and isolation of individuals with a persistent cough can help mitigate the spread of the virus.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex">
                <div class="img">
                    <img src="assests/images/symptom_sore-troath.png" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <h3>Sore Throat</h3>
                    <p>A sore throat can be a mild symptom of coronavirus, sometimes accompanying other respiratory symptoms like cough and fever. Monitoring symptoms closely and seeking medical advice if they worsen or persist is advisable for proper management and containment of the virus.</p>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="symptom d-flex">
                <div class="img">
                    <img src="assests/images/symptom_headache.png" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <h3>Headache</h3>
                    <p>Headaches can occasionally occur as a symptom of coronavirus, often accompanying other flu-like symptoms such as fever and fatigue. Monitoring for worsening symptoms and seeking medical attention if headaches become severe or persistent is important for appropriate care.</p>
                </div>
                </div>
            </div>
            </div>

            
        </div>
        </div>


        <div class="site-section">
        <div class="container">
            <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4 section-heading">News &amp; Articles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-4">
                <div class="post-entry">
                <a href="#" class="thumb">
                    <span class="date">30 Jul, 2020</span>
                    <img src="assests/images/hero_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-meta text-center">
                    <a href="">
                    <span class="icon-user"></span>
                    <span>Admin</span>
                    </a>
                    <a href="#">
                    <span class="icon-comment"></span>
                    <span>3 Comments</span>
                    </a>
                </div>
                <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-entry">
                <a href="#" class="thumb">
                    <span class="date">30 Jul, 2020</span>
                    <img src="assests/images/hero_2.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-meta text-center">
                    <a href="">
                    <span class="icon-user"></span>
                    <span>Admin</span>
                    </a>
                    <a href="#">
                    <span class="icon-comment"></span>
                    <span>3 Comments</span>
                    </a>
                </div>
                <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post-entry">
                <a href="#" class="thumb">
                    <span class="date">30 Jul, 2020</span>
                    <img src="assests/images/hero_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="post-meta text-center">
                    <a href="">
                    <span class="icon-user"></span>
                    <span>Admin</span>
                    </a>
                    <a href="#">
                    <span class="icon-comment"></span>
                    <span>3 Comments</span>
                    </a>
                </div>
                <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="site-footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
                <div class="my-5">
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Quick Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">Symptoms</a></li>
                    <li><a href="#">Prevention</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">About Coronavirus</a></li>
                    <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Helpful Link</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">Helathcare Professional</a></li>
                    <li><a href="#">LGU Facilities</a></li>
                    <li><a href="#">Protect Your Family</a></li>
                    <li><a href="#">World Health</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">Resources</h2>
                    <ul class="list-unstyled">
                    <li><a href="#">WHO Website</a></li>
                    <li><a href="#">CDC Website</a></li>
                    <li><a href="#">Gov Website</a></li>
                    <li><a href="#">DOH Website</a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            <div class="row text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                <p class="copyright"><small>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

                </div>
                </div>

            </div>
            </div>
        </div>
        </div>

    </div> <!-- .site-wrap -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assests/js/jquery-3.3.1.min.js"></script>
    <script src="assests/js/jquery-ui.js"></script>
    <script src="assests/js/popper.min.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/owl.carousel.min.js"></script>
    <script src="assests/js/jquery.countdown.min.js"></script>
    <script src="assests/js/jquery.easing.1.3.js"></script>
    <script src="assests/js/aos.js"></script>
    <script src="assests/js/jquery.fancybox.min.js"></script>
    <script src="assests/js/jquery.sticky.js"></script>
    <script src="assests/js/isotope.pkgd.min.js"></script>


     <script src="assests/js/main.js"></script>

     <script type="text/Javascript">
        function GoTOLogin(){
            window.location.href = "admin/login.php"
        }
     </script>

</body>
</html>