<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <main class="content">
        <div class="contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="pageHeading">Login</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="includes/loginUser.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" aria-describedby="password">
                            </div>
                            <button type="submit" name="login" class="btn formBtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </body>
</html>