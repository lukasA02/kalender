$("button").click(function() {
    $.ajax('https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php', {
        type: 'GET',  // http method
        data: { aid: 1, hash: 123456789 },  // data to submit
        dataType: 'jsonp',
        success: function (data, status) {
            $('p').append('status: ' + status + ', data: ' + data);
        },
        error: function (errorMessage) {
                $('p').append('Error' + errorMessage);
        }
    });
});