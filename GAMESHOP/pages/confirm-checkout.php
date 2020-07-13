<?php
  require "../view/user-header.php";
?>

<title>Confirm Checkout</title>
<link rel="stylesheet" href="../css/design-confirm-checkout.css"/>

<div class="wrapper">
  <h1>&nbsp;&nbsp;CONFIRM CHECKOUT</h1>
</div>


<?php

  if (isset($_POST['checkout-confirm'])) {

    $payment_type = $_SESSION['payment-type'];
    $product_id = $_SESSION['product-id'];
    $username = $_SESSION['name'];
    $product_quantity = $_SESSION['product-quantity'];
    $shipaddress = $_POST['ShipAddress'];

    $sql = "UPDATE users SET userAddress ='$shipaddress' WHERE userName='$username'";
    mysqli_query($con, $sql);

    // $result1 = mysqli_query($con,"SELECT * FROM users WHERE userName='$username'");
    // while ($row1 = mysqli_fetch_array($result1)) {
    //   $updatedshipaddress = $row1['userAddress'];
    // }


    $result = mysqli_query($con, "SELECT * FROM products WHERE productId='$product_id'");
    while ($row = mysqli_fetch_array($result)) {
      $price = $row['productPrice'];
      echo "<div class='game-box'>
               <div class='game-name'>
                  <h1>".$row['productName']."</h1>
               </div>
               <div class='game-image'>
                   <img width='300' height='300' src=../includes/images/".$row['productImg']." />
               </div>
               <div class='game-price'>
                   <h2>Product Price: </h2> <p>$".$row['productPrice']."</p>
               </div>
               <div>
                   <h2>Quantity: </h2> <p>".$product_quantity."</p>
               </div>
           </div>";
    }

    $total = $price * $product_quantity;

    echo '<div class="checkout-details">
            <div>
              <h2>Total Price: </h2> <p>$'.$total.'</p>
            </div>
            <div>
              <h2>Payment Method: </h2> <p>'.$payment_type.'</p>
            </div>
            <div>
              <h2>Shipping Address: </h2> <p>'.$shipaddress.'</p>
            </div>
          </div>';

    // echo '<button type="submit" href=success-checkout.php>Confirm</button>
    //       <button type="submit" href=index.php>Cancel</button>';

  }


?>

<form name="game-purchase" class="game-purchase" method="post" action="success-checkout.php">
  <button type="submit" name="purchase-submit" class="purchase-submit">Confirm</button>
</form>

<form name="game-purchase" class="game-purchase" method="post" action="index.php">
  <button type="submit" name="purchase-submit" class="purchase-submit">Go Back</button>
</form>

<?php
   require "../view/footer.php";
?>
