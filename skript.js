$("button").click(function() {
    $.ajax('minkalender.php', {
        type: 'GET',  // http method
        // data: { aid: 1, hash: 123456789 },  // data to submit
        dataType: 'json',
        success: function (data) {
            for(let i = 0; i < data.length; i++) {
                $('p').append(data[i].ID);
                $('p').append(data[i].Namn);
                $('p').append(data[i].beskrivning);
                $('p').append(data[i].Agare);
                $('p').append(data[i].Starttid);
                $('p').append(data[i].Sluttid);
                $('p').append("<br>");
            }
            var datum = new Date(data[0].Starttid);
            console.log(datum.toUTCString());
            console.log(datum.getUTCDate());
            $("#ett").innerHTML = "<span class='active'>" + $("#ett").innerHTML + "</span>";
            // $("#ett").toggleClass("active");
            // $('p').append('data: ' + data);
        },
        error: function (errorMessage) {
            $('p').append('Error' + JSON.stringify(errorMessage));
        }
    });
});