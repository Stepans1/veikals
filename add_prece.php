<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$p_nosaukums=$_POST['nosaukums'];
$p_svars=$_POST['svars'];
$p_attels=$_POST['attels'];
$p_cena=$_POST['cena'];
$p_tips=$_POST['tips'];
mysqli_query($conn,"INSERT INTO `preces` (`p_id`, `p_nosaukums`, `p_svars`, `p_attels`, `p_cena`,`p_tips`) VALUES (NULL, '$p_nosaukums', '$p_svars', '$p_attels', '$p_cena','$p_tips' )");
header('Location:admin_preces.php');
