<?php

session_start();
require_once 'func.php';
require_once 'connect.php';
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$email = empty($_POST['login']) ? null : $_POST['login'];
$password = empty($_POST['password']) ? null : $_POST['password'];

//$password=md5($password);
$stmt = mysqli_query($conn,"SELECT `k_id`,`k_pasts`,`k_atels`,`k_full_name`,`k_parole`,`k_talrunis` FROM `klients` where `k_pasts` like '%$email' and `k_parole` like '%$password'");

if (empty($_POST['password'])  || empty($_POST['login']))
{
    // $password=md5($password);
    $_SESSION['message'] = 'Tuksi lauki .';
    header('Location:login.php');
    exit();
}
if (mysqli_num_rows($stmt) > 0)
{
    $user=mysqli_fetch_assoc($stmt);

    debug($user);
    $_SESSION['user'] = $user;
    header('Location:test.php');



}
else
{
    $_SESSION['message'] = 'Neepareizs pasts vai parole .';
    header('Location:login.php');
}


//$stmt->execute();
//$result = $stmt->get_result();
//var_dump(mysqli_num_rows($result));
//var_dump($stmt->error_list);
//mysqli_stmt_close($stmt);
//mysqli_close($conn);
//
//echo mysqli_num_rows($stmt);
//print_r($result);