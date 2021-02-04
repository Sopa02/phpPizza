<?php
    include('check.php');
    include('connect.php');

    $query = "UPDATE rendelesek set aktiv = 0 where id = ".$_POST['rID'].";";
    mysqli_query($db,$query);
    header('location: admin.php');


?>