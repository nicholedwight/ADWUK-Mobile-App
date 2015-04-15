<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" tabindex="0"/>
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
    <h1>Welcome to the forum! :)</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="forum.php">Forum</a></li>
        <li class="previous"><a href="chat.php">Informal Chat</a></li>
        <li>Welcome to the forum! :)</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <div class="thread-wrapper">
      <div class="post">
        <a href="#" class="user_photo">
          <img src="./assets/img/128.jpg" alt="kaibrak">
        </a>
        <p class="author">kaibrak</p>
        <img src="./assets/img/icon_post_quote.gif" alt="Quote this user" class="quote-user">
        <span class="small">Mon March 24, 2015, 10:24</span>
        <div class="im_message_body">
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam. Pri cu dolorem nostrum. Cu oblique luptatum platonem his, eum te aliquid interpretaris. Ut est tacimates aliquando instructior, mei ad porro doctus abhorreant, te sea ocurreret scripserit.
          </div>
        </div>
      </div>

      <div class="post">
        <a href="#" class="user_photo">
          <img src="./assets/img/gravatar1.png" alt="CindyLou">
        </a>
        <p class="author">CindyLou</p>
        <img src="./assets/img/icon_post_quote.gif" alt="Quote this user" class="quote-user">
        <span class="small">Mon March 24, 2015, 23:49</span>
        <div class="im_message_body">
          <div class="im_message_text">
            <div class="quote">
              <blockquote>
                Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam
              </blockquote>
            </div>
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam. Pri cu dolorem nostrum. Cu oblique luptatum platonem his, eum te aliquid interpretaris. Ut est tacimates aliquando instructior, mei ad porro doctus abhorreant, te sea ocurreret scripserit.
          </div>
        </div>
      </div>

      <div class="post">
        <a href="#" class="user_photo">
          <img src="./assets/img/nephiea.jpg" alt="nephiea">
        </a>
        <p class="author">nephiea</p>
        <img src="./assets/img/icon_post_quote.gif" alt="Quote this user" class="quote-user">
        <span class="small">Wed March 26, 2015, 13:44</span>
        <div class="im_message_body">
          <div class="im_message_text">
            Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam. Pri cu dolorem nostrum.
            <div class="quote">
              <blockquote>
                Lorem ipsum dolor sit amet, in dolorum voluptatum nec, summo dolor suavitate eu nam
              </blockquote>
            </div>
            Cu oblique luptatum platonem his, eum te aliquid interpretaris. Ut est tacimates aliquando instructior, mei ad porro doctus abhorreant, te sea ocurreret scripserit.
          </div>
        </div>
      </div>

      <?php if($_POST['comment']) { ?>
        <div class="post">
          <a href="#" class="user_photo">
            <img src="./assets/img/p-image.png" alt="">
          </a>
          <p class="author"><?php echo $_SESSION['username'];?></p>
          <img src="./assets/img/icon_post_quote.gif" alt="Quote this user" class="quote-user">
          <span class="small"><?php echo $date . ', ' . $time;?></span>
          <div class="im_message_body">
            <div class="im_message_text">
              <?php echo $_POST['comment'];?>
            </div>
          </div>
        </div>
      <?php }?>

      <form method="post" action="" class="comment-form">
        <label for="comment">Post Reply</label>
        <textarea id="comment" name="comment" required></textarea>
        <button type="submit" class="btn submit">Submit</button>
      </form>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
