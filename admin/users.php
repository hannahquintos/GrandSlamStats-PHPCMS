<?php
    include('../includes/connect.php');

    $query = 'SELECT * FROM users';

    $users = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grand Slam Stats | Users</title>
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

    <main class="content">
        <div class="contentWrapper">

          <div class="headingContainer">
              <h1 class="pageHeading">Manage Users</h1>
              <div>
                  <a class="btn addBtn" href="createUser.php">Add User +</a>
              </div>
          </div>
      
          <div class="container" id="usersContainer">
              <div class="row">

                  <?php
                      foreach($users as $user){
                      
                      echo '<div class="col-md-6 mt-2 mb-4">
                              <div class="card" style="width: 100%;">
                                <div class="card-body">

                                  <div class="cardHeader">
                                    <h5 class="card-title">'. $user['firstName'] .' '. $user['lastName'] .'</h5>
                                    <div class="actionBtns">
                                        <form method="GET" action="editUser.php">
                                            <input type="hidden" name="id" value="' . $user['userId'] . '">
                                            <button type="submit" name="edit" class="btn actionBtn">Edit</button>
                                        </form>
                                        <form method="GET" action="../includes/deleteUser.php">
                                            <input type="hidden" name="id" value="' . $user['userId'] . '">
                                            <button type="submit" name="delete" class="btn actionBtn">Delete</button>
                                        </form>
                                    </div>
                                  </div>
                                  <p class="card-text">'. $user['email'] .'</p>
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