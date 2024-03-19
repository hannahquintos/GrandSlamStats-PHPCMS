<?php
    include('includes/connect.php');

    //get data to be used in form selects (represents relationships between entities)

    $queryGrandSlams = 'SELECT grandSlamId, grandSlam FROM grandSlams';
    $grandSlams = mysqli_query($connect, $queryGrandSlams);

    $queryTypes = 'SELECT * FROM types';
    $types = mysqli_query($connect, $queryTypes);

    $queryPlayers = 'SELECT CONCAT(firstName, " ", lastName) AS playerName, playerId FROM players';
    $players = mysqli_query($connect, $queryPlayers);

    //get id of record to edit
    $id = $_GET['id'];

    //get existing data
    
    $queryTournaments = "SELECT tournaments.*, grandSlams.grandSlam, types.type
                        FROM tournaments 
                        JOIN grandSlams ON tournaments.grandSlamId = grandSlams.grandSlamId
                        JOIN types ON types.typeId = tournaments.typeId
                        WHERE tournamentId = '$id'";
    $tournament = mysqli_query($connect, $queryTournaments);
    $tournamentResult = $tournament -> fetch_assoc();

    $queryFinals = "SELECT finals.*, CONCAT(champion.firstName, ' ', champion.lastName) AS championName, CONCAT(opponent.firstName, ' ', opponent.lastName) AS opponentName
                    FROM finals 
                    JOIN players AS champion ON champion.playerId = finals.champion
                    JOIN players AS opponent ON opponent.playerId = finals.opponent
                    WHERE tournamentId = '$id'";
    $final = mysqli_query($connect, $queryFinals);
    $finalResult = $final -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Tournament</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="formContainer">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Edit Tournament</h1>
            <form action="includes/updateTournament.php" method="POST">
                <input type="hidden" id="tournamentId" name="tournamentId" value="<?php echo $tournamentResult['tournamentId'];?>">
                <div class="mb-3">
                    <label for="grandSlamId" class="form-label">Grand Slam</label>
                    <select class="form-select" id="grandSlamId" name="grandSlamId" aria-describedby="grandSlamId">
                        <option value="<?php echo $tournamentResult['grandSlamId'] ?>" selected><?php echo $tournamentResult['grandSlam'];?></option>
                        <?php
                            foreach($grandSlams as $grandSlam){
                                //logic to ensure the selected option isn't added again to the options list
                                if($tournamentResult['grandSlam'] != $grandSlam['grandSlam']){
                                    echo '<option value="'. $grandSlam['grandSlamId'] .'">'. $grandSlam['grandSlam'] .'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tournamentYear" class="form-label">Year</label>
                    <input type="text" class="form-control" id="tournamentYear" name="tournamentYear" aria-describedby="tournamentYear" value="<?php echo $tournamentResult['tournamentYear'];?>">
                </div>
                <div class="mb-3">
                    <label for="typeId" class="form-label">Type</label>
                    <select class="form-select" id="typeId" name="typeId" aria-describedby="typeId">
                        <option value="<?php echo $tournamentResult['typeId'] ?>" selected><?php echo $tournamentResult['type'];?></option>
                        <?php
                            foreach($types as $type){
                                if($tournamentResult['type'] != $type['type']){
                                    echo '<option value="'. $type['typeId'] .'">'. $type['type'] .'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <fieldset>
                    <legend>Final Game</legend>
                    <input type="hidden" id="finalId" name="finalId" value="<?php echo $finalResult['finalId'];?>">
                    <div class="mb-3">
                        <label for="champion" class="form-label">Champion</label>
                        <select class="form-select" id="champion" name="champion" aria-describedby="champion">
                            <option value="<?php echo $finalResult['champion'] ?>" selected><?php echo $finalResult['championName'];?></option>
                            <?php
                                foreach($players as $player){
                                    if($finalResult['championName'] != $player['playerName']){
                                        echo '<option value="'. $player['playerId'] .'">'. $player['playerName'] .'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="opponent" class="form-label">Opponent</label>
                        <select class="form-select" id="opponent" name="opponent" aria-describedby="opponent">
                            <option value="<?php echo $finalResult['opponent'] ?>" selected><?php echo $finalResult['opponentName'];?></option>
                            <?php
                                foreach($players as $player){
                                    if($finalResult['opponentName'] != $player['playerName']){
                                        echo '<option value="'. $player['playerId'] .'">'. $player['playerName'] .'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="score" class="form-label">Score</label>
                        <input type="text" class="form-control" id="score" name="score" aria-describedby="score" value="<?php echo $finalResult['score'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="youtubeURL" class="form-label">Youtube Video URL</label>
                        <input type="text" class="form-control" id="youtubeURL" name="youtubeURL" aria-describedby="youtubeURL" value="<?php echo $finalResult['youtubeURL'];?>">
                    </div>
                </fieldset>
                <button type="submit" name="editTournament" class="btn formBtn">Submit</button>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>