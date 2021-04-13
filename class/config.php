<?php

class config{
  private $user='root';
  private $password ='';
  public $pdo = null;

  public function con(){
    try {
      $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=todoapp;port=3307',$this->user,$this->password);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
    return $this->pdo;
  }
}
 ?>
