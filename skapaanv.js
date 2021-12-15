var upperCase = new RegExp('[A-Z]');
var lowerCase = new RegExp('[a-z]');

function verifiera() {
        // behörighet 1 till 3
        if($("select[name='Behorighet']").val() < 4 && $("select[name='Behorighet']").val() > 0) 
            // kolla så att alla fält är ifyllda
            if($("input[name='Anvnamn']").val().length > 0
            && $("input[name='Fnamn']").val().length > 0
            && $("input[name='Enamn']").val().length > 0
            && $("input[name='Epost']").val().length > 0
            && $("input[name='Telefon']").val().length > 0
            && $("input[name='losenigen']").val().length > 0)
            // stor bokstav, liten bokstav och lika med eller längre än 8 tecken
            if ($("#losen").val().match(upperCase) && $("#losen").val().match(lowerCase) && $("#losen").val().length >= 8) 
                // kollar om lösenord och repetera lösenord överensstämmer
                if($("input[name='Losen']").val() == $("input[name='losenigen']").val())
                    return true;
                else {
                    $('#stortfel').html("Lösenorden överensstämmer inte");
                    $('.fel').fadeIn();
                }
            else {
                $('#stortfel').html("Ditt lösenord ska ha minst en stor bokstav, minst en liten bokstav, och ska vara minst 8 tecken");
                $('.fel').fadeIn();
            }
    else {
        $('#stortfel').html("Fyll i alla fält");
        $('.fel').fadeIn();
        return false;
    }
}

$("#idot").click(function(event) {
    if(!verifiera())
        event.preventDefault();
});

function stangFonster() {
    $('.fel').fadeOut();
}

function oppnaFonster() {
    $('.fel').fadeIn();
}

function anvandareSkapad() {
    $('#fel').html("Användare skapad");
    $('.fel').fadeIn();
}

$('.fel').hide();

$(".fel").on("click", function(event){
    $('.fel').hide();
});

$(".fel div").on("click", function(event){
    event.stopPropagation();
});

// visar/gömmer lösenordet och ändrar ögat
$("#oga").on("click", function(event) {
    if($('#losen').get(0).type == 'password') {
        $('#losen').get(0).type = 'text';
        $('#oga').attr('class', 'idotidot fas fa-eye-slash');
    }
    else {
        $('#losen').get(0).type = 'password';
        $('#oga').attr('class', 'fas fa-eye');
    }
});