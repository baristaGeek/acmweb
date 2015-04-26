$('#email-form').submit(function(ev){
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: {email: $('#email').val()},
        success: function (data) {
            $('#p-email').text(data);
            $('#p-email').fadeIn(100).delay(2000).fadeOut(500);
        }
    });
    ev.preventDefault();
});
