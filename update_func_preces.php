<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$p_id=$_POST['id'];
$p_nosaukums=$_POST['name'];
$p_svars=$_POST['svars'];
$p_attels=$_POST['attels'];
$p_cena=$_POST['cena'];
$p_tips=$_POST['tips'];
mysqli_query($conn,"UPDATE `preces` SET `p_nosaukums`='$p_nosaukums',`p_svars`='$p_svars',`p_attels`='$p_attels',`p_cena`='$p_cena',`p_tips`='$p_tips' WHERE p_id='$p_id'");
header('Location:admin_preces.php');