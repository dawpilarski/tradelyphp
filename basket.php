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
                <button class="btn " type="submit">Szukaj</button>
            </form>
        </div>
    </nav>



    <div class="container-fluid text-center main">
        <div class="categories basket  mx-md-12">
            <h1 class="">Koszyk</h1>


            <div class="row">
                <div class="col-12">
                    <?php
                        echo "Witaj Świecie";
                    ?>
                </div>



                <form action="basket.php" method="post">
                   
                    <div class="col-12 p-2 form">
                        Produkt ilosc:
                        <input type="text" required="required" name="produkt_ilosc" />
                    </div>
                    
                    <div class="col-12 p-2 form">
                        Produkt cena:
                        <input type="text" required="required" name="produkt_cena" />
                    </div>

                    <div class="col-12 p-2 form">
                        <input type="submit" value="Zatwierdz" />
                    </div>

                </form>

                <div class="col-12">
                    <?php
                        if( isset($_POST["produkt_ilosc"]) and isset($_POST["produkt_cena"])){
                            
                           $produkt_ilosc = $_POST["produkt_ilosc"];
                           $produkt_cena = $_POST["produkt_cena"];
                            
                            
                            
                            echo
                            "<div class='col-12 p-2 form'>
                                Ilość zamówionego produktu: $produkt_ilosc szt
                            </div>";
                            echo
                            "<div class='col-12 p-2 form'>
                                Cena zamówionego produktu: $produkt_cena zł
                            </div>";
                    
                            $suma = 0;
                            $suma = $produkt_ilosc*$produkt_cena;
                            echo 
                            "<div class='col-12 p-2 form'>
                                Łączna kwota zamówienia wynosi: $suma zł
                            </div>";
                        
                        }
                    ?>
                </div>


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
            © 2020 Copyright: Dawid Pilarski
        </div>
    </footer>


</body>

</html>
