<?php

abstract class abstractFactory{
  protected $pdo;
  
  public function __construct($pdo){
    $this->pdo = $pdo;
  }

}