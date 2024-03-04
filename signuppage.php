<?php
include('includes/dbconfig.php');
if(isset($_POST['register'])){   
    
    $firstName = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['last'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);
    $DOB = $_POST['dob'];
    $userType = $_POST['user'];
    $addressid = 21; // Assuming this is a valid address ID
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    if ($password !== $cpassword) {
        $error_message = 'Passwords do not match';
        echo $error_message;
    } else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if($userType === "patient") {
        $query = "insert into `carer` (FirstName,LastName,DOB,Password,Email,PhoneNumber,user_type) values (?,?,?,?,?,?,?)";
             $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName,$lastName,$DOB,$hashed_password,$email,$number,$userType);
    } elseif($userType === "carer") {
        $query = "insert into `users` (FirstName,LastName,DOB,Password,Email,PhoneNumber,user_type) values (?,?,?,?,?,?,?)";
             $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName,$lastName,$DOB,$hashed_password,$email,$number,$userType);
    }
    
    if (mysqli_stmt_execute($stmt)){
        
        header('Location: appoinment.php');
        exit; 
    } else {
        
        $error_message = 'Signup failed';
         echo $error_message;
    }
    mysqli_stmt_close($siobhan);
}
    
    mysqli_close($conn);
}

?>

?>
$query = "insert into `users` (FirstName,LastName,DOB,Password,Email,PhoneNumber,user_type) values (?,?,?,?,?,?,'?')";
    $siobhan = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($siobhan, "sssssss", $firstName,$lastName,$DOB,$hashed_password,$email,$number,$userType);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signupbracket {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .h2 {
            color: black;
        }

        .Username {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .name {
            margin-bottom: 15px;
        }

        .name label {
            display: block;
            margin-bottom: 5px;
            color: gray;
        }

        .name input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 4px;
        }

        .name button {
            background-color: #129b04;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a{
            color:white;
            background-color:#129b04;
            padding: 10px;
            border-radius: 10px;
        }
        .register {
            color: white;
            background-color: #129b04;
            padding: 10px;
            border-radius: 10px;
        }
       
    </style>
</head>
<body>

    <div class="signupbracket">
        <h2>Sign Up</h2>
        <form class="Username" action="" method="post">
            <div class="name">
                <label for="first"><b>First Name:</b></label>
                <input type="text" id="first" name="first" required>
            </div>
            <div class="name">
                <label for="last"><b>Last Name:</b></label>
                <input type="text" id="last" name="last" required>
            </div>
            <div class="name">
                <label><b>Date of Birth:</b></label><br>
                <input type="date" name="dob" required><br><br>
            </div>

            <div class="name">
                <label for="email"><b>Email:</b></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="name">
                <label for="phone_number"><b>Phone Number:</b></label>
                <input type="tel" id="phone_number" name="phone_number" required>
            </div>

            <div class="name">
                <label><b>Type of User:</b></label><br>
                <input type="radio" name="user" value="patient">Patient
                <input type="radio" name="user" value="carer">Carer
            </div>
         

            <div class="name">
                <label for="password"><b>Password:</b></label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="name">
                <label for="confirm-password"><b>Confirm Password:<b></label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="name">
                <input type="submit" class = "register"  name="register" value="Submit">
            </div>
        </form>
        <div>
            Have an Account already
            <a href="./Loginpage.php">Log in</a>
        </div>
    </div>
</body>

</html>