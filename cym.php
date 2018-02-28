<?php
  $lstyle = "css/cym.css";
  include("includes/header.php");
?>

<main>

  <?php
    $head = "Crypt Your Mind";
    $desc = "Get ready to push your mind to your limit with Crypt your mind contest.";
    $duration = "35 mins";
    $participant = "2";
    include("includes/desc.php");
  ?>

  <section class="rules evt-bottom">
    <h1>Rules</h1>
    <div class="one evt-bottom">
      <ul>
        <li>Each team should consist of maximum 2 members.</li>
        <li>Two round will be conducted.</li>
        <li>Exam pattern will be written.</li>
        <li>Students will be allowed to write exam in batch wise.</li>
      </ul>
    </div>
    <div class="two evt-bottom">
      <h2>Round one</h2>
      <ul>
        <li>Time limit- 20 minutes.</li>
        <li>30 questions will be given and that will be split into 3 parts.
          <ul>
            <li>part A – Multiple choice (10 questions).</li>
            <li>part B - Proverbs (10 questions).</li>
            <li>part C – Personality Identification (10 questions). Example: scientists, politician, successful women names.</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="three evt-bottom">
      <h2>Round two</h2>
      <ul>
        <li>Time limit- 15 minutes.</li>
        <li>Number of questions will be 40.</li>
        <li>Top scores will be winner.</li>
      </ul>
    </div>
  </section>

</main>

<?php include("includes/footer.php") ?>
