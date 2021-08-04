<?php


session_start();
require('./dbconnaction.php');
if(isset($_POST)){
    $courses = $_POST['course'];
    $nid = $_SESSION['nid'];
    if(isset($courses)){
        foreach($courses as $co){
            $query_insert = "INSERT INTO take (course__name , student_id) VALUES('$co','$nid')";
            $result = mysqli_query($conn, $query_insert);
        }
        if(isset($result)){
            echo 'courses enrolled';
        }else{
            echo 'courses not enrolled';
        }
    }else{
        echo 'error';
    }

}

?>