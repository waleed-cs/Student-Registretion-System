<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Student Registration System</title>
  </head>
  <body>
  <i class="fas fa-sign-out-alt" onClick="document.location.href='http://localhost/Task2/pages/login.php'" ></i>
    <?php
    echo "welcome {$_SESSION['name']}";
    ?>
    <section class="form_parent">
      <div class="form_div">
        <h3>Student Registration System</h3>
        <form
          method="post"
          action="insertStudent.php"
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
              <input type="text" id="nid" name="nid" required />
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
  </body>
</html>
