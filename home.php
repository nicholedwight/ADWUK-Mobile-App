<?php include('inc/header.php');
?>
  <input type="checkbox" id="nav-trigger" class="nav-trigger" />
  <label for="nav-trigger"></label>
<div class="wrapper">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
  </header>

  <div class="content-banner">
    <h1>Hello, USERNAME.</h1>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <div class="menu-action">
      <a href="#" class="action">Publish a new post</a>
    </div>
    <h2>Updates from popular topics:</h2>
    <ul class="forum-categories">
      <li>
        <h3>Anyone in Bedminster</h3>
        <p>Last post by: <span class="user">CindyLou</span> on <span class="post_date"><?php echo $date;?>, 12:04</p>
        <p>Replies: <strong>23</strong></p>
      </li>

      <li>
        <h3>Disussing emplyoment rights in an interview?</h3>
        <p>Last post by: <span class="user">MentorJoe</span> on <span class="post_date"><?php echo $date;?>, 15:42</p>
        <p>Replies: <strong>23</strong></p>
      </li>

      <li>
        <h3>Wheelchair friendly companies in Bristol?</h3>
        <p>Last post by: <span class="user">sweetWheels</span> on <span class="post_date"><?php echo $yesterday;?>, 09:12</p>
        <p>Replies: <strong>23</strong></p>
      </li>

      <li>
        <h3>Dyslexia in tech</h3>
        <p>Last post by: <span class="user">shereads</span> on <span class="post_date">Sun Apr 26, 2015, 20:56</p>
        <p>Replies: <strong>23</strong></p>
      </li>

    </ul>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->
<?php include('inc/footer.php'); ?>
