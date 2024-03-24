<?php

    //get id of record to edit
    $id = $_GET['id'];

    // Connection string
    include('../includes/connect.php');

    //get existing data
    $query = "SELECT * FROM users WHERE userId = '$id'";

    $user = mysqli_query($connect, $query);

    $result = $user -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create User</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('../reusables/adminnav.php') ?>
    <main class="content">
        <div class="contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <h1 class="pageHeading">Edit User</h1>
                    <form action="../includes/updateUser.php" method="POST">
                        <input type="hidden" id="userId" name="userId" value="<?php echo $result['userId'];?>">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName" value="<?php echo $result['firstName'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastName" value="<?php echo $result['lastName'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="<?php echo $result['email'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="password" value="<?php echo $result['password'];?>">
                        </div>
                        <button type="submit" name="editUser" class="btn formBtn">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </body>
</html>