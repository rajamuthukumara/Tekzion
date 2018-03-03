<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tekzion</title>

  <!-- stylesheets -->
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/master.responsive.css">
  <link rel="stylesheet" href="css/loader.css">

  <!-- cdns -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron|Source+Code+Pro" rel="stylesheet">

</head>

<body>

  <div class="loading" id="overlay">
    <div class="spinner spinner2"></div>
  </div>

  <div class="container-fluid">

    <!-- header -->
    <header class="mainhead">
      <div class="vid-overlay1"></div>
      <div class="fullscreen-video-wrap">
        <video autoplay loop poster="assets/img/posterimage.png">
          <source src="assets/vid/bg.webm" type="video/webm">
          <source src="assets/vid/bg.mp4" type="video/mp4">
        </video>
      </div>
      <!-- <div class="overlay"></div> -->
      <div class="mainhead-content">

        <!-- navigation -->
        <nav class="nav-dum">
          <a class="toggle-btn mhide" onclick="expandmenu()"><i class="fas fa-bars"></i></a>
          <div class="sidemenu mhide" id="side-menu">
            <ul>
              <li><a id="close-btn" onclick="closemenu()"><i class="fas fa-times"></i></a></li>
              <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="http://www.aceatech.com/" target="_blank">Our College</a></li>
              <li><a href="#" class="signin-snav">Register</a></li>
            </ul>
          </div>
          <p class="nav-brand"></p>
          <div class="mainnav">
            <ul class="main-nav">
              <li><a href="<?php echo 'index.php'; ?>">Home</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="http://www.aceatech.com/" target="_blank">Our College</a></li>
              <li><a href="#" class="signin-nav">Register</a></li>
            </ul>
          </div>
        </nav>
        <!-- navigation ends -->

        <div class="banner">
          <a href="#"><img src="assets/img/tekzion.png" alt="Tekzion" class="tekzion sa-fade-frmbtm"></a>
        </div>
        <div class="main-reg-now sa-fade-frmbtm">
          <a href="#" class="reg-btn">Register Now</a>
        </div>
      </div>
    </header>
    <!-- header ends -->

    <!-- intro -->
    <main>
      <section class="s-intro">
        <div class="intro intro-cont sa-fade-frmbtm">
          <h1>Tekzion, March 17</h1>
          <p>
            We the students of computer science and IT department Alpha Pondicherry welcome you to our national level symposium. Here we will be having both technical and non-technical events so this is not just for computer science students, everyone departments from any colleges can participate. The entry fee will be 100rs, food will be provided for free. With entry fee, you can attend one non-technical and one technical
          </p>
        </div>
        <div class="intro-ext sa-fade-frmright">
          <div class="intro intro-img">
            <img src="assets/img/tekzion-logo.png" alt="Tekzion">
          </div>
          <div class="counter sa-fade-frmbtm">
            <p class="mhide">March 17, 2018</p>
            <p id="daystogo">days to go</p>
          </div>
        </div>
      </section>

      <!-- technical events -->
      <section class="s-events s-technical parallax">
        <div class="technical">
          <h4>Technical</h4>
          <p>Unleash the tech skill inside you</p>
          <div class="events container">
            <div class="pp sa-fade-frmright" data-text="Paper Presentation
Innovations is the route map for inventions and inventions are the key to the better world. Do you have those unique key of ideas? We are here to hear your ideas in the form of Paper Presentation" onclick="pp()"></div>
            <div class="debug sa-fade-frmright2" data-text="Code Debug
Wanna catch some bugs in the program, what are you waiting for? grab a keyboard and dive in" onclick="debug()"></div>
            <div class="tq sa-fade-frmright3" data-text="Technical Quiz
Like puzzling riddles? and mesmerizing technology? why not have a taste of both in the Tech Quiz. You will be having trivia about Technologies in the field of IT" onclick="quiz()"></div>
            <div class="speech sa-fade-frmright" data-text="Tech Speech
