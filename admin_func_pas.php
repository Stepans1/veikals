<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$k_id=$_POST['id'];
$k_full_name=$_POST['klient'];
$k_pasts=$_POST['adrese'];
$k_parole=$_POST['pirkums'];
$k_talrunis=$_POST['qty'];
mysqli_query($conn,"UPDATE `pasutijums` SET `kl_id`='$k_full_name',`pa_adrese`='$k_pasts',`p_id`='$k_parole',`qty`='$k_talrunis' WHERE pa_id='$k_id'");
header('Location:admin_pasutijumi.php');