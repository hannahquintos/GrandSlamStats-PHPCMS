<?php

    //get id of record to edit
    $id = $_GET['id'];

    // Connection string
    include('includes/connect.php');

    //get existing data
    $query = "SELECT * FROM players WHERE playerId = '$id'";

    $player = mysqli_query($connect, $query);

    $result = $player -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Player</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="formContainer">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Create Player</h1>
            <form action="includes/updatePlayer.php" method="POST">
                <input type="hidden" id="playerId" name="playerId" value="<?php echo $result['playerId'];?>">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName" value="<?php echo $result['firstName'];?>">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastName" value="<?php echo $result['lastName'];?>">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" aria-describedby="birthday" value="<?php echo $result['birthday'];?>">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" aria-describedby="country" value="<?php echo $result['country'];?>">
                </div>
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" name="bio" id="bio" rows="5" aria-describedby="bio"><?php echo $result['bio'];?></textarea>
                </div>
                <button type="submit" name="editPlayer" class="btn formBtn">Submit</button>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>