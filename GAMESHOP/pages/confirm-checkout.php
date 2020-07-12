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


    $result = mysqli_query($con, "SELECT * FROM products WHERE productId='$product_id'");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='game-box'>
               <div class='game-name'>
                  <h1>".$row['productName']."</h1>
               </div>
               <div class='game-image'>
                   <img width='300' height='300' src=../includes/images/".$row['productImg']." />
               </div>
               <div class='game-price'>
                   <h2>Product Price: </h2> <p>".$row['productPrice']."</p>
               </div>
           </div>";
    }

    echo '<div class="checkout-details">
            <div>
              <h2>Total Price: </h2>
            </div>
            <div>
              <h2>Payment Method: </h2> <p>'.$payment_type.'</p>
            </div>
            <div>
              <h2>Shipping Address: </h2>
            </div>
          </div>';

  }

?>

<?php
   require "../view/footer.php";
?>
