
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Admid | Mr. Victab</title>
</head>

<body id="admin">

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
        <table>
            <tr>
                <td>帳號</td>
                <td>姓名</td>
                <td>管理</td>
            </tr>
      <?php
        $dsn="mysql:host=localhost;dbname=user;charset=utf8";
        $pdo=new PDO($dsn,'root','');
        $users=$pdo->query("select * from user where acc!='admin'")->fetchAll();

        foreach($users as $user){
        ?>            
            <tr>
                <td><?=$user['acc'];?></td>
                <td><?=$user['name'];?></td>
                <td>
                    <button onclick="location.href='edit_form.php?id=<?=$user['id'];?>'">編輯</button>
                    <button onclick="location.href='del.php?id=<?=$user['id'];?>'">刪除</button>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
  </main>
  <footer>
    <div class="container">Copyright © 2020 Mr. Victab All Rights Reserved</div>
  </footer>
</body>

</html>