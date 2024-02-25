
function checkPasswordMatch() {
    var password = $("#pwd").val();
    var confirmPassword = $("#cpwd").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Passwords does not match!");
    else
        $("#CheckPasswordMatch").html("Passwords match.");
}
$(document).ready(function () {
   $("#cpwd").keyup(checkPasswordMatch);
});
