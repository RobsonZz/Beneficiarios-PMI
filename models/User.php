<?php

class User {
  public $id;
  public $name;
  public $password;
  public $token;
}
Interface DaoDao{
  public function findByToken($token);
  public function findByName($name);
  public function update(User $u);
}
