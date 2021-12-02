var dagar = Array();

$("button").click(function() {
    // hämta alla events som admin
    $.ajax('https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php', {
        type: 'GET',  // http method
        data: { aid: 1, hash: 436803698 },
        dataType: 'json',
        success: function (data) {
            
            // skriver ut alla events i <p> och lägger bokade starttider i en array
            for(let i = 0; i < data.length; i++) {
                $('p').append(data[i].ID);
                $('p').append(data[i].Namn);
                $('p').append(data[i].beskrivning);
                $('p').append(data[i].Agare);
                $('p').append(data[i].Starttid);
                var dag = new Date(data[i].Starttid);
                dagar[i] = dag.getUTCDate();
                $('p').append(data[i].Sluttid);
                $('p').append("<br>");
            }
            
            var datum = new Date(data[0].Starttid);
            console.log(datum.getUTCDate());

            console.log(dagar);
            kalender();
        },
        error: function (errorMessage) {
            $('p').append('Error' + JSON.stringify(errorMessage));
        }
    });
});

// fyller i dagarna från starttid
function kalender() {
    var listItems = $(".days li");
    listItems.each(function(idx, li) {
        var product = $(li);
        // loopar igenom alla dagar från dagar-arrayen
        for(let i = 0; i < dagar.length; i++) {
            // kollar ifall innehållet av <li> överensstämmer med dagarna i dagar-arrayen
            if(dagar[i] == $(li).html())
                $(li).html("<span class='active'>" + $(li).html() + "</span>");
        }
    });
}