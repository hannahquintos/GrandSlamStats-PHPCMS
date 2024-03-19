<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Grand Slam</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="formContainer">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Create Grand Slam</h1>
            <form action="includes/addGrandSlam.php" method="POST">
                <div class="mb-3">
                    <label for="grandSlam" class="form-label">Grand Slam Name</label>
                    <input type="text" class="form-control" id="grandSlam" name="grandSlam" aria-describedby="grandSlam">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" aria-describedby="location">
                </div>
                <div class="mb-3">
                    <label for="venue" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="venue" name="venue" aria-describedby="venue">
                </div>
                <div class="mb-3">
                    <label for="surface" class="form-label">Surface</label>
                    <input type="text" class="form-control" id="surface" name="surface" aria-describedby="surface">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" aria-describedby="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="imageURL" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
                </div>
                <button type="submit" name="newGrandSlam" class="btn formBtn">Submit</button>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>