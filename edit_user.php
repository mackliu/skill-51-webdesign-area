<?php

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$addr=$_POST['addr'];

$sql="update user set name='$name',email='$email',addr='$addr' where id='$id'";
$dsn="mysql:host=localhost;dbname=user;charset=utf8";
$pdo=new PDO($dsn,'root','');

$pdo->query($sql);

echo "<script>";
echo "alert('更新成功');";
echo "location.href='admin.php';";
echo "</script>";  

?>