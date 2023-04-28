<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$p_id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `pasutijums` WHERE pa_id='$p_id'");
header("Location:admin_pasutijumi.php");