<?php include('inc/header.php'); ?>
  <input type="checkbox" id="nav-trigger" class="nav-trigger" aria-role="button"/>
  <label for="nav-trigger" onclick=""><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top" tabindex="0">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications" tabindex="0">
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
    <h1>Hello, <?php echo $_SESSION['username'];?>.</h1>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <h2>Updates from popular topics:</h2>
    <ul class="forum-categories">
      <li>
        <a href="thread-post.php">
          <h3>Welcome to the forum! :)</h3>
          <p>Last post by: <span class="user">nephiea</span> on <span class="post_date"><?php echo $date;?>, 12:04</p>
          <p>Replies: <strong>23</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Discussing emplyoment rights in an interview?</h3>
          <p>Last post by: <span class="user">MentorJoe</span> on <span class="post_date"><?php echo $date;?>, 15:42</p>
          <p>Replies: <strong>23</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Wheelchair friendly companies in Bristol?</h3>
          <p>Last post by: <span class="user">SouthWestAngel</span> on <span class="post_date"><?php echo $yesterday;?>, 09:12</p>
          <p>Replies: <strong>23</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Dyslexia in tech</h3>
          <p>Last post by: <span class="user">shereads</span> on <span class="post_date">Sun Apr 26, 2015, 20:56</p>
          <p>Replies: <strong>23</strong></p>
        </a>
      </li>

    </ul>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->
<?php include('inc/footer.php'); ?>
