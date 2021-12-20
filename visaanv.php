<?php
session_start();
if(isset($_SESSION['aid'], $_SESSION['hash'])) {
    $aid = $_SESSION['aid'];
    $hash = $_SESSION['hash'];

    $url= 'https://tp2021.ntigskovde.se/Theprovider-main/visaanvandare.php?aid='. $aid .'&hash='.$hash;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

    echo $data;
}