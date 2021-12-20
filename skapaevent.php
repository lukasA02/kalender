<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skapa event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>

<body>
    <a class="tillbaka" href="framsida.php">Tillbaka</a>
    <div class="form">
    <form action="eventskapa.php" method="GET">
        <div id="container">
            <div>
                <h1>Skapa event</h1>
            </div>
            <div>
                <label for="namn">Namn:</label>
                <input placeholder="Namn" name="namn" type="text">
            </div>
            <div>
                <label for="Agare">Ägare:</label>
                <select name="Agare">
                    <?php
                    $data = $_SESSION['dataa'];
                    //lista alla anvandare och anvandarid, att få upp på den dropdown 
                    foreach ($data as $row ) {
                        echo "<option value=". $row->AnvandarID."> ". $row->AnvandarID. ", ".$row->Anvnamn. "</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="starttid">Starttid:</label>
                <input placeholder="Starttid" name="starttid" type="datetime-local">
            </div>
            <div>
                <label for="sluttid">Sluttid:</label>
                <input placeholder="Sluttid" name="sluttid" type="datetime-local">
            </div>
            <div>
                <label for="beskrivning">Beskrivning:</label>
                <input placeholder="Beskrivning" name="beskrivning" type="text">
            </div>
                <input id="idot2" type="submit" value="Skapa">
            </div>
    </form>
</div>
<div class="fel">
    <div>
        <span id="kryss" onclick="stangFonster();">❌</span>
        <span id="fel">Fel:</span><br><br>
        <span id="stortfel"></span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="skapaanv.js"></script>
</body>

</html>
