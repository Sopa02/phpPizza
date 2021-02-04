<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Bejelentkezés</title>
</head>
<body>
    <h1>Itália Pizzéria</h1>
    <div class="container">
        <div class="forms">
            <div class="login">
                <form action="" id="loginform">
                    <p>Bejelentkezés</p>
                    <label for="username">Felhasználónév:</label>
                    <br>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Jelszó:</label>
                    <br>
                    <input type="password"  id="password" name="username" required>
                    <br>
                    <button type="submit" name="login_user">Bejelentkezek</button>
                </form>
            </div>
            <div class="register">
                <form action="login-register.php" id="registerform" method="post">
                    <p>Regisztráció</p>
                    <label for="regUsername">Felhasználónév:</label>
                    <br>
                    <input type="text" name="regUsername" id="regUsername" maxlength="16" value="<?php echo $username; ?>" required>
                    <br>
                    <label for="regPassword">Jelszó:</label>
                    <br>
                    <input type="password" name="regPassword" id="regPassword" required>
                    <br>
                    <label for="regEmail">E-mail cím:</label>
                    <br>
                    <input type="email" name="regEmail" id="regEmail" maxlength="32" value="<?php echo $email; ?>" required>
                    <br>
                    <label for="regTel">Telefonszám:</label>
                    <br>
                    <input type="tel" name="regTel" id="regTel" placeholder="06-30-1234567" pattern="[0]{1}[6]{1}-[0-9]{2}-[0-9]{7}" required>
                    <br>
                    <button type="submit" name="reg_user">Regisztrálok</button>
                </form>
            </div>
        </div>

    </div>
    

</body>
</html>