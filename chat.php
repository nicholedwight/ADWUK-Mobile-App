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
    <h1>Informal Chat</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="forum.php">Forum</a></li>
        <li>Informal Chat</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <form method="get" action="#" class="flex-inline forum-search">
      <input class="search-field" type="search" placeholder="Search everything" name="searchTerm" required>
      <button type="submit" class="search-btn">Search</button>
    </form>
    <ul class="forum-categories">
      <li>
        <a href="thread-post.php">
          <h3>Welcome to the forum! :)</h3>
          <p>Last post by: <span class="user">nephiea</span> on <span class="post_date">Wed March 26, 2015, 13:44</p>
          <p>Replies: <strong>122</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Dyslexia at work</h3>
          <p>Last post by: <span class="user">MentorJoe</span> on <span class="post_date">Thu April 2, 2015, 09:27</p>
          <p>Replies: <strong>17</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>New here!</h3>
          <p>Last post by: <span class="user">anonymous1986</span> on <span class="post_date">Fri March 27, 2015, 16:58</p>
          <p>Replies: <strong>8</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Looking for work</h3>
          <p>Last post by: <span class="user">nikolipupzki</span> on <span class="post_date">Mon Apr 6, 2015, 17:41</p>
          <p>Replies: <strong>2</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Forumn Names</h3>
          <p>Last post by: <span class="user">MentorJoe</span> on <span class="post_date">Sun Apr 5, 2015, 10:21</p>
          <p>Replies: <strong>18</strong></p>
        </a>
      </li>

      <li>
        <a href="404.php">
          <h3>Anyone in Bedminster</h3>
          <p>Last post by: <span class="user">CindyLou</span> on <span class="post_date">Fri Apr 10, 2015, 12:04</p>
          <p>Replies: <strong>23</strong></p>
        </a>
      </li>
    </ul>

    <div class="pagination">
      <ul>
        <li><a href="#" class="arrow-left"></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li class="next"><a href="#" class="arrow-right"></a></li>
      </ul>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
