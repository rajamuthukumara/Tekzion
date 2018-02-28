<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Events</title>

  <!-- stylesheets -->
  <link rel="stylesheet" href=" <?php echo $lstyle?> ">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <link rel="stylesheet" href="css/events.css">

  <!-- cdns -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron|Source+Code+Pro" rel="stylesheet">

</head>
<body>

  <div class="container-fluid">
    <div class="vid-overlay1"></div>

    <!-- header -->
    <header class="mainhead">
      <div class="fullscreen-video-wrap">
        <video autoplay loop poster="assets/img/posterimage.png">
          <source src="assets/vid/bg.webm" type="video/webm">
          <source src="assets/vid/bg.mp4" type="video/mp4">
        </video>
      </div>
      <div class="mainhead-content">

        <!-- navigation -->
        <nav class="nav-dum">
          <a class="toggle-btn mhide" onclick="expandmenu()"><i class="fas fa-bars"></i></a>
          <div class="sidemenu mhide" id="side-menu">
            <ul>
              <li><a id="close-btn" onclick="closemenu()"><i class="fas fa-times"></i></a></li>
              <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
              <li><a href="<?php echo 'index.php/#events';?>">Events</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="http://www.aceatech.com/" target="_blank">Our College</a></li>
              <li><a href="#" class="signin-snav">Register</a></li>
            </ul>
          </div>
          <p class="nav-brand"></p>
          <div class="mainnav">
            <ul class="main-nav">
              <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
              <li><a href="<?php echo 'index.php/#events';?>">Events</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="http://www.aceatech.com/" target="_blank">Our College</a></li>
              <li><a href="#" class="signin-nav">Register</a></li>
            </ul>
          </div>
        </nav>
        <!-- navigation ends -->
        <div class="banner">
          <a href="#"><img src="assets/img/tekzion.png" alt="Tekzion" class="tekzion evt-top"></a>
        </div>
    <!-- header ends -->
