<?php
$user_id=$_GET['k_id'];
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$user=mysqli_query($conn,"SELECT `k_id`, `k_full_name`, `k_pasts`, `k_parole`, `k_talrunis` FROM `klients` WHERE k_id='$user_id'");
$user=mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update_func.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$user['k_id'] ?>">
    <p>k_full_name</p>
    <input type="text" name="name" value="<?=$user['k_full_name'] ?>">
    <p>k_pasts</p>
    <input type="email" name="email" value="<?=$user['k_pasts'] ?>">
    <p>k_parole</p>
    <input type="text" name="password" value="<?=$user['k_parole'] ?>">
    <p>k_talrunis</p>
    <input type="text" name="phone" value="<?=$user['k_talrunis'] ?>">

    <button type="submit">Update</button><br> <br>
    <a href="admin_user.php">Back</a>
</form>
</body>
</html>
