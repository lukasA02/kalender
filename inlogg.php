<?php
session_start();

if(isset($_POST['user']) && isset($_POST['pass'])){
$anv = $_POST['user'];
$losen  = $_POST['pass'];


$url = 'http://tp2021.ntigskovde.se/Theprovider-main/behorighet.php?anv='.$anv.'&losen='.$losen;
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);

if($data == null){

    echo "fel anvandarnamn eller lösenord";
}
else{

//var_dump(json_decode($data));

$hash = json_decode($data);

$_SESSION["aid"] = $hash->aid;
$_SESSION["hash"] = $hash->hash;
$_SESSION["behorighet"] = $hash->behorighet;
$_SESSION["anv"] = $anv;

header('location: framsida.php');
 
}

}
else{
    echo "du måste fylla i alla värden";
}
?>