<?php
$db = mysqli_connect('localhost', 'root', '', 'italiapizza');
if(!$db){
    die("Hiba történt! Az adatbázis jelenleg elérhetetlen, kérem próbálkozzon később!");
}
?>