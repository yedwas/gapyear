<?php
  session_start();
  $servername = "localhost";
  $server_user = "root";
  $server_pass = "";
  $dbname = "gameshop";
  // $username = $_SESSION['username'];
  $con = new mysqli($servername, $server_user, $server_pass, $dbname);

  if (!$con) {
    die("Connection failed: ".mysqli_connect_error());
  }
?>
