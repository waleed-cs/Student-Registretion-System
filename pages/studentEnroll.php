<?php

    session_start();
    require('./dbconnaction.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll courses</title>
</head>
<body>
    <form action="enrollClasses.php" method="post">
        <?php
        $query = "SELECT * FROM course";
        $result = mysqli_query($conn,$query);
        while($course = mysqli_fetch_array($result)){
            echo " <input type='checkbox' name ='course[]' id = '$course[0]' value = '$course[1]'> ";
            echo " <label for= '$course[0]'> $course[1] </label> ";
        }
        echo $_SESSION['name'];
        ?>
        <button type="submit">Enroll</button>
    </form>
</body>
</html>