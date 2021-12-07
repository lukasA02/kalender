<?php 
session_start();
$aid = $_SESSION['aid'];
$hash = $_SESSION['hash'];

if(isset($_GET["EventID"]) && isset($_GET["anvid"])){

    $envid = $_GET['EventID'];
    $anvid = $_GET['anvid'];

$url = 'http://tp2021.ntigskovde.se/Theprovider-main/bjudain.php?aid='.$aid.'&hash='.$hash.'&eventid='.$envid. '&anvandarid='.$anvid;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);


echo $data;

}else{
    echo "fel medelande ";
}
?>