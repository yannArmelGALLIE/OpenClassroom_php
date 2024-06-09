<?php
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