<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger" onclick=""><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top" tabindex="0">
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
    <h1>Accessibility Settings</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Accessibility Settings</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="site-wrap">
    <?php if($_GET['Save']) { ?>
      <div class="saved access-saved">Settings have been saved!</div>
    <?php } ?>
    <?php if($_GET['Reset']) { ?>
      <div class="saved access-saved">Settings reset!</div>
    <?php } ?>
    <p>This page allows you to personalise and change some settings to make our website suit your needs. You can edit the font size, colour preferences and overlays, and find some text-to-speech software. Should you wish to return to the standard settings, use the 'Reset' button at the bottom.</p>

    <div class="boxed">
      <form method="get" action="#" class="user_settings">
        <h2>Choose your text preferences</h2>
        <div class="text-preferences range">
          <label for="size">Text size</label>
          <select name="size" id="size">
            <option>Standard</option>
            <option>+1</option>
            <option>+2</option>
            <option>+3</option>
          </select>
        </div>

        <div class="text-preferences range">
          <label for="spacing">Letter spacing</label>
          <select name="spacing" id="spacing">
            <option value="standard">Standard</option>
            <option value="1">+1</option>
            <option value="2">+2</option>
            <option value="3">+3</option>
          </select>
        </div>

        <h2>Choose your colour contrast preferences</h2>
        <label class="colour-pref">
          <input type="radio" name="colourScheme" checked="checked">
          <span>Standard</span>
        </label>

        <label class="high_contrast colour-pref">
          <input type="radio" name="colourScheme">
          <span>High Contrast</span>
        </label>

        <label class="cream colour-pref">
          <input type="radio" name="colourScheme">
          <span>Cream</span>
        </label>
        <button type="submit" name="Save" value="save" class="btn">Use these settings</button>
        <button type="submit" name="Reset" value="reset" class="btn">Reset settings</button>
      </form>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
