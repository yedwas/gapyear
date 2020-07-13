<?php
if ($_SERVER['HTTPS'] != 'on') {
            header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
           exit;
            }
 ?>
<head>
  <link rel="stylesheet" href="../css/design-signup.css" />
</head>
<title>Signup</title>
 <body>
   <div class="wrapper-main">
     <img class="logo" src="../images/gameshoplogo.png"/>
     <section class="section-default">
       <form class="box" method="post" action="../includes/signup.inc.php">
         <h1 class="header">Signup Form</h1>
         <input type="text" name="username" placeholder="Username"/>
         <input type="text" name="firstname" placeholder="First Name"/>
         <input type="text" name="middlename" placeholder="Middle Name: Not Required"/>
         <input type="text" name="lastname" placeholder="Last Name"/>
         <input type="text" name="suffix" placeholder="Suffix: Not Required"/>
         <input type="password" name="password" placeholder="Password" />
         <input type="password" name="password-repeat" placeholder="Confirm Password"  />
         <button class="signup-submit" type="submit" name="signup-submit">Signup</button>
         <a href="login.php">Back to Login</a>
       </form>
     </section>
   </div>
 </body>
