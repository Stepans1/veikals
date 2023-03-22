<?php





$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$dsn="mysql:host=$servername;dbname=$database";
$opt=[
    pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
];
$pdo=new PDO($dsn,$username,$password,$opt);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);

