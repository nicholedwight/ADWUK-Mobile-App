<?php include('inc/header.php'); ?>
<div class="wrapper" id="top" tabindex="0">
  <div id="main" role="main" class="site-wrap register-wrap">
    <div class="register-container">
      <div class="landing-header">
        <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">
      </div>
      <h1>Join Us</h1>
      <form method="post" action="confirmation.php" class="register-form" name="registration">
        <div class="field-wrapper">
          <label for="fname">First Name (required)</label>
          <input type="text" id="fname" name="fname" class="text-input reg-required" required>
        </div>
        <div class="field-wrapper">
          <label for="lname">Last Name (required)</label>
          <input type="text" id="lname" name="lname" class="text-input reg-required" required>
        </div>
        <div class="field-wrapper">
          <label for="username">Username (required)</label>
          <input type="text" id="username" name="username" class="text-input reg-required" required>
        </div>
          <p>Do you have an impairment? (optional)</p>
          <label>
            <input type="radio" name="disability">
            <span>Yes</span>
          </label>

          <label>
            <input type="radio" name="disability">
            <span>No</span>
          </label>

          <label>
            <input type="radio" name="disability">
            <span>Rather not say</span>
          </label>

          <p>If you do have an impairment, tell us a little about it so we can try to match you with your perfect mentor.</p>
          <textarea id="about-impairment"></textarea>
        <div class="field-wrapper">
          <label for="email">Email (required)</label>
          <input type="email" id="email" name="email" rows="10" cols="40" class="text-input reg-required" required>
        </div>
        <div class="field-wrapper">
          <label for="password">Password (required)</label>
          <input type="password" id="password" name="password" class="text-input reg-required" required>
        </div>
        <div class="field-wrapper">
          <label for="password2">Password Confirmation (required)</label>
          <input type="password" id="password2" name="password2" class="text-input reg-required" required>
        </div>
        <button type="submit" class="register btn" id="register-btn">Register</button>
        <?php $email = $_POST['email'];?>

        <div class="email-confirmation">
          <div class="confirm">
            <p>Does your email look right?</p>
            <p id="email-check"><?php echo $email;?></p>
            <a href="#" class="cancel btn">No</a>
            <button type="submit" class="btn continue">Yes, keep going!</button>
          </div>
        </div>
      </form>
      <p class="login-link">Already have an account? <a href="index.php">Sign in here!</a></p>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->
<?php include('inc/footer.php'); ?>
</div>
