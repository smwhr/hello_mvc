<?php

/**************
 * RECETTE CONTROLLER
 *************/

if($action == "index"){

  $q = "SELECT * FROM recette;";
  $stmt = $pdo->query($q);

  $recettes = $stmt->fetchAll(PDO::FETCH_ASSOC);

  include("views/recette/list.php");

}else if($action == "add"){


}else{
  var_dump("ACTION NOT FOUND");
}




