<?php
session_start();
//include "signup.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reg </title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form  action="signup.php" method="post" enctype="multipart/form-data">
    <lable>Pasts</lable>
    <input type="email" name="email" placeholder="Ievadiet pasts">
    <lable>Password</lable>
    <input type="password" name="password"  placeholder="Ievadiet paroli">
    <lable>Password check</lable>
    <input type="password" name="password_check" placeholder="Ievadiet paroli vel reiz">
    <lable>Vards Uzvards</lable>
    <input type="text" name="full_name" placeholder="Ievadiet Vardu un uzvardu">
    <lable>Mob Talrunis</lable>
    <input type="text" name="phone" placeholder="Ievadiet mob talruni">
    <lable>Profila atels</lable>
    <input type="file" name="avatar">
    <button>Continue</button>
    <p>
        Jums jau ir akaunts? - <a href="login.php">Ieiet akaunta</a>
    </p>
    <p class="msg">
    <?php

    if(isset($_SESSION['message'])) { echo $_SESSION['message']; }
    unset($_SESSION['message']);
    ?>
    </p>
</form>
</body>
</html>
