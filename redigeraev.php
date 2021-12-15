<?php
session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];
$evid = $_GET['EventID'];


if(isset($_GET['Tabort']) && isset($_GET['EventID'])){

    $url = 'https://tp2021.ntigskovde.se/Theprovider-main/event.php?aid='. $aid .'&hash='. $hash .'&evid='. $evid .'&tabort=';
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

     echo $data;
     die();

}

if(isset($_GET['namn']) && isset($_GET['EventID']) && isset($_GET['beskriv']) && isset($_GET['starttid']) && isset($_GET['sluttid']) && !isset($_GET['Tabort'])){

    $en = $_GET['namn'];
    $be = $_GET['beskriv'];
    $stt = $_GET['starttid'];
    $slt = $_GET['sluttid'];
    $evid = $_GET['EventID'];


  $url = 'https://tp2021.ntigskovde.se/Theprovider-main/event.php?aid='. $aid .'&hash='.$hash . '&evid='. $evid .
    '&namn='. $en . '&beskrivning='. $be .'&starttid='. $stt .'&sluttid='. $slt .'&submit';
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

echo $data;

}






?>