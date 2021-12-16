var dagar = Array();
var manad = Array();
var ajax = [];

// hämtar events från events.php där hash och aid finns sparat i session
function hamtaEvents() {
    $.ajax('events.php', {
        type: 'GET', 
        // data: { aid: aid, hash: hash },
        dataType: 'json',
        success: function (data) {
            // lagrar all data i en array
            ajax.push(data);
            // skriver ut alla events i <p> och lägger bokade starttider i en array
            for(let i = 0; i < data.length; i++) {
                // månad som sträng
                var dag = new Date(data[i].Starttid);
                dag.toLocaleString('default', { month: 'long' });

                // om månad och år i kalendern är samma som månaden och året i ett event
                if($("#manad span").html() == dag.toLocaleString('default', { month: 'long' }) && $("#ar").html() == dag.getFullYear()) {
                    manad[i] = dag.toLocaleString('default', { month: 'long' });
                    dagar[i] = dag.getUTCDate();
                }
            }
            events();
        },
        error: function (errorMessage) {
            // $('p').append('Error' + JSON.stringify(errorMessage));
            $('p').append("<br>Logga in");
        }
    });
    kalender();
}

// lägger in månad/dag i array när man är på en månad med events
function jelp() {
    for(let i = 0; i < ajax[0].length; i++) {

        // månad som sträng
        var dag = new Date(ajax[0][i].Starttid);
        dag.toLocaleString('default', { month: 'long' });

        // om månad och år i kalendern är samma som månaden och året i ett event
        if($("#manad span").html() == dag.toLocaleString('default', { month: 'long' }) && $("#ar").html() == dag.getFullYear()) {
            manad[i] = dag.toLocaleString('default', { month: 'long' });
            dagar[i] = dag.getUTCDate();
            events();
        }
    }
}

// fyller i dagarna från starttid
function events() {
    var listItems = $(".days li");
    // loopar igenom alla <li>(dagar)
    listItems.each(function(idx, li) {
        // loopar igenom alla dagar från dagar-arrayen
        for(let i = 0; i < dagar.length; i++) {
            // kollar ifall innehållet av <li> överensstämmer med dagarna i dagar-arrayen
            if(dagar[i] == $(li).html() && manad[i] == $("#manad span").html()) {
                $(li).html("<span onclick='oppnaDag(this.innerText)' class='active'>" + $(li).html() + "</span>");
            }
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
            // $('.event #data').html(ajax[0][i]); // visar bara ett event 🤔🤔
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
    $('.event #data').html('');
    $('.event').fadeIn();
}

var dateNow = new Date();
var month = dateNow.getMonth();
var curMonth = month;
var strMonth = dateNow.toLocaleString('default', { month: 'long' });
var day = dateNow.getDate();
var year = dateNow.getFullYear();
var curYear = year;

// markerar idag
function kalender() {
    var listItems = $(".days li");
    // loopar igenom alla <li>(dagar)
    listItems.each(function(idx, li) {
        // kollar om dag/månad/år i kalendern stämmer överens med dagens datum
        if($(li).html() == day && $("#manad span").html() == strMonth && $("#ar").html() == curYear) {
            $(li).html("<span class='current'>" + $(li).html() + "</span>");
        }
    });
}

// returnerar dagar i månad
function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}

// skapar tomma <li> för att flytta första dagen i månaden
function emptyListItem(num) {
    for(let i = 0; i < num; i++) {
        $(".days").append("<li></li>");
    }
}

var t = 0;
// in: className från pilen man trycker på
function changeMonth(dir) {

    // tar fram antal dagar i nuvarande månad
    var dagar = daysInMonth(month - t, curYear);

    // vilken knapp som trycktes
    if(dir == "prev") // bakåt
        t++;
    else // framåt
        t--;

    // tar fram första veckodagen på månaden
    var date = new Date();
    var firstDay = new Date(date.getFullYear(), date.getMonth() - t, 1);
    firstDay = firstDay.getDay();

    var ar = $("#ar").html();

    // ändrar månad i kalendern
    var aaa = new Date(date.getFullYear(), date.getMonth() - t, 1);
    const gg = aaa.toLocaleString('default', { month: 'long' });
    $("#manad").html("<span>" + gg + "</span>" + "<br>" + "<span id='ar' style='font-size: 18px'>" + ar + "</span>");

    // ändrar år
    $("#ar").html(aaa.getFullYear());

    // tömmer kalendern på dagar
    $(".days").html("");

    // skapa tomma <li> beroende på första veckodagen i månaden
    switch (firstDay) {
        case 2: // tisdag
            emptyListItem(1);
            break;
        case 3: // onsdag
            emptyListItem(2);
            break;
        case 4: // torsdag
            emptyListItem(3);
            break;
        case 5: // fredag
            emptyListItem(4);
            break;
        case 6: // lördag
            emptyListItem(5);
            break;
        case 0: // söndag
            emptyListItem(6);
            break;
        default:
            break;
    }

    // lägger till antal dagar som finns i månaden
    for(let i = 1; i <= dagar; i++) {
        $(".days").append("<li>" + i + "</li>");
    }
    jelp();
    kalender();
}
