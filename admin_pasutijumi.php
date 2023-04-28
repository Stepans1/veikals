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
<a href="admin_preces.php"><h3>Preces</h3></a>
<a  href="login.php">Logout</a>
<table>
    <tr>
        <th>pa_id</th>
        <th>kl_id</th>
        <th>pa_adrese</th>
        <th>p_id</th>
        <th>qty</th>

    </tr>
    <?php
    $pas = mysqli_query($conn,"SELECT * FROM `pasutijums`");
    $pas=mysqli_fetch_all($pas);
    foreach ($pas as $pas)
    {
        echo '
<tr>
    <td>' .$pas[0]  . '</td>
    <td>' .$pas[1]  . '</td>
    <td>' .$pas[2]  . '</td>
    <td>' .$pas[3]  . '</td>
    <td>' .$pas[4]  . '</td>
    
    <td><a href="update_pasutijums.php?p_id='.$pas[0] .'">Update</a> </td>
</tr>
';
    }
    ?>



</table>
<!--<h1>Pievienot</h1>-->
<!--<form action="add_prece.php" method="post" enctype="multipart/form-data">
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
</form>-->
<h1>Delete</h1>
<form action="delete_pasutijums.php" method="post" enctype="multipart/form-data">
    <p>p_id</p>
    <input type="text" name="id">

    <button type="submit">Delete </button>
</form>

</body>
</html>

