<?php
include('check.php');
include('connect.php');
//rendelés
if(isset($_POST['rendeles'])){
  $query = "SELECT * FROM ETLAP;";
  $result = mysqli_query($db, $query);
  $i=0;
  $osszeg = 0;
  $rendeltPizzak = "";
  while($pizzak = mysqli_fetch_assoc($result)){
    $pizzaID = $pizzak['id'];
    $mennyiseg = (int)mysqli_real_escape_string($db,$_POST[(string)$pizzaID]);
    
    if((int)$mennyiseg != 0){
      if($rendeltPizzak == ""){
        $rendeltPizzak .= $pizzak['nev']." (".$mennyiseg.")";
      }else{
        $rendeltPizzak = $rendeltPizzak."<br>".$pizzak['nev']." (".$mennyiseg.")";
      }
      
      $osszeg += (int)$pizzak['ar'] * $mennyiseg;
    }
  }

  if($osszeg != 0){

    
    $varos = mysqli_real_escape_string($db,$_POST['varos']);
    $utca = mysqli_real_escape_string($db,$_POST['utca']);
    $hazszam = mysqli_real_escape_string($db,$_POST['hazszam']);
    $hazszam = (string)$hazszam;
    $username = $_SESSION['username'];
    $query = "SELECT id from users where felhasznalonev='$username'";
    $lekerdezes = mysqli_query($db,$query);
    $sor = $lekerdezes->fetch_assoc();
    $userID = (int)$sor['id'];
    $ido = new DateTime();
    $datum = $ido->format('Y-m-d H:i:s');

    $query = "INSERT INTO rendelesek (userID, tartalom, aktiv, varos, utca, hazszam, ido, osszeg)
              VALUES('$userID', '$rendeltPizzak', '1', '$varos', '$utca', '$hazszam', '$datum', '$osszeg')";
    echo $query;
    mysqli_query($db,$query);
    $alert = "<script>alert('Sikeres rendelés!')</script>";
    $_SESSION['sikeresRendeles'] = $alert;
    header('location: italia.php');
  }else{
    echo "Nem rendelt semmit! Visszairányítás a főoldalra...";
    $alert = "Sikertelen rendelés! Nem adott meg mennyiséget egyik tételből sem!";
    $_SESSION['sikeresRendeles'] = $alert;
    header('location: italia.php');
  }

}


/*

  if(array_sum($pizzak)<=0){
    array_push($errors, "Helytelen rendelés");
  }else{
    $i =0;
    $osszeg = 0;

    while($aktPizzak = mysqli_fetch_assoc($result)){
      $osszeg += $pizzak[$i] * $aktPizzak['ar'];
      $i++;
    }
    $i = 0;
    $rendeltPizzak = "";
    while($aktPizzak2 = mysqli_fetch_assoc($result)){
      $rendeltPizzak .= $aktPizzak2['nev'];
    }*/











?>