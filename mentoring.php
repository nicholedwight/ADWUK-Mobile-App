<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" tabindex="0"/>
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
    <h1>Mentoring</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Mentoring</li>
      </ul>
    </div>
  </div>

  <div id="main" role="main" class="forum-wrap">
    <p class="about-mentors">
      Our mentors are certified core members of our team here at ADWUK. They're here to help guide you through the ADWUK app and to be your personal friend in times of need. They're here for you throughout your journey, whatever it may be.
    </p>
    <a href="find.php" class="btn mentor-btn">
      <h2>Find a Mentor</h2>
    </a>

    <a href="apply.php" class="btn mentor-btn">
      <h2>Apply to become a Mentor</h2>
    </a>

  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
