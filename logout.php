<?php
include('inc/header.php');
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';
?>
  <div id="main" role="main" class="site-wrap landing">
    <div class="login-container">
      <div class="landing-header">
        <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">
      </div>

      <h2>You've been logged out.</h2>
      <p><a href="index.php">Login</a> again?</p>


  </div>

<?php
include('inc/footer.php'); ?>
