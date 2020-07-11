<?php
  require "../view/user-header.php";
 ?>

<form class="checkout-form" name="checkout-form" method="post">
  Payment Method: <select>
                      <option value="COD"> Cash on delivery </option>
                      <option value="CC"> Credit Card/ Debit Card</option>
                  </select>
                  <input type="text" name="Credit Card Number" placeholder="Credit Card Number"/>
                  <input type="text" name="Expiration Date" placeholder="Expiration Date"/>
                  <input type="text" name="CVV" placeholder="CVV"/>
                  <br />
                  <input type="text" name="Shipping Address"/>
</form>


<?php
  require "../view/footer.php";
?>
