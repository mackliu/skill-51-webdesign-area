<?php

/* echo $_POST['chk'];
echo "<br>";
echo $_POST['code']; */
if($_POST['chk']!=$_POST['code']){
    echo "<script>";
    echo "alert('驗證碼錯誤，請重新輸入');";
    echo "location.href='login.php';";
    echo "</script>"; 
    exit();
}

$dsn="mysql:host=localhost;charset=utf8;dbname=user";

$pdo=new PDO($dsn,'root','');

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$user=$pdo->query("select * from user where acc='$acc' && pw='$pw'")->fetch();

if(!empty($user)){
    echo "<script>";
    echo "alert('登入成功');";
    echo "location.href='home.html';";
    echo "</script>";  
}else{
    echo "<script>";
    echo "alert('帳號或密碼錯誤');";
    echo "location.href='login.php';";
    echo "</script>";

}

?>