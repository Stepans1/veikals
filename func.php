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