
<!DOCTYPE html>
<html>
  <head>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/design-user-header.css" />

  </head>
  <body>
    <header>
      <nav>
        <img class="logo" src="../images/gameshoplogo.png" alt="logo" />
        <form class="search" method="post" action="../pages/search-results.php">
          <p class="search-text">
            Search for product:
          <input type="text" name="search-game" placeholder="Product Name" />
          <button type="submit" name="search-submit">Search</button>
        </p>
        </form>
          <ul class="nav__links">
            <li><a href="../pages/index.php">HOME</a></li>
            <li><a href="../pages/merchandise.php">MERCHANDISE</a></li>
            <li><a href="../pages/videogames.php">VIDEO GAMES</a></li>
          </ul>
          <div class="logout">
            <form action="../pages/login.php" method="post">
              <button name="logout-submit" type="submit">Login</button>
            </form>
          </div>
      </nav>
    </header>
  </body>
</html>
