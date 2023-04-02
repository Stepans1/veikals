<?php
    require_once 'connect.php';
   session_start();
require_once 'func.php';
$product= get_prost_produkt();
require_once 'karzina.php'

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="generator" content="Hugo 0.108.0">
    <title>Album example · Bootstrap v5.3</title>

   <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">-->



<?php //debug($_SESSION);
 //session_destroy()?>

    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" >

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Menu</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Darbibas</h4>
                    <ul class="list-unstyled">
                        <li><a href="test.php" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Grozs</a></li>
                        <li><a href="darzeni.php" class="text-white">Dārzeņi</a></li>
                        <li><a href="recepti.php" class="text-white">Recepti</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>Produkti</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Parastie produkti</h1>
                <p class="lead text-muted">Šeit jus varat iveleties sev nepieciešamo produktu</p>
                <p>
                    <button  class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalExample">Grozs<span class="badge"><?=$_SESSION['cart.qty']??0 ?></span></button>
                    <a href="darzeni.php" class="btn btn-secondary my-2">Pie dārziņiem </a>
                </p>
            </div>
        </div>
    </section>
    <!-- Modal -->
<div class="modal fade" id="modalExample" tabindex="-1" aria-bs-labelledby="modalExampleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="modalExampleLabel">Grozs</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <?php if (!empty($_SESSION['cart'])): ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Attels</th>
                            <th scope="col">Nosaukums</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Daudzums</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                            <tr>
                                <td><a href="#"><img src="picture/<?= $item['attels'] ?>"width="40%"  alt="<?= $item['nosaukums'] ?>"></a></td>
                                <td><a href="#"><?= $item['nosaukums'] ?></a></td>
                                <td><?= $item['cena'] ?></td>
                                <td><?= $item['qty'] ?></td>
                            </tr>
                        <?php endforeach; ?>

                        <tr>
                            <td colspan="4" align="right">Preces: <span id="modal-cart-qty"><?= $_SESSION['cart.qty'] ?></span>
                                <br> Summa <?= $_SESSION['cart.sum'] ?> .
                            </td>
                        </tr>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Grozs ir tukš...</p>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <?php if (!empty($_SESSION['cart'])): ?>
                    <button type="button" class="btn btn-primary">Apmaksāt</button>
<form method="post">
                    <button name="qw" value="0" type="submit" class="btn btn-danger" id="clear-cart">Notirīt grozu</button>
                    </form>

                <?php endif; ?>
                <?php

                ?>
            </div>
        </div>
    </div>
</div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if(!empty($product)): ?>
                <?php foreach ($product as $product): ?>
                        <div class="col">

                            <div class="card shadow-sm">
                                <img src="picture/<?= $product["p_attels"]?>" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                                <div class="card-body">
                                    <p class="card-text"><?= $product["p_nosaukums"]?>, MASSA:<?=$product["p_svars"]?>, Cena:<?=$product["p_cena"]  ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!--<button  type="button" class="btn btn-sm btn-outline-secondary">Grozā</button>-->
                                            <a href="?cart=add&id=<?=$product["p_id"]?>"class="btn btn-info btn-block add-to-cart" data-id="<?=$product["p_id"]?>">

                                                <i class="btn btn-sm btn-outline-secondary">Grozā.</i>
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>

    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>


<script>
    function showCart(cart){
        $('#modalExample .modal-cart-content').html(cart);
        $('#modalExample').Modal();
    }

    $('.add-to-cart').on('click',function (e){
        e.preventDefault();
        location.reload();
        let id = $(this).data('id');
      $.ajax({
          url:'karzina.php',
          type:'GET',
          data:{cart:'add',id:id},
          dataType:'json',
          success:function (res){
             // console.log(res);
              showCart();
          },
          error:function () {
              alert('Error32');
          }
      });
    });



</script>
</body>
</html>
