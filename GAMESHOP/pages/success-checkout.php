<?php
  require "../view/user-header.php";
 ?>

<link rel="stylesheet" href="../css/design-success.css"/>
<title>SUCCESS</title>

<div class="wrapper">
  <h1>&nbsp;&nbsp;SUCCESS PAGE</h1>
</div>

<div class="container">
  <h1>You have successfully purchased the item!</h1>
</div>

<form class="go-back" method="post" action="index.php" >
  <button type="submit" name="go-back">Go back to homepage</button>
</form>


 <?php
   require "../view/footer.php";
  ?>
