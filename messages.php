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
    <h1>Messages</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Messages</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="message-wrap">
    <ul class="message-list">
      <li class="unread">
        <a href="conversation.php">
          <div class="im_message_wrap">
            <div class="im_content_message_wrap user_photo">
              <img src="./assets/img/gravatar1.png" alt="CindyLou">
              <div class="sent-time">
                <p>17:02</p>
              </div>
              <div class="im_message_body">
                <p href="#" class="author">CindyLou</p>
                <div class="im_message_text">
                  Lorem ipsum dolor sit amet, in dolorum voluptatum...
                </div>
              </div>
            </div>
          </div>
        </a>
      </li>

      <li>
        <a href="#">
          <div class="im_message_wrap">
            <div class="im_content_message_wrap">
              <a href="#" class="user_photo">
                <img src="./assets/img/gravatar2.png" alt="shereads">
              </a>
              <div class="sent-time">
                <p>10:08</p>
              </div>
              <div class="im_message_body">
                <p href="#" class="author">shereads</p>
                <div class="im_message_text">
                  Lorem ipsum dolor sit amet, in dolorum voluptatum...
                </div>
              </div>
            </div>
          </div>
        </a>
      </li>

      <li>
        <a href="#">
          <div class="im_message_wrap">
            <div class="im_content_message_wrap">
              <a href="#" class="user_photo">
                <img src="./assets/img/gravatar2.png" alt="SouthWestAngel">
              </a>
              <div class="sent-time">
                <p><?php echo $yesterday; ?></p>
              </div>
              <div class="im_message_body">
                <p href="#" class="author">SouthWestAngel</p>
                <div class="im_message_text">
                  Lorem ipsum dolor sit amet, in dolorum voluptatum...
                </div>
              </div>
            </div>
          </div>
        </a>
      </li>
    </ul>

    <a href="new.php" class="new-message"><p>New Message</p></a>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
