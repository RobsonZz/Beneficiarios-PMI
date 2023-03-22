<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$aniversario = filter_input(INPUT_POST, 'birthday');
$descricao = filter_input(INPUT_POST, 'descricao');


if($name && $cpf && $aniversario){
$sql = $pdo->prepare("INSERT INTO cadastroatt (name, cpf, email, birthday, descricao) VALUES (:name, :cpf, :email, :birthday, :descricao)");
$sql->bindValue(':name', $name);
$sql->bindValue(':cpf', $cpf);
$sql->bindValue(':email', $email);
$sql->bindValue(':birthday', $aniversario);
$sql->bindValue(':descricao', $descricao);
$sql->execute();
  header("Location:".$base);
exit;
}else{
  $_SESSION['flash']='ERROR - Alguns dos calmpos abaixo não foram preenchidos corretamente';
  header("Location:".$base."/cadastro.php");
  exit;
}
