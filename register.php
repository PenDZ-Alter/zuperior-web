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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Register</title>
</head>
<body>
  
  <div class="container mt-5 pt-5">
    <div class="row">
      <class class="col-12 col-sm-7 col-md-5 m-auto">
        <div class="card">
          <div class="card-body">
            <form action="./controllers/action.reg.user.php" method="POST">
              <h2 class="mt-2">Sign up your account</h2>
              <input type="text" name="name" placeholder="Name" class="form-control my-4 py-2">
              <input type="text" name="user" placeholder="Username" class="form-control my-4 py-2">
              <input type="password" name="pass" placeholder="Password" class="form-control my-4 py-2">
              <select name="role" class="form-control my-4 py-2">
                <option value="guru">Guru</option>
                <option value="murid">Murid</option>
              </select>
              <input type="text" name="alamat" placeholder="Alamat" class="form-control my-4 py-2">
              <input type="text" name="hp" placeholder="No. HP" class="form-control my-4 py-2">
              <div class="text-center mt-3">
                <button class="btn btn-primary">Sign Up</button>
                <a href="./login.php" class="nav-link mt-2">Already have an account?</a>
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