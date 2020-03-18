<?php

/**************
 * RECETTE CONTROLLER
 *************/
require_once("models/recetteModel.php");
require_once("models/ingredientModel.php");

//List Create Read Update Delete
if($action == "index"){

  $recettes = recette_get_all($pdo);

  include("views/recette/list.php");

}else if($action == "add"){

  $name = $_POST["name"];
  $new_id = recette_add_one($pdo, $name);

  header("Location: /recette");
  exit;

}else if($action == "show"){

  $id = $parameters["id"];
  $recette = recette_get_one($pdo, $id);
  $ingredients = ingredient_get_all($pdo, $id);

  include("views/recette/show.php");

}else{
  var_dump("ACTION NOT FOUND");
}