The  participants  will  be  given a spot technical topic to speak. The topic will be a prevenient one. The speech should not be less than stipulated time given. If the participant took a long respite or if the speech was out of range, the participant will be rejected. One who was selected will be qualified to attend further round" onclick="techspeech()"></div>
            <div class="wd sa-fade-frmright2" data-text="Web Development
Create your own visual style… let it be unique for yourself and yet identifiable for others" onclick="wd.php"></div>
            <div class="robot sa-fade-frmright3" data-text="Line Follower Robot
The objective of this contest is for a robot to follow a black line on a white background, without losing the line, and navigating several 90 degree turns. The robot to complete the course in the shortest period of time while accurately tracking the course line from start to finish wins" onclick="robot.php"></div>
          </div>
        </div>
      </section>

      <!-- non technical events -->
      <section class="s-events s-ntechnical parallax">
        <div class="ntechnical">
          <h4>Non Technical</h4>
          <p>Don't like codes don't worry these are noob proof</p>
          <div class="events container">
            <!-- <div class="space"></div> -->
            <div class="film sa-fade-frmright" data-text="Short Film
Put your creativity to the action and show the world your masterpiece. A good director makes his audience feel what he want them to feel. The film is all about delivering emotions, it could be joy, sorrow or anger" onclick="film()"></div>
            <div class="gamming sa-fade-frmright2" data-text="Gamming
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, omnis, aut! Ab hic illum similique excepturi quasi nostrum adipisci veritatis fugiat ullam vel corrupti alias sunt, provident molestias, voluptas vitae." onclick="game()"></div>
            <div class="food sa-fade-frmright3" data-text="Eat-a-thon
Not good at anything other than eating? don't worry we got you covered, try our Eat-a-thon" onclick="eat()"></div>
            <div class="fpaint sa-fade-frmright" data-text="Face Painting
Face painting options range from cheek art,partial face or full face! we don't limit ourselves to just faces. We love to be creative so just do where you want your design: arm,neck,leg etc." onclick="fpaint()"></div>
            <div class="art sa-fade-frmright2" data-text="Fine Arts
The true essence of land comes from its beauty and fragrance. the finest pattern of henna has its own aroma.Do you have that talent? then come and participate" onclick="art()"></div>
            <div class="cym sa-fade-frmright3" data-text="Crypt Your Mind
Get ready to push your mind to your limit with Crypt your mind contest." onclick="cym()"></div>
          </div>
        </div>
      </section>

      <!-- Schedule -->
      <!-- <section class="s-schedule" id="schedule">
        <h3>Schedule</h3>
        <div class="schedule">
          <div class="tech-schedule">
            <div class="event-name">
              <ul>
                <li><a href="#">Paper Presentation</a></li>
                <li><a href="#">Debug</a></li>
                <li><a href="#">Technical Quiz</a></li>
                <li><a href="#">On-Spot Tech Speech</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Line Follower</a></li>
              </ul>
            </div>
            <div class="event-time">
              <ul>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
              </ul>
            </div>
          </div>
          <div class="ntech-schedule">
            <div class="event-name">
              <ul>
                <li><a href="#">Paper Presentation</a></li>
                <li><a href="#">Debug</a></li>
                <li><a href="#">Technical Quiz</a></li>
                <li><a href="#">On-Spot Tech Speech</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Line Follower</a></li>
              </ul>
            </div>
            <div class="event-time">
              <ul>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
                <li>9:00am to 11:00am</li>
              </ul>
            </div>
          </div>
        </div>
      </section> -->
      <section class="s-location">
        <div class="location-alpha parallax">
          <div class="location-info">
            <h3>Vennue Location</h3>
            <p>
              Alpha College of Engineering and technology <br>
              Bahour to Kannikoil main road <br>
              Puducherry
              Date: 17.3.18
            </p>
          </div>
          </div>
        <div class="location sa-fade-frmbtm">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7811.009753725997!2d79.76446302208383!3d11.79987106867151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a549f363d892bd1%3A0x8590d692e3c08b67!2sPondicherry+Alpha+College+Of+Engineering+And+Technology!5e0!3m2!1sen!2sin!4v1518552795499" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </section>
    </main>

<?php include("includes/footer.php"); ?>
