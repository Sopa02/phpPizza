<?php include('check.php');
      include('connect.php');
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./etlap.css">
    <title>Itália Pizzéria</title>
</head>
<body>
    <h1>Itália Pizzéria</h1>
    

    <div class="container">
        <form action="rendeles.php" id="rendeles" method="post">
    <?php 
        $query = "SELECT * FROM ETLAP;";
        $result = mysqli_query($db, $query);
        $i = 0;
        echo "<div class='row'>";
        while($pizza = mysqli_fetch_assoc($result)){
            /*
            if($i%4==0){
                if($i!=0){
                    echo "</div>";
                }

                echo "<div class='row'>";

            }
            */
            echo "<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12'>";
            echo "<div class='kartya'>";
            echo "<img src='".$pizza['kep']."'>";
            echo "<p class='nev'>".$pizza['nev']."</p>";
            echo "<p class='jobb'>".$pizza['ar']."Ft</p>";
            echo "<p class='hozzavalok'>".$pizza['hozzavalok']."</p>";
            echo "<div class='mennyiseg'><p>Rendelni kívánt mennyiség:</p><input type='number' max='10' min='0' value='0' name='".$pizza['id']."' id='".$pizza['id']."' required></div>";
            echo "</div>";
            echo "</div>";
            
            $i++;
        }
        echo "</div>"


    ?>

    </div>
    <div class="center-block">
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
        <button type="submit" name="rendeles">Rendelés!</button>
    </div>
    </form>
    <div class="vissza"><button onclick="FoOldalra()">Vissza a főoldalra</button></div>
    <script src="./script.js"></script>
</body>
</html>