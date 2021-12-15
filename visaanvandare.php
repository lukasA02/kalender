<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa användare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>
<body onload="hamtaAnvandare();">
<a class="tillbaka" href="framsida.php">Tillbaka</a>
<div class="form anvandare">
    <h1>
        Användare
    </h1>
    <div>
        AnvändarID:
    </div>
    <div>
        Behörighet:
    </div>
    <div>
        Användarnamn:
    </div>
    <div>
        Lösenord:
    </div>
    <div>
        Förnamn:
    </div>
    <div>
        Efternamn:
    </div>
    <div>
        E-post:
    </div>
    <div>
        Telefon:
    </div>
    <div>
        Senaste inloggningen:
    </div>
    <div>
        Hashkey:
    </div>
    <div>
        Låst:
    </div>
    <div id="hogerpil">
        &#8594;
    </div>
    <div id="vansterpil">
        &#8592;
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="visaanvandare.js"></script>
</body>
</html>

<?php
session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];

$url= 'https://tp2021.ntigskovde.se/Theprovider-main/visaanvandare.php?aid='. $aid .'&hash='.$hash;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);

$data = json_decode($data);
$_SESSION['data'] = $data;

?>