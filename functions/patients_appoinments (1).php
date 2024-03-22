
<!-- 
    <NAME> OLADIPUPO ROLAND FAMILUA 
    <CONTRIBUTION TO THIS PAGE> IS CREATING THE FRONT END OF THE LOGIN PAGE 
    WITH  THE USE OF PHP,HTML AND CSS
    
    WITH THE SENSE THAT HIS PAGE IS TO DISPLAY ONLY THE  APOINTMENTS MADE BY THE PATIENTS
    FOR THE TO VEIW THE APOITMENTS MADE IN THEIR ACCOUNT, EVEN IF THEY LOG OUT THE APOINT MENT MADE WOULD BE DISPLAYED
    THIS IS ACTUALLY THE CLONE OF THE COFIRMATION PATIENTS WITH CHANGES MADE 
-->


<?php
//this code below  includes a file (dbconfig.php) that contains configurations or functions related to a database

session_start();
include('includes/dbconfig.php');

// $assigns the value 1 to the variable $patientID. 
//simply sets the value of $patientID to 1;
$patientID = 1;

// this code bellow prepares and executes a parameter or parameters of SQL query to retrieve 
//appointment data along with patient details like first name , phone numbers and others for a specific patient identified by their patientID.

$query = "SELECT a.*, p.FirstName, p.LastName, p.Email, p.PhoneNumber 
          FROM appointment a 
          INNER JOIN patient p ON a.patientID = p.patientID 
          WHERE a.patientID = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $patientID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(isset($_POST['update'])) {
    
    $appointment_id = $_POST['app_id']; 
    $date = $_POST['date'];
    $time = $_POST['time'];

    
    $query = "UPDATE appointment SET date = ?, time = ? WHERE appointment_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $date, $time, $appointment_id);
    
    
     mysqli_stmt_execute($stmt);

    
     if(mysqli_stmt_affected_rows($stmt) > 0) {
        header("refresh:0");
    } else {
        echo "Failed to update appointment.". mysqli_error($conn);
    }
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
                            <a class="dropdown-item" href="Loginpage.php">loginpage</a>
                            <a class="dropdown-item" href="signuppage.php">signuppage</a>
                            <a class="dropdown-item" href="appoinment.php">appoinment</a>
                            <a class="dropdown-item" href="assign_carer.php">assigned carer</a>
							<a class="dropdown-item" href="confirmation_pstient.php">patient confirmation</a>
							<a class="dropdown-item" href="confirmation_request.php">confirmation request</a>
							<a class="dropdown-item" href="confirmation1.php">confirmation</a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="ml-lg-4">
                    <a href="#" class="btn btn-main mr-3">Schedule a Consultation</a>
                    <a href="#" class="btn btn-outline-light">Emergency Contacts</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">SET APPOINTMENT TIMES</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment Requests</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
    <h2>Your Appointments</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <form action="" method="post">
            <table class="table">
                <thead>
                        <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>SET</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['appointment_id']; ?></td>
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['PhoneNumber']; ?></td>
                            <td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
                            <td><input type="time" name="time" value="<?php echo $row['time']; ?>"></td>
                            <td>
                                <input type="hidden" value="<?php echo $row['appointment_id']; ?>" name="app_id">
                                <input type="submit" name="update" value="Update">
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </form>
    <?php else: ?>
        <p>No appointments found.</p>
    <?php endif; ?>
</div>

<!-- footer Start -->
<footer class="footer section gray mt-5">
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>