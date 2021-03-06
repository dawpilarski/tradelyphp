<?php
session_start();


?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Tradely</title>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/861c63ddfc.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand p-3">
        <div class="container-fluid flex-wrap">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="" width="auto" height="60" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav me-md-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="basket.php">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-star"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <i class="fas fa-user"></i>
                    </a>
                </li>

            </ul>
            <form class="d-flex mx-auto mx-sm-0 my-1 searchBar">
                <input class="form-control " type="search" placeholder="Czego ci potrzeba? " aria-label="Search">
                <button class="btn" type="submit">Szukaj</button>
            </form>
        </div>
    </nav>




    <div class="container-fluid text-center main">
        <div class="categories  mx-md-5">
            <h1 class="">Kategorie</h1>
            <form id="myform" method="post" action="products.php">
            <div class="row mx-lg-5 mx-md-5 mx-sm-auto justify-content-center">
               
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="0" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-store"></i>
                        </div>
                        <p>Wszystkie produkty</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="1" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <p>Elektronika</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="2" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <p>Moda</p>
                    </a>

                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="3" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-baby"></i>
                        </div>
                        <p>Dzieci</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="4" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p>Dom</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="5" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-car"></i>
                        </div>
                        <p>Motoryzacja</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="6" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <p>Sport</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="7" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-cat"></i>
                        </div>
                        <p>Zwierz??ta</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="8" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <p>Zdrowie</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="9" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-book"></i>
                        </div>
                        <p>Kultura</p>
                    </a>
                </div>
                <div class="col-4 col-md-2"><a href="#" name="opcja" value="10" onclick="document.getElementById('myform').submit()">
                        <div class="option">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <p>Sztuka</p>
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="container-fluid text-center newest py-5">
        <h1>Nowy Asortyment</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 p-4 box">
                <a href="">
                    <img class="img-fluid" src="images/tshirt.png" alt="produkt 1">
                    <p>Tshirt white 299z??</p>
                </a>
            </div>
            <div class="col-12 col-md-4 p-4 box">
                <a href="">
                    <img class="img-fluid" src="images/dres.jpg" alt="produkt 2">
                    <p>Dres break it 600z??</p>
                </a>
            </div>
            <div class="col-12 col-md-4 p-4 box">
                <a href="">
                    <img class="img-fluid" src="images/okulary.jpg" alt="produkt 3">
                    <p>Szybkie okulary 150z??</p>
                </a>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="container">
            <div class="row p-3">
                <div class="col-4">
                    <a href="">
                        <i class="fas fa-address-card"></i>
                        <p>O nas</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="">
                        <i class="fas fa-envelope"></i>
                        <p>Kontakt</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="">
                        <i class="fab fa-github"></i>
                        <p>Github</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: #222">
            ?? 2020 Copyright: Dawid Pilarski
        </div>
    </footer>


</body>

</html>
