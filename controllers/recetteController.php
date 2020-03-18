<?php

/**************
 * RECETTE CONTROLLER
 *************/

if($action == "index"){

  require_once("models/recetteModel.php");

  $recettes = recette_get_all($pdo);

  include("views/recette/list.php");

}else if($action == "add"){

  var_dump("CONTROLLER RECETTE / ACTION ADD");
}else{
  var_dump("ACTION NOT FOUND");
}




