
$(() => {
    $('#password, #re-password').on('keyup', function () {
      const password = $('#password').val();
      const rePassword = $('#re-password').val();

      if (password === "" && rePassword === "") {
        $('#submit-pass').prop('disabled', true);
        $('#message').hide();
      } else if (password === rePassword) {
        $('#submit-pass').prop('disabled', false);
        $('#message')
          .show()
          .html('✔ Password Match')
          .removeClass('text-danger')
          .addClass('text-success');
      } else {
        $('#submit-pass').prop('disabled', true);
        $('#message')
          .show()
          .html('✖ Password do not match')
          .removeClass('text-success')
          .addClass('text-danger');
      }
    });
  });

