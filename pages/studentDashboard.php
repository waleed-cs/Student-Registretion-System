<?php

session_start();

require('./dbconnaction.php');

$query = "SELECT * FROM course ORDER BY course_id ASC;";
$result = mysqli_query($conn,$query);

echo"";

$query2 = "SELECT fname,lname FROM student WHERE email = {$_SESSION['name']} ;";
$result2 = mysqli_query($conn,$query2);
$row = mysqli_fetch_row($result2);
$fname = $row[0];
echo $fname;
// while($name = mysqli_fetch_array($result2)){
//     echo "$name[0]";
// }

echo "{$result2}";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/studentDashboard.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Student Dashboard</title>
  </head>
  <body>
    <header>
      <div class="person">
      <i class="fas fa-user"></i>
      <p><?php echo "welcome {$_SESSION['name']}";?> </p>
      </div>
      <div class="menu">
        <div class="option option1">
        <i class="fas fa-eye"></i>
        <p>View Courses</p>
        </div>
        <div class="option option2">
        <i class="fas fa-eye"></i>
        <p>View Students</p>
        </div>
      </div>
      <div class="logout" onClick="document.location.href='http://localhost/Task2/pages/login.php'" >
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
        <form action="enrollClasses.php" method="post">
        <table>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Course Hours</th>
        </tr>

        <?php while($course = mysqli_fetch_array($result)){
          echo "<tr> <td>$course[0]</td>";
          echo "<td>$course[1]</td>";
          echo "<td>$course[2]</td>";
          echo "<td><input type='checkbox' name ='course[]' id = '$course[0]' value = '$course[1]'></td> </tr>";
        }  ?>

      </table>
        <button type="submit">Enroll</button>
    </form>
      </div>
    </section>
    </Main>
    <script src="../js/adminDashboard.js"></script>
  </body>
</html>
