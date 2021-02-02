<?php

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$addr=$_POST['addr'];

$sql="insert into user (`acc`,`pw`,`name`,`email`,`addr`) 
                 values('$acc','$pw','$name','$email','$addr')";

$dsn="mysql:host=localhost;dbname=user;charset=utf8";
$pdo=new PDO($dsn,'root','');

$pdo->query($sql);

echo "<script>";
echo "alert('註冊成功');";
echo "location.href='login.php';";
echo "</script>";  

?>