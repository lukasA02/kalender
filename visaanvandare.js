var ajax = [];

function hamtaAnvandare() {
    $.ajax('visaanv.php', {
        type: 'GET', 
        dataType: 'json',
        success: function (data) {
            ajax.push(data);
            skrivUtAnvandare();
        },
        error: function (errorMessage) {
            // $('p').append('Error' + JSON.stringify(errorMessage));
            alert("Logga in");
        }
    });
}

var n = 0;
// skriver ut information om användare
function skrivUtAnvandare() {
    $('.anvandare div:nth-child(2)').html('AnvändarID: ' + ajax[0][n].AnvandarID);
    $('.anvandare div:nth-child(3)').html('Behörighet: ' + ajax[0][n].Behorighet);
    $('.anvandare div:nth-child(4)').html('Användarnamn: ' + ajax[0][n].Anvnamn);
    $('.anvandare div:nth-child(5)').html('Lösenord: ' + ajax[0][n].Losen);
    $('.anvandare div:nth-child(6)').html('Förnamn: ' + ajax[0][n].Fnamn);
    $('.anvandare div:nth-child(7)').html('Efternamn: ' + ajax[0][n].Enamn);
    $('.anvandare div:nth-child(8)').html('E-post: ' + ajax[0][n].Epost);
    $('.anvandare div:nth-child(9)').html('Telefon: ' + ajax[0][n].Telefon);
    $('.anvandare div:nth-child(10)').html('Senaste inloggningen: ' + ajax[0][n].Inloggtid);
    $('.anvandare div:nth-child(11)').html('Hashkey: ' + ajax[0][n].Hashkey);
    $('.anvandare div:nth-child(12)').html('Låst: ' + ajax[0][n].locked);
}

// nästa användare
function nesta() {
    if(n < ajax[0].length)
        n++;
    skrivUtAnvandare();
}

// förra användaren
function forra() {
    if(n > 0)
        n--;
    skrivUtAnvandare();
}

$('#hogerpil').click(function() {
    nesta();
});

$('#vansterpil').click(function() {
    forra();
})