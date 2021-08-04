<?php


session_start();
require('./dbconnaction.php');
if(isset($_POST)){
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

}  
        if ($courses == $data){
            echo "Both arrays are same\n";
            exit();
        }else{
             echo "Both arrays are not same\n";
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