<?php
session_start();
include('includes/dbconfig.php');

if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
    echo $error;
    }
    else
    {    
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    
    $query = "SELECT * FROM `users` WHERE Email = '$email'";
        $result = mysqli_query($conn, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['Password'];

            
            if (password_verify($password, $hashed_password)) {
              
                $_SESSION['first'] = $row['FirstName'];
                $_SESSION['last'] = $row['LastName'];
                header("Refresh: 1; url=index.php");
            } else {
                
                $error = "Username or Password is invalid";
                echo $error;
            }
        } else {
            
            $error = "Username or Password is invalid";
            echo $error;
        }
        
        mysqli_close($conn); 
    }
}
?>



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

        .Loginbracket{
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color:black;
        }

        .form {
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
            color:gray;
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

    <div class="Loginbracket">
        <h2>Login</h2>
        <form class="form" action="" method="post">
            <div class="name">
                <label for="username">Email Address:</label>
                <input type="text" id="username" name="email" required>
            </div>

            <div class="name">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="name">
                <input type="submit" class = "register"  name="login" value="Login">
            </div>
        </form>

        <div>
            Don't have an Account
            <a href="./signuppage.php">Sign up</a>
        </div>
    </div>
</body>
</html> 