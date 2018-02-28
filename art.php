<?php
  $lstyle = "css/art.css";
  include("includes/header.php");
?>

<main>

  <h1 class="head">Fine arts</h1>

  <?php
    $head = "Mehandhi";
    $desc = "The true essence of land comes from its beauty and fragrance. the finest pattern of henna has its own aroma.Do you have that talent? then come and participate.";
    $duration = "45 mins";
    $participant = "2";
    include("includes/desc.php");
  ?>

  <section class="rules evt-bottom">
    <h1>Rules</h1>
    <ul>
      <li>Team event( two members-one who will draw and the other whose hand will be used for the art).</li>
      <li>Participants have to carry their own materials.</li>
      <li>Time allotment: 45min.</li>
      <li>Materials will not ne provided at the spot.</li>
      <li>The decision of the judges will be final and binding.</li>
    </ul>
  </section>

  <?php
    $head = "Nail Art";
    $desc = "Stars, Sparkles,moon and colours that beautify your nail. The art of choice is never missing this chance. lets come and nail art your fingers.";
    $duration = "45 mins";
    $participant = "2";
    include("includes/desc.php");
  ?>

  <section class="rules evt-bottom">
    <h1>Rules</h1>
    <ul>
      <li>Team event( two members-one who will paint and the other one whom art will be made).</li>
      <li>Participants have to carry their own materials.</li>
      <li>Time allotment: 45min.</li>
      <li>Materials will not ne provided at the spot.</li>
      <li>The decision of the judges will be final and binding.</li>
    </ul>
  </section>

</main>

<?php include("includes/footer.php"); ?>
