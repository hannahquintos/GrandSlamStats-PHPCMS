<?php

    //get id of record to edit
    $id = $_GET['id'];

    // Connection string
    include('includes/connect.php');

    //get existing data
    $query = "SELECT * FROM grandSlams WHERE grandSlamId = '$id'";

    $grandSlam = mysqli_query($connect, $query);

    $result = $grandSlam -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Grand Slam</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('reusables/nav.php') ?>
    <div class="formContainer">
        <div class="row">
            <div class="col">
                <h1 class="pageHeading">Edit Grand Slam</h1>
                <form action="includes/updateGrandSlam.php" method="POST">
                    <input type="hidden" id="grandSlamId" name="grandSlamId" value="<?php echo $result['grandSlamId'];?>">
                    <div class="mb-3">
                        <label for="grandSlam" class="form-label">Grand Slam Name</label>
                        <input type="text" class="form-control" id="grandSlam" name="grandSlam" aria-describedby="grandSlam" value="<?php echo $result['grandSlam'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" aria-describedby="location" value="<?php echo $result['location'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="venue" class="form-label">Venue</label>
                        <input type="text" class="form-control" id="venue" name="venue" aria-describedby="venue" value="<?php echo $result['venue'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="surface" class="form-label">Surface</label>
                        <input type="text" class="form-control" id="surface" name="surface" aria-describedby="surface" value="<?php echo $result['surface'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" aria-describedby="description"><?php echo $result['description'];?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL" value="<?php echo $result['imageURL'];?>">
                    </div>
                    <button type="submit" name="editGrandSlam" class="btn formBtn">Update</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>