<?php
    include('includes/connect.php');

    if(isset($_POST['addUser'])){
        $query = 'INSERT INTO users (firstName, lastName, email, password) VALUES (
            "'. mysqli_real_escape_string($connect, $_POST['firstName']) .'",
            "'. mysqli_real_escape_string($connect, $_POST['lastName']) .'",
            "'. mysqli_real_escape_string($connect, $_POST['email']) .'",
            "'. md5($_POST['password']) .'"
        )';

        $user = mysqli_query($connect, $query);

        if($user){
            // echo("Success");
            header("Location: login.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Manage Users</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="First Name">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="Last Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
                </div>
                <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
  </body>
</html>