<?php


session_start();
require('./dbconnaction.php');
$i =0;
if(isset($_POST)){
    $courses = $_POST['course'];
    if(isset($courses)){
        foreach($courses as $co){
        }
    }else{
        echo 'error';
    }

}

?>