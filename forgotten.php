<?php include('inc/header.php');?>
  <div id="main" role="main" class="site-wrap landing">
    <div class="login-container">
      <div class="landing-header">
        <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">
      </div>

      <h2>Password Recovery</h2>
      <p>
        If you have forgotten your password, please enter your email address below. A new password will then be emailed to you shortly..
      </p>
      <form method="get" action="index.php" class="login-form">
        <div class="field-wrapper">
          <label for="emailrecovery">Email</label>
          <input type="email" id="emailrecovery" name="emailrecovery" class="text-input" required>
        </div>

        <button type="submit" class="btn submit">Remind me</button>
      </form>
    </div>

  </div>

<?php
include('inc/footer.php'); ?>
