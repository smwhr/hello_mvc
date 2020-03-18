<?php

/**************
 * RECETTE CONTROLLER
 *************/
require_once("models/recetteModel.php");

if($action == "index"){

  $recettes = recette_get_all($pdo);

  include("views/recette/list.php");

}else if($action == "add"){

  $name = $_POST["name"];
  $new_id = recette_add_one($pdo, $name);

  header("Location: /recette");
  exit;
}else{
  var_dump("ACTION NOT FOUND");
}




