<?php
    include('includes/connect.php');

    //get data to be used in form selects (represents relationships between entities)

    $queryGrandSlams = 'SELECT grandSlamId, grandSlam FROM grandSlams';
    $grandSlams = mysqli_query($connect, $queryGrandSlams);

    $queryTypes = 'SELECT * FROM types';
    $types = mysqli_query($connect, $queryTypes);

    $queryPlayers = 'SELECT CONCAT(firstName, " ", lastName) AS playerName, playerId FROM players';
    $players = mysqli_query($connect, $queryPlayers);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Tournament</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="formContainer">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Create Tournament</h1>
            <form action="includes/addTournament.php" method="POST">
                <div class="mb-3">
                    <label for="grandSlamId" class="form-label">Grand Slam</label>
                    <select class="form-select" id="grandSlamId" name="grandSlamId" aria-describedby="grandSlamId">
                        <option selected>-- Select a Grand Slam --</option>
                        <?php
                            foreach($grandSlams as $grandSlam){
                                echo '<option value="'. $grandSlam['grandSlamId'] .'">'. $grandSlam['grandSlam'] .'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tournamentYear" class="form-label">Year</label>
                    <input type="text" class="form-control" id="tournamentYear" name="tournamentYear" aria-describedby="tournamentYear">
                </div>
                <div class="mb-3">
                    <label for="typeId" class="form-label">Type</label>
                    <select class="form-select" id="typeId" name="typeId" aria-describedby="typeId">
                        <option selected>-- Select a Tournament Type --</option>
                        <?php
                            foreach($types as $type){
                                echo '<option value="'. $type['typeId'] .'">'. $type['type'] .'</option>';
                            }
                        ?>
                    </select>
                </div>
                <fieldset>
                    <legend>Final Game</legend>
                    <div class="mb-3">
                        <label for="champion" class="form-label">Champion</label>
                        <select class="form-select" id="champion" name="champion" aria-describedby="champion">
                            <option selected>-- Select a Player --</option>
                            <?php
                                foreach($players as $player){
                                    echo '<option value="'. $player['playerId'] .'">'. $player['playerName'] .'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="opponent" class="form-label">Opponent</label>
                        <select class="form-select" id="opponent" name="opponent" aria-describedby="opponent">
                            <option selected>-- Select a Player --</option>
                            <?php
                                foreach($players as $player){
                                    echo '<option value="'. $player['playerId'] .'">'. $player['playerName'] .'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="score" class="form-label">Score</label>
                        <input type="text" class="form-control" id="score" name="score" aria-describedby="score">
                    </div>
                    <div class="mb-3">
                        <label for="youtubeURL" class="form-label">Youtube Video URL</label>
                        <input type="text" class="form-control" id="youtubeURL" name="youtubeURL" aria-describedby="youtubeURL">
                    </div>
                </fieldset>
                <button type="submit" name="newTournament" class="btn formBtn">Submit</button>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>