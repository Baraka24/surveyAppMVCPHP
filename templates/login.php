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
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="pswd">
            <input type="checkbox" class="show-password" id="show-password-1">
            <label for="show-password-1">Show Password</label>
          </div>
          <div class="mb-3">
            <label for="re-password">Confirm Password:</label>
            <input type="password" class="form-control" id="re-password" placeholder="Enter confirm password" name="cpswd">
            <input type="checkbox" class="show-password" id="show-password-2">
            <label for="show-password-2">Show Password</label>
            <p class="" id="message"></p>
          </div>
          <div class="mb-3">
            <label for="comment">Other infos:</label>
            <textarea class="form-control" rows="3" id="comment" name="text"></textarea>
          </div>
          <button type="submit" id="submit-pass" class="btn btn-primary">Create</button>
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
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>