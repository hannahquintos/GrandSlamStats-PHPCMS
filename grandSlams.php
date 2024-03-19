<?php
    include('includes/connect.php');

    $query = 'SELECT * FROM grandSlams';

    $grandSlams = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grand Slams</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('reusables/nav.php') ?>
    <main class="content">
        <div class="contentWrapper" id="grandSlamContent">
        
            <div class="headingContainer">
                <h1 class="pageHeading">Grand Slams</h1>
                <div>
                    <a class="btn addBtn" href="createGrandSlam.php">Add Grand Slam +</a>
                </div>
            </div>

            <div id="grandSlamsContainer" class="container">
                <div class="row">

                    <?php
                        foreach($grandSlams as $grandSlam){
                        
                        echo '<div>
                                <div class="card mb-3" style="width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-4">';

                                            // logic to add attribution if required to images used
                                            if($grandSlam['imageTitle'] != null && $grandSlam['imageAlt'] != null && $grandSlam['attributionLink'] != null){
                                                echo '<a title="'. $grandSlam['imageTitle']  .'" href="'. $grandSlam['attributionLink'] .'">
                                                <img src="'.$grandSlam['imageURL'].'" style="height: 340px;" class="img-fluid rounded-start" alt="'. $grandSlam['imageURL'] .'">
                                                </a>';
                                            } else{
                                                echo '<img src="'.$grandSlam['imageURL'].'" style="height: 340px;" class="img-fluid rounded-start" alt="Grand Slam Image">';
                                            }

                                echo '</div>
                                            <div class="col-md-8 cardText">
                                                <div class="card-body">
                                                <div class="cardHeader">
                                                    <h5 class="card-title">'.$grandSlam['grandSlam'].'</h5>
                                                    <div class="actionBtns">
                                                        <form method="GET" action="editGrandSlam.php">
                                                            <input type="hidden" name="id" value="' . $grandSlam['grandSlamId'] . '">
                                                            <button type="submit" name="edit" class="btn actionBtn">Edit</button>
                                                        </form>
                                                        <form method="GET" action="includes/deleteGrandSlam.php">
                                                            <input type="hidden" name="id" value="' . $grandSlam['grandSlamId'] . '">
                                                            <button type="submit" name="delete" class="btn actionBtn">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <p class="card-text">'.$grandSlam['description'].'</p>
                                                <p class="card-text">Location: '.$grandSlam['location'].'</p>
                                                <p class="card-text">Venue: '.$grandSlam['venue'].'</p>
                                                <p class="card-text">Surface: '.$grandSlam['surface'].'</p>
                                                
                                                <form method="GET" action="tournaments.php">
                                                    <input type="hidden" name="grandSlamId" value="' . $grandSlam['grandSlamId'] . '">
                                                    <button type="submit" name="tournaments" class="btn tournamentBtn">Tournaments</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                            ';
                        
                        }
                    ?>

                </div>
            </div>
        </div>
    </main>
  </body>
</html>