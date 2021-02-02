
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>EDIT | Mr. Victab</title>
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

      <?php
      $id=$_GET['id'];
      $dsn="mysql:host=localhost;dbname=user;charset=utf8";
      $pdo=new PDO($dsn,'root','');
      $user=$pdo->query("select * from user where id='$id'")->fetch();

      ?>
      <form action="edit_user.php" method='post'>
          帳號：<?=$user['acc'];?><br>
          密碼：<?=$user['pw'];?><br>
          姓名：<input type="text" name="name" value="<?=$user['name'];?>"><br>
          email：<input type="text" name="email" value="<?=$user['email'];?>"><br>
          地址：<input type="text" name="addr" value="<?=$user['addr'];?>"><br>
          <input type="hidden" name="id" value="<?=$user['id'];?>">
          <input type="submit" value="編輯">
      </form>
    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>