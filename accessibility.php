<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications"><a href="#" class="visually-hidden">Notifications</a></span>
  </header>
  <div class="content-banner">
    <h1>Accessibility Settings</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li>Accessibility Settings</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="site-wrap">
    <p>This page allows you to personalise and change some settings to make our website suit your needs. You can edit the font size, colour preferences and overlays, and find some text-to-speech software. Should you wish to return to the standard settings, use the 'Reset' button at the bottom.</p>

    <div class="boxed">
      <h2>Highlight</h2>
      <p>This provides syntax hightlighting on focussed text to help users who have difficulties with reading words</p>
      <a href="#" onclick="toggleHighlight();">Test</a>
    </div>

    <div class="boxed">
      <form method="post" action="#" class="user_settings">
        <h2>Choose your text preferences</h2>
        <label for="size">Text size</label>
        <select name="size" id="size">
          <option>Standard</option>
          <option>+1</option>
          <option>+2</option>
          <option>+3</option>
        </select>

        <label for="spacing">Letter spacing</label>
        <select name="spacing" id="spacing">
          <option>Standard</option>
          <option>+1</option>
          <option>+2</option>
          <option>+3</option>
        </select>

        <h2>Choose your colour contrast preferences</h2>
        <label class="colour-pref">
          <input type="radio" name="colourScheme" checked="checked">
          <span>Standard</span>
        </label>

        <label class="high_contrast colour-pref">
          <input type="radio" name="colourScheme">
          <span>High Contrast</span>
        </label>

        <label class="cream colour-pref">
          <input type="radio" name="colourScheme">
          <span>Cream</span>
        </label>
        <input type="submit" value="Use these settings" class="btn">
        <input type="submit" value="Reset settings" class="btn">
      </form>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
