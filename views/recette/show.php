<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $recette->name?></title>
</head>
<body>
  <h1><?php echo $recette->name?></h1>

  <h2>Liste des ingrédients</h2>
  <ul>
    <?php foreach ($ingredients as $ingredient): ?>
      <li>
          <?php echo $ingredient->name;?>
      </li>
    <?php endforeach ?>

    <form method="POST" action="/ingredient/add?recette_id=<?php echo $recette->id;?>">
      <label>Name</label>
      <input type="text" name="name"><br>
      <label>Quantité</label>
      <input type="text" name="quantity"><br>
      <label>Unité</label>
      <select name="unit">
        <option value="g">grammes</option>
        <option value="mL">mL</option>
        <option value="c">cuillères</option>
      </select><br>
      <button type="submit">Ajouter</button>
    </form>
  </ul>
</body>
</html>