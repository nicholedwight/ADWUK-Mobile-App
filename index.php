<?php include('inc/header.php'); ?>
  <div id="main" role="main" class="site-wrap landing">
    <div class="login-container">
      <div class="landing-header">
        <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">
      </div>

      <h2>Sign In</h2>
      <form method="post" action="home.php" id="login" class="login-form">
        <div class="field-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="field-wrapper">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <a href="#" class="submit btn">Login</a>

        <div class="email-confirmation">
          <p>Does your email look right?</p>
          <p><?php echo $POST['email'];?></p>
          <a class="cancel btn">No</a>
          <button type="submit" class="btn">Yes, keep going!</button>
        </div>
        <p class="small">Don't have an account?
          <a href="registration.php">
            <span>Register Now</span>.
          </a>
        </p>
        <p class="small"><a href="forgotten.php">Forgot your password?</a></p>

      </form>
    </div>

  </div>

<?php include('inc/footer.php'); ?>
