<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" >

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Recepti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">

                    <button class="btn btn-outline-success" href="">Korzina</button>

                </form>
            </div>
        </div>
    </nav>
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        Link with href
    </a>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Profils</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Šeit jus varat iziet no sava akaunta vai nomainīt datus
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Darbibas
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Iziet</a></li>
                    <li><a class="dropdown-item" href="#">Nomainit profila datus </a></li>


                </ul>
            </div>
        </div>
    </div>
   </head>
<body>

<p align="center" style="height: 0px"  >
<h1 align="center" ><font color="red">Jaunie recepti</font></h1>
</p>

<!--card1 -->

<div class="card"  style="width: 18rem; display:inline-block;">
    <img src="picture/kuskus.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Kus Kus</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<!-- card 2 -->
<div class="card"  style="width: 18rem;display:inline-block;">
    <img src="picture/big_552521.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Jurnieu makaroni</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<!-- card 3 -->
<div class="card"  style="width: 18rem;display:inline-block;">
    <img src="picture/plov2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Plov</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<!-- card 4 -->
<div class="card"  style="width: 18rem;display:inline-block;">
    <img src="picture/kebab.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Kebabs</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>