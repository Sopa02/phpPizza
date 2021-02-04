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

    <?php 

        $query = "SELECT * FROM rendelesek where userID = ".$_SESSION['userID']." ORDER BY aktiv desc, ido desc;";
        $result = mysqli_query($db, $query);
        $i = 0;
        while($rendeles = mysqli_fetch_assoc($result)){
            if($i%4==0){
                if($i!=0){
                    echo "</div>";
                }

                echo "<div class='row row-cols-4'>";

            }

            echo "<div class='col'>";
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
        echo "</div>"


    ?>
    </div>
</body>
</html>