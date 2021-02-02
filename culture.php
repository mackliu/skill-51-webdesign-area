<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Culture | Mr. Victab</title>
  <script src="jquery.min.js"></script>
</head>

<body id="culture">
  <header>
    <nav class="container">

      <h1>LOGO</h1>
      <a href="home.php">Home</a>
      <a href="tourist.php">Tourist Attractions</a>
      <a href="culture.php" class="active">Culture</a>
      <?php
      session_start();
      if(!empty($_SESSION['login'])){
        echo $_SESSION['login'];
        if($_SESSION['login']=='admin'){
          echo " <a href='admin.php'>後台</a>";    
      }
        echo " <a href='logout.php'>登出</a>";
      }else{
      ?>
        <a href="login.php">Login</a>
      <?php
      }

      ?>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="box">
        <div><img src="img/04-1.jpg"></div>
        <div><img src="img/08.jpg"></div>
        <div><img src="img/09.jpg"></div>
        <div><img src="img/10.jpg"></div>
        <div><img src="img/012.jpg"></div>
      </div>
      <div class="icon">
        <img src="img/facebook.png">
        <img src="img/twitter.png">
        <img src="img/you-tube.png">
        <img src="img/google.png">
      </div>

    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>