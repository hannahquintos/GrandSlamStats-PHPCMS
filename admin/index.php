<?php
    include('../includes/connect.php');

    $query = 'SELECT * FROM users';

    $users = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grand Slam Stats | Home</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php 
        include('../reusables/adminnav.php');
        include( '../includes/config.php' );

        function secure()
        {
        
        if( !isset( $_SESSION['id'] ) )
        {
            
            header( 'Location: /' );
            die();
            
        }
        
        }
    ?>
    <!-- <main id="main">
      <div id="hero" class="contentWrapper">
        <div id="heroText">
          <div>
            <h1 class="text-white display-2">Welcome to Grand Slam Stats</h1>
            <p class="text-white">Discover the World of Tennis: Your gateway to grand slams, tournaments, matches, and players.</p>
            <a href="grandSlams.php" class="btn" id="heroBtn">Grand Slams</a>
          </div>  
        </div>   
      </div>
      <div id="bottomLine"></div>
    </main> -->

    <main class="content">
        <div class="contentWrapper">
            <div class="headingContainer">
              <h1 class="pageHeading">Admin Dashboard</h1>
            </div>
            <div class="container" id="playersContainer">
              <div class="row">
                <div class="col-md-6 mt-2 mb-4">
                  <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="cardHeader">
                          <h5 class="card-title">Grand Slams</h5>
                        </div>
                        <form method="GET" action="grandSlams.php">
                          <button type="submit" name="grandSlamsPage" class="btn viewBtn">Manage</button>
                        </form>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2 mb-4">
                  <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="cardHeader">
                          <h5 class="card-title">Tournaments</h5>
                        </div>
                        <form method="GET" action="tournaments.php">
                          <button type="submit" name="tournamentsPage" class="btn viewBtn">Manage</button>
                        </form>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2 mb-4">
                  <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="cardHeader">
                          <h5 class="card-title">Players</h5>
                        </div>
                        <form method="GET" action="players.php">
                          <button type="submit" name="playersPage" class="btn viewBtn">Manage</button>
                        </form>
                      </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2 mb-4">
                  <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="cardHeader">
                          <h5 class="card-title">Users</h5>
                        </div>
                        <form method="GET" action="users.php">
                          <button type="submit" name="usersPage" class="btn viewBtn">Manage</button>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>

  </body>
</html>