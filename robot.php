<?php
  $lstyle = "css/robot.css";
  include("includes/header.php");
?>

<main>

  <?php
    $head = "Line Follower";
    $desc = "The objective of this contest is for a robot to follow a black line on a white background, without losing the line, and navigating several 90 degree turns. The robot to complete the course in the shortest period of time while accurately tracking the course line from start to finish wins.";
    $duration = "3 mins";
    $participant = "4";
    include("includes/desc.php");
  ?>

  <section class="rules">
  	<h1>Rules</h1>
  	<h2>Size and weight limit</h2>
  	<p>The maximum size of a robot is 30 x 30 cm, the maximum weight is 3 kg. Dimensional and weight limits for robots shall be strictly enforced. Robots must have passed inspection prior to competing.</p>

  	<h2>Course Time</h2>
  	<p>Time is measured from crossing the start line until the robot crosses the finish line. A robot is deemed to have crossed the line when the forward most part of the robot contacts or crosses over the line.</p>

  	<h2>Time Limit</h2>
  	<p>A maximum of 3 minutes is allowed for a robot to complete the course. A robot that cannot complete the course in the allotted time shall be disqualified. </p>

  	<h2>Timekeeping</h2>
  	<p>Time shall be measured by an electronic gate system or by a judge with a stopwatch, based on the availability of equipment. In either case the recorded time shall be final. 2.4. Autonomous Control Once a robot has crossed the starting line it must remain fully autonomous, or it will be disqualified.</p>

  	<h2>Arena Edges</h2>
  	<p>Robot that wanders off of the arena surface will be disqualified. A robot shall be deemed to have left the arena when any wheel, leg, or track has moved completely off the arena surface.</p>

  	<h2>Losing the Line</h2>
  	<p>Any robot that loses the line course must reacquire the line at the point where it was lost, or at any earlier (e.g. already traversed) point</p>

  	<h2>Course Specifications</h2>
  	<p>The line following course shall traverse a white rectangle. The line shall be black, 15 mm wide. There shall be a starting area at the beginning of the course and an exit area at the end. The line course starts inside the starting area and ends inside the exit area. The start and end points of the line course shall be clearly marked via a transverse line. There shall be a 10 cm gap in the starting and finishing lines where the line course passes through them.</p>
  </section>

  <section class="rules">
  	<h1>Characteristics of the line course</h1>
  	<ul>
  		<li>There shall be no crossovers (e.g. places where the line crosses itself)</li>
  		<li>Switchbacks and hairpins are possible, but the adjacent sections of the line shall be no closer together than 15cm when measured from the center of each line.</li>
  		<li>The closest approach of the line course to the edges of the arena shall be no less than 15cm, measured from the center of the line.</li>
  		<li>The minimal curve radius is 7.5 cm.</li>
  		<li>Sharp angles may occur, but will not be smaller than 90°. 2.8.</li>
  		<li>The decisions of all officials regarding these rules and the conduct of the event shall be final.</li>
  		<li>The lead person of a team can present objections to the Committee, before the match is over, if there are any doubts in the exercising of these rules. If there are no Committee members present, the objection can be presented to the judge before the match is over</li>
  	</ul>
  </section>

  <section class="rules">
  	<h1>Flexibility of Rules</h1>
  	<p>As long as the concept and fundamentals of the rules are observed, these rules shall be flexible enough to encompass the changes in the number of players and of the contents of matches. Modifications or abolition of the rules can be made by the local event organizers as long as they are published prior to the event, and are consistently maintained throughout the event.</p>
  </section>

  <section class="rules">
  	<h1>Liability</h1>
  	<ul>
  		<li>Participating teams are always responsible for the safety of their robots and are liable for any accidents caused by their team members or their robots.</li>
  		<li>The RobotChallenge organization and the organizing team members will never be held responsible nor liable for any incidents and / or accidents caused by participating teams or their equipment.</li>
  	</ul>
  </section>



</main>

<?php include("includes/footer.php"); ?>
