<?php

/**************
 * RECETTE CONTROLLER
 *************/
require_once("models/factories/recetteFactory.php");
require_once("models/factories/ingredientFactory.php");

//List Create Read Update Delete
if($action == "index"){

  // recuperation des trucs dont je vais avoir besoin
  $recetteFactory = new recetteFactory($pdo);

  //$recetteFactory->pdo = null; //error
  $recetteFactory->getIngredientSecret(); //error

  // trucs qui font des trucs
  $recettes = $recetteFactory->get_all();

  // passage du résultat à la vue
  include("views/recette/list.php");

}else if($action == "add"){

  // traitement des parametres
  $name = $_POST["name"];

  // recuperation des trucs dont je vais avoir besoin
  $recetteFactory = new recetteFactory($pdo);

  // trucs qui font des trucs
  $new_id = $recetteFactory->add_one($name);

  // passage du résultat à la vue
  header("Location: /recette");
  exit;

}else if($action == "show"){

  // traitement des parametres
  $id = $parameters["id"];

  // recuperation des trucs dont je vais avoir besoin
  $recetteFactory = new recetteFactory($pdo);
  
  // trucs qui font des trucs
  $recette = $recetteFactory->get_one($id);
  $ingredients = $recette->getIngredients();

  // passage du résultat à la vue
  include("views/recette/show.php");

}else{
  var_dump("ACTION NOT FOUND");
}




