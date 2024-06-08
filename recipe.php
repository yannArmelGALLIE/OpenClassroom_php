<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>

<body>
    <h1><strong>Affichage de recettes</strong></h1>
    <?php foreach($recipes as $recipe) : ?>
    <?php if(array_key_exists('is_enabled', $recipe) && $recipe['is_enabled']) : ?>
    <article>
        <h3><?php echo $recipe['title'] ?></h3>
        <p><?php echo $recipe['recipe'] ?></p>
        <i><?php echo $recipe['author'] ?></i>
    </article>
    <?php endif; ?>
    <?php endforeach; ?>
</body>

</html>