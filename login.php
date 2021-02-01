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
      <a href="home.html">Home</a>
      <a href="tourist.html">Tourist Attractions</a>
      <a href="culture.html">Culture</a>
      <a href="login.php" class="active">Login</a>
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
        <input type="submit" value="SEND">
      </form>
    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>