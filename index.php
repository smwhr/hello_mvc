<?php


/**************
 * ROUTER 
 *************/

// on récupère l'url
$url = $_SERVER["REQUEST_URI"];

// on récupère le path
$path = parse_url($url, PHP_URL_PATH);

// on récupère les paramètres
$parameters = $_GET;


// on va décider du controller qui va gérer
if($path == "/hello"){
  require_once("controllers/helloController.php");
}else{
  require_once("controllers/404Controller.php");
}