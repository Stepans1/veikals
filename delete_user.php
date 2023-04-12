<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$k_id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `klients` WHERE k_id='$k_id'");
header("Location:admin_user.php");