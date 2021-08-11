<?php

session_start();

require('./dbconnaction.php');

if(isset($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['password2'];
    $nidSession = $_SESSION['nid'];
    $emailSession = $_SESSION['email'];
    // if($password != $confirmPassword){
    //     header('Location:http://localhost/Task2/pages/HomePage.php');
    //     exit();
    // }

    // if the user removed any information in the form the error message will be showed
    if(trim($fname) == '' || trim($lname) == '' || trim($nid) == '' || $dob == '' || trim($email) == ''){
        $_SESSION['empty'] = 'empty values should not be inserted to the database';
        header('Location:http://localhost/Task2/pages/studentDashboard-settings.php');
    }else{

        if(trim($password) == '' && trim($confirmPassword) == ''){
            $query = "UPDATE student SET fname = '$fname', lname = '$lname', national_id = '$nid', dob = '$dob', email = '$email', gender = '$gender' WHERE national_id = '$nidSession'";
            $result = mysqli_query($conn, $query);
            $query2 = "UPDATE users SET username = '$email' WHERE username = '$emailSession'";
            $result2 = mysqli_query($conn, $query2);
            $_SESSION['success'] = "Your profile has been updated successfully";
            header('Location:http://localhost/Task2/pages/studentDashboard-settings.php');
        }else if(trim($password) == trim($confirmPassword)){
            $query = "UPDATE student SET fname = '$fname', lname = '$lname', national_id = '$nid', dob = '$dob', email = '$email', gender = '$gender' WHERE national_id = '$nidSession'";
            $result = mysqli_query($conn, $query);
            $query2 = "UPDATE users SET username = '$email', password = '$password' WHERE username = '$emailSession'";
            $result2 = mysqli_query($conn, $query2);
            $_SESSION['success'] = "Your profile has been updated successfully";
            header('Location:http://localhost/Task2/pages/studentDashboard-settings.php');
        }else if(trim($password) !== trim($confirmPassword)){
            $_SESSION['Message'] = "Your password and confirmation password do not match";
            header('Location:http://localhost/Task2/pages/studentDashboard-settings.php');
        }
    }

}


?>