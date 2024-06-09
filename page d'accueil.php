<?php
//Les différents variables
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/fonctions.php');
//Les différentes fonctions


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de cuisine</title>
</head>

<body>
    <?php require_once(__DIR__ . '/en-tête.php') ?>
    <h1><strong>Liste des recettes de cuisine</strong></h1>
    <?php foreach(getRecipes($recipes) as $recipe) : ?>
    <article>
        <h3><?php echo $recipe['title']; ?></h3>
        <p><?php echo $recipe['recipe']; ?></p>
        <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
    </article>
    <?php endforeach; ?>
    <?php require_once(__DIR__ . '/pied_de_page.php') ?>

</body>

</html>