<?php include('inc/header.php'); ?>
<div class="wrapper">
  <div id="main" role="main" class="site-wrap">
    <img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK">

    <div class="register-container">
      <h1>Join Us</h1>
      <form method="post" action="confirmation.php" class="register-form">
        <div class="field-wrapper">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="First Name" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Last Name" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Username" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" class="text-input">
        </div>
        <div class="field-wrapper">
          <label for="password2">Password Confirmation</label>
          <input type="password" id="password2" name="password2" placeholder="Password Confirmation" class="text-input">
        </div>
        <a class="register btn">Register</a>

        <div class="email-confirmation">
          <p>Does your email look right?</p>
          <p><?php echo $GET['email'];?></p>
          <a class="cancel btn">No</a>
          <button type="submit" class="btn">Yes, keep going!</button>
        </div>
      </form>
      <p>Already have an account? <a href="index.php">Sign in here!</a></p>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->
<?php include('inc/footer.php'); ?>
</div>
