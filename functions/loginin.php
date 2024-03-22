<?php

    // <NAME> IBRAHIM SULU-GAMBARI 
    // <CONTRIBUTION TO THIS PAGE> ALL THE PHP PRESENT HERE
    // WITH  THE USE PHP


// This portion of code starts the session
session_start();

// This portion of code includes the database configuration file
include('includes/dbconfig.php');

// This portion of code checks if the login form is submitted
if (isset($_POST['login'])) {
    // This portion of code checks if email and password are provided
    if (empty($_POST['email']) || empty($_POST['password'])) {
        // This portion of code displays an error message if email or password is empty
        $error = "Username or Password is invalid";
        echo $error;
    } else {    
        // This portion of code gets email, password, and user type from the form
        $email =  $_POST['email'];
        $password =  $_POST['password'];
        $userType = $_POST['user'];

        // This portion of code determines which table to query based on user type
        $table = ($userType == 'carer') ? 'carer' : 'patient';

        // This portion of code prepares SQL query
        $query = "SELECT * FROM `$table` WHERE Email = '$email'";
        $result = mysqli_query($conn, $query);
        
        // This portion of code checks if query was successful and if any rows were returned
        if ($result && mysqli_num_rows($result) > 0) {
            // This portion of code fetches the row from the result
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['Password'];

            // This portion of code verifies password
            if (password_verify($password, $hashed_password)) {
                // This portion of code sets session variables
                $_SESSION['userType'] = $userType;
                $_SESSION['patient_id'] = $row['patientID'];
                $_SESSION['carer_id'] = $row['carer_id'];
                $_SESSION['first'] = $row['FirstName'];
                $_SESSION['last'] = $row['LastName'];
                $_SESSION['dob'] = $row['DOB'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['number'] = $row['PhoneNumber'];
                
                // This portion of code redirects user based on user type
                if ($userType == 'carer'){
                    header("Refresh: 1; url=appointment.php");
                } elseif ($userType == 'patient') {
                    header("Refresh: 1; url=index.php");
                }
                
                // This portion of code exits script
                exit();
            } else {
                // This portion of code displays an error message if password verification failed
                $error = "Username or Password is invalid";
                echo $error;
            }
        } else {
            // This portion of code displays an error message if no rows returned from the query
            $error = "Username or Password is invalid";
            echo $error;
        }
        
        // This portion of code closes database connection
        mysqli_close($conn); 
    }
}
?>
