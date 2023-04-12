<?php
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";
$_SESSION['done'] = 'registracija ir pabeikta';

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
    <title>Document</title>
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
<table>
<tr>
    <th>k_id</th>
    <th>k_full_name</th>
    <th>k_pasts</th>
    <th>k_parole</th>
    <th>k_talrunis</th>
    <th>k_atels</th>
</tr>
    <?php
    $users = mysqli_query($conn,"SELECT * FROM `klients`");
    $users=mysqli_fetch_all($users);
foreach ($users as $user)
{
echo '
<tr>
    <td>' .$user[0]  . '</td>
    <td>' .$user[1]  . '</td>
    <td>' .$user[2]  . '</td>
    <td>' .$user[3]  . '</td>
    <td>' .$user[4]  . '</td>
    <td>' .$user[5]  . '</td>
    <td><a href="update_user.php?k_id='.$user[0] .'">Update</a> </td>
</tr>
';
}
    ?>



</table>
<h1>Pievienot</h1>
<form action="add_user.php" method="post" enctype="multipart/form-data">
    <p>k_full_name</p>
    <input type="text" name="name">
    <p>k_pasts</p>
    <input type="email" name="email">
    <p>k_parole</p>
    <input type="password" name="password">
    <p>k_talrunis</p>
    <input type="text" name="phone">

    <button type="submit">Pievienot</button>
</form>
<h1>Delete</h1>
<form action="delete_user.php" method="post" enctype="multipart/form-data">
    <p>k_id</p>
    <input type="text" name="id">

    <button type="submit">Delete </button>
</form>

</body>
</html>