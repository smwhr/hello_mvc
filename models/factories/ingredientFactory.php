<?php

require_once("models/factories/abstractFactory.php");
require_once("models/Ingredient.php");

class ingredientFactory extends abstractFactory{

  public function get_all($recette_id){

    $q = "SELECT * FROM ingredient WHERE recette_id = :recette_id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":recette_id" => $recette_id]);

    $ingredients = $stmt->fetchAll(PDO::FETCH_CLASS, "Ingredient");

    return $ingredients;
  }

  public function add_one($recette_id, 
                                    $name, 
                                    $quantity,
                                    $unit
                                  ){
    $q = "INSERT INTO ingredient SET 
                            name = :name,
                            quantity = :quantity,
                            unit = :unit,
                            recette_id = :recette_id
                    ";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":name" => $name,
                    ":quantity" => $quantity,
                    ":unit" => $unit,
                    ":recette_id" => $recette_id
                    ]);
    $id = $this->pdo->lastInsertId();
    return $id;
  }
}