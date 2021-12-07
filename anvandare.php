<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Användare</title>
</head>
<body>

<div id="">
        <form action="spanvandare.php" method="GET">
        <div class="box">
            <h1>skappa anvandare😀</h1>
        </div>
        <div class="box">
        <label for="Behorighet">anvandarens behörighet:</label>
         <input type="number" name="Behorighet" >   
        </div>
        <div class="box">
            <label for="Anvnamn">Användar namn:</label>
            <input  name="Anvnamn" type="text">
        </div>
        <div class="box">
            <label for="Losen">lösenord:</label>
            <input  name="Losen" type="text">
        </div>
        <div class="box">
            <label for="Fnamn">förnamn:</label>
            <input  name="Fnamn" type="text">
        </div>
        <div class="box">
            <label for="Enamn">efternamn:</label>
            <input  name="Enamn" type="text">
        </div>
        <div class="box">
            <label for="Epost">Epost:</label>
            <input  name="Epost" type="text">
        </div>
        <div class="box">
            <label for="Telefon">Telefonnummer:</label>
            <input  name="Telefon" type="text">
        </div>
        <div id="login" class="box">
            <input type="submit" value="skappa">
        </div>
    </form>

</div>

<div id="">
        <form action="redigeraanv.php" method="GET">
        <div class="box">
            <h1>redigera anvandare😀</h1>
        </div>
        <div class="box">
            <label for="anvandarid">Användar namn:</label>
            <input  name="anvandarid" type="number">
        </div>
        <div class="box">
            <label for="Anvnamn">Användar namn:</label>
            <input  name="Anvnamn" type="text">
        </div>
        <div class="box">
            <label for="Fnamn">förnamn:</label>
            <input  name="Fnamn" type="text">
        </div>
        <div class="box">
            <label for="Enamn">efternamn:</label>
            <input  name="Enamn" type="text">
        </div>
        <div class="box">
            <label for="Epost">Epost:</label>
            <input  name="Epost" type="text">
        </div>
        <div class="box">
            <label for="Telefon">Telefonnummer:</label>
            <input  name="Telefon" type="text">
        </div>
        <div id="login" class="box">
            <input type="submit" value="skappa">
        </div>
    </form>

</div>

<div id="">
        <form action="redigeraanv.php" method="GET">
        <div class="box">
            <h1>Tabort användare 😀</h1>
        </div>
        <div class="box">
        <label for="anvandarid">Event ID:</label>
         <input type="number" name="anvandarid" >   
        </div>
        <div id="Tabort" class="box">
            <input type="submit" name="Tabort" value="Tabort">
        </div>
    </form>

    
</body>
</html>