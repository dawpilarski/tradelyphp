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
        
//        if(isset($_POST['regulamin'])){}
        

                    
                           if (isset($_POST["login"])and isset($_POST["haslo"])
                            and isset($_POST["powtorz_haslo"])
                            and isset($_POST["imie"])
                            and isset($_POST["nazwisko"])
                            and isset($_POST["email"])
                            and isset($_POST["telefon"])
                            and isset($_POST["miasto"])
                            and isset($_POST["ulica"])
                            and isset($_POST["numer_domu"])
                            and isset($_POST["kod_pocztowy"])) {
                               
                           $login             = $_POST["login"];
                           $haslo             = $_POST["haslo"];
                           $powtorz_haslo     = $_POST["powtorz_haslo"];
                           $imie              = $_POST["imie"];
                           $nazwisko          = $_POST["nazwisko"];
                           $email             = $_POST["email"];
                           $telefon           = $_POST["telefon"];
                           $miasto            = $_POST["miasto"];
                           $ulica             = $_POST["ulica"];
                           $numer_domu         = $_POST["numer_domu"];
                           $kod_pocztowy      = $_POST["kod_pocztowy"];
                               
                            $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);
                               
                               
                               if(strlen($login)<3 || strlen($login)>20){
                                  $war1 = false;
                                    @$SESSION['dlugosc_login'] ='<span class="errortext">Login powinien się składać od 3 do 20 znaków!</span>';
                                    
                               }else{
                                   $war1 = true;
                               }
                               if(ctype_alnum($login)){$war2 = true;}
                               else{
                                   $war2 = false;
                                   @$SESSION['loginznaki'] = '<span class="errortext">Login nie składa się ze znaków alfanumerycznych!</span>';
                                    
                               }
                               
                               if(($haslo != $powtorz_haslo) ){
                                   $war3 = false;
                                   @$SESSION['blad_haslo1'] = '<span class="errortext">Wprowadzane hasla są od siebie różne!</span>';
                               }else{
                                   $war3 = true;
                               }
                               if(strstr($email,"@")!==false){
                                   $war4 = true;
                               }else{
                                   $war4 = false;
                                   @$SESSION['blad_email'] = '<span class="errortext">Wprowadzony email nie zawiera znaku małpy "@"!</span>';
                                   
                               }
                               
                               if(isset($_POST['regulamin'])){
                                   $war5 = true;
                               }else{
                                   $war5 = false;
                                   @$SESSION['regulamin'] = '<span class="errortext">Musisz zaakceptować regulamin!</span>';
                                   
                               }
                               if(strlen($haslo)<8){
                                   $war6 = false;
                                   @$SESSION['blad_haslo2'] = '<span class="errortext">Wprowadzane haslo powinno zawierać minimum 8 znaków!</span>';
                                   
                               }else{$war6 = true;}
                               //select COUNT(user_id) from users WHERE email='email@email.com' 
                               
                               
                               
                                require_once "connect.php";

                                $conn = @new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_errno!=0) {
                                  echo "Error: ".$conn->connect_errno;
                                }else
                                {

                                    $sql = "select user_id from users WHERE email='$email'";
                                    if($rezultat = @$conn->query($sql)){
                                        $ilosc_maili = $rezultat->num_rows;
                                    }if($ilosc_maili>0){
                                        $war7=false;
                                        @$SESSION['blad_email2'] = '<span class="errortext">Wprowadzony email jest juz zajęty!</span>';
                                    }else{
                                        $war7=true;
                                    }
                                $conn->close();
                                }
                               
                               
                               require_once "connect.php";

                                $conn = @new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_errno!=0) {
                                  echo "Error: ".$conn->connect_errno;
                                }else
                                {

                                    $sql = "select user_id from users WHERE login='$login'";
                                    if($rezultat = @$conn->query($sql)){
                                        $ilosc_loginow = $rezultat->num_rows;
                                    }if($ilosc_loginow>0){
                                        $war8=false;
                                        @$SESSION['blad_login2'] = '<span class="errortext">Wprowadzony login jest juz zajęty!</span>';
                                    }else{
                                        $war8=true;
                                    }
                                $conn->close();
                                }
                               
                               
                               if($war1 == true and $war2 == true and $war3 == true and $war4 == true and $war5 == true and $war6 == true and $war7==true and $war8==true){
                                  
                               
                                
                               
                               
                       $imie = strtolower($imie);
                        $imie = ucwords($imie);
        
                       $nazwisko = strtolower($nazwisko);
                        $nazwisko = ucwords($nazwisko);
        
                       $miasto = strtolower($miasto);
                        $miasto = ucwords($miasto);
        
                       $ulica = strtolower($ulica);
                        $ulica = ucwords($ulica);
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "tradely";

                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        //echo "Connected successfully";
                            
                        $sql = "INSERT INTO users (login, passwd, name, surname, email, phone, city, street, house_number, zip_code) VALUES('$login','$haslo_hash','$imie','$nazwisko','$email','$telefon','$miasto','$ulica','$numer_domu','$kod_pocztowy')";

                         
                        if ($conn->query($sql) === TRUE) {
                         // echo "New record created successfully";
                            header('Location: success.php');
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                           

                        $conn->close();
//                           header('Location: registration.php');
                           }}
