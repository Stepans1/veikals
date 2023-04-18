<?=//session_start();
include 'func.php';
//debug($_SESSION['user']);?>
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

    <form>
        <lable>Pasts</lable>
        <td><a href="#"><?= $_SESSION['user']['k_pasts'] ?></a><a style="color: red"  href="#">Nomainit pasts</a></td>
        <h3>-------------------------</h3>
        <lable>Password</lable>
        <td><a href="#"><?= $_SESSION['user']['k_parole'] ?></a><a style="color: red"  href="#">Nomainit paroli</a></td>
        <h3>-------------------------</h3>
        <lable>Vards Uzvards</lable>
        <td><a href="#"><?= $_SESSION['user']['k_full_name'] ?></a></td>
        <h3>-------------------------</h3>
        <lable>Mob Talrunis</lable>
        <td><a href="#"><?= $_SESSION['user']['k_talrunis'] ?></a><a style="color: red"  href="#">Nomainit numuru</a></td>
        <h3>-------------------------</h3>
        <lable>Profila atels</lable>
        <p><img src="picture/<?php try{ $_SESSION['user']['k_atels'];}catch (Throwable){echo 'Jums nau attela';} ?>" width="80px" height="80px" ><a style="color: red"  href="#">Nomainit attelu</a></p>
        <p>
            Jus negribat neko mainit? - <a href="test.php">Atgriezties sakumlapa</a>
        </p>

    </form>

<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

