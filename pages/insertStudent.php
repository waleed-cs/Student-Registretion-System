<?php

require('./dbconnaction.php');

if (isset($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = "{$nid}@gmail.com";
    $query = "INSERT INTO student (fname,lname,national_id,dob,email,gender,password) VALUES('$fname', '$lname', '$nid', '$dob', '$email', '$gender', '$password')";
    $query2 = "INSERT INTO users (username, password, usertype) VALUES('$email','$password', 0)";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    if($result){
        echo "$fname $lname have registered in the database successfully.";
    }else{
        echo 'values not inserted';
    }

}else{
    echo 'error';
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