<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$k_full_name=$_POST['name'];
$k_pasts=$_POST['email'];
$k_parole=$_POST['password'];
$k_talrunis=$_POST['phone'];
mysqli_query($conn,"INSERT INTO `klients` (`k_id`, `k_full_name`, `k_pasts`, `k_parole`, `k_talrunis`) VALUES (NULL, '$k_full_name', '$k_pasts', '$k_parole', '$k_talrunis' )");
header('Location:admin_user.php');