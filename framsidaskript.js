var knappar;

// sparar knappar och ersätter alla knappar med knappar relaterade till användare
function anvandare() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    knappar = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<a href='skapaanvandare.html'><li class='flex-item'>Skapa användare</li></a>");
    $(".flex-container").append("<a href='redigeraanvandare.php'><li class='flex-item' style='font-size: 15px'>Redigera användare</li></a>");
    $(".flex-container").append("<li class='flex-item'>Ta bort användare</li>");
    $(".flex-container").append("<li class='flex-item'>Visa användare</li>");
}

// sparar knappar och ersätter alla knappar med knappar relaterade till event
function events() {
    // visa tillbakaknappen
    $("#tillbaka").removeClass("borta");

    knappar = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<li class='flex-item'>Skapa event</li>");
    $(".flex-container").append("<li class='flex-item'>Ta bort event</li>");
    $(".flex-container").append("<li class='flex-item'>Redigera event</li>");
}

// tar tillbaka de senaste knapparna och tar bort tillbakaknappen
function tillbaka() {
    $(".flex-container").html(knappar);
    $("#tillbaka").addClass("borta");
}