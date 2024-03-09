<?php
session_start();
include('includes/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <script src="https://kit.fontawesome.com/fbed98dcbf.js" crossorigin="anonymous"></script>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body id="top">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Novena</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                            <a class="dropdown-item" href="appoinment.php">appoinment</a>
                            <a class="dropdown-item" href="assign_carer.php">assigned carer</a>
							<a class="dropdown-item" href="confirmation_pstient.php">patient confirmation</a>
							<a class="dropdown-item" href="confirmation_request.php">confirmation request</a>
							<a class="dropdown-item" href="confirmation1.php">confirmation</a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                </ul>
                <div class="ml-lg-4">
                    <a href="#" class="btn btn-main mr-3">Schedule a Consultation</a>
                    <a href="#" class="btn btn-outline-light">Emergency Contacts</a>
                </div>
                 <form method="post">
                            <button type="submit" name="logout" class="btn btn-outline-dark">Log Out</button>
                        </form>
            </div>
        </div>
    </nav>
</header>
 
<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">Request Confirmed</h2>
              <p>You have been assigned:</p>
			  <h3>X</h3>
			  <div class="button-container">
			</div>
          </div>
      </div>
    </div>
  </div>
</section>
</footer>
<!-- footer Start -->
<footer>
    <div class="row">
        <div class="col">
                <p>Novena Health & Care Medical Center is renowned for its exceptional healthcare services. With an unwavering dedication to our patients' welfare, we embrace compassion, expertise, and ingenuity in all facets of our care. From state-of-the-art medical procedures to individualized attention, we place your health journey at the forefront. At Novena Health & Care, we go beyond being mere providers; we become allies on your quest for well-being, offering unmatched assistance and direction at every juncture. Count on us to provide top-tier medical care,
                as your health always comes first in our practice.</p>
                </div>
                <div class="col">
                    <h3>Contact Details</h3>
                    <p>Support Available for 24/7 </p>
                    <p>Mon to Fri : 08:30 - 18:00</p> 
                    <p class="email-id">Support@email.com</p>
                    <h4>+23-456-6588</h4>
                 </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="">About us</a></li>
                        <li><a href="">contact form</a></li>
                        <li><a href="https://www.gov.uk/help/privacy-notice">Privacy Poilices</a></li>
                        <li><a href="https://www.gov.uk/copyright">Copy Rights</a></li>
                     </ul>
                </div>
                <div class="col">
                    <h3>News letter</h3>
                    <form>
                    <i class="fa-regular fa-envelope"></i>
                        <input Type="email" placeholder="enter your email id" required>
                        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                    <div class="Social-icons">
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                    </div>
                        
                </div>
        </div>
        <hr>
        <p class="copyright">Novena Health & Carers Medical site @ 2024 ~ All Rights Reserved</p>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>