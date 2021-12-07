<?php
session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];
//behörighet
//1 = Admin
//3 = anvandare
if(isset($_GET["Behorighet"]) && isset($_GET["Anvnamn"]) && isset($_GET["Losen"]) && isset($_GET["Enamn"]) && isset($_GET["Fnamn"]) && isset($_GET["Epost"]) && isset($_GET["Telefon"])){

$Behorighet = $_GET["Behorighet"];
    $Anvnamn = $_GET["Anvnamn"];
    $Losen = $_GET["Losen"];
    $Enamn = $_GET["Enamn"];
    $Fnamn = $_GET["Fnamn"];
    $Epost = $_GET["Epost"];
    $Telefon = $_GET["Telefon"];

$url = 'http://tp2021.ntigskovde.se/Theprovider-main/skapaanvandare.php?aid='.$aid.'&hash='.$hash.
'&Behorighet='.$Behorighet. '&Anvnamn='.$Anvnamn. '&Losen='.$Losen. '&Enamn='.$Enamn. '&Fnamn='.$Fnamn. '&Epost='.$Epost. '&Telefon='.$Telefon;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);

echo $data;



}
?>