<?php 
    include('checkADMIN.php');
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

        $query = "SELECT rendelesek.id as rID, felhasznalonev, tartalom, aktiv, varos, utca, hazszam, ido, osszeg FROM rendelesek inner join
        users on rendelesek.userID = users.id
        ORDER BY aktiv desc, ido desc;";
        $result = mysqli_query($db, $query);
        $i = 0;
        echo "<div class='row'>";
        while($rendeles = mysqli_fetch_assoc($result)){
            /*
            if($i%4==0){
                if($i!=0){
                    echo "</div>";
                }

                echo "<div class='row row-cols-4'>";

            }
            */
            echo "<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12'>";
            if($rendeles['aktiv'] == '1'){
                echo "<div class='kartya'>";
            }else{
                echo "<div class='inaktiv'>";
            }
            
            echo "<p class='felhasznalonev'>".$rendeles['felhasznalonev']."</p>";
            echo "<p class='tartalom'>".$rendeles['tartalom']."</p>";
            echo "<p class='cim'>".$rendeles['varos'].", ".$rendeles['utca'].", ".$rendeles['hazszam']." </p>";
            echo "<p class='jobb'>".$rendeles['osszeg']."Ft</p>";
            echo "<p class='ido'>Rendelés ideje: ".$rendeles['ido']."</p>";
            if($rendeles['aktiv'] == '1'){
                $szam = rand(45,90);
                $start = $rendeles['ido'];

                echo "<p class='vart-ido'>Várható érkezés:".date('Y-m-d H:i:s',strtotime('+'.$szam.' minutes',strtotime($start)))."</p>";
                echo "<form action='lezar.php' method='post'>
                    <input type='hidden' name='rID' value ='".$rendeles['rID']."'>
                    <input type='submit' value = 'Kiszállítva!' name='GOMB'>
                </form>";
            }

            
            echo "</div>";
            echo "</div>";
            
            $i++;
        }
        echo "</div>"

        //
    ?>
    </div>
</body>
</html>

