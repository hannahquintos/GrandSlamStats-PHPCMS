<?php
    include('includes/connect.php');

    $query = 'SELECT * FROM players ORDER BY playerId DESC';

    $players = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Players</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('reusables/nav.php') ?>
    <main class="content">
        <div class="contentWrapper">

          <div class="headingContainer">
              <h1 class="pageHeading">Players</h1>
              <div>
                  <a class="btn addBtn" href="createPlayer.php">Add Player +</a>
              </div>
          </div>
      
          <div class="container" id="playersContainer">
              <div class="row">

                  <?php
                      foreach($players as $player){
                      
                      echo '<div class="col-md-6 mt-2 mb-4">
                              <div class="card" style="width: 100%;">
                                <div class="card-body">

                                  <div class="cardHeader">
                                    <h5 class="card-title">'. $player['firstName'] .' '. $player['lastName'] .'</h5>
                                    <div class="actionBtns">
                                        <form method="GET" action="editPlayer.php">
                                            <input type="hidden" name="id" value="' . $player['playerId'] . '">
                                            <button type="submit" name="edit" class="btn actionBtn">Edit</button>
                                        </form>
                                        <form method="GET" action="includes/deletePlayer.php">
                                            <input type="hidden" name="id" value="' . $player['playerId'] . '">
                                            <button type="submit" name="delete" class="btn actionBtn">Delete</button>
                                        </form>
                                    </div>
                                  </div>
                                  <h6 class="card-subtitle mb-2 text-body-secondary">'. $player['country'] .'</h6>
                                  <form method="GET" action="player.php">
                                    <input type="hidden" name="playerId" value="' . $player['playerId'] . '">
                                    <button type="submit" name="player" class="btn viewBtn">View</button>
                                  </form>
                                </div>
                            </div>
                          </div>';
                      }
                  ?>

              </div>
          </div>

        </div>
    </main>
  </body>
</html>