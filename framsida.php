<?php
session_start();
echo $_SESSION["behorighet"];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventhanterarN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="framsidastil.css">
</head>
<body>
    <h4 class="inloggad">Du är inloggad som: TheAdmin</h4>
    <a href="loggaut.php"><button class="loggaut">Logga ut</button></a>
    <div id="svamp">
        <ul class="flex-container">
            <li class="flex-item">Användare</li>
            <li class="flex-item">Events</li>
            <a href="kalender.php"><li class="flex-item">Kalender</li></a>
        </ul>
    </div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="framsidaskript.js"></script>
</body>
</html>