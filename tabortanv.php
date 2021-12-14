<?php
session_start();

if(isset($_GET['anvandarid'], $_SESSION['aid'], $_SESSION['hash'])){
    $anvandarid = $_GET['anvandarid'];
    $aid = $_SESSION['aid'];
    $hash = $_SESSION['hash'];

    $url = 'https://tp2021.ntigskovde.se/Theprovider-main/tabortanvandare.php?aid='. $aid .'&hash='. $hash .'&anvid='. $anvandarid;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

    echo $data;

    $_SESSION['borttagen'] = json_decode($data);

    if(json_decode($data) == "Anvandare borttagen")
        header("Location: tabortanvandare.php");
}
?>