<?php

if (isset($_POST['login-submit'])) {

  require 'connect.php';

  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];

  if (empty($uname) || empty($pwd)) {
    echo '<script type="text/javascript">';
    echo 'alert("Fill in required fields");';
    echo 'window.location.href = "../pages/login.php?error=emptyfields";';
    echo '</script>';
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE username = ? ";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../pages/login.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt,"s",$uname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        if (!password_verify($pwd,$row['password'])) {
          echo '<script type="text/javascript">';
          echo 'alert("Wrong password or username");';
          echo 'window.location.href = "../pages/login.php?error=wronginfo";';
          echo '</script>';
          exit();
        }
        else if (password_verify($pwd,$row['password'])) {
          session_start();
          $_SESSION['id'] = $row['userId'];
          $_SESSION['name'] = $row ['userName'];

          header("Location: ../pages/index.php?login=success");
          exit();
        }
        else {
          echo '<script type="text/javascript">';
          echo 'alert("Wrong password or username");';
          echo 'window.location.href = "../pages/login.php?error=wronginfo";';
          echo '</script>';
          exit();
      }
    }

    else {
      echo '<script type="text/javascript">';
      echo 'alert("Wrong password or username");';
      echo 'window.location.href = "../pages/login.php?error=wronginfo";';
      echo '</script>';
      exit();
    }
  }
}
}
else {
  header("Location: ../pages/login.php");
  exit();
}
