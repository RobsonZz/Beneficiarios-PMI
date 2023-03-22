<?php
require 'config.php';
require 'models/Auth.php';

$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');

  if($name && $password){
    $auth = new Auth($pdo, $base);
    if($auth->validateLogin($name, $password)){
      header("Location:".$base);
      exit;
    }
  }
$_SESSION['flash'] = 'Error ao digitar nome e/ou senha';
header("Location:".$base."/login.php");
exit;