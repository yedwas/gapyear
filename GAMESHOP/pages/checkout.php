<?php
  require "../view/user-header.php";
 ?>

<title>Checkout</title>
<link rel="stylesheet" href="../css/design-checkout.css"/>

<form class="payment-form" name="payment-form" method="post" action="checkout.php">
  Payment Method: <select id="payment-type" name="payment-type" required>
                      <option value="Cash on Delivery">Cash on Delivery</option>
                      <option value="Credit Card/Debit Card">Credit Card/Debit Card</option>
                  </select>
                  <button type="submit" name="method-confirm">Confirm Payment Method</button>
</form>

<form class="checkout-form" name="checkout-form" method="post" action="confirm-checkout.php">
<?php
if (isset($_POST['method-confirm'])) {

  echo $_POST['payment-type'];

  if ($_POST['payment-type'] == "Credit Card/Debit Card") {

 echo '<input type="text" name="CCNumber" placeholder="Credit Card Number" required/>
       <input type="text" name="ExpDate" placeholder="Expiration Date" required/>
       <input type="number" name="CVV" placeholder="CVV" required/>
       <br />
       <input type="text" name="ShipAddress" placeholder="Shipping Address" required/>
       <button type="submit" name="checkout-confirm">Confirm Checkout</button>';
       $_SESSION['payment-type'] = $_POST['payment-type'];
    } else if ($_POST['payment-type'] == "Cash on Delivery"){

  echo '<br />
        <input type="text" name="ShipAddress" placeholder="Shipping Address" required/>
        <button type="submit" name="checkout-confirm">Confirm Checkout</button>';
        $_SESSION['payment-type'] = $_POST['payment-type'];
    }
}
?>
</form>

<?php
  require "../view/footer.php";
 ?>
