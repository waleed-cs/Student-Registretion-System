<?php

  session_start();

  if(!isset($_SESSION['name'])){
    header('Location:http://localhost/Task2/pages/login.php');
  }

  require('./dbconnaction.php');
  //show courses for registertion
  $query = "SELECT * FROM course ORDER BY course_id ASC";
  $result = mysqli_query($conn,$query);
  $test = $_SESSION['name'];
  //extract student's info
  $query2 = "SELECT * FROM student WHERE email = '$test' ";
  $result2 = mysqli_query($conn,$query2);
  $row = mysqli_fetch_array($result2, MYSQLI_NUM);
  $fname = $row[0];
  $lname = $row[1]; 
  $_SESSION['nid'] = $row[2];
  $_SESSION['email'] = $row[4];
  $nid = $_SESSION['nid'];
  //show all the registerd courses
  $query3 = "SELECT course__name FROM take WHERE student_id = '$nid' ";
  $result3 = mysqli_query($conn,$query3);

  $flag = True;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/studentDashboard-myCourses.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Student Dashboard</title>
  </head>
  <body>
  <header>
      <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </div>
      <div class="nav">
        <div class="person">
          <i class="fas fa-user"></i>
          <p><?php echo "{$fname} {$lname}";?> </p>
        </div>
        <div class="menu">
          <a class="option option1" href="./studentDashboard.php">
          <i class="fas fa-plus"></i>
          <p>Enroll Courses</p>
          </a>
          <a class="option option2" href="./studentDashboard-myCourses.php">
          <i class="fas fa-eye"></i>
          <p>View Courses</p>
          </a>
          <a class="option option3" href="./studentDashboard-settings.php">
          <i class="fas fa-cog"></i>
          <p>Settings</p>
          </a>
        </div>
        <div>
          <a class="logout" href="./login.php">
            <i class="fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </div>
      </div>
    </header>
      <Main>
        <h3 style="color:red; display:inline-block;" class="message"><?php 
          if(isset($_SESSION['Message'])){
            echo $_SESSION['Message'];
          }
          ?>
        </h3>
      <h3 style="color:rgb(24, 189, 24); display:inline-block;" class="message"><?php 
        if(isset($_SESSION['success'])){
          echo $_SESSION['success'];
        }
        ?>
      </h3>
      <h3 style="color:red; display:inline-block;" class="message"><?php 
          if(isset($_SESSION['empty'])){
            echo $_SESSION['empty'];
          }
          ?>
        </h3>

      <section class="courses_parent">
        <h3 class="course_title">My Courses</h3>
        <div class="line"></div>
        <div class="courses">
            <?php
            if(mysqli_num_rows($result3) == 0){
              echo "<h1>There is no courses registerd for this account</h1>";
              echo "<script> document.querySelector('.course_title').style.display = 'none';</0script>";
              echo "<script> document.querySelector('.line').style.display = 'none';</script>";
              echo "<script> document.querySelector('.courses_parent').style.border = 'none';</script>";
            }else{
              echo "<script> document.querySelector('.course_title').style.display = '';</script>";
              echo "<script> document.querySelector('.line').style.display = '';</script>";
              echo "<script> document.querySelector('.courses_parent').style.border = '';</script>";
              while($courses = mysqli_fetch_array($result3)){
                echo "<div class='course'> $courses[0] </div>";
                echo "<div class='line'> </div>";
              }
            }

            ?>
        </div>
      </section>
      </Main>
  </body>
  <script src="../js/studentDashboard.js"></script>
</html>

<?php
    unset($_SESSION["Message"]);
    unset($_SESSION["success"]);
    unset($_SESSION['empty']);
?>