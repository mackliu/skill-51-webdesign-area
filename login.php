<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login | Mr. Victab</title>
</head>

<body id="login">
  <header>
    <nav class="container">

      <h1>LOGO</h1>
      <a href="home.php">Home</a>
      <a href="tourist.php">Tourist Attractions</a>
      <a href="culture.php">Culture</a>
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
      <img src="img/011.JPG">
      <form action="api.php" method="post">
        USER NAME:<input type="text" name="acc"><br><br>
        PASSWORD:<input type="text" name="pw"><br><br>
        CAPTCHA CODE: <span style="user-select:none">
          <?php echo $code=rand(100000,999999);?>
          </span><br><br>
        ENTER CAPTCHA:<input type="text" name="chk"><br><br>
        <input type="hidden" name="code" value="<?=$code;?>">
        <input type="submit" value="SEND"><br><br>
        <a href='reg.php'>REGISTRATION</a>
      </form>
    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>