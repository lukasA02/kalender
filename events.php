<?php
session_start();

// hämtar events från minkalender.php ifall användaren är admin
if(isset($_SESSION["aid"], $_SESSION["hash"]) && $_SESSION['behorighet'] == 1) {
    $arr = array("aid" => $_SESSION["aid"], "hash" => $_SESSION["hash"]);
    $json = file_get_contents("https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php?aid=" . $_SESSION["aid"] . "&hash=" . $_SESSION["hash"]);
    echo $json;
}
// hämtar events från visarn.php ifall en vanlig användare är inloggad
if(isset($_SESSION["aid"], $_SESSION["hash"]) && $_SESSION['behorighet'] == 3) {
    $arr = array("aid" => $_SESSION["aid"], "hash" => $_SESSION["hash"]);
    $json = file_get_contents("https://tp2021.ntigskovde.se/Theprovider-main/visarn.php?aid=" . $_SESSION["aid"] . "&hash=" . $_SESSION["hash"]);
    echo $json;
}