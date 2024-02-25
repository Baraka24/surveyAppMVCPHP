
$(() => {
    $('#password, #re-password').on('keyup', function () {
        if ($('#password').val() == "" && $('#re-password').val() == "") {
            $('#submit-pass').prop('disabled', true);
            $('#message').hide();
        } else if ($('#password').val() == $('#re-password').val()) {
            $('#submit-pass').prop('disabled', false);
            $('#message').show().html('Password Match').css('color', 'green');
        } else {
            $('#submit-pass').prop('disabled', true);
            $('#message').show().html('Password do not match').css('color', 'red');
        }
    });
});
