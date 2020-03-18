<?php
session_start();

/**************
 * ROUTER 
 *************/

// on récupère l'url
$url = $_SERVER["REQUEST_URI"];

// on récupère le path
$path = parse_url($url, PHP_URL_PATH);

@list($null, $controller, $action) = explode("/", $path);

$controller = !empty($controller) ? $controller : "main";
$action = $action ?? "index";

// on récupère les paramètres
$parameters = $_GET;

require_once("config/secret.php");

$pdo = new PDO('mysql:dbname='.$secret["db"]["dbname"].';host='.$secret["db"]["host"], $secret["db"]["username"], $secret["db"]['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// on va décider du controller qui va gérer
if($controller == "main"){
  require_once("controllers/mainController.php");
}else if($controller == "hello"){
  require_once("controllers/helloController.php");
}else if($controller == "recette"){
  require_once("controllers/recetteController.php");
}else if($controller == "ingredient"){
  require_once("controllers/ingredientController.php");
}else{
  require_once("controllers/404Controller.php");
}