//                    else{header('Location: registration.php');}
                        

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



    <div class="container-fluid registration-container text-center main p-4">

        <h1 class="">Rejestracja</h1>

        <form action="registration.php" method="post" class="registration  mx-auto">
            <div class="form-group p-3">
                <label for="">Login</label>
                <input type="text" class="form-control" id="" placeholder="Twoj login" required="required" name="login">
                <?php
                echo  @$SESSION['dlugosc_login'];
                echo  @$SESSION['loginznaki'];
                echo @$SESSION['blad_login2'];
                ?>
            </div>
            <div class="form-group p-3">
                <label for="">Hasło</label>
                <input type="password" class="form-control" id="" placeholder="Twoje hasło" required="required" name="haslo">
                <?php
                    echo @$SESSION['blad_haslo2'];
                ?>
            </div>
            <div class="form-group p-3">
                <label for="">Powtórz Hasło</label>
                <input type="password" class="form-control" id="" placeholder="Powtorz swoje hasło" required="required" name="powtorz_haslo">
                <?php
                echo @$SESSION['blad_haslo1'];
                ?>
            </div>
            <div class="form-group p-3">
                <label for="">Imie</label>
                <input type="text" class="form-control" id="" placeholder="Twoje imie" required="required" name="imie">
            </div>
            <div class="form-group p-3">
                <label for="">Nazwisko</label>
                <input type="text" class="form-control" id="" placeholder="Twoje nazwisko" required="required" name="nazwisko">
            </div>
            <div class="form-group p-3">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Twoj adres email" required="required" name="email">
                <?php
                echo @$SESSION['blad_email'] ;
                echo @$SESSION['blad_email2'];
                ?>
            </div>
            <div class="form-group p-3">
                <label for="">Telefon</label>
                <input type="text" class="form-control" id="" placeholder="Numer telefonu" required="required" name="telefon">
            </div>
            <div class="form-group p-3">
                <label for=""> Miasto</label>
                <input type="text" class="form-control" id="" placeholder="Miejscowosc zamieszkania" required="required" name="miasto">
            </div>
            <div class="form-group p-3">
                <label for="">Ulica</label>
                <input type="text" class="form-control" id="" placeholder="Nazwa ulicy" required="required" name="ulica">
            </div>
            <div class="form-group p-3">
                <label for="">Numer domu</label>
                <input type="text" class="form-control" id="" placeholder="Numer domu" required="required" name="numer_domu">
            </div>
            <div class="form-group p-3">
                <label for=""> Kod pocztowy</label>
                <input type="text" class="form-control" id="" placeholder="Kod pocztowy" required="required" name="kod_pocztowy">
            </div>

            <div class="form-group p-3">
                <label><input class="checkbox" type="checkbox" id="" required="required" value="true" name="regulamin">Akceptuję regulamin</label>
                <?php
                echo @$SESSION['regulamin'];
                ?>
            </div>


            <div class="form-group p-3">
                <!--                <label for=""></label>-->
                <input class="form-control submit" type="submit" value="Zatwierdz" />
            </div>

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
            © 2020 Copyright: Dawid Pilarski
        </div>
    </footer>


</body>

</html>
