<?php
session_start();

// echo $_SESSION['fel'];
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skapa användare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>

<body <?php if(isset($_SESSION["fel"])) echo 'onload="oppnaFonster();"';?>>
    <a class="tillbaka" href="framsida.php">Tillbaka</a>
    <div class="form">
    <form action="spanvandare.php" method="GET">
        <div id="container">
            <div>
                <h1>Skapa användare</h1>
            </div>
            <div>
                <label for="Behorighet">Behörighet:</label>
                <select name="Behorighet">
                    <option value="1">Admin</option>
                    <option value="2">Åskådare</option>
                    <option value="3">Användare</option>
                </select>
            </div>
            <div>
                <label for="Anvnamn">Användarnamn:</label>
                <input placeholder="Användarnamn" name="Anvnamn" type="text">
            </div>
            <div>
                <label for="Losen">Lösenord:</label>
                <input placeholder="Lösenord" id="losen" name="Losen" type="password">
            </div>
            <div>
                <label for="Fnamn">Förnamn:</label>
                <input placeholder="Förnamn" name="Fnamn" type="text">
            </div>
            <div>
                <label for="Enamn">Efternamn:</label>
                <input placeholder="Efternamn" name="Enamn" type="text">
            </div>
            <div>
                <label for="Epost">Epost:</label>
                <input placeholder="Epost" name="Epost" type="text">
            </div>
            <div>
                <label for="Telefon">Telefonnummer:</label>
                <input placeholder="Telefonnummer" name="Telefon" type="text">
            </div>
                <input id="idot" type="submit" value="Skapa">
            </div>
    </form>
</div>
<div class="fel">
    <div>
        <span id="kryss" onclick="stangFonster();">❌</span>
        <span id="fel">Fel:</span><br><br>
        <span id="stortfel"></span>
        <?php if(isset($_SESSION['fel'])) { echo $_SESSION['fel']; unset($_SESSION["fel"]); }?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="skapaanv.js"></script>
</body>

</html>