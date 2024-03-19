<?php
    // Connection string
    include('includes/connect.php');

    $heading;

    //show tournaments for a specific grand slam if a grandSlamId is passed
    //otherwise show all grand slams
    if(isset($_GET['tournaments'])){

        $grandSlamId = $_GET['grandSlamId'];

        $query = "SELECT grandSlams.grandSlam, types.type, tournaments.*, CONCAT(players.firstName, ' ', players.lastName) AS playerName
                FROM tournaments 
                JOIN grandSlams ON tournaments.grandSlamId = grandSlams.grandSlamId 
                JOIN types ON tournaments.typeId = types.typeId 
                JOIN finals ON tournaments.tournamentId = finals.tournamentId 
                JOIN players ON finals.champion = players.playerId
                WHERE grandSlams.grandSlamId = '$grandSlamId'
                ORDER BY tournaments.tournamentYear DESC";

        $tournaments = mysqli_query($connect, $query);

        $result = $tournaments -> fetch_assoc();

        //page heading to include the grand slam name
        $heading = $result['grandSlam'] . ' Tournaments';

    } else{
        $query = "SELECT grandSlams.grandSlam, types.type, tournaments.*, CONCAT(players.firstName, ' ', players.lastName) AS playerName
                FROM tournaments 
                JOIN grandSlams ON tournaments.grandSlamId = grandSlams.grandSlamId 
                JOIN types ON tournaments.typeId = types.typeId 
                JOIN finals ON tournaments.tournamentId = finals.tournamentId 
                JOIN players ON finals.champion = players.playerId
                ORDER BY tournaments.tournamentYear DESC";

        $tournaments = mysqli_query($connect, $query);

        $heading = 'Tournaments';
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tournaments</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('reusables/nav.php') ?>
    <main class="contentWrapper">
        <div>

            <div class="headingContainer">
                <?php echo '<h1 class="pageHeading">'. $heading .'</h1>';?>
                <div>
                    <a class="btn addBtn" href="createTournament.php">Add Tournament +</a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Type</th>
                    <th scope="col">Champion</th>
                    <th scope="col">Grand Slam</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($tournaments as $tournament) {

                            echo '<tr>
                                <td>'. $tournament['tournamentYear'] .'</td>
                                <td>'. $tournament['type'] .'</td>
                                <td>'. $tournament['playerName'] .'</td>
                                <td>'. $tournament['grandSlam'] .'</td>
                                <td>
                                    <div class="tableBtn">
                                        <form method="GET" action="final.php">
                                            <input type="hidden" name="tournamentId" value="' . $tournament['tournamentId'] . '">
                                            <button type="submit" name="final" class="btn viewBtn">View</button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="tableBtn">
                                        <form method="GET" action="editTournament.php">
                                            <input type="hidden" name="id" value="' . $tournament['tournamentId'] . '">
                                            <button type="submit" name="edit" class="btn actionBtn">Edit</button>
                                        </form>
                                        <form method="GET" action="includes/deleteTournament.php">
                                            <input type="hidden" name="id" value="' . $tournament['tournamentId'] . '">
                                            <button type="submit" name="delete" class="btn actionBtn">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                ';
                        }
                    ?>
                </tbody>
            </table>            
        </div>
    </main>
  </body>
</html>