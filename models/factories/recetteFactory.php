<?php

require_once("models/factories/abstractFactory.php");
require_once("models/Recette.php");

class recetteFactory extends abstractFactory{

  public function get_all(){
    $q = "SELECT * FROM recette;";
    $stmt = $this->pdo->query($q);
    $recettes = $stmt->fetchAll(PDO::FETCH_CLASS, "Recette");

    $this->getIngredientSecret();

    return $recettes;
  }

  public function add_one($name){
    $q = "INSERT INTO recette SET name = :name";
    $stmt = $this->pdo->prepare($q);
    //$stmt->execute([":name" => $name]);
    $id = $this->pdo->lastInsertId();

    return $id;
  }

  public function get_one($id){
    $q = "SELECT * FROM recette WHERE id = :id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":id" => $id]);
    $recette = $stmt->fetchObject("Recette");
    return $recette;
  }
}

