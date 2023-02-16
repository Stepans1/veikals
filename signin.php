<?php
session_start();
require_once 'connect.php';
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
$email = $_POST['login'];
$password = md5($_POST['password']);
$check_user=mysqli_query($conn,"SELECT * FROM `klients` where `k_pasts`='$email' and `k_password`='$password'");
echo mysqli_num_rows($check_user);
