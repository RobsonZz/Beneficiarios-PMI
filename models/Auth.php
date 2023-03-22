<?php
require 'config.php';
require 'dao/DaoUser.php';
require_once 'models/User.php';

class Auth {
  private $pdo;
  private $base;
  private $dao;
  private $DaoUser;
  
  public function __construct(PDO $pdo, $base){
    $this->pdo = $pdo;
    $this->base = $base;
    $this->dao = new DaoUser($this->pdo);
  }

  public function checklogin(){
    if(!empty($_SESSION['token'])){
      $token = $_SESSION['token'];
      
      $DaoUser = new DaoUser($this->pdo);
      $user = $this->dao->findByToken($token);
      if($user){
        return $user;
      }
    }
    header("Location:".$this->base."/login.php");
    exit;
  }
  public function validateLogin($name, $password){
    $user = $this->dao->findByName($name);
   
      if($user){
    if(password_verify($password, $user->password)){
      $token = md5(time().rand(0, 99));
      $_SESSION['token'] = $token;
      $user->token = $token;
      $this->dao->update($user);
      return true;
    }
      }
    return false;
  }
}