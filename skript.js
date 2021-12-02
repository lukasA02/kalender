$("button").click(function() {
    $.ajax('minkalender.php', {
        type: 'GET',  // http method
        // data: { aid: 1, hash: 123456789 },  // data to submit
        dataType: 'json',
        success: function (data) {
            var dagar = Array();

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
            var bruh = "<span class='active'>" + $("#ett").html() + "</span>";
            $("#ett").html(bruh);
            console.log(dagar);
        },
        error: function (errorMessage) {
            $('p').append('Error' + JSON.stringify(errorMessage));
        }
    });
});