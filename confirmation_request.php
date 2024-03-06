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

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">
<!-- This is the header section of the webpage -->
<header class="header">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Container for navigation elements -->
        <div class="container">
            <!-- Brand/logo of the website -->
            <a class="navbar-brand" href="#">Novena</a>
            <!-- Button to toggle navigation menu for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation menu items -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navigation list aligned to the left -->
                <ul class="navbar-nav mr-auto">
                    <!-- Home link -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <!-- Dropdown menu for Services -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <!-- Dropdown menu items -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                            <a class="dropdown-item" href="Loginpage.php">Login Page</a>
                            <a class="dropdown-item" href="signuppage.php">Signup Page</a>
                            <a class="dropdown-item" href="appoinment.php">Appointment</a>
                            <a class="dropdown-item" href="assign_carer.php">Assigned Carer</a>
                            <a class="dropdown-item" href="confirmation_pstient.php">Patient Confirmation</a>
                            <a class="dropdown-item" href="confirmation_request.php">Confirmation Request</a>
                            <a class="dropdown-item" href="confirmation1.php">Confirmation</a>
                        </div>
                    </li>
                    <!-- About Us link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <!-- Blog link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <!-- Contact link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <!-- Right-aligned buttons -->
                <div class="ml-auto">
                    <!-- Button to schedule an appointment -->
                    <a href="appoinment.php" class="btn btn-main mr-3">Schedule an Appointment</a>
                    <!-- Button for emergency contacts -->
                    <a href="#" class="btn btn-outline-light">Emergency Contacts</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Confirmation section -->
<section class="section confirmation">
  <!-- Container for confirmation content -->
  <div class="container">
    <!-- Row for centering content -->
    <div class="row justify-content-center">
      <!-- Column for content -->
      <div class="col-lg-8">
          <!-- Confirmation message content -->
          <div class="confirmation-content text-center">
            <!-- Checkmark icon -->
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <!-- Heading for confirmation message -->
              <h2 class="mt-3 mb-4">A request has been sent to you</h2>
              <!-- Subheading for assigned item -->
              <p>You have been assigned:</p>
			  <!-- Assigned item -->
			  <h3>X</h3>
			  <!-- Button container for accepting or rejecting -->
			  <div class="button-container">
				<!-- Button to accept request -->
				<a class="btn btn-main btn-round-full" href="confirmation1.html">ACCEPT</a>
				<!-- Button to reject request -->
				<a class="btn btn-main btn-round-full" href="#">REJECT</a>
			  </div>
          </div>
      </div>
    </div>
  </div>
</section>


<!-- footer Start -->
<!-- Footer section -->
<footer class="footer section gray mt-5">
    <!-- Container for footer content -->
    <div class="container">
        <!-- Row for arranging content -->
        <div class="row">
            <!-- Column for logo and social links -->
            <div class="col-lg-4 mr-auto col-sm-6">
                <!-- Widget for displaying logo and social links -->
                <div class="widget mb-5 mb-lg-0">
                    <!-- Logo image -->
                    <div class="logo mb-4">
                        <img src="images/Arrow_logo.png" alt="" class="img-fluid">
                    </div>

                    <!-- List of social links -->
                    <ul class="list-inline footer-socials mt-4">
                        <!-- Facebook social link -->
                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                        <!-- Twitter social link -->
                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Column for contact information -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Widget for displaying contact information -->
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <!-- Heading for contact information -->
                    <h4 class="text-capitalize mb-3 footer-heading">Get in Touch</h4>
                    <!-- Divider -->
                    <div class="divider mb-4"></div>

                    <!-- Contact block for support email -->
                    <div class="footer-contact-block mb-4">
                        <!-- Email icon -->
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <!-- Support availability message -->
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <!-- Support email -->
                        <h4 class="mt-2"><a href="tel:+23-345-67890" class="footer-link">Support@email.com</a></h4>
                    </div>

                    <!-- Contact block for support phone -->
                    <div class="footer-contact-block">
                        <!-- Phone icon -->
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <!-- Support hours message -->
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <!-- Support phone number -->
                        <h4 class="mt-2"><a href="tel:+23-345-67890" class="footer-link">+23-456-6588</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
  <?php
include('includes/dbconfig.php');

if(isset($_POST['register'])){
    // Sanitize and validate input fields
    $firstName = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $DOB = $_POST['dob'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);
    $userType = $_POST['user'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    // Password validation
    if ($password !== $cpassword) {
        $error_message = 'Passwords do not match';
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if($userType === "patient") {
            $query = "INSERT INTO `users` (FirstName, LastName, DOB, Password, Email, PhoneNumber) VALUES (?, ?, ?, ?, ?, ?)";
        } elseif($userType === "carer") {
            $query = "INSERT INTO `carer` (FirstName, LastName, Password, Email, PhoneNumber) VALUES (?, ?, ?, ?, ?)";
        } else {
            $error_message = "Invalid user type";
            exit; // Exit if user type is invalid
        }

        // Prepare and execute the query
        $stmt = mysqli_prepare($conn, $query);
        if($stmt) {
            if($userType === "patient") {
                
                mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $DOB, $hashed_password, $email, $number);
            } else {
                mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $hashed_password, $email, $number);
            }

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                header('Location: appoinment.php');
                exit;
            } else {
                $error_message = 'Signup failed. Please try again.';
            }
        } else {
            $error_message = 'Database error. Please try again.';
        }
    }
}
?>