<?php
    session_start();
    if(!isset($_SESSION['username'])){
    header('location: bejelentkezes.php');
    }
    if($_SESSION['admin']=='1'){
        header('location: admin.php');
    }
?>