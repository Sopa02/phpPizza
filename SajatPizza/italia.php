<?php include('check.php')?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="icon" href="./kepek/icon.ico" type="image/icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./modal.css">
    <link rel="stylesheet" href="./italia.css">
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
            <a class="nav-link" id="kapcs" data-toggle="modal" data-target="#exampleModal">Kapcsolat</a>
            </li>
        </ul>
    </div>
    </nav>
</header>
<body>
    
    

    <div class="container">

        <div class="row row-cols-1">
            <div class="col">
            <h2>Üdv a fedélzeten, <?php echo $_SESSION['username']; ?>!</h2>            
            </div>
        </div>


        <div class="row">

            <div class="col col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="hatter" onclick="GoEtlap()"> 
                <a href="./etlap.php">
                    Étlap
                </a>    
                </div>
                
            </div>
            <div class="col col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <div class="hatter" onclick="GoRendeles()">
                <a href="./rendelesek.php">
                    Rendeléseid
                </a>   
                </div>
                   
            </div>
            

        </div>
        <div class="row">
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
        echo "<span class='badge badge-danger'>".$_SESSION['sikeresRendeles']."</span>";
        $_SESSION['sikeresRendeles'] = "";
    }
    
    ?>
















<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div id="container" class="kapcsolatCont">
                <div class="kapcsolatText">
                    <span class="badge bg-dark">Nyitvatartás:</span>
                    <p>H-V 11:00-22:30</p>
                    <span class="badge bg-dark">Cím:</span>
                    <p>Debrecen, Szabadság u. 24.</p>
                    <span class="badge bg-dark">Telefonszám: </span>
                    <p>(52)013-213</p>
                    <span class="badge bg-dark">E-mail:</span>
                    <p>kapcsolat@italiapizza.hu</p>
                </div>
            </div>
            <div class="btnDiv">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
            </div>
      </div>
    </div>
  </div>
</div>
    












</body>
</html>