<?php
  session_start();
  $date = date('D M d, Y');
  $yesterday = date("D M d, Y", time() - 60 * 60 * 24);
  $url = $_SERVER['REQUEST_URI'];
  $parts = explode('/', $url);
  $value = $parts[count($parts) - 1];
  $removeGet = explode('?', $value);
  $newValue = $removeGet[count($removeGet) - 2];
  if ($_POST['email']) {
      $email = $_POST['email'];
      $parts = explode("@", $email);
      $username = $parts[0];
      $_SESSION['username'] = $username;
  }
  date_default_timezone_set('Europe/London');
  $time = date('h:i', time());
  // var_dump($_SESSION);
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Action on Disability and Work UK</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
