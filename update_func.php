<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$k_id=$_POST['id'];
$k_full_name=$_POST['name'];
$k_pasts=$_POST['email'];
$k_parole=$_POST['password'];
$k_talrunis=$_POST['phone'];
$k_loma=$_POST['loma'];
mysqli_query($conn,"UPDATE `klients` SET `k_full_name`='$k_full_name',`k_pasts`='$k_pasts',`k_parole`='$k_parole',`k_talrunis`='$k_talrunis',`k_loma`='$k_loma' WHERE k_id='$k_id'");
header('Location:admin_user.php');