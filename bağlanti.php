<?php
$host="localhost";
$kullanici= "root";
$parola="12345678";
$veritabani="emagaza";


$baglanti=mysqli_connect($host,$kullanici,$parola,$veritabani);
mysqli_set_charset($baglanti,"UTF8");

?>