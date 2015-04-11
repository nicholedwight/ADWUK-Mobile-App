<?php include('inc/header.php'); ?>
<div class="wrapper" id="top">
  <div id="main" role="main" class="site-wrap register-wrap">
    <div class="register-container">
      <div class="landing-header">
        <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">
      </div>
      <h1>Join Us</h1>
      <form method="post" action="confirmation.php" class="register-form">
        <div class="field-wrapper">
          <label for="fname">First Name (required)</label>
          <input type="text" id="fname" name="fname" placeholder="First Name (required)" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="lname">Last Name (required)</label>
          <input type="text" id="lname" name="lname" placeholder="Last Name (required)" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="username">Username (required)</label>
          <input type="text" id="username" name="username" placeholder="Username (required)" class="text-input">
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
          <textarea id="about-impairment" placeholder="Describe your impairment"></textarea>
        <div class="field-wrapper">
          <label for="email-reg">Email (required)</label>
          <input type="email" id="email-reg" name="email" rows="10" cols="40" placeholder="Email (required)" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="password">Password (required)</label>
          <input type="password" id="password" name="password" placeholder="Password (required)" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="password2">Password Confirmation (required)</label>
          <input type="password" id="password2" name="password2" placeholder="Password Confirmation (required)" class="text-input">
        </div>
        <a href="#top" class="register btn">Register</a>

        <?php $email = $_POST['email'];?>

        <div class="email-confirmation">
          <div class="confirm">
            <p>Does your email look right?</p>
            <p id="email-check"><?php echo $email;?></p>
            <a class="cancel btn">No</a>
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
