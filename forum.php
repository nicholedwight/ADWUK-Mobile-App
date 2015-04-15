<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" role="button"/>
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
    <h1>Forum</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Forum</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <div class="mask">
      <img src="./assets/img/forum.gif" alt="">
    </div>
    <ul class="forum-categories">
      <li>
        <a href="chat.php">
          <h3>Informal Chat</h3>
          <p>A place for general chat about life, society, disability, and making friends.</p>
          <p>Topics: <strong>22</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Employment</h3>
          <p>Support on finding a job, career progression, or if you're struggling at work</p>
          <p>Topics: <strong>11</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Financial Advice</h3>
          <p>For advice and questions about finances, benefits, and managing a budget. Qualified mentors will be able to assist you as well as informal advice from peers.</p>
          <p>Topics: <strong>3</strong></p>
        </a>
      </li>
    </ul>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
