var knappar;
var behorighet;

// hämta behörighet
$.get('behorighet.php', function(data) {
    behorighet = data;
});

// sparar knappar och ersätter alla knappar med knappar relaterade till användare
function anvandare() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    // spara alla knappar
    knappar = $(".flex-container").html();
    // ta bort alla knappar
    $(".flex-container").html("");
    if(behorighet == 1) { // admin är inloggad
        $(".flex-container").append("<a href='skapaanvandare.php'><li class='flex-item'>Skapa användare</li></a>");
        $(".flex-container").append("<a href='redigeraanvandare.php'><li class='flex-item' style='font-size: 15px'>Redigera användare</li></a>");
        $(".flex-container").append("<a href='tabortanvandare.php'><li class='flex-item'>Ta bort användare</li></a>");
        $(".flex-container").append("<a href='visaanvandare.php'><li class='flex-item'>Visa användare</li></a>");
    }
    if(behorighet == 3) // användare är inloggad
        $(".flex-container").append("<a href='redigeraanvandare.php'><li class='flex-item' style='font-size: 15px'>Redigera användare</li></a>");
    if(behorighet == "") // ingen är inloggad
        $(".flex-container").append("<a href='index.html'><li class='flex-item' style='font-size: 15px'>Logga in</li></a>");
}

// sparar knappar och ersätter alla knappar med knappar relaterade till event
function events() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    // spara alla knappar
    knappar = $(".flex-container").html();
    // ta bort alla knappar
    $(".flex-container").html("");
    if(behorighet != "") { // någon är inloggad
        $(".flex-container").append("<a href='skapaevent.php'><li class='flex-item'>Skapa event</li></a>");
        $(".flex-container").append("<a href='redigeraevent.php'><li class='flex-item'>Redigera event</li></a>");
        $(".flex-container").append("<a href='tabortevent.php'><li class='flex-item'>Ta bort event</li></a>");
        $(".flex-container").append("<a href='bjudainevent.php'><li class='flex-item'>Bjud in till event</li></a>");
    }
    else // ingen är inloggad
        $(".flex-container").append("<a href='index.html'><li class='flex-item' style='font-size: 15px'>Logga in</li></a>");
}

// tar tillbaka de sparade knapparna och tar bort tillbakaknappen
function tillbaka() {
    $(".flex-container").html(knappar);
    $("#tillbaka").addClass("borta");
}