<?php include('check.php')?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./italia.css">
    <title>Itália Pizzéria</title>
</head>
<body>
    <h1>Itália Pizzéria</h1>
    

    <div class="container">

        <div class="row row-cols-1">
            <div class="col">
            <h2>Üdv a fedélzeten, <?php echo $_SESSION['username']; ?>!</h2>            
            </div>
        </div>


        <div class="row row-cols-2">

            <div class="col">
                <div class="hatter" onclick="GoEtlap()"> 
                <a href="./etlap.php">
                    Étlap
                </a>    
                </div>
                
            </div>
            <div class="col">
                <div class="hatter" onclick="GoRendeles()">
                <a href="./rendelesek.php">
                    Rendeléseid
                </a>   
                </div>
                   
            </div>
            

        </div>
        <div class="row row-cols-1">
            <div class="col kilep">
                <div class="hatter" onclick="Kijelentkezes()">
                    Kijelentkezés
                </div>
            
            </div>
        </div>

    </div>

    <script src="./script.js"></script>

    <?php 
    if(isset($_SESSION['sikeresRendeles'])&&$_SESSION['sikeresRendeles']!=""){
        echo $_SESSION['sikeresRendeles'];
        $_SESSION['sikeresRendeles'] = "";
    }
    
    ?>
















    <!--
        <div class="cont">

        
            <a href="./etlap.php">

                <div class="etlap">
                    <p>Étlap</p>
                </div>

            </a>
                
            <a href="./rendelesek.php">

                <div class="rendeleseid">
                    <p>Rendeléseid</p>
                </div>

            </a>
        
        

        <div class="kilep">
            <p>Kijelentkezés</p>
        </div>

    </div>
    -->
    
</body>
</html>