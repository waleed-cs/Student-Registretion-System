<?php
session_start();
require('./dbconnaction.php');
$error = "The username or password you provided is incorrect. Please try again.";
if(isset($_POST)){
    $user = $_POST['userr'];
    $pass = $_POST['pwd'];
    $query = "SELECT * FROM users where username = '$user'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);  
    $type = mysqli_fetch_array($result, MYSQLI_NUM);
    if(password_verify($pass, $type[1])){
        $_SESSION['name'] = $type[0];
        if($type[2] == 1){
            header('Location:http://localhost/Task2/pages/adminDashboard.php');
            exit();
        }else{
            header('Location:http://localhost/Task2/pages/studentDashboard.php');
            exit();
        }
    }else{
        $_SESSION['Message'] = $error;
        header('Location:http://localhost/Task2/pages/login.php');
    }

} else{
    echo "error";
}

?>