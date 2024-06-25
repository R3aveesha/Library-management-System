<html>
  <head>
    <title>IABT University Library</title>
    <link rel="icon" type="image/png" href="img/logo3.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="Style/login.css">
    <style>
      .body
      {
        background-image: url("img/l3.jpg");
      }
    </style>
  </head>

  <body class="body">
    <header class="h">
      <img class="hb" src=""> 
      <a href="home.php"><img class="img1" src="img/logo3.jpeg" alt="logo"></a>
      <a href="loginpage.php"><img class="img2" src="img/avatar.png" alt="avatar"></a>
      <a class="reg" href="Register.html">Register</a>
      <h1 class="header">IABT UNIVERSITY LIBRARY</h1>

      <!-- menu bar design -->
      <ul class="menubar">
        <li><a href="Home.php">Home</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="facilities.php">Facilities</a></li>
        <li><a href="membership.php">Membership</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="new arivals1.php">New Arrivals</a></li>
        <li><a href="myprofile.php">My Profile</a></li>
        <li><a href="Ask Librarian.html">Ask Librarian</a></li>
      </ul>
    </header>

    <main class="content">
       <div class="container-1">
          <center>
            <h2 style="font-size: 50px;margin-top: 0px;">Login</h2>
              </center>
    
       <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
    <form method="post" action="loginprocess.php">
        <div class="lo">
            <label for="email">Email:</label>
            <input class="LO" type="email" id="email" name="email" required>
        </div>
        <div class="lo">
            <label for="password">Password:</label>
            <input class="LO" type="password" id="password" name="password" required>
        </div>
        <div class="lo">
            <button class="bu" type="submit">Login</button>
        </div>
    </form>
    <h5>Don't you have a account </h5>

    <div class="lo">
            <a href="Register.html"><button class="bu" type="submit">Register Now </button></a>
 </div>

</div>

</div>
        </div>
    </main>

    <hr class="hr2">
    <footer>
      <h3 class="footer">IABT UNIVERSITY LIBRARY<br>
        Bandaranayake road,<br>
        Colombo 05.
      </h3>
    </footer>
  </body>
</html>