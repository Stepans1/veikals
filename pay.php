<?php
session_start();
require_once 'func.php';
//include "signup.php";
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

//$adres = empty($_POST['adrese1']) ? null : $_POST['adrese1'];
//$adrese=isset($_GET['adrese'])? null:$_GET['adrese'] ;
//$kid=$GLOBALS['stm_id'];
//$stm_id=include "signup.php";
//$p_id=[ $_SESSION['cart']['p_id']];
foreach ($_SESSION['cart'] as $id=>$item ):
    debug((array)$id);
    debug((array)$item['qty']);
    echo '------------';
endforeach;
foreach ($_SESSION['user'] as $id=>$item ):

debug((array)$item['email']);
endforeach;
//debug($_SESSION['user']['k_id']);
//echo $adres;
//global $stm_id;
$adrese=$_POST['adrese'];
echo $_SESSION['user'];
echo $adrese;
