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
    <h1>Contact Us</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Get in touch</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="site-wrap contact">
    <div class="mask">
      <img src="./assets/img/mask.png" alt="" class="mask-img">
      <img src="./assets/img/contact.jpg" alt="">
    </div>
    <p>
      We welcome your comments, feedback and queries so please do get in touch. You can use the enquiry form below or, if you would prefer to speak to a member of the team, call us on <a href="tel:0844 445 7123">0844 445 7123</a>. Our offices are open Monday to Friday between 09.00 and 16.00.
    </p>

    <?php if($_POST) { ?>
      <div class="saved">Thanks for your enquiry, we'll get back to you as soon as possible!</div>
    <?php } ?>

    <form method="post" action="" class="contact-form">
      <div class="field-wrapper">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="text-input" required>
      </div>

      <div class="field-wrapper">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="text-input" required>
      </div>

      <div class="field-wrapper">
        <label for="telephone">Telephone (optional)</label>
        <input type="tel" id="telephone" name="telephone" class="text-input">
      </div>

      <label for="message">Enquiry</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit" class="btn submit">Send</button>
    </form>

    <p><span>Tel:</span> <a href="tel:0844 445 7123">0844 445 7123</a></p>
    <p><span>Skype:</span> adwuk100</p>
    <p><span>Email:</span> <a href="mailto:advice@adwuk.org">advice@adwuk.org</a></p>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
