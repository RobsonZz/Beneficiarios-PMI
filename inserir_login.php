<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');

if($name && $password){
  
 $hash = password_hash($password, PASSWORD_DEFAULT);
  
$sql = $pdo->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
$sql->bindValue(':name', $name);
$sql->bindValue(':password', $hash);
$sql->execute();
  
  header('Location:'.$base.'/index.php');
  exit;
}
header('Location:'.$base);
  exit;

