<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$check=" ";
$k_id=$_POST['id'];
$k_name=$_POST['name'];
$k_pasts=$_POST['pasts'];
$k_parole=$_POST['password'];
$k_numurs=$_POST['numurs'];
$p_tips=$_POST['tips'];
mysqli_query($conn,"UPDATE `klients` SET `k_full_name`='$k_name',`k_pasts`='$k_pasts',`k_parole`='$k_parole',`k_talrunis`='$k_numurs' WHERE k_id='$k_id'");
header('Location:profil.php');
if (strlen($k_parole)<8)
{
    $_SESSION['message'] = 'Parole jabut jābut 8 cipari';

    header('Location:profil.php');
    exit;
}
if (strpos($k_name,$check)!==false)
{

}
else{
    $_SESSION['message'] = 'Ievadiet Vārdu UN Uzvārdu';

    header('Location:profil.php');
    exit;
}
if (preg_match('/[^\d\.,]/', $k_numurs)) { /* если есть лишний символ, то true, иначе false */
    $_SESSION['message'] = ' Mobilais numurs var saturet tikai ciparus';
    header('Location:profil.php');
    exit;
}