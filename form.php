<?php 
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php require_once(__DIR__ . '/en-tête.php'); ?>
        <h1>Site de recettes</h1>

        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php if (isset($loggedUser)) : ?>

        <?php foreach (getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
        <?php endforeach ?>
        <?php endif; ?>
    </div>
    <?php require_once(__DIR__ . '/pied_de_page.php'); ?>

</body>

</html>