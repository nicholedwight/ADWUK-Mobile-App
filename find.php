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
    <h1>Find a Mentor</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="mentoring.php">Mentoring</a></li>
        <li>Find a Mentor</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="site-wrap">
    <p>Choose your preferences you'd like to see in a mentor.</p>
    <form method="post" action="mentor-results.php" class="profile_settings find-mentor">
      <p>Do you have a preference in gender for your mentor?</p>
      <label class="block">
        <input type="radio" name="mentor-gender">
        <span>No Preference</span>
      </label>
      
      <label class="block">
        <input type="radio" name="mentor-gender" checked="checked">
        <span>Female</span>
      </label>

      <label class="block">
        <input type="radio" name="mentor-gender">
        <span>Male</span>
      </label>

      <label class="block">
        <input type="radio" name="mentor-gender">
        <span>Other</span>
      </label>
      <div class="field-wrapper">
        <label for="other-gender" class="other-gender">If you chose other, please specify and we will try our best!</label>
        <input type="text" name="other-gender" class="text-input">
      </div>

      <div class="text-preferences range">
        <label for="age">Age Range</label>
        <select name="age" id="age" required>
          <option value="none">No Preference</option>
          <option value="18-24">18-24</option>
          <option value="25-34">25-34</option>
          <option value="45-54">45-54</option>
          <option value="53-64">53-64</option>
          <option value="65-74">65-74</option>
          <option value="75+">75+</option>
        </select>
      </div>

      <p>Would you connect more with your mentor if they have a history with an disability similar to yours?</p>
      <label class="block">
        <input type="radio" name="mentor-disability">
        <span>Yes</span>
      </label>

      <label class="block">
        <input type="radio" name="mentor-gender">
        <span>I don't mind</span>
      </label>

      <label class="block">
        <input type="radio" name="mentor-disability">
        <span>No</span>
      </label>

      <p>Is there a specific career area you would like your mentor to have knowledge or experience with?</p>
      <div class="text-preferences range">
        <label for="age">Industry area</label>
        <select name="age" id="age" required>
          <option value="No Preferenes">No Preference</option>
          <option value="Accountancy">Accountancy</option>
          <option value="Administration">Administration</option>
          <option value="Agriculture">Agriculture</option>
          <option value="Apprentices">Apprentices</option>
          <option value="Audit">Audit</option>
          <option value="Automotive">Automotive</option>
          <option value="Banking">Banking &amp; Finance</option>
          <option value="Catering">Catering &amp; Hospitality</option>
          <option value="Charity">Charity</option>
          <option value="Computer Science">Computer Science</option>
          <option value="Construction">Construction &amp; Skilled Trades</option>
          <option value="Consulting">Consulting</option>
          <option value="Customer Service">Customer Service</option>
          <option value="Domestic">Domestic</option>
          <option value="Education">Education &amp; Teaching</option>
          <option value="Engineering">Engineering</option>
          <option value="Engineering">General Management</option>
          <option value="Health">Health &amp; Safety</option>
          <option value="Health">Nursing</option>
          <option value="HR">Human Resources (HR)</option>
          <option value="IT">Information Technology</option>
          <option value="Legal">Legal</option>
          <option value="Marketing">Marketing</option>
        </select>
      </div>

      <button type="submit" class="btn find">Find me a Mentor</button>

    </form>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
