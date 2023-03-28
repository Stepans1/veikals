<?php
//session_start();
//require_once 'connect.php';
require_once 'func.php';
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
global $pdo;
//$res = $pdo->query("SELECT * from `preces` where p_tips =1");
//return $res->fetchAll();

if (isset($_GET['cart']))
{
    switch ($_GET['cart']){
        case 'add':

            $id=isset($_GET['id'])?(int)$_GET['id']:0;
           $prod=get_produkt($id);

           header('Content-Type: application/json');
           //add_to_cart($prod);
           // echo json_encode(['code'=>'ok','answer'=>$prod], JSON_UNESCAPED_UNICODE);
            $arr=json_decode(json_encode($prod),true);
            add_to_cart($arr);
          //json_decode(add_to_cart($prod),true);
            //$result = (array) json_decode($prod);
           // $z=strval($result);
            break;
    }
}