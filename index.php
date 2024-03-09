<?php
session_start();
include('includes/dbconfig.php');

if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=index.php"); 
}
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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                            <a class="dropdown-item" href="">carer packages</a>
                            <a class="dropdown-item" href="">prices</a>
                            <a class="dropdown-item" href="faciulty tour"></a>
                            <a class="dropdown-item" href="">home care</a>
                            <a class="dropdown-item" href="">memoery care</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 mr-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </div>
                <div class="login-buttons ml-auto">
                    <?php if(isset($_SESSION['patient_id'])): ?>
                        <form method="post">
                            <button type="submit" name="logout" class="btn btn-outline-dark">Log Out</button>
                        </form>
                    <?php else: ?>
                        <div>
                            <a href="loginpage.php" class="btn btn-outline-dark">Login</a>
                            <a href="signuppage.php" class="btn btn-outline-dark">Sign Up</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>


<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
					<h1 class="mb-3 mt-3">Your most trusted health partner</h1>
					
					<p class="mb-4 pr-5"></p>
					<div class="btn-container ">
						<a href = "assign_carer.php" target="_blank" class="btn btn-main btn-round-full btn-get-carer">Get a Carer <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Appoinment</h4>
						<p class="mb-4">Gettime support for emergency.</p>
						<a href = "confirmation_patient.php" target="_blank" class="btn btn-main btn-round-full btn-make-appointment">Make a appoinment</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Call support for emergencies</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


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
    <script>
$(document).ready(function() {
    
    $(".btn-make-appointment").click(function() {
        
        <?php if (isset($_SESSION['patient_id'])): ?>
         
            window.location.href = "confirmation_patient.php";
        <?php else: ?>
     
            window.location.href = "loginpage.php";
        <?php endif; ?>
    });
});
$(document).ready(function() {
    
    $(".btn-get-carer").click(function() {
        
        <?php if (isset($_SESSION['patient_id'])): ?>
      
            window.location.href = "assign_carer.php";
        <?php else: ?>
            
            window.location.href = "loginpage.php";
        <?php endif; ?>
    });
});
</script>

  </body>
  </html>
   '