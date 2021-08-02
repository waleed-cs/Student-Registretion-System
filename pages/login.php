<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login</title>
</head>
<body>
    <?php
    require('C:\xampp\htdocs\Task2\pages\header.html');
    ?>
<Main>
<section>
        <div class="login_section">
        <div class="form_parent">
        <h1>Login</h1>
        <form method="POST" action = "./authentication.php" autocomplete="off" >
            <div class="form_input">
                <label for="username">Username</label>
                <input type="text" name="userr" id="username">
            </div>
            <div class="form_input">
                <label for="password">password</label>
                <input type="password" name="pwd" id="password">
            </div>
           <button type="submit">Login</button>
        </form>
        <div><p class="error_message">The username or password you provided is incorrect. Please try again.</p></div>
        <div class="line"></div>
        <div class="forget_container"><a class="forget" href="./forgetPassword.php">Forget Password?</a></div>
    </div>
        </div>
    <div class="image_section">
        <img src="../img/students.jpg" alt="students">
    </div>
    </section>
</Main>
</body>
</html>
