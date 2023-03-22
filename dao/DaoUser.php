<?php
require 'config.php';
require_once 'models/User.php';

class DaoUser implements DaoDao{
  private $pdo;

  public function __construct(PDO $driver){
    $this->pdo = $driver;
  }
  private function generateUser($array){
    $u = new User();
    $u->id = $array['id'] ?? 0;
    $u->name = $array['name'] ?? '';
    $u->password = $array['password'] ?? '';
    $u->token = $array['token'] ?? '';
    
    return $u;
  }
  public function findByToken($token){
    if(!empty($token)){
      $sql = $this->pdo->prepare("SELECT * FROM users WHERE token = :token");
      $sql->bindValue(':token', $token);
      $sql->execute();

      if($sql->rowCount() > 0){
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $user = $this->generateUser($data);
        return $user;
      }
    }
    return false;
  }
  
  public function findByName($name){
    if(!empty($name)){
      $sql = $this->pdo->prepare("SELECT * FROM users WHERE name = :name");
      $sql->bindValue(':name', $name);
      $sql->execute();

      if($sql->rowCount() > 0){
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $user = $this->generateUser($data);
        return $user;
      }
    }
    return false;
  }
 
  public function update(User $u){
    $sql = $this->pdo->prepare("UPDATE users SET name = :name, password = :password, 
    token = :token WHERE id = :id");
   
    $sql->bindValue(':name', $u->name);
    $sql->bindValue(':password', $u->password);
    $sql->bindValue(':token', $u->token);
    $sql->bindValue(':id', $u->id);
    
    $sql->execute();
    return true;
  }
}
