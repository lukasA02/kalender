<?php
session_start();
$data = $_SESSION['dataa'];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redigera användare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="skapaanv.css">
</head>
<body>
<a class="tillbaka" href="framsida.php">Tillbaka</a>
    <div class="form">
    <form action="redigeraanv.php" method="GET">
        <div id="container">
            <div>
                <h1>Redigera användare</h1>
            </div>
            <div>
                <label for="anvandarid">AnvändarID:</label>
                <select name="anvandarid">
                    <?php
                    //lista alla anvandare och anvandarid, att få upp på den dropdown 
                    foreach ($data as $row ) {
                        echo "<option value=". $row->AnvandarID."> ". $row->AnvandarID. ", ".$row->Anvnamn. "</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="Behorighet">Behörighet:</label>
                <select name="Behorighet">
                    <option value="1">Admin</option>
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
                <label for="Epost">E-post:</label>
                <input placeholder="E-post" name="Epost" type="text">
            </div>
            <div>
                <label for="Telefon">Telefonnummer:</label>
                <input placeholder="Telefonnummer" name="Telefon" type="text">
            </div>
                <input id="idot" type="submit" value="Redigera">
            </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>
