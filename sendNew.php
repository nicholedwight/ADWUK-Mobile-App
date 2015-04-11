<?php include('inc/header.php');
      $searchName = $_GET['searchName'];
      $text = $_GET['text'];
      date_default_timezone_set('Europe/London');
      $time = date('h:i', time());
?>
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
          <a href="#" class="author">You</a>
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
