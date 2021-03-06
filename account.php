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

<?php
    if ( $_SESSION['zalogowany'] == true)
    {
        
    
    ?>

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




    <div class="container-fluid account text-center main">
    
            <h1 class="">Dane Twojego konta</h1>
        <?php
            
            echo "<br>Twoje id: <b>".  $_SESSION['user_id']."</b>";
            echo "<br>Twoj login: <b>". $_SESSION['login']."</b>";
            echo "<br>Twoje haslo: <b>".  $_SESSION['passwd']."</b>";
            echo "<br>Twoje imie: <b>". $_SESSION['name']."</b>";
            echo "<br>Twoje nazwisko: <b>". $_SESSION['surname']."</b>";
            echo "<br>Twoj email: <b>". $_SESSION['email']."</b>";
            echo "<br>Twoj numer tel.: <b>". $_SESSION['phone']."</b>";
            echo "<br>Miejscowosc zamieszkania: <b>". $_SESSION['city']." ".$_SESSION['zip_code']."</b>";
            echo "<br>Twoj adres: <b>". $_SESSION['street']." ".$_SESSION['house_number']."</b>";
            ?>
            <form action="logout.php" method="post">
             <input class="submit logout m-3 col-10 col-sm-4 col-md-2" value="Wyloguj si??" type="submit"  name="logout"/>
             </form>
             
       
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
<?php
    }
    else{
        header('Location: login.php');
    }
?>

</html>
