<?php

session_start();
require('./dbconnaction.php');
if(isset($_POST['course'])){
    //submitted courses
    $courses = $_POST['course'];
    $nid = $_SESSION['nid'];
    // foreach($courses as $course){
    //     echo $course;
    // }

    $query_check = "SELECT course__name FROM take WHERE student_id = '$nid'";
    $result2 = mysqli_query($conn, $query_check);

    $data = array();
    $test = "";
    while($row = $result2->fetch_assoc()){
        array_push($data,$row['course__name']) ;        
    }

}else{
    $_SESSION['Message'] = "Please pick a course";
    header('Location:http://localhost/Task2/pages/studentDashboard.php');
}  
    if(isset($courses)){
        if (count(array_intersect($courses,$data)) == 0){
            $courses = array_diff($courses,$data);
            foreach($courses as $co){
                $query_insert = "INSERT INTO take (course__name , student_id) VALUES('$co','$nid')";
                $result = mysqli_query($conn, $query_insert);
            }
            if(isset($result)){
                $_SESSION['success'] = "The courses have enrolled successfully";
                header('Location:http://localhost/Task2/pages/studentDashboard.php');
            }else{
             echo 'courses not enrolled';
            }
            exit();
        }else{
            $_SESSION['Message'] = "Please pick the courses that never been picked";
            header('Location:http://localhost/Task2/pages/studentDashboard.php');
        }
    }
//     if(isset($courses)){
//          foreach($courses as $co){
//              $query_insert = "INSERT INTO take (course__name , student_id) VALUES('$co','$nid')";
//              $result = mysqli_query($conn, $query_insert);
//          }
//          if(isset($result)){
//              echo 'courses enrolled';
//          }else{
//              echo 'courses not enrolled';
//          }
//     }else{
//         echo 'error';
//     }

// }
?>