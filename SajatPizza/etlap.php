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
        <img src="./kepek/icon.ico" alt="Icon" class="d-inline-block align-text-top">
        Itália Pizzéria
        </a>
        <ul class="navbar-nav me-auto mb-1 mb-lg-1">
            <li class="nav-item">
                <a class="nav-link" href="./kapcsolat.html">Kapcsolat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./rendelesek.php">Rendeléseid</a>
            </li>
        </ul>
        <button onclick="FoOldalra()" class="btn btn-dark">Vissza a főoldalra</button>
    </div>
    </nav>
</header>

<body>
    
    
    <div class="container">
        
        <form action="rendeles.php" id="rendeles" method="post">
    <?php 
        $query = "SELECT * FROM ETLAP;";
        $result = mysqli_query($db, $query);
        $i = 0;
        echo "<div class='row gx-4'>";
        while($pizza = mysqli_fetch_assoc($result)){
            /*
            if($i%4==0){
                if($i!=0){
                    echo "</div>";
                }

                echo "<div class='row'>";

            }
            */
            /*              *****SAJÁT KÁRTYÁK*****
            echo "<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12'>";
            echo "<div class='kartya'>";
            echo "<img src='".$pizza['kep']."'>";
            echo "<p class='nev'>".$pizza['nev']."</p>";
            echo "<span class='badge bg-dark'>".$pizza['ar']."Ft</span>";
            echo "<p class='hozzavalok'>".$pizza['hozzavalok']."</p>";
            echo "<div class='mennyiseg'><p>Rendelni kívánt mennyiség:</p><input type='number' max='10' min='0' value='0' name='".$pizza['id']."' id='".$pizza['id']."' required></div>";
            echo "</div>";
            echo "</div>";
            */


            echo "<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-3'>";
            echo "<div class='card'>";
            echo "<div id='overflow'><img class='card-img-top' src='".$pizza['kep']."'></div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>".$pizza['nev']."</h5>";
            echo "<span class='badge bg-dark'>".$pizza['ar']."Ft</span>";
            echo "<p class='card-text'>".$pizza['hozzavalok']."</p>";
            echo "<div class='card-body card-body-bottom'><p>Rendelni kívánt mennyiség:</p><input type='number' max='10' min='0' value='0' name='".$pizza['id']."' id='".$pizza['id']."' data-price='".$pizza['ar']."' data-name='".$pizza['nev']."' onChange='Calculate(event)' required></div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            
            $i++;
        }
        echo "</div>";
        echo "<p id='helper' data-count='".$i."'></>";

    ?>
    
    </div>
    <div class="center-block">
        <div class="checkout">
            <span class='badge bg-dark'>Végösszeg:</span>
            <p id="price"></p>
            <span class='badge bg-dark'>Rendelt pizzák:</span>
            <p id="pizzas"></p>
        </div>
        <label for="varos">Város:</label>
        <br>
        <input type="text" name="varos" required>
        <br>
        <label for="utca">Utca:</label>
        <br>
        <input type="text" name="utca" required>
        <br>
        <label for="hazszam">Házszám:</label>
        <br>
        <input type="text" name="hazszam" required>
        <br>
        <button type="submit" name="rendeles" class="btn btn-success">Rendelés!</button>
    </div>
    </form>
    
    <script src="./script.js"></script>
</body> 
</html>