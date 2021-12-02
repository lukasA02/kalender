var dagar = Array();
var ajax = [];

$("button").click(function() {
    // hämta alla events som admin
    $.ajax('https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php', {
        type: 'GET', 
        data: { aid: 1, hash: 123568710 },
        dataType: 'json',
        success: function (data) {
            // lagrar all data i en array
            ajax.push(data);
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
        // loopar igenom alla dagar från dagar-arrayen
        for(let i = 0; i < dagar.length; i++) {
            // kollar ifall innehållet av <li> överensstämmer med dagarna i dagar-arrayen
            if(dagar[i] == $(li).html())
                $(li).html("<span onclick='oppnaDag(this.innerText)' class='active'>" + $(li).html() + "</span>");
        }
    });
}

// in: innerhtml
// tar fram information om event
function oppnaDag(val) {
    oppnaFonster();
    // lägger in datan från minkalender.php i fönstret
    for(let i = 0; i < ajax[0].length; i++) {
        var a = new Date(ajax[0][i].Starttid);
        var dg = a.getUTCDate();
        // lägger in allt i div med id: data
        if(val == dg) { // jämför datumet man klickar på med datumet från minkalender.php 
            $('.event #data').html(ajax[0][i]);
            $('.event #data').append("ID: " + ajax[0][i].ID + '<br>');
            $('.event #data').append("Namn: " + ajax[0][i].Namn + '<br>');
            $('.event #data').append("Beskrivning: " + ajax[0][i].beskrivning + '<br>');
            $('.event #data').append("Ägare: " + ajax[0][i].Agare + '<br>');
            $('.event #data').append("Starttid: " + ajax[0][i].Starttid + '<br>');
            $('.event #data').append("Sluttid: " + ajax[0][i].Sluttid + '<br>');
        }
    }
}

function stangFonster() {
    $('.event').fadeOut();
}

function oppnaFonster() {
    $('.event').fadeIn();
}
