<?php 
  session_start();
  $toggle_err = "";

  if (isset($_SESSION['message_err']) && !empty($_SESSION['message_err'])) {
    $error_message = $_SESSION['message_err'];
    $toggle_err = '<div class="alert alert-danger mt-3">' . $error_message . '</div>';
    unset($_SESSION['message_err']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <?php include "components/toggle_framework.php"; ?>
  <title>Sign in</title>
</head>
<body>
  <div class="container mt-5 pt-5">
    <div class="row">
      <class class="col-12 col-sm-7 col-md-5 m-auto">
        <div class="card">
          <div class="card-body">
            <form action="./controllers/action.user.php" method="GET">
              <h2 class="mt-2">Sign in</h2>
              <input type="text" name="username" placeholder="Username" class="form-control my-4 py-2">
              <input type="password" name="password" id="pass" placeholder="Password" class="form-control my-4 py-2">
              <div class="text-center mt-3">
                <button class="btn btn-primary">Login</button>
                <a href="#" class="nav-link mt-2">Forgot Password?</a>
                <a href="./register.php" class="nav-link">Create an account?</a>
                <?php echo $toggle_err; ?>
              </div>
            </form>
          </div>
        </div>
      </class>
    </div>
  </div>

</body>
</html>