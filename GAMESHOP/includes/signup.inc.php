<?php

if (isset($_POST['signup-submit'])) {

  require 'connect.php';

  $username = $_POST['username'];
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $middlename= $_POST['middlename'];
  $suffix = $_POST['suffix'];
  $password = $_POST['password'];
  $passwordconfirm = $_POST['password-repeat'];

  if (empty($username) || empty($firstname) || empty($lastname) ||empty($password) || empty($passwordconfirm)) {
    header("Location: ../pages/signup.php?error=emptyrequiredfields&username=".$username);
    exit();
  } else if ($password !== $passwordconfirm) {
    header("Location: ../pages/signup.php?error=passwordnotcorrect&username=".$username);
    exit();
  }
  else {

    $sql = "SELECT username FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../pages/signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultcheck = mysqli_stmt_num_rows($stmt);
      if ($resultcheck > 0) {
        header("Location: ../pages/signup.php?error=usernametaken");
        exit();
      }
      else {

        $sql = "INSERT INTO users (username, password, userFirstName, userLastName, userMiddleName, userSuffix) VALUES (?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../pages/signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssssss", $username, $hashedPwd, $firstname, $lastname, $middlename, $suffix);
          mysqli_stmt_execute($stmt);
          header("Location: ../pages/signup.php?signup=success");
          exit();
        }

      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);

}
else {
  header("Location: ../pages/signup.php");
  exit();
}
