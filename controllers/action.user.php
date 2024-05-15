<?php
  session_start();
  include "connect.user.php";

  $user_get = "";
  $pass_get = "";

  if (isset($_GET['username']) && isset($_GET['password'])) {
    $user_get = $_GET['username'];
    $pass_get = $_GET['password'];
  }

  $sql = "SELECT * FROM user WHERE username = '$user_get'";
  $result = $conn -> query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['nama'];
    $role = $row['role'];
    $stored_password = $row['password'];

    if ($pass_get === $stored_password && $role === "guru") {
      $_SESSION['message_err'] = "";
      $_SESSION['authenticated'] = true;
      $_SESSION['username'] = $usern_get;
      $_SESSION['name'] = $name;
      header('location: ../index.php');
      exit();
    } else if ($pass_get === $stored_password && $role === "murid") {
      $_SESSION['message_err'] = "";
      $_SESSION['authenticated'] = true;
      $_SESSION['username'] = $user_get;
      $_SESSION['name'] = $name;
      header('location: ../index.php');
      exit();
    }
    else {
      $_SESSION['message_err'] = "Incorrect password.";
    }
  } else {
    $_SESSION['message_err'] = "User not found.";
  }

  header("location: ../login.php");
?>