<?php
  require "../view/user-header.php";
  $name = mysqli_real_escape_string($con, $_GET['name']);
 ?>
<title>Merchandise</title>
<link rel="stylesheet" href="../css/design-product-page.css"/>

 <div class="wrapper">
   <h1>&nbsp;&nbsp;<?php echo $name ?></h1>
 </div>

 <?php

 $name = mysqli_real_escape_string($con, $_GET['name']);
 $result = mysqli_query($con, "SELECT * FROM products WHERE productCategory='merchandise' AND productName='$name'");

 while ($row = mysqli_fetch_array($result)) {
     $_SESSION['product-id'] = $row['productId'];
   echo "<div class='game-box'>
            <div class='game-image'>
                <img src=../includes/images/".$row['productImg']." />
            </div>
            <div class='game-name'>
                <h1>".$row['productName']."</h1>
            </div>
            <div class='game-summary'>
                <h2>About the Item: </h2> <p>".$row['productDescription']."</p>
            </div>
            <div class='game-diff'>
                <h2>Product Price: </h2> <p>".$row['productPrice']."</p>
            </div>
        </div>";
 }

 ?>

 <form name="game-purchase" class="game-purchase" method="post" action="checkout.php">
   <input type="number" name="product-quantity"/>
   <button type="submit" name="purchase-submit" class="purchase-submit">Purchase</button>
 </form>

<?php
  require "../view/footer.php";
?>
