<?php

session_start();

if(!isset($_SESSION['name'])){
  header('Location:http://localhost/Task2/pages/login.php');
}
require('./dbconnaction.php');

$query = "SELECT * FROM student ORDER BY fname ASC;";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/adminDashboard.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Student Registration System</title>
  </head>
  <body>
    <header>
      <div class="nav">
      <div class="person h">
        <i class="fas fa-user"></i>
        <p><?php echo "{$_SESSION['name']}";?> </p>
      </div>
      <div class="menu h">
        <div class="option option1">
        <i class="fas fa-user-plus"></i>
        <p>Register Student</p>
        </div>
        <div class="option option2">
        <i class="fas fa-eye"></i>
        <p>View Students</p>
        </div>
      </div>
      <div>
        <a class="logout h" href="./login.php">
        <div>
          <i class="fas fa-sign-out-alt"></i>
        <div>
        <p>Logout</p>
        </div>
        </a>
      </div>
        </div>
      </div>
      <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    </header>
    <Main>
      <h3 style="color:red; display:inline-block;" class="message"><?php 
        if(isset($_SESSION['Message'])){
          echo $_SESSION['Message'];
        }
        ?>
      </h3>
      <h3 style="color:rgb(32, 18, 58); display:inline-block; background-color:rgb(136, 255, 209); padding:1.5rem;" class="message success"><?php 
        // echo "<script> console.log('$_GET['true']') </script>";
        if(isset($_SESSION['success2'])){
          echo "<i class='far fa-check-circle'></i> {$_SESSION['success2']}";
          echo "<script>document.querySelector('.success').classList.add('message_animate')</script>";
        }
        ?>
      </h3>
    <section class="form_parent">
      <div class="form_div">
        <h3>Student Registration</h3>
        <form
          method="post"
          action="registerStudent.php"
          autocomplete="off"
        >
          <div class="form">
            <div class="form_input">
              <label for="fname">first name</label>
              <input type="text" id="fname" name="fname" required />
            </div>
            <div class="form_input">
              <label for="lname">last name</label>
              <input type="text" id="lname" name="lname" required />
            </div>
            <div class="form_input">
              <label for="nid">national id</label>
              <input type="text" id="nid" name="nid"  maxlength = "10" required />
            </div>
            <div class="form_input">
              <label for="dob">date of brith</label>
              <input type="date" id="dob" name="dob" required />
            </div>
            <div class="form_input email">
              <label for="email">email</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form_input">
              <label>gender</label>
              <select name="gender" id="gender">
                <option value="" selected disabled hidden></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <button type="submit">Register</button>
          </div>
        </form>
      </div>
    </section>
    <section class="student_table_parent"  style="display:none">
      <table>
        <tbody>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>National ID</th>
          <th>Date Of Brith</th>
          <th>Email</th>
          <th>Gender</th>
        </tr>
        <tr>
        <?php while($student = mysqli_fetch_array($result)){
          echo "<tr> <td>$student[0]</td>";
          echo "<td>$student[1]</td>";
          echo "<td>$student[2]</td>";
          echo "<td>$student[3]</td>";
          echo "<td>$student[4]</td>";
          echo "<td>$student[5]</td> </tr>";
        }  ?>
        </tr>
        </tbody>
      </table>
    </section>
    </Main>
    <script src="../js/adminDashboard.js"></script>
  </body>
</html>

<?php
    unset($_SESSION["Message"]);
    unset($_SESSION["success2"]);
?>