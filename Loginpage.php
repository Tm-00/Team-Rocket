<?php
session_start();
include('includes/dbconfig.php');
include('functions/loginin.php');

?>


<!-- 
    <NAME> OLADIPUPO ROLAND FAMILUA 
    <CONTRIBUTION TO THIS PAGE> IS CREATING THE FRONT END OF THE LOGIN PAGE 
    WITH  THE USE OF HTML AND CSS 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 
        below is the style ...as in design of how the page looks like  and also adjusting the  contents
    -->
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
                       <!-- this retrives the email address-->
             <div class="name">
                <label for="username">Email Address:</label>
                <input type="text" id="username" name="email" required>
            </div>
              <!-- this retrives the password -->
            <div class="name">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
                       <!-- if your choice is to login in as a career or a patient
            Each radio button represents a type of user: "Patient" and "Carer". 
            The name attribute for both radio buttons is set to
             "user", indicating that they belong to the same group, 
             and only one option can be selected at a time as seen below below-->
            <div class="name">
                <label><b>Type of User:</b></label><br>
                <input type="radio" name="user" value="patient" onclick="toggleDOBField()" checked> Patient
                <input type="radio" name="user" value="carer" onclick="toggleDOBField()"> Carer
            </div>
              <!--this submits the information insert above , with the email address and password -->
            <div class="name">
                <input type="submit" class = "register"  name="login" value="Login">
            </div>
        </form>
          <!-- 
            in case one doesnt have an ACCOUNT  he or she has to sign up
          -->
        <div>
            Don't have an Account
            <a href="Signuppage.php">Sign up</a>
        </div>
    </div>
</body>
</html> 