<?php
$p_id=$_GET['p_id'];
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$prece=mysqli_query($conn,"SELECT `p_id`, `p_nosaukums`,  `p_svars`, `p_attels`, `p_cena`,`p_tips` FROM `preces` WHERE p_id='$p_id'");
$prece=mysqli_fetch_assoc($prece);
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
<form action="update_func_preces.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$prece['p_id'] ?>">
    <p>p_nosaukums</p>
    <input type="text" name="name" value="<?=$prece['p_nosaukums'] ?>">
    <p>p_svars</p>
    <input type="text" name="svars" value="<?=$prece['p_svars'] ?>">
    <p>p_attels</p>
    <input type="text" name="attels" value="<?=$prece['p_attels'] ?>">
    <p>p_cena</p>
    <input type="text" name="cena" value="<?=$prece['p_cena'] ?>">
    <p>p_tips</p>
    <input type="text" name="tips" value="<?=$prece['p_tips'] ?>">

    <button type="submit">Update</button><br> <br>
    <a href="admin_preces.php">Back</a>
</form>
</body>
</html>
