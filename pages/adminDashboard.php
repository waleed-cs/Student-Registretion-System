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
      <div class="person">
      <i class="fas fa-user"></i>
      <p><?php echo "welcome {$_SESSION['name']}";?> </p>
      </div>
      <div class="menu">
        <div class="option option1">
        <i class="fas fa-user-plus"></i>
        <p>Register Student</p>
        </div>
        <div class="option option2">
        <i class="fas fa-eye"></i>
        <p>View Students</p>
        </div>
      </div>
      <div class="logout" onClick="document.location.href='http://localhost/Task2/pages/login.php'; document.querySelector('#login-animate').classList.add('login-animate'); document.querySelector('#login-animate').classList.add('image-animate'); <?php session_destroy(); ?> " >
        <div>
        <i class="fas fa-sign-out-alt"></i>
        <p>Logout</p>
        </div>
      </div>
    </header>
    <Main>
    <section class="form_parent">
      <div class="form_div">
        <h3>Student Registration System</h3>
        <form
          method="post"
          action="registerStudent.php"
          autocomplete="off"
          onSubmit="alert('Thank you!');"
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
          </div>
          <button type="submit">Register</button>
        </form>
      </div>
    </section>
    <section class="student_table_parent"  style="display:none">
      <table>
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
      </table>
    </section>
    </Main>
    <script src="../js/adminDashboard.js"></script>
  </body>
</html>
