<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Liste de recette</title>
</head>
<body>
  <h1>Liste de recettes</h1>
  <ul>
    <?php foreach ($recettes as $recette): ?>
      <li><?php echo $recette["name"];?></li>
    <?php endforeach ?>
  </ul>

  <form method="POST" action="/recette/add">
    <input type="text" name="name">
    <button type="submit">Ajouter</button>
  </form>
  
</body>
</html>