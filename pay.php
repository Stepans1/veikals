<?php
session_start();
require_once 'func.php';
//include "signup.php";
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$derigs=$_POST['derigs'];
$adrese=empty($_POST['adrese']) ? null : $_POST['adrese'];
$numurs=$_POST['numurs'];
$cvc=$_POST['cvc'];
$vards=$_POST['vards'];
$check=" ";
if (preg_match('/[^\d\.,]/', $derigs)) { /* если есть лишний символ, то true, иначе false */
    $_SESSION['message'] = ' Lauks "derigs lidz" var saturet tikai ciparus';
    header('Location:apmaksa.php');
    exit;
}

if (preg_match('/[^\d\.,]/', $numurs)) { /* если есть лишний символ, то true, иначе false */
    $_SESSION['message'] = ' Kartes numurs var saturet tikai ciparus';
    header('Location:apmaksa.php');
exit;
}
if (preg_match('/[^\d\.,]/', $cvc)) { /* если есть лишний символ, то true, иначе false */
    $_SESSION['message'] = 'CVC  var saturet tikai ciparus';
    header('Location:apmaksa.php');
    exit;
}

if (strpos($vards,$check)!==false)
{

}
else{
    $_SESSION['message'] = 'Ievadiet Vārdu UN Uzvārdu';

    header('Location:apmaksa.php');
    exit;
}
if (strlen($cvc)!=3)
{
    $_SESSION['message'] = 'CVC jābut 3 cipari';

    header('Location:apmaksa.php');
exit;
}
if (empty($_POST['adrese']))
{
    $_SESSION['message'] = 'Some fields are empty.';
    header('Location:apmaksa.php');
exit;
}
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

//foreach ($_SESSION['user'] as $id=>$item ):
echo 'User:';
var_dump($_SESSION['user']['k_id']);
$user=$_SESSION['user']['k_id'];
//echo $adrese;
//endforeach;
//debug($_SESSION['user']['k_id']);
//echo $adres;
//global $stm_id;
//$adrese=$_POST['adrese'];
foreach ($_SESSION['cart'] as $id=>$item):
    $qty=$item['qty'];
mysqli_query($conn,"INSERT INTO `pasutijums` (`kl_id`,`pa_adrese`,`p_id`,`qty`) VALUES ('$user','$adrese','$id','$qty')");

endforeach;
mysqli_query($conn,"DELETE FROM `pasutijums` WHERE `pa_adrese`='' ");
if (!empty($_POST['adrese']))
{
    unset($_SESSION['cart']);
    unset($_SESSION['cart.qty']);
    unset($_SESSION['cart.sum']);
    header("location:test.php");
}
