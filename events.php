<?php
session_start();

if(isset($_SESSION["aid"], $_SESSION["hash"])) {
    $arr = array("aid" => $_SESSION["aid"], "hash" => $_SESSION["hash"]);
    $json = file_get_contents("https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php?aid=" . $_SESSION["aid"] . "&hash=" . $_SESSION["hash"]);
    // echo json_encode($arr);
    echo $json;
}