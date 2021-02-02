<?php

$dsn="mysql:host=localhost;dbname=user;charset=utf8";
$pdo=new PDO($dsn,'root','');

$id=$_GET['id'];

$pdo->query("delete from user where id='$id'");

header("location:admin.php");

?>