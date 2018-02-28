<?php
$lstyle = "css/quiz.css";
include("./includes/header.php");
?>

<main>

  <?php
    $head = "Tech Quiz";
    $desc = "Like puzzling riddles? and mesmerizing technology? why not have a taste of both in the Tech Quiz. You will be having trivia about Technologies in the field of IT.";
    $duration = "10 mins";
    $participant = 2;
    include("./includes/desc.php");
  ?>

  <section class="rules evt-bottom">
    <h1>Rules:</h1>
    <div class="one evt-bottom">
      <ul>
        <li>A team shall consist of max two students</li>
        <li>The decision of the quiz-master will be final and will not be subjected to any change.</li>
        <li>Participants shall not be allowed to use mobile or other electronic instruments.</li>
        <li>Questions shall be in the form of multiple choice, fill and images.</li>
        <li>Audience shall not give any hints or clues to the competitors.</li>
      </ul>
    </div>
    <div class="two evt-bottom">
      <h2>Round one</h2>
      <ul>
        <li>Each team would be given a set of question paper containing 20 multiple choice objective type questions.</li>
        <li>Visuals include hardware images, logos of Computer related product manufacturing companies etc.,</li>
        <li>Time limit - 10 minutes.</li>
        <li>Only 6 Teams would be selected for final stage rounds.</li>
        <li>In case of tie between 2 or more teams, further 5 questions would be asked for  final selection.</li>
        <li>The selected teams shall have to appear for the final round.</li>
      </ul>
    </div>
    <div class="three evt-bottom">
      <h2>Round two</h2>
      <ul>
        <li>Each team will be asked as many questions as possible one after another in one minute of time.</li>
        <li>10 marks for the correct answer and negative 5 marks for the wrong answer.</li>
        <li>Team discussion is allowed.</li>
        <li>If a team cannot answer the question, they can say pass for the next question. The question will not be forwarded to the next team.</li>
      </ul>
    </div>
  </section>


</main>

<?php include("includes/footer.php"); ?>
