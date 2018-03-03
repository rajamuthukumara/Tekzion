<?php
  $lstyle = "css/eat.css";
  include("includes/header.php");
?>

<main>

  <?php
    $head = "Eat-a-thon";
    $desc = "Not good at anything other than eating? don't worry we got you covered, try our Eat-a-thon.";
    $duration = "-";
    $participant = "1";
    include("includes/desc.php");
  ?>

  <section class="rules">
	<h1>Rules</h1>
  	<ul>
  		<li>Only for those registered before 1st - 15th of march, First come first out will be followed.</li>
  		<li>Possible edible things will be given for participants</li>
  		<li>Participants will be selected for 2nd round based on first round</li>
  		<li>Judge's decision will be final no arguments</li>
  		<li>Disclaimer: The committe will not responsible for any of your health issues</li>
  	</ul>
  </section>

</main>

<?php include("includes/footer.php"); ?>
