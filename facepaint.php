<?php
$lstyle = "css/fpaint.css";
include('./includes/header.php');
?>
    <main>
      <?php
      $head = "Face Paint";
      $desc = "Face painting options range from cheek art,partial face or full face! we don't limit ourselves to just faces. We love to be creative so just do where you want your design: arm,neck,leg etc.";
      $duration = "60 mins";
      $participant = 2;
      include("./includes/desc.php");
      ?>

      <section class="topic evt-bottom">
        <h1>Topics</h1>
        <p>Choose your design: Anything from animals,fairies,heroes,sports,cartoon characters,or even something scary and innovative</p>
      </section>

      <section class="rules evt-bottom">
        <h1>Rules</h1>
        <ul>
          <li>Participants should bring their own colors,brushes etc.</li>
          <li>Time limit is 60 mins.</li>
          <li>There can be 1 or 2 participants only allowed for this event.</li>
          <li>Participants will be judged on the basis of creativity, innovation and design.</li>
          <li>Judges decision will be final and binding. </li>
        </ul>
      </section>
    </main>

<?php include("./includes/footer.php"); ?>
