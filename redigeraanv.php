
<?php
session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];


if(isset($_GET['Tabort']) && isset($_GET['anvandareid'])){
    $anvandarid = $_GET['anvandarid'];
    

    $url = 'https://tp2021.ntigskovde.se/Theprovider-main/tabortanvandare.php?aid='. $aid .'&hash='. $hash .'&anvid='. $anvandarid;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

    echo $data;
    die();

}

if (isset ($_GET["anvandarid"], $_GET["Anvnamn"], $_GET["Enamn"], $_GET["Fnamn"], $_GET["Epost"], $_GET["Telefon"])){
    $anvandarid = $_GET['anvandarid'];
    $Anvnamn = $_GET['Anvnamn'];
    $Enamn = $_GET['Enamn'];
    $Fnamn = $_GET['Fnamn'];
    $Epost = $_GET['Epost'];
    $Telefon = $_GET['Telefon'];


    $url = 'http://tp2021.ntigskovde.se/Theprovider-main/redigeraanvandare.php?aid='.$aid.'&hash='.$hash.
'&anvandarid='.$anvandarid. '&Anvnamn='.$Anvnamn.'&Enamn='.$Enamn. '&Fnamn='.$Fnamn. '&Epost='.$Epost. '&Telefon='.$Telefon;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);

echo $data;
}