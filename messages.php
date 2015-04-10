<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<div class="wrapper">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
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
  <div id="main" role="main" class="forum-wrap">
    <ul class="message-list">
      <li>
        <a href="conversation.php">
          <h3>CindyLou</h3>
          <p class="seen">14:25</p>
          <p>Lorem ipsum dolor sit amet, in dolorum voluptatum...</p>
        </a>
      </li>

      <li>
        <a href="#">
          <h3>shereads</h3>
          <p>10:08</p>
          <p>Lorem ipsum dolor sit amet, in dolorum voluptatum...</p>
        </a>
      </li>

      <li>
        <a href="#">
          <h3>sweetWheels</h3>
          <p><?php echo $yesterday; ?></p>
          <p>Lorem ipsum dolor sit amet, in dolorum voluptatum...</p>
        </a>
      </li>
    </ul>

    <a href="#" class="new-message circle"></a>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
