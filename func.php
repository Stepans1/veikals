<?php
//require_once "connect.php";
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
    $res = $pdo->query("SELECT * from `preces`");
    return $res->fetchAll();

}