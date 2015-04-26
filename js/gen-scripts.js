$('#email-form').submit(function(){
    $.post('email.php',
        {email: $('#email').val()},
        function(data){
            $('#p-email').text(data);
            $('#p-email').fadeIn(100).delay(2000).fadeOut(500);
        });
    return false;
});
