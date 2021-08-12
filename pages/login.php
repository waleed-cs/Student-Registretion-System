<?php

session_start();

session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Login</title>
</head>
<body>

<Main>
<section>
        <div class="login_section login-animate" id="login-animate">
        <a id="logo" class="logo" href="./homePage.php">SRMS</a>
        <form method="POST" action = "./authentication.php" autocomplete="off" >
            <div class="form_input" id="login-animate">
                <input type="text" name="userr" id="username" required placeholder="Username/Email">
            </div>
            <div class="form_input">
                <input type="password" name="pwd" id="password" required placeholder="Password">
                <i class="fas fa-eye"></i>
            </div>
           <button type="submit">Login</button>
        </form>
        <div>
        
        <div><p class="error_message">
        <?php
        if (isset($_SESSION['Message']))
        {?>
                <script>
                document.querySelector('#login-animate').classList.remove('login-animate');
                </script>
            <?php
            echo $_SESSION['Message'];
        }
        ?>
        </p>
    </div>
        <div class="line"></div>
        <div class="forget_container"><a class="forget" href="./forgetPassword.php">Forget Password?</a></div>
    </div>
        </div>
    <div class="image_section image-animate" id="image-animate">
    <?php
        if (isset($_SESSION['Message']))
        {?>
                <script>
                document.querySelector('#image-animate').classList.remove('image-animate');
                </script>
        <?php
        }
        ?>
        <img src="../img/students.jpg" alt="students">
    </div>
    </section>
</Main>
<script src="../js/login.js"></script>
</body>
</html>

<?php
    unset($_SESSION["Message"]);
?>