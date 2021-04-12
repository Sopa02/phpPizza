<?php 
    include('checklogin.php');

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="./kepek/icon.ico" type="image/icon">
    <link rel="stylesheet" href="./main.css">
    <title>Bejelentkezés</title>
</head>
<header>
    <nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="./bejelentkezes.php">
        <img src="./kepek/icon.ico" height="60" alt="Icon" class="d-inline-block align-text-top">
        Itália Pizzéria
        </a>
        <ul class="navbar-nav me-auto mb-1 mb-lg-1">
            <li class="nav-item">
            <a class="nav-link" href="#kapcsolat">Kapcsolat</a>
            </li>
        </ul>
    </div>
    </nav>
</header>
<body>
    
    <div class="container">
        <div class="row">
            <div class="login col-md-5 col-sm-12">
                <form action="login.php" id="loginform" method="post">
                    <p>Bejelentkezés</p>
                    <?php if(isset($_GET['error'])&&$_GET['error']==1){echo "Helytelen felhasználónév/jelszó! <br>";}?>
                    
                    <label for="username">Felhasználónév:</label>
                    <br>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Jelszó:</label>
                    <br>
                    <input type="password"  id="password" name="password" required>
                    <br>
                    <button type="submit" name="login_user" class="btn btn-dark">Bejelentkezek</button>
                </form>
            </div>
            <div class="register col-md-5 col-sm-12">
                <form action="register.php" id="registerform" method="post">
                    <p>Regisztráció</p>
                    <?php if(isset($_GET['error'])&&$_GET['error']==2){echo "Ez a felhasználónév már foglalt! <br>";} if(isset($_GET['error'])&&$_GET['error']==3){echo "Ez az email már foglalt! <br>";} ?>

                    <label for="regUsername">Felhasználónév:</label>
                    <br>
                    <input type="text" name="regUsername" id="regUsername" maxlength="16" required>
                    <br>
                    <label for="regPassword">Jelszó:</label>
                    <br>
                    <input type="password" name="regPassword" id="regPassword" required>
                    <br>
                    <label for="regEmail">E-mail cím:</label>
                    <br>
                    <input type="email" name="regEmail" id="regEmail" maxlength="32" required>
                    <br>
                    <label for="regTel">Telefonszám:</label>
                    <br>
                    <input type="tel" name="regTel" id="regTel" placeholder="06-30-1234567" pattern="[0]{1}[6]{1}-[0-9]{2}-[0-9]{7}" required>
                    <br>
                    <button type="submit" name="reg_user" class="btn btn-dark">Regisztrálok</button>
                </form>
            </div>
        </div>

        <div id="container" class="kapcsolatCont">
            <div class="kapcsolatText">
                <h2 id="kapcsolat">Kapcsolat:</h2>
                <span class="badge bg-dark">Nyitvatartás:</span>
                <p>H-V 11:00-22:30</p>
                <span class="badge bg-dark">Cím:</span>
                <p>Debrecen, Szabadság u. 24.</p>
                <span class="badge bg-dark">Telefonszám: </span>
                <p>(52)013-213</p>
                <span class="badge bg-dark">E-mail:</span>
                <p>kapcsolat@italiapizza.hu</p>
            </div>
        </div>



    </div>
    <script src="./script.js"></script>

</body>
</html>