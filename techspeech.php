<?php
$lstyle = "css/tspeech.css";
include('includes/header.php');
?>

<!-- main -->

    <main>
      <?php
      $head = "Tech Speech";
      $desc = "The  participants  will  be  given a spot technical topic to speak. The topic will be a prevenient one. The speech should not be less than stipulated time given. If the participant took a long respite or if the speech was out of range, the participant will be rejected. One who was selected will be qualified to attend further round.";
      $duration = "1 - 2 mins";
      $participant = "1";
      include('includes/desc.php');
      ?>

      <section class="topic evt-bottom">
        <h1>Topics:</h1>
        <p>Big Data, cloud, Hadoop, HIVE, 5pen pc technology, Cluster computer, AI, Fiber channel, VANET, Cloud drops, IP Spoofing, Data Warehousing, 4G Technology, Graph based search engine, Google Glass, Android, Modular Phones, Blue Brain Technology, Blue Eyes Technology, Li-fi Technology, E-Paper Technology, Chrome Book, Cryptography, Airbone Technology, Nano Technology, Data Loggers, Optical Ethernet, Bio Chips, Swarm Robots, Eye Ring, Rain Technology, DNA chips, Ethical Hacking, Switch Archieve Management system(SAM), E Ball Technology, 3D-Printers, Green Computing, Mobile Jammer, 3D searching, GPS, VOice Morphing, Manet, Mesh Radio, Digital Jewelary, Red Tacton</p>
      </section>

      <section class="rules evt-bottom">
        <h1>Rules</h1>
        <div class="round1 evt-bottom">
          <h2>Round one: Pre eliminary</h2>
          <p>
            The participants will be given their own topic to speak, based on the  topic  chosen, speaking skills, and content the participants will be validated. The speech should not be less than a minute and should not exceed 2 mins.
          </p>
          <p>
            The selected list for pre eliminary will be updated for every 1 hour.
          </p>
        </div>
        <div class="round2 evt-bottom">
          <h2>Final Round</h2>
          <p>
            The participants will be given a particular topic to speak for a minute. Based on the content  and  spontaneity final selection will be done.
          </p>
        </div>
      </section>
    </main>

<?php include("./includes/footer.php"); ?>
