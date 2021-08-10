<?php

session_start();

require('./dbconnaction.php');

if (isset($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = "{$nid}@gmail.com";
    $query = "INSERT INTO student (fname,lname,national_id,dob,email,gender) VALUES('$fname', '$lname', $nid, '$dob', '$email', '$gender')";
    $query2 = "INSERT INTO users (username, password, usertype) VALUES('$email','$password', 0)";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    if($result){
        $_SESSION['success2'] = "{$fname} {$lname} have registered in the database successfully.";
        header('Location:http://localhost/Task2/pages/adminDashboard.php');
    }else{
        $_SESSION['Message'] = "{$fname} {$lname} have not registered in the database successfully.";
        header('Location:http://localhost/Task2/pages/adminDashboard.php');
    }

}

?>