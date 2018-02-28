<?php
  $lstyle = "css/film.css";
  includes("includes/header.php");
?>

<main>

  <?php
    $head = "Short Film";
    $desc = "Put your creativity to the action and show the world your masterpiece. A good director makes his audience feel what he want them to feel. The film is all about delivering emotions, it could be joy, sorrow or anger.";
    $duration = "10 mins";
    $participant = 3;
    include("includes/desc.php");
  ?>

  <section class="rules evt-bottom">
    <h1>Rules</h1>
    <div class="one evt-bottom">
      <ul>
        <li>Maximum 3 members per team.</li>
        <li>Maximum duration of 10 min is allowed including all the titles and credits.</li>
        <li>The film should not represent or discriminate the caste, colour, race, etc directly or indirectly of individuals.</li>
        <li>Judges decision will be final.</li>
      </ul>
    </div>
  </section>

</main>

<?php include("includes/footer.php"); ?>
