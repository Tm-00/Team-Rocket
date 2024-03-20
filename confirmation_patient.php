<?php

// <NAME> IBARHIM SULU-GAMBARI
// <CONTRIBUTION TO THIS PAGE> The entire page apart from the  header 
// WITH  THE USE OF HTML,CSS and PHP

// (these lines of code start a PHP session)
session_start();

// (these lines of code include the database configuration file)
include('includes/dbconfig.php');

if(isset($_POST['request'])) {
     // <NAME> SIOBHAN UTETE
    // <CONTRIBUTION TO THIS PAGE> SECURING THE WEBSITE BY SANITIZING AND FILTERING
    // WITH  THE USE OF PHP


    // (these lines of code retrieve the carer ID from the form and sanitize it)
    $carer_id =  filter_var($_POST['carer'], FILTER_SANITIZE_NUMBER_INT);
    // (these lines of code retrieve the patient ID from the session)
    $patient_id = filter_var($_SESSION['patient_id'], FILTER_SANITIZE_NUMBER_INT);
    // (these lines of code retrieve the current date)
    $date = date('Y-m-d');
    // (these lines of code set the time to "00:00")
    $time = "00:00";

    // Prepare and execute SQL query to insert appointment request
    $query = "INSERT INTO `appointment` (carer_id, patientID, date, time) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn, $query);

    // Check for database errors
    if (!$stmt) {
        // (these lines of code set an error message in the session)
        $_SESSION['error_message'] = "Database error: " . mysqli_error($conn);
        mysqli_close($conn);
        // (these lines of code redirect back to the appointment page)
        header('Location: appointment.php');
        exit();
    }
    
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "iiss", $carer_id, $patient_id, $date, $time);

    if (mysqli_stmt_execute($stmt)) {
        // (these lines of code redirect to the index page on successful appointment request)
        header('Location: appontment_patient.php');
    } 

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Exit the script
    exit();
}
?>

<!-- // <NAME> MUHAMMED UMER
// <CONTRIBUTION TO THIS PAGE> THE FRONT-END OF THE HEADER
// WITH  THE USE OF HTML AND CSS -->


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
<header class="header fixed-top">
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
                
                <div class="login-buttons ml-auto">
                    <?php if (isset($_SESSION['patient_id']) || isset($_SESSION['carer_id'])) : ?>
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
<section class="contact-form-wrap section" style="padding-top: 10px; margin-top: 130px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">APPOINTMENT REQUEST FORM<?php echo $carer?></h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" action="">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first"><b>First Name:</b></label>
                                <input name="name" id="name" type="text" class="form-control" value="<?php echo $_SESSION['first']?>" placeholder="Your first Name" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first"><b>Last Name:</b></label>
                                <input name="email" id="email" type="text" class="form-control" value="<?php echo $_SESSION['last']?>" placeholder="Your Last Name">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first"><b>Email Address:</b></label>   
                                <input name="subject" id="subject" type="tel" class="form-control" value="<?php echo $_SESSION['email']?>" placeholder="Your Email address">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first"><b>Phone Number:</b></label>
                                <input name="phone" id="phone" type="text" class="form-control" value="<?php echo $_SESSION['number']?>" placeholder="Your Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first"><b>Carer:</b></label>
                                
                                <select name="carer" id="" class="form-control">
                                    <option value="">Select a Carer</option>
                                    <?php
                                        $select_query = "SELECT c.*, a.* FROM `assignment` a JOIN `carer` c ON a.carer_id = c.carer_id WHERE patientID=?";
                                        $stmt = mysqli_prepare($conn, $select_query);
                                        mysqli_stmt_bind_param($stmt, "i", $_SESSION['patient_id']);
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);
                                        
                                        // Now you can fetch the rows from the result set
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $carer = $row['carer_id'];
                                            $carer_name = $row['FirstName'] . " " . $row['LastName'];
                                            echo "<option value='$carer'>$carer_name</option>";
                                        }
                                        
                                        mysqli_stmt_close($stmt);
                                        


                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="request" type="submit" value="Request Appointment Call">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer Start -->
<footer  id= "footer" class="footer gray-bg" style="padding-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="images/Arrow_logo.png" alt="" class="img-fluid">
                    </div>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3 footer-heading">Get in Touch</h4>
                    <div class="divider mb-4"></div>
                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890" class="footer-link">Support@email.com</a></h4>
                    </div>
                    <div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
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
 