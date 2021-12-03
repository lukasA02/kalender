<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event</title>
</head>
<body>

<?php
  session_start();
  echo $_SESSION["aid"]. "<br>";
  echo $_SESSION["hash"]. "<br>";
  ?>

<div id="">
        <form action="skapaevent.php" method="GET">
        <div class="box">
            <h1>Skappa event 😀</h1>
        </div>
        <div class="box">
        <label for="Enamn">Event namn:</label>
         <input type="text" name="Enamn" >   
        </div>
        <div class="box">
            <label for="agare">Anvandar ID:</label>
            <input  name="agare" type="text">
        </div>
        <div class="box">
            <label for="beskriv">Beskrivning:</label>
            <input  name="beskriv" type="text">
        </div>
        <div class="box">
            <label for="starttid">Start tid:</label>
            <input  name="starttid" type="datetime-local">
        </div>
        <div class="box">
            <label for="sluttid">Slut tid:</label>
            <input  name="sluttid" type="datetime-local">
        </div>
        <div id="login" class="box">
            <input type="submit" value="Skappa">
        </div>
    </form>

</div>
<div id="">
        <form action="redigeraev.php" method="GET">
        <div class="box">
            <h1>Tabort event 😀</h1>
        </div>
        <div class="box">
        <label for="EventID">Event ID:</label>
         <input type="number" name="EventID" >   
        </div>
        <div id="Tabort" class="box">
            <input type="submit" name="Tabort" value="Tabort">
        </div>
    </form>

</div>
<div id="">
        <form action="redigeraev.php" method="GET">
        <div class="box">
            <h1>Redigera event 😀</h1>
        </div>
        <div class="box">
        <label for="EventID">Event ID:</label>
         <input type="number" name="EventID" >   
        </div>
        <div class="box">
        <label for="Enamn">Event namn:</label>
         <input type="text" name="Enamn" >   
        <div class="box">
            <label for="beskriv">Beskrivning:</label>
            <input  name="beskriv" type="text">
        </div>
        <div class="box">
            <label for="starttid">Start tid:</label>
            <input  name="starttid" type="datetime-local">
        </div>
        <div class="box">
            <label for="sluttid">Slut tid:</label>
            <input  name="sluttid" type="datetime-local">
        </div>
        <div id="login" class="box">
            <input type="submit" value="Skappa">
        </div>
    </form>

</div>
    
</body>
</html>