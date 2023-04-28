<?php
$p_id=$_GET['p_id'];
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$prece=mysqli_query($conn,"SELECT `pa_id`, `kl_id`,  `pa_adrese`, `p_id`, `qty` FROM `pasutijums` WHERE pa_id='$p_id'");
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
<form action="admin_func_pas.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$prece['pa_id'] ?>">
    <p>kl_id</p>
    <input type="text" name="klient" value="<?=$prece['kl_id'] ?>">
    <p>pa_adrese</p>
    <input type="text" name="adrese" value="<?=$prece['pa_adrese'] ?>">
    <p>p_id</p>
    <input type="text" name="pirkums" value="<?=$prece['p_id'] ?>">
    <p>qty</p>
    <input type="text" name="qty" value="<?=$prece['qty'] ?>">


    <button type="submit">Update</button><br> <br>
    <a href="admin_pasutijumi.php">Back</a>
</form>
</body>
</html>

