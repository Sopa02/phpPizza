<?php
include('connect.php');


if (isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
  
  
      $password = md5($password);
      $query = "SELECT * FROM users WHERE felhasznalonev='$username' AND jelszo='$password'";
      $result = mysqli_query($db, $query);
      
      if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $sor = mysqli_fetch_assoc($result);
        $_SESSION['userID']= $sor['id'];
        $_SESSION['admin']= $sor['ADMIN'];
        if($_SESSION['admin']=='0'){
            header('location: italia.php');
        }else{
            header('location: admin.php');
        }
        
      }else{
        header('location: bejelentkezes.php?error=1');
      }
    
  }
?>