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
    <h1>Your Mentor Results</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="mentoring.php">Mentoring</a></li>
        <li class="previous"><a href="find.php">Find a Mentor</a></li>
        <li>Mentor Results</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <div class="results">
      <p class="results-header">Here are some potential mentors that match your requirements, get to know them all by their profile before choosing!</p>
      <hr />
      <ul class="contacts mentor-results">
        <li>
          <a href="#">
            <div class="user_photo">
              <img src="./assets/img/joe.jpg" alt="MentorJoe">
            </div>
            <p>MentorJoe</p>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="user_photo">
              <img src="./assets/img/emma.jpg" alt="MentorEmma">
            </div>
            <p>MentorEmma</p>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="user_photo">
              <img src="./assets/img/anna.jpg" alt="MentorAnna">
            </div>
            <p>MentorAnna</p>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="user_photo">
              <img src="./assets/img/bob.jpg" alt="MentorBob">
            </div>
            <p>MentorBob</p>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="user_photo">
              <img src="./assets/img/pete.jpg" alt="MentorPete">
            </div>
            <p>MentorPete</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
