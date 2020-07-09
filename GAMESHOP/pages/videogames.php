<?php
  require "../view/user-header.php";
 ?>

<link rel="stylesheet" href="../css/design-videogames.css"/>

 <div class="wrapper">
   <h1>&nbsp;&nbsp;VIDEO GAMES</h1>
 </div>

 <?php
  $sql = "SELECT * FROM products";
  $result = mysqli_query($con, "SELECT * FROM products");

  while ($row = mysqli_fetch_array($result)) {
    echo "<div class ='game-box'>
              <div class='game-image'>
                  <img src=../images/".$row['productImg']." />
              </div>
              <div class='game-name'>
                  <h1>".$row['productName']."</h1>
              </div>
              <div class='game-price'>
                  <h2>".$row['productPrice']."</h2>
              </div>
              <div class='game-category'>
                  <h2>".$row['productCategory']."</h2>
              </div>
           </div>";
  }




  ?>


 <?php
   require "../view/footer.php";
  ?>
