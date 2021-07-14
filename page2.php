<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, 'studentdb');


if (isset($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO student (fname,lname,national_id,dob,email,gender) VALUES('$fname', '$lname', '$nid', '$dob', '$email', '$gender')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "$fname $lname have registered in the database successfully.";
    }else{
        echo 'values not inserted';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: "Poppins", sans-serif;
            background-color: #1b1b1b;
            color:white;
        }
    </style>
</head>
<body>
    
</body>
</html>