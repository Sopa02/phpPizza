<?php
include('connect.php');
if (isset($_POST['reg_user'])){
    //inputok begyűjtése

    $username = mysqli_real_escape_string($db, $_POST['regUsername']);
    $email = mysqli_real_escape_string($db, $_POST['regEmail']);
    $password_1 = mysqli_real_escape_string($db, $_POST['regPassword']);
    $tel = mysqli_real_escape_string($db, $_POST['regTel']);

    //Egyezés keresése
    $user_check_query = "SELECT * FROM users WHERE felhasznalonev='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){ //ha egyezés van
        if ($user['username'] === $username) {
            array_push($errors, "Felhasználónév már foglalt!");
          }
      
          if ($user['email'] === $email) {
            array_push($errors, "Email már foglalt!");
          }
    }

    if(count($errors) == 0){
        $password = md5($password_1); //Jelszó titkosítása
        $query = "INSERT INTO users (felhasznalonev, email, tel, jelszo)
                VALUES('$username', '$email', '$tel', '$password')";
        mysqli_query($db, $query);
  	    header('location: thanks.php');
    }

}

?>