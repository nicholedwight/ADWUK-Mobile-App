<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications"><a href="#" class="visually-hidden">Notifications</a></span>
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

    <a href="new.php" class="new-message circle"></a>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
