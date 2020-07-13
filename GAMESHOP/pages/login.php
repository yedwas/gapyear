<?php
  session_start();

  if ($_SERVER['HTTPS'] != 'on') {
             header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            exit;
             }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/design-login.css" />
</head>
  <body>
    <img class="logo" src="../images/gameshoplogo.png"/>
    <form class="box" action="../includes/login.inc.php" method="post">
    <h1 class="header"> Login to GAMESHOP</h1>
    <input class="enter-username" type="text" name="uname" placeholder="Username" />
    <input class="enter-password" type="password" name="pwd" placeholder="Password" />
    <button type="submit" name="login-submit">Login</button>
    <a class="signup-link" href="signup.php">Signup</a>
  </form>
  <form class="guest-box" action="index.php">
    <button type="submit" name="guest-enter">Enter as a guest</button>
  </form>
  </body>
</html>
