<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">





    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .msg{

            border-radius: 2px;
            padding: 10px;
            text-align: center;
            font-weight:bold ;
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


    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>
<body  class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">

            <h2>Checkout form</h2>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                    <span class="badge bg-primary rounded-pill"><?=$_SESSION['cart.qty']??0 ?></span>
                </h4>
                <?php if (!empty($_SESSION['cart'])): ?>
                <ul class="list-group mb-3">
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>

                    <li class="list-group-item d-flex justify-content-between lh-sm">

                        <div>
                            <h6 class="my-0"> <?=$item['nosaukums'] ?></h6>
                        </div>
                        <span class="text-muted"> <?=$item['cena'] ?> Euro</span>
                    </li>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <p>Grozs ir tukš...</p>
                    <?php endif; ?>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (Euro)</span>
                        <strong><?= $_SESSION['cart.sum'] ?></strong>
                    </li>
                </ul>


            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Piegādes noformēšana </h4>
                <form class="needs-validation" action="pay.php" method="post">
                    <div class="row g-3">


                                <div  class="col-12">
                                    <label for="address" class="form-label">Adrese</label>
                                    <input  type="text"  class="form-control"  name="adrese" placeholder="Аntonijas 2, Rīga LV-1010 ">
                                    <div class="invalid-feedback">Please enter your shipping address.</div>
                                </div>
                           <!--  <button class="w-100 btn btn-primary btn-lg" type="submit">Noformēt</button>-->

                    </div>


                    <hr class="my-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Vārds,uzvārds kartē </label>
                            <input type="text" name="vards" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Vārds uzvārds ka ir uzrakstīts kartē</small>
                            <div class="invalid-feedback">
                                Ši lauks ir obligāts
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Kartes numurs</label>
                            <input type="text" name="numurs" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Ši lauks ir obligāts
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Derīgs līdz</label>
                            <input type="text" name="derigs" class="form-control" id="cc-expiration" placeholder="MMYY" required>
                            <small class="text-muted">Bez "/" simvola :MM/YY</small>

                            <div class="invalid-feedback">
                                Ši lauks ir obligāts
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVC</label>
                            <input type="text" name="cvc" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Ši lauks ir obligāts
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Noformēt</button>

                    <!--<input  type="submit" class="form-control"  name="submit"href="pay.php"  >-->
                    <p class="msg">
                   <?php
                          if(isset($_SESSION['message'])) { echo $_SESSION['message']; }
                          unset($_SESSION['message']);
                   ?>
                    </p>
                   <!--<button class="w-100 btn btn-primary btn-lg" type="submit"><a href="pay.php" class="text-white">Noformēt</a></button>-->
                </form>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2022 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<!--хуйня с form , method  надо попытаться закинуть все в один form-->
<script src="bootstrap/bootstrap.bundle.min.js"></script>

<script src="checkout.js"></script>
</body>
</html>
