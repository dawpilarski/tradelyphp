 <?php
                        session_start();
                    
                          if ( @$_SESSION['zalogowany'] == true){
                                header('Location: account.php');
                            }
     

	                   require_once "connect.php";

                        $conn = @new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_errno!=0) {
                          echo "Error: ".$conn->connect_errno;
                        }else
                        {
//                            echo "Connected successfully";
                            $login = @$_POST['login'];
                            $haslo = @$_POST['haslo'];
                              $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);
                                //echo $login;
                                //echo $haslo;
                            
                            $sql = "select * from users where login='$login'";
//                            $sql = "select * from users where login='$login'and passwd='$haslo'";
                            
                            if($rezultat = @$conn->query($sql)){

                                $ilosc_userow = $rezultat->num_rows;
                                //echo $ilosc_userow;
                                if($ilosc_userow>0){
                                    
                                    $_SESSION['zalogowany'] = true;
                                    
                                    
                                    
                                    $wiersz = $rezultat->fetch_assoc();
                                    if (password_verify($haslo,$wiersz['passwd'])){
                                    
                                    $_SESSION['login']= $wiersz['login'];
                                    $_SESSION['passwd']= $wiersz['passwd'];
                                    $_SESSION['user_id']= $wiersz['user_id'];
                                    $_SESSION['name']= $wiersz['name'];
                                    $_SESSION['surname']= $wiersz['surname'];
                                    $_SESSION['email']= $wiersz['email'];
                                    $_SESSION['phone']= $wiersz['phone'];
                                    $_SESSION['city']= $wiersz['city'];
                                    $_SESSION['street']= $wiersz['street'];
                                    $_SESSION['house_number']= $wiersz['house_number'];
                                    $_SESSION['zip_code']= $wiersz['zip_code'];
                                        
                                    $rezultat->free_result();
                                    
                                    
                                    //unset($_SESSION['blad']);
                                    $rezultat->free_result();
//                                    echo  $_SESSION['login'];
                                    header('Location: account.php');
                                    
                                }else{
                                    if(isset($_POST['login'])and isset($_POST['haslo'])){
                                    
                                    @$blad='<span>Wprowadzane dane są niepoprawne!</span>';
                                    }
                                   
                                }
                            }
                            $conn->close();
                        }}
                        
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
                <button class="btn " type="submit">Szukaj</button>
            </form>
        </div>
    </nav>




    <div class="container-fluid text-center main">
        <div class="categories login-container mx-md-12">
            <h1 class="">Zaloguj się</h1>


            <div class="row" >
                <form class="login"action="login.php" method="post">
                   
                    <div class="col-12 p-2 form">
                        Login:
                        <input type="text" required="required" name="login" />
                    </div>
                    
                    <div class="col-12 p-2 form">
                        Hasło:
                        <input type="password" required="required" name="haslo" />
                    </div>

                    <div class="col-12 p-2 form">
                        <?php
                        echo @$blad;
                        ?>
                    </div>
                       <div class="col-12 p-1 form login">
                        <input class="col-10 col-sm-4 col-md-2   "type="submit" value="Zaloguj się" />
                    </div>
                     </form>
                    <div class="col-12 p-2 form login">
                       Nie masz jeszcze konta?
                        <a href="registration.php"><button>Zarejestruj się</button></a>
                    </div>

               

                <div class="col-12">
                   
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
