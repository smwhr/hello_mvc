<?php

abstract class AbstractFactory{
  protected $pdo;
  
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

}