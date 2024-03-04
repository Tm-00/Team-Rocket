<?php
    $select_query="Select * from `Users`";
    $result_query= mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $first_name=$row['product_id'];
        $last_name=$row['product_title'];
       
                
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

</head>

<body id="top">
	
<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">Your request has been sent</h2>
              <p>You have been assigned:</p>
			  <h3><?php
        
        echo $last_name . "," . $first_name;?></h3>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
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
						<li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
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
  <?php
include('includes/dbconfig.php');

if(isset($_POST['register'])){
    // Sanitize and validate input fields
    $firstName = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);
    $DOB = $_POST['dob'];
    $userType = $_POST['user'];
    $addressid = 21;
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    // Password validation
    if ($password !== $cpassword) {
        $error_message = 'Passwords do not match';
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        if($userType === "patient") {
            $query = "insert into `patient` (FirstName,LastName,DOB,Password,Email,PhoneNumber,AddressIDD) values (?,?,?,?,?,?,?)";
        } elseif($userType === "carer") {
            $query = "insert into `carer` (FirstName,LastName,DOB,Password,Email,PhoneNumber) values (?,?,?,?,?,?)";
        }
        // echo "Query: " . $query; // Add this line

        // Prepare and execute the query
        $stmt = mysqli_prepare($conn, $query);
            if($userType === "patient") {
                mysqli_stmt_bind_param($stmt, "ssssssi", $firstName,$lastName,$DOB,$hashed_password,$email,$number,$addressid);
            } elseif($userType === "carer") {
                mysqli_stmt_bind_param($stmt, "ssssss", $firstName,$lastName,$DOB,$hashed_password,$email,$number);
            }
            // echo "Query: " . $stmt; // Add this line

            if (mysqli_stmt_execute($stmt)) {
                header('Location: appoinment.php');
                exit;
            } else {
                $error_message = 'Signup failed. Please try again.';
                error_log("Signup failed: " . mysqli_error($conn)); // Log detailed error message
                echo "Error: " . mysqli_error($conn); // Add this line to display error
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }

?>