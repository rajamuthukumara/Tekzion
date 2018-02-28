<?php
  $lstyle = "css/debug.css";
  include("includes/header.php");
?>

    <!-- main -->

    <main>
      <?php
        $head = "Code Debug";
        $desc = "Wanna catch some bugs in the program, what are you waiting for? grab a keyboard and dive in.";
        $duration = "45 mins";
        $participant = "1";
        include("includes/desc.php");
      ?>

      <section class="rules evt-bottom">
        <h1>Rules</h1>
        <div class="one evt-bottom">
          <ul>
            <li>Participants shall not be allowed to use mobile or other electronic device.</li>
            <li>Questions for first round will be in the form of multiple choice, naming the error, debugging the error</li>
            <li>Two rounds will be conducted,
              <ul>
                <li>First round will be written, for that batch wise students be selected to next round.</li>
                <li>Second round will be done with system.</li>
              </ul>
            </li>
            <li>Shortlisted candidate will enter into second round.</li>
            <li>Top scorer will be the Winner of TekZion code debug.</li>
            <li>Students will be allowed to write exam in batch wise.</li>
            <li>Judges Decision will be final.</li>
          </ul>
        </div>
        <div class="two evt-bottom">
          <h2>Round one:</h2>
          <ul>
            <li>Time limit- 20 minutes.</li>
            <li>Exam pattern will be written.</li>
            <li>
              20 questions will be given and that will be split into 3 parts.
              <ul>
                <li>part A – multiple choice.</li>
                <li>part B -  name the error.</li>
                <li>part C – debug the error.</li>
              </ul>
            </li>
            <li>In debugging the error(PART C) c, c++, java will be combined and you have to find 3 to 5 errors.</li>
            <li>Debug the error and write a code in answer sheet.</li>
          </ul>
        </div>
        <div class="three evt-bottom">
          <h2>Round two</h2>
          <ul>
            <li>Time limit- 25minutes.</li>
            <li>U have to debug 10 programs and must get the output.</li>
            <li>System will be provided to debug the code. C, C++, java code will be in word, u have to copy paste the coding and debug the program then compile it.</li>
            <li>The student who has maximum output will be winner.</li>
          </ul>
        </div>
      </section>
    </main>

<?php include("includes/footer.php"); ?>
