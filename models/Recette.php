<?php

require_once("models/factories/IngredientFactory.php");

class Recette{

  public function getIngredients($pdo){
    $ingredientFactory = new IngredientFactory($pdo);
    $ingredients = $ingredientFactory->get_all($this->id);
    return $ingredients;
  }
  
}