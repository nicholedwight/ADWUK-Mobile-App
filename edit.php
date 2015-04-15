<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
<label for="nav-trigger" onclick=""><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top" tabindex="0" role="banner">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications">
      <div class="new-notification general-notification">
        2
      </div>
      <a href="#" class="visually-hidden">Notifications</a>
    </span>
    <div class="notification-flyout hidden">
      <div class="notification-title">
        <h3>Notifications</h3>
      </div>
      <div class="scrollable-notifications">
        <ul class="notification-items">
          <li class="unread">
            <a href="#">
              MentorJoe also commented on your post in Dyslexia in Tech
              <span>1 hour ago</span>
            </a>
          </li>
          <li class="unread">
            <a href="#">
              CindyLou sent you a private message
              <span>1 hour ago</span>
            </a>
          </li>
          <li>
            <a href="#">
              Zandig replied to your comment in Anyone in Bedminster
              <span>3 hours ago</span>
            </a>
          </li>
          <li>
            <a href="#">
              shereads sent you a private message
              <span>6 hours ago</span>
            </a>
          </li>
          <li>
            <a href="#">
              Your application for a mentor has been received
              <span>8 hours ago</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
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
    <?php if($_GET) { ?>
      <div class="saved">Changes saved!</div>
    <?php } ?>

    <div class="profile_settings">
      <h3 class="left">Edit your profile image</h3>
      <div class="image-container">
        <img src="./assets/img/p-image.png" alt="Your Profile Image" class="profile-image">
      </div>
      <div class="upload-container">
        <input id="uploadFile" placeholder="Choose File" disabled="disabled" class="upload"/>
        <div class="fileUpload btn-upload">
            <span>Upload</span>
            <input id="uploadBtn" type="file" class="upload" />
        </div>
      </div>
    </div>

    <label class="block"><input type="checkbox" name="show-profile-image"> Show my image in forums</label>
    <label class="block"><input type="checkbox" name="show-profile-image"> Show my image to my mentor</label>

    <form method="get" action="" class="profile_settings">
      <div class="field-wrapper">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="text-input" value="<?php echo $_SESSION['username'];?>">
      </div>

      <p>This information is private, no one will see it but you.</p>
      <div class="field-wrapper">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password" class="text-input">
      </div>

      <div class="field-wrapper">
        <label for="password2">Password Confirmation</label>
        <input type="password" id="password2" name="password2" class="text-input">
      </div>
      <button type="submit" class="submit btn">Save Changes</button>
    </form>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
