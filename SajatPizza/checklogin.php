<?php
    session_start();
    if(isset($_SESSION['username'])){
    header('location: italia.php');
    }else{
        session_destroy();
    }

?>