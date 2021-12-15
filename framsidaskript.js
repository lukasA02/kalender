var knappar;

// sparar knappar och ersätter alla knappar med knappar relaterade till användare
function anvandare() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    knappar = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<a href='skapaanvandare.php'><li class='flex-item'>Skapa användare</li></a>");
    $(".flex-container").append("<a href='redigeraanvandare.php'><li class='flex-item' style='font-size: 15px'>Redigera användare</li></a>");
    $(".flex-container").append("<a href='tabortanvandare.php'><li class='flex-item'>Ta bort användare</li></a>");
    $(".flex-container").append("<a href='visaanvandare.php'><li class='flex-item'>Visa användare</li></a>");
}

// sparar knappar och ersätter alla knappar med knappar relaterade till event
function events() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    knappar = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<a href='skapaevent.php'><li class='flex-item'>Skapa event</li></a>");
    $(".flex-container").append("<li class='flex-item'>Redigera event</li>");
    $(".flex-container").append("<a href='tabortevent.php'><li class='flex-item'>Ta bort event</li></a>");
    $(".flex-container").append("<a href='bjudainevent.php'><li class='flex-item'>Bjud in till event</li></a>");
}

// tar tillbaka de senaste knapparna och tar bort tillbakaknappen
function tillbaka() {
    $(".flex-container").html(knappar);
    $("#tillbaka").addClass("borta");
}