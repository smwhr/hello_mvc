<?php

/**************
 * HELLO CONTROLLER
 *************/

require_once("models/userModel.php");

$correct_name = capitalize_name($parameters["name"]);

$age = compute_age($parameters["birthday"]);


//on passe les variables à la vue

include("views/hello.php");

