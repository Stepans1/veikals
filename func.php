<?php
require_once "connect.php";
require_once "karzina.php";
function debug(array $data):void
{
    echo '<pre>'. print_r($data,1) . '</pre>';
}
function get_prost_produkt():array
{


    $servername = "localhost";
    $database = "veikals";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    global $pdo;
    $res = $pdo->query("SELECT * from `preces` where p_tips =1");
    return $res->fetchAll();

}
function get_darzeni():array
{


    $servername = "localhost";
    $database = "veikals";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    global $pdo;
    $res = $pdo->query("SELECT * from `preces` where p_tips =0");
    return $res->fetchAll();

}
$abc = 1;
function get_produkt(int $id)
{

    $servername = "localhost";
    $database = "veikals";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    global $pdo;



    $stmt = $pdo->prepare("SELECT * from `preces` where p_id=?");
    $stmt->execute([$id]);
    return $stmt->fetchObject();
}
function add_to_cart($prod):void
{
       if (isset($_SESSION['cart'][$prod['p_id']]))
       {
           $_SESSION['cart'][$prod['p_id']]['qty']+=1;
       }
       else
       {
           $_SESSION['cart'][$prod['p_id']]=[
               'nosaukums'=>$prod['p_nosaukums'],
               'svars'=>$prod['p_svars'],
               'attels'=>$prod['p_attels'],
               'cena'=>$prod['p_cena'],
               'qty'=>1
           ];

       }
       $_SESSION['cart.qty']=!empty($_SESSION['cart.qty'])? ++$_SESSION['cart.qty']:1;
       $_SESSION['cart.sum']=!empty($_SESSION['cart.sum'])? $_SESSION['cart.sum']+$prod['p_cena']:$prod['p_cena'];

}
function reload()
{
    session_destroy();
}