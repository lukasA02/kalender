<?php
session_start();
if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];

    
}

    if(isset($_SESSION['data2'])){
    $data2 = $_SESSION['data2'];
    $data2 = json_decode($data2);

    $temp = [];
    foreach($data2 as $item) {
        if ( !in_array($item->ID, $temp) ) {
            $temp[] = $item->ID;
            $data21[] = $item;
        }
    }

    }
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redigera event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>
<body>
<a class="tillbaka" href="framsida.php">Tillbaka</a>
<div class="form">
    <form action="redigeraev.php" method="GET">
        <div id="container">
            <div>
                <h1>Redigera event</h1>
            </div>
            <div>
                <label for="EventID">EventID:</label>
                <select name="EventID">
                    <?php
                    if(isset($data, $_SESSION['behorighet'])) {
                        if($_SESSION['behorighet'] == 1) {
                        //lista alla anvandare och anvandarid, att få upp på den dropdown 
                        foreach ($data as $row ) {
                            echo "<option value=". $row->ID."> ". $row->ID. ", ".$row->Namn. "</option>";
                        }
                    }
                    }
                    if(isset($data21, $_SESSION['behorighet'])) {
                        if($_SESSION['behorighet'] == 3) {
                        //lista alla anvandare och anvandarid, att få upp på den dropdown 
                        foreach ($data21 as $row ) {
                            echo "<option value=". $row->ID."> ". $row->ID. ", ".$row->Namn. "</option>";
                        }
                    }
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="namn">Namn:</label>
                <input placeholder="Namn" name="namn" type="text">
            </div>
            <div>
                <label for="beskriv">Beskrivning:</label>
                <input placeholder="Beskrivning" name="beskriv" type="text">
            </div>
            <div>
                <label for="starttid">Starttid:</label>
                <input placeholder="Starttid" name="starttid" type="datetime-local">
            </div>
            <div>
                <label for="sluttid">Sluttid:</label>
                <input placeholder="Sluttid" name="sluttid" type="datetime-local">
            </div>
                <input id="idot" type="submit" value="Redigera">
        </div>
    </form>
</div>
<div class="fel">
    <div>
        <span id="kryss" onclick="stangFonster();">❌</span>
        <span id="fel"></span><br><br>
        <span id="stortfel"></span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="tabort.js"></script>
</body>
</html>