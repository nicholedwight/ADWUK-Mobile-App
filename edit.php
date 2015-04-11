<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<div class="wrapper" id="content">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications"><a href="#" class="visually-hidden">Notifications</a></span>
  </header>
  <div class="content-banner">
    <h1>Edit Profile</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Edit Profile</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="site-wrap">
    <div class="saved">Changes saved!</div>
    <div class="profile_settings">
      <div class="image-container">
        <img src="./assets/img/p-image.png" alt="Your Profile Image" class="profile-image">
      </div>
      <form action="#" method="post" enctype="multipart/form-data" class="upload">
          <span>Upload new image</span>
          <input type="file" name="fileToUpload" id="fileToUpload" class="fileUpload">
          <input type="submit" value="Upload Image" name="submit" class="upload-btn">
      </form>
    </div>

    <label class="block"><input type="checkbox" name="show-profile-image"> Show my image in public forums</label>
    <label class="block"><input type="checkbox" name="show-profile-image"> Show my image to my mentor</label>

    <form method="post" action="" class="profile_settings">
      <div class="field-wrapper">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" class="text-input">
      </div>

      <p>This information is private, no one will see it but you.</p>
      <div class="field-wrapper">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="First Name" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Last Name" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password" placeholder="Password" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="password2">Password Confirmation</label>
        <input type="password" id="password2" name="password2" placeholder="Password Confirmation" class="text-input">
      </div>
      <input type="checkbox" id="save-settings" class="save-settings" />
      <label class="" for="save-settings"><a href="#content">Save Changes</a></label>
    </form>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
