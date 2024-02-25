<?php $title = "Connect to the survey app" ?>

<?php ob_start(); ?>
<div class="container mt-3">
  <h2>Login in</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <p>Don't have an account? <a type="button" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signUp">Sign up here.</a></p>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <!-- The Modal -->
<div class="modal" id="signUp">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create an account</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/action_page.php">
          <div class="mb-3 mt-3">
            <label for="name">Name(s):</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name(s)" name="name">
          </div>
          <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>
          <div class="mb-3">
            <label for="cpwd">Confirm Password:</label>
            <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" name="cpswd">
          </div>
          <div class="registrationFormAlert text-success" id="CheckPasswordMatch"></div>
          <div class="mb-3">
            <label for="comment">Other infos:</label>
            <textarea class="form-control" rows="3" id="comment" name="text"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</div>
<!-- <script>
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

</script> -->
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>