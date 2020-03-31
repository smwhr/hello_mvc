<?php

/**************
 * INGREDIENT CONTROLLER
 *************/
require_once("models/factories/RecetteFactory.php");
require_once("models/factories/IngredientFactory.php");

//List Create Read Update Delete
if($action == "add"){

  $recette_id = $parameters["recette_id"];
  $name = $_POST["name"];
  $quantity = $_POST["quantity"];
  $unit = $_POST["unit"];

  $ingredientFactory = new ingredientFactory($pdo);
  $new_id = $ingredientFactory->add_one( 
                                  $recette_id, 
                                  $name, 
                                  $quantity,
                                  $unit
                                );

  header("Location: /recette/show?id=".$recette_id);
  exit;
}else{
  var_dump("ACTION NOT FOUND");
}




