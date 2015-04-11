<?php include('inc/header.php');
      $searchName = $_GET['searchName'];
      $text = $_GET['text'];
      date_default_timezone_set('Europe/London');
      $time = date('h:i', time());
?>
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
    <h1>Messages</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="messages.php">Messages</a></li>
        <li><?php echo $searchName;?></li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="message-wrap">

    <?php if(isset($text)) { ?>
      <div class="im_message_wrap">
    <?php } else { ?>
      <div class="im_message_wrap hidden">
    <?php } ;?>
      <div class="im_content_message_wrap">
        <a href="#" class="user_photo">
          <img src="./assets/img/p-image.png" alt="Your profile image">
        </a>
        <div class="sent-time">
          <p><?php echo $time; ?></p>
        </div>
        <div class="im_message_body">
          <a href="#" class="author"><?php echo $_SESSION['username'];?></a>
          <div class="im_message_text">
            <?php echo $text;?>
          </div>
        </div>
      </div>
    </div>

    <div class="flex-inline bottom-sticky">
      <form method="get" action="#" class="textarea">
        <textarea rows="10" cols="40" placeholder="Write a message..." class="message" name="text"></textarea>
        <input type="hidden" value="<?php echo $searchName; ?>" name="searchName">
        <button type="submit" class="sendNew">Send</button>
      </form>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
