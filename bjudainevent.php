<?php
session_start();
$anvid = $_SESSION['dataa'];
$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bjud in till event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>
<body>
<a class="tillbaka" href="framsida.php">Tillbaka</a>
<div class="form">
    <form action="bjudain.php" method="GET">
        <div id="container">
            <div>
                <h1>Bjud in till event</h1>
            </div>
            <div>
                <label for="anvandarid">AnvändarID:</label>
                <select name="anvandarid">
                     <?php
                      //lista alla anvandare och anvandarid, att få upp på den dropdown 
                    foreach ($anvid as $row ) {
                      //print_r($row);
                        echo "<option value=". $row->AnvandarID."> ". $row->AnvandarID. " , ".$row->Anvnamn. "</option>";
                        //print_r($row->AnvandarID);
                     }
                     print_r($anvid);
                       ?>
                      </select>
            </div>
            <div>
                <label for="EventID">EventID:</label>
                <select name="EventID">
                     <?php
                      //lista alla anvandare och anvandarid, att få upp på den dropdown 
                    foreach ($data as $row ) {
                      // print_r($row);
                        echo "<option value=". $row->ID."> ". $row->ID. " , ".$row->Namn. "</option>";
                        //print_r($data);
                     }
                     print_r($data);
                       ?>
                      </select>
            </div>
                <input id="idot" type="submit" value="Bjud in">
        </div>
    </form>
</div>
<div class="fel">
    <div>
        <span id="kryss" onclick="stangFonster();">❌</span>
        <span id="fel">Användare inbjuden</span><br><br>
        <span id="stortfel"></span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="tabort.js"></script>
</body>
</html>