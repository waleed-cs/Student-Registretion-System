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
    <link rel="stylesheet" href="../styles/studentDashboard-settings.css" />
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
    <h3 style="color:rgb(32, 18, 58); display:inline-block; background-color:rgb(136, 255, 209); padding:1.5rem" class="message success"><?php 
      if(isset($_SESSION['success'])){
        echo " <i class='far fa-check-circle'></i>  {$_SESSION['success']}";
        echo "<script>document.querySelector('.success').classList.add('message_animate')</script>";
      }
      ?>
    </h3>
    <h3 style="color:red; display:inline-block;" class="message"><?php 
        if(isset($_SESSION['empty'])){
          echo $_SESSION['empty'];
        }
        ?>
      </h3>
    <section class="settings">

      <div class="form_div">
          <h3>Edit Profile</h3>
          <form
            method="post"
            action="updateInfo.php"
            autocomplete="off"
          >
            <div class="form">
              <div class="form_input">
                <label for="fname">first name</label>
                <input type="text" id="fname" name="fname" value="<?php echo $fname;  ?>"/>
              </div>
              <div class="form_input">
                <label for="lname">last name</label>
                <input type="text" id="lname" name="lname" value="<?php echo $lname;  ?>"/>
              </div>
              <div class="form_input">
                <label for="nid">national id</label>
                <input type="text" id="nid" name="nid"  maxlength = "10" value="<?php echo $nid;  ?>" />
              </div>
              <div class="form_input">
                <label for="dob">date of brith</label>
                <input type="date" id="dob" name="dob" value="<?php echo $row[3];  ?>"/>
              </div>
              <div class="form_input email">
                <label for="email">email</label>
                <input type="email" id="email" name="email" value="<?php echo $row[4];  ?>"/>
              </div>
              <div class="form_input">
                <label>gender</label>
                <select name="gender" id="gender">
                  <option value="<?php echo $row[5];?>" selected hidden><?php echo $row[5];?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form_input">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password"/>
              </div>
              <div class="form_input">
                <label for="password2">Confirm New Password</label>
                <input type="password" id="password2" name="password2"/>
              </div>
            </div>
            <button type="submit">Update</button>
          </form>
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