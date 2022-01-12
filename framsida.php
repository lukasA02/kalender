<?php
session_start();

if(isset($_SESSION['aid'], $_SESSION['hash'])) {
    $aid = $_SESSION['aid'];
    $hash = $_SESSION['hash'];

    $url= 'https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php?aid='. $aid .'&hash='.$hash;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

    $data = json_decode($data);
    $_SESSION['data'] = $data;

    $url= 'https://tp2021.ntigskovde.se/Theprovider-main/visaanvandare.php?aid='. $aid .'&hash='.$hash;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $dataa = curl_exec($ch);

    $dataa = json_decode($dataa);
    $_SESSION['dataa'] = $dataa;
    //  print_r($data);

    $url= 'https://tp2021.ntigskovde.se/Theprovider-main/visarn.php?aid='. $aid .'&hash='.$hash;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data2 = curl_exec($ch);

    
    $_SESSION['data2'] = $data2;
}


?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventhanterarN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="framsidastil.css">
</head>

<body>
    <h4 class="inloggad"><?php if(isset($_SESSION['anv'])) echo 'Du är inloggad som: ' . $_SESSION['anv']; else {echo 'Logga in';} if(isset($_SESSION['behorighet'])) {$be = $_SESSION['behorighet']; if($be == 1) echo "(admin)"; if($be == 3) echo "(användare)";}?></h4>
    <a class="loggaut" href="loggaut.php"><button>Logga ut</button></a>
    <div id="svamp">
        <span class="borta" onclick="tillbaka();" id="tillbaka">&#8592;</span>
        <ul class="flex-container">
            <li class="flex-item" onclick="anvandare();">Användare</li>
            <li class="flex-item" onclick="events();">Events</li>
            <a href="kalender.php">
                <li class="flex-item">Kalender</li>
            </a>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="framsidaskript.js"></script>
</body>

</html>
