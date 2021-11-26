$("button").click(function() {
    $.ajax('minkalender.php', {
        type: 'GET',  // http method
        // data: { aid: 1, hash: 123456789 },  // data to submit
        dataType: 'JSON',
        success: function (data) {
            alert(data);
            $('p').append('data: ' + data);
        },
        error: function (errorMessage) {
            $('p').append('Error' + JSON.stringify(errorMessage));
        }
    });
    // $.ajax({
    //     url: "minkalender.php",
    //   }).done(function() {
    //     $('p').innerHTML(document.body);
    //   });
});