<?php

function recette_get_all($pdo){

  $q = "SELECT * FROM recette;";
  $stmt = $pdo->query($q);

  $recettes = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $recettes;
}

function recette_add_one($pdo, $name){
  $q = "INSERT INTO recette SET name = :name";
  $stmt = $pdo->prepare($q);
  //$stmt->execute([":name" => $name]);
  $id = $pdo->lastInsertId();
  return $id;
}

function recette_get_one($pdo, $id){
  $q = "SELECT * FROM recette WHERE id = :id";
  $stmt = $pdo->prepare($q);
  $stmt->execute([":id" => $id]);
  $recette = $stmt->fetch(PDO::FETCH_ASSOC);
  return $recette;
}