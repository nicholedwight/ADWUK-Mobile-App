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
        <li class="previous"><a href="messages.php">Messages</a></li>
        <li>CindyLou</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="message-wrap">
    <div class="im_message_wrap">
      <div class="im_content_message_wrap">
        <a href="#" class="user_photo">
          <img src="./assets/img/gravatar1.png" alt="CindyLou">
        </a>
        <div class="sent-time">
          <p>16:56</p>
        </div>
        <div class="im_message_body">
          <a href="#" class="author">CindyLou</a>
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam. Pri cu dolorem nostrum. Cu oblique luptatum platonem his, eum te aliquid interpretaris. Ut est tacimates aliquando instructior, mei ad porro doctus abhorreant, te sea ocurreret scripserit.
          </div>
        </div>
      </div>
    </div>

    <div class="im_message_wrap">
      <div class="im_content_message_wrap">
        <a href="#" class="user_photo">
          <img src="./assets/img/p-image.png" alt="Your profile image">
        </a>
        <div class="sent-time">
          <p>16:59</p>
        </div>
        <div class="im_message_body">
          <a href="#" class="author"><?php echo $_SESSION['username'];?></a>
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam.
          </div>
        </div>
      </div>
    </div>

    <div class="im_message_wrap">
      <div class="im_content_message_wrap">
        <a href="#" class="user_photo">
          <img src="./assets/img/p-image.png" alt="Your profile image">
        </a>
        <div class="sent-time">
          <p>17:02</p>
        </div>
        <div class="im_message_body">
          <a href="#" class="author"><?php echo $_SESSION['username'];?></a>
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam.
          </div>
        </div>
      </div>
    </div>

    <div class="im_message_wrap">
      <div class="im_content_message_wrap">
        <a href="#" class="user_photo">
          <img src="./assets/img/gravatar1.png" alt="CindyLou">
        </a>
        <div class="sent-time">
          <p>17:05</p>
        </div>
        <div class="im_message_body">
          <a href="#" class="author">CindyLou</a>
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam. Pri cu dolorem nostrum.
          </div>
        </div>
      </div>
    </div>

    <?php if($_POST['message']) { ?>
      <div class="im_message_wrap">
        <div class="im_content_message_wrap">
          <a href="#" class="user_photo">
            <img src="./assets/img/gravatar1.png" alt="CindyLou">
          </a>
          <div class="sent-time">
            <p>17:05</p>
          </div>
          <div class="im_message_body">
            <a href="#" class="author">CindyLou</a>
            <div class="im_message_text">
              <?php echo $_POST['message'];?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>

    <div class="flex-inline">
      <form method="post" action="#" class="textarea">
        <textarea rows="10" cols="40" placeholder="Write a message..." class="message" name="message"></textarea>
        <button type="submit" class="btn send-btn">Send</button>
      </form>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
