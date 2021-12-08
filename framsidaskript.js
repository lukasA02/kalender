var bruh;

// sparar knappar och ersätter alla knappar med knappar relaterade till användare
function anvandare() {
    bruh = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<li class='flex-item'>Skapa användare</li>");
    $(".flex-container").append("<li class='flex-item' style='font-size: 15px'>Redigera användare</li>");
    $(".flex-container").append("<li class='flex-item'>Ta bort användare</li>");
    $(".flex-container").append("<li class='flex-item'>Visa användare</li>");    
}

// sparar knappar och ersätter alla knappar med knappar relaterade till event
function events() {
    bruh = $(".flex-container").html();
    $(".flex-container").html("");
    $(".flex-container").append("<li class='flex-item'>Skapa event</li>");
    $(".flex-container").append("<li class='flex-item'>Ta bort event</li>");
    $(".flex-container").append("<li class='flex-item'>Redigera event</li>");
}

function tillbaka() {
    $(".flex-container").html(bruh);
}