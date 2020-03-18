<?php

function ingredient_get_all($pdo, $recette_id){

  $q = "SELECT * FROM ingredient WHERE recette_id = :recette_id";
  $stmt = $pdo->prepare($q);
  $stmt->execute([":recette_id" => $recette_id]);

  $ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $ingredients;
}

function ingredient_add_one($pdo, $recette_id, 
                                  $name, 
                                  $quantity,
                                  $unit
                                ){
  $q = "INSERT INTO ingredient SET 
                          name = :name,
                          quantity = :quantity,
                          unit = :unit,
                          recette_id = :recette_id
                  ";
  $stmt = $pdo->prepare($q);
  $stmt->execute([":name" => $name,
                  ":quantity" => $quantity,
                  ":unit" => $unit,
                  ":recette_id" => $recette_id
                  ]);
  $id = $pdo->lastInsertId();
  return $id;
}