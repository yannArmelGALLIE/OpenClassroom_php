<?php

//Les différentes recettes
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

//Les differents utilisateurs
$users = [
    [
    'full_name' => 'Mickaël Andrieu',
    'email' => 'mickael.andrieu@exemple.com',
    'age' => 34,
    ],
    [
    'full_name' => 'Mathieu Nebra',
    'email' => 'mathieu.nebra@exemple.com',
    'age' => 34,
    ],
    [
    'full_name' => 'Laurène Castor',
    'email' => 'laurene.castor@exemple.com',
    'age' => 28,
    ],
    ];

//Les différentes fonctions
/*Vérifier la validité d'une recette*/ 
function isValidRecipe(array $recipe) : bool 
{
    if(array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}
/*Récupérer les recettes valides*/ 
function getRecipes(array $recipes) : array
{
    $validRecipes = [];
    
    foreach($recipes as $recipe){
        if (isValidRecipe($recipe)){
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}
/*Afficher le nom de l'auteur*/
function displayAuthor(string $authorEmail, array $users): string
{
 foreach($users as $user){
    if ($authorEmail === $user['email']){
        return  $user['full_name'] . '(' . $user['age'] . 'ans)'; 
    } 
 }   
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de cuisine</title>
</head>

<body>
    <h1><strong>Liste des recettes de cuisine</strong></h1>
    <?php foreach(getRecipes($recipes) as $recipe) : ?>
    <article>
        <h3><?php echo $recipe['title']; ?></h3>
        <p><?php echo $recipe['recipe']; ?></p>
        <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
    </article>
    <?php endforeach; ?>
</body>

</html>