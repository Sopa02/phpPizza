<?php include('check.php');
      include('connect.php');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="icon" href="./kepek/icon.ico" type="image/icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./etlap.css">
    <title>Itália Pizzéria</title>
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
                <a class="nav-link" href="./kapcsolat.html">Kapcsolat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./etlap.php">Étlap</a>
            </li>
        </ul>
        <button onclick="FoOldalra()" class="btn btn-dark">Vissza a főoldalra</button>
    </div>
    </nav>
</header>
<body>
    

    <div class="container">
    
    <?php 

        $query = "SELECT * FROM rendelesek where userID = ".$_SESSION['userID']." ORDER BY aktiv desc, ido desc;";
        $result = mysqli_query($db, $query);
        $i = 0;
        echo "<div class='row'>";
        while($rendeles = mysqli_fetch_assoc($result)){
            /*
            if($i%4==0){
                if($i!=0){
                    echo "</div>";
                }

                echo "<div class='row'>";

            }
            */
            echo "<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12'>";
            if($rendeles['aktiv'] == '1'){
                echo "<div class='kartya'>";
            }else{
                echo "<div class='inaktiv'>";
            }
            
            echo "<p class='tartalom'>".$rendeles['tartalom']."</p>";
            echo "<p class='cim'>".$rendeles['varos'].", ".$rendeles['utca'].", ".$rendeles['hazszam']." </p>";
            echo "<p class='jobb'>".$rendeles['osszeg']."Ft</p>";
            echo "<p class='ido'>Rendelés ideje: ".$rendeles['ido']."</p>";
            if($rendeles['aktiv'] == '1'){
                $szam = rand(45,90);
                $start = $rendeles['ido'];

                echo "<p class='vart-ido'>Várható érkezés:".date('Y-m-d H:i:s',strtotime('+'.$szam.' minutes',strtotime($start)))."</p>";
            }

            
            echo "</div>";
            echo "</div>";
            
            $i++;
        }
        echo "</div>";
        if(mysqli_num_rows($result)==0){
            echo "<h2>Úgy tűnik, még nincsenek rendeléseid!</h2>";
        }

    ?>
    </div>
    <script src="./script.js"></script>
</body>
</html>