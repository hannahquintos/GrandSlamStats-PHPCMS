<?php

    if(isset($_GET['player'])){

        $playerId = $_GET['playerId'];

        // Connection string
        include('includes/connect.php');

        $query = "SELECT * FROM players
                WHERE playerId = '$playerId'";


        $player = mysqli_query($connect, $query);

        $result = $player -> fetch_assoc();

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
        <div id="playerContainer">
            <div id="playerContent">
            <?php
                echo '<h1 id="playerName">'. $result['firstName'] .' '. $result['lastName'] .'</h1>
                    <p id="playerCountry" class="text-body-secondary">Country: '. $result['country'] .'</p>
                    <p id="playerBirthday">Birthday: '. $result['birthday'] .'</p>
                    <p>'. $result['bio'] .'</p>';
            ?>   
            </div>
        </div>
    </main>
  </body>
</html>