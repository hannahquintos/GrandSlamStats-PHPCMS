<?php

    if(isset($_GET['final'])){

        $tournamentId = $_GET['tournamentId'];

        // Connection string
        include('includes/connect.php');

        $query = "SELECT tournaments.tournamentYear, grandSlams.grandSlam, finals.*, CONCAT(champion.firstName, ' ', champion.lastName) AS championName, CONCAT(opponent.firstName, ' ', opponent.lastName) AS opponentName
                FROM finals
                JOIN tournaments ON tournaments.tournamentId = finals.tournamentId
                JOIN grandSlams ON tournaments.grandSlamId = grandSlams.grandSlamId
                JOIN players AS champion ON champion.playerId = finals.champion
                JOIN players AS opponent ON opponent.playerId = finals.opponent
                WHERE finals.tournamentId = '$tournamentId'";


        $final = mysqli_query($connect, $query);

        $result = $final -> fetch_assoc();

    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Final</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('reusables/nav.php') ?>
    <main class="contentWrapper">
        <div>
            <?php
                echo '<h1 class="pageHeading">'. $result['grandSlam'] .' '. $result['tournamentYear'] .' Final</h1>';
            ?>   
        </div>
        <div id="finalContent">
            <div>
                <?php
                    // get youtube video id - get rest of string after '='
                    $youtubeEmbed = substr($result['youtubeURL'], strpos($result['youtubeURL'], "=") + 1);

                    echo '<iframe width="660" height="415" src="https://www.youtube.com/embed/'.$youtubeEmbed.'" allowfullscreen></iframe>';
                ?>
            </div>
            <div>
                <?php
                    echo '<div id="finalDetails">
                        <p class="player">'. $result['championName'] .'</p>
                        <p id="vs">vs.</p>
                        <p class="player">'. $result['opponentName'] .'</p>
                        <p id="finalScore">'. $result['score'] .'</p>
                        </div>';
                ?>
            </div>
        </div>

    </main>
  </body>
</html>