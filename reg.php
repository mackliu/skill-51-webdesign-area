
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Home | Mr. Victab</title>
</head>

<body id="home">

  <header>
    <nav class="container">
      <h1>LOGO</h1>
      <a href="home.php" class="active">Home</a>
      <a href="tourist.php">Tourist Attractions</a>
      <a href="culture.php">Culture</a>
      <?php
      session_start();
      if(!empty($_SESSION['login'])){
        echo $_SESSION['login'];
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
      <form action="save.php" method='post'>
          帳號：<input type="text" name="acc"><br>
          密碼：<input type="password" name="pw"><br>
          姓名：<input type="text" name="name"><br>
          email：<input type="text" name="email"><br>
          地址：<input type="text" name="addr"><br>
          <input type="submit" value="註冊">
      </form>
    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>