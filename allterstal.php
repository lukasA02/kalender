<?php

session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];

$losenTxt = $_GET['losenTxt'];

$url= 'https://tp2021.ntigskovde.se/Theprovider-main/aterstallt.php?aid='. $aid .'&hash='.$hash. '&LosenTxt='. $losenTxt;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);

echo $data;







?>