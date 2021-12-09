var upperCase = new RegExp('[A-Z]');
var lowerCase = new RegExp('[a-z]');

function verifiera() {
    // stor bokstav, liten bokstav och lika med eller längre än 8 tecken
    if($("#losen").val().match(upperCase) && $("#losen").val().match(lowerCase) && $("#losen").val().length >= 8)
        // behörighet 1 till 3
        if($("select[name='Behorighet']").val() < 4 && $("select[name='Behorighet']").val() > 0) 
            // kolla så att alla fält är ifyllda
            if($("input[name='Anvnamn']").val().length > 0
            && $("input[name='Fnamn']").val().length > 0
            && $("input[name='Enamn']").val().length > 0
            && $("input[name='Epost']").val().length > 0
            && $("input[name='Telefon']").val().length > 0)
            return true;
    else {
        return false;
    }
}

$("#idot").click(function(event) {
    if(!verifiera())
        event.preventDefault();
});