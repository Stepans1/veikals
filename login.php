<?php
session_start();
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Log</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form  action="signin.php" method="post">
    <lable>Login</lable>
    <input type="email" name ="login" placeholder="Ievadiet loginu">
    <lable>Password</lable>
    <input type="password" name="password" placeholder="Ievadiet paroli">
    <button type="submit">Continue</button>
    <p>
        Jums nau akaunta? - <a href="reg.php">Registrejaties</a>
    </p>
    <p class="msg">
        <?php

        if(isset($_SESSION['done'])) { echo $_SESSION['done']; }
        unset($_SESSION['done']);
        ?>
    </p>
</form>
</body>
</html>
