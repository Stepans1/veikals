<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin_preces</title>
    <link href="main.css">
</head>
<style>
    th,td{
        padding: 10px;
    }
    th{
        background: #888b8e;
    }
    td{
        background: #acb2b7;
    }
    button{
        padding: 10px;
        background: #e3e3e3;
        border: unset;
        cursor: pointer;
    }
</style>
<body>
<a href="admin_user.php"><h3>User</h3></a>
<a href="#"><h3>Pasutijumi</h3></a>
<table>
    <tr>
        <th>p_id</th>
        <th>p_nosaukums</th>
        <th>p_svars</th>
        <th>p_attels</th>
        <th>p_cena</th>
        <th>p_tips</th>
    </tr>
    <?php
    $preces = mysqli_query($conn,"SELECT * FROM `preces`");
    $preces=mysqli_fetch_all($preces);
    foreach ($preces as $prece)
    {
        echo '
<tr>
    <td>' .$prece[0]  . '</td>
    <td>' .$prece[1]  . '</td>
    <td>' .$prece[2]  . '</td>
    <td>' .$prece[3]  . '</td>
    <td>' .$prece[4]  . '</td>
    <td>' .$prece[5]  . '</td>
    <td><a href="update_prece.php?p_id='.$prece[0] .'">Update</a> </td>
</tr>
';
    }
    ?>



</table>
<h1>Pievienot</h1>
<form action="add_prece.php" method="post" enctype="multipart/form-data">
    <p>p_nosaukums</p>
    <input type="text" name="nosaukums">
    <p>p_svars</p>
    <input type="text" name="svars">
    <p>p_attels(image_name.paplasinajums)</p>
    <input type="text" name="attels">
    <p>p_cena</p>
    <input type="text" name="cena">
    <p>p_tips</p>
    <input type="text" name="tips">

    <button type="submit">Pievienot</button>
</form>
<h1>Delete</h1>
<form action="delete_prece.php" method="post" enctype="multipart/form-data">
    <p>p_id</p>
    <input type="text" name="id">

    <button type="submit">Delete </button>
</form>

</body>
</html>
