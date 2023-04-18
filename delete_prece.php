<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$p_id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `preces` WHERE p_id='$p_id'");
header("Location:admin_preces.php");