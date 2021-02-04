<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: bejelentkezes.php');
    }
    if($_SESSION['admin']==0){
    header('location: bejelentkezes.php');
    }

?>