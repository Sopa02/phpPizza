<?php
include('connect.php');
if (isset($_POST['reg_user'])){
    //inputok begyűjtése
    $errors = array();
    $username = mysqli_real_escape_string($db, $_POST['regUsername']);
    $email = mysqli_real_escape_string($db, $_POST['regEmail']);
    $password_1 = mysqli_real_escape_string($db, $_POST['regPassword']);
    $tel = mysqli_real_escape_string($db, $_POST['regTel']);

    //Egyezés keresése
    $user_check_query = "SELECT * FROM users WHERE felhasznalonev='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){ //ha egyezés van
        if ($user['felhasznalonev'] == $username) {
            header('location: bejelentkezes.php?error=2');
          }    
          if ($user['email'] == $email) {
            header('location: bejelentkezes.php?error=3');
          }
    }else{
        $password = md5($password_1); //Jelszó titkosítása
        $query = "INSERT INTO users (felhasznalonev, email, tel, jelszo)
                VALUES('$username', '$email', '$tel', '$password')";
        mysqli_query($db, $query);
  	    header('location: thanks.php');
    }

}

?>