<?=//session_start();
include 'func.php';
//debug($_SESSION['user']);
$servername = "localhost";
$database = "veikals";
$username = "root";
$password = "";
$k_id=$_SESSION['user']['k_id'];

$conn = mysqli_connect($servername, $username, $password, $database);
$klient=mysqli_query($conn,"SELECT `k_id`, `k_pasts`,  `k_parole`, `k_full_name`, `k_talrunis` FROM `klients` WHERE k_id='$k_id'");
$klient=mysqli_fetch_assoc($klient);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="main.css">

    <meta charset="UTF-8">
    <title>main </title>
    <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="test.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>-->
<body>


    <form method="post" action="profil_update.php">
        <input type="hidden" name="id" value="<?=$klient['k_id'] ?>">
        <lable>Pasts</lable>
        <input type="text" name="pasts" value="<?=$klient['k_pasts']  ?>">
        <h3>-------------------------</h3>

        <lable>Password</lable>
        <input type="text" name="password" value="<?= $klient['k_parole']   ?>">
        <h3>-------------------------</h3>

        <lable>Vards Uzvards</lable>
        <input type="text" name="name" value="<?= $klient['k_full_name'] ?> ">
        <h3>-------------------------</h3>

        <lable>Mob Talrunis</lable>
        <input type="text" name="numurs" value="<?=  $klient['k_talrunis']?> ">
        <h3>-------------------------</h3>


        <p>
            Jus negribat neko mainit? - <a href="test.php">Atgriezties sakumlapa</a>
        </p>
<button type="submit">Update</button>
    </form>
    <p>
    <?php
    if(isset($_SESSION['message'])) { echo $_SESSION['message']; }
    unset($_SESSION['message']);
    ?></p>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

