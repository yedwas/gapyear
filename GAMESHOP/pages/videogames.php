<?php
  require "../view/user-header.php";
 ?>
<title>Videogame</title>
<link rel="stylesheet" href="../css/design-videogames.css"/>

 <div class="wrapper">
   <h1>&nbsp;&nbsp;VIDEO GAMES</h1>
 </div>

 <?php

  $result = mysqli_query($con, "SELECT * FROM products WHERE productCategory='videogame'");

  while ($row = mysqli_fetch_array($result)) {
   echo "<div class='child-page-listing'>
           <div class='grid-container'>
              <article class='game-listing'>
              <a href='game-page-videogame.php?name=".$row['productName']."'>
             <p class='game-title'>
             ".$row['productName']."
             </p>
              <div class='game-image'>
             <img width='300' height='169' src=../includes/images/".$row['productImg']." />
              </div>
              </a>
              </article>
              <h2>Product Price: </h2> <p>".$row['productPrice']."</p>
              <h2>Product Description: </h2> <p>".$row['productDescription']."</p>
           </div>
   </div>";
 }
  ?>


 <?php
   require "../view/footer.php";
  ?>
