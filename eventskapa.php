<?php
session_start();
if(isset($_SESSION['aid'], $_SESSION['hash'])) {
    $aid = $_SESSION['aid'];
    $hash = $_SESSION['hash'];
}

if(isset($_GET['namn'], $_GET['Agare'], $_GET['starttid'], $_GET['sluttid'], $_GET['beskrivning'])){

    $namn = $_GET["namn"];
    $agare = $_GET["Agare"];
    $starttid = $_GET["starttid"];
    $sluttid = $_GET["sluttid"];
    $beskrivning = $_GET["beskrivning"];

    $url = 'http://tp2021.ntigskovde.se/Theprovider-main/process.php?aid=' . $aid . '&hash=' . $hash .
    '&namn=' . $namn . '&Agare=' . $agare . '&starttid=' . $starttid . '&sluttid=' . $sluttid. '&beskrivning='.$beskrivning;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);

    $idot = json_decode($data);
    echo $idot;

}
else {
    $_SESSION['fel'] = 'Fyll i alla fält';
}
?>
