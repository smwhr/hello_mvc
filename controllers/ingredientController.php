<?php

/**************
 * INGREDIENT CONTROLLER
 *************/
require_once("models/recetteModel.php");
require_once("models/ingredientModel.php");

//List Create Read Update Delete
if($action == "add"){

  $recette_id = $parameters["recette_id"];
  $name = $_POST["name"];
  $quantity = $_POST["quantity"];
  $unit = $_POST["unit"];

  $new_id = ingredient_add_one($pdo, 
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




