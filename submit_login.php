<?php
session_start();
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/fonctions.php');

$postData = $_POST;

// validation du formulaire
if (isset($postData['email']) && isset($postData['password'])){
    if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)){
        $errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
    }else{
        foreach($users as $user){
            // Utilisateur trouvé
            if (
                $user['email'] == $postData['email'] &&
                $user['password'] == $postData['password'] 
            ){
                // Enregistrement de l'email de l'utilisateur en session
                $_SESSION['LOGGED_USER']= [
                   'email' => $user['email'],
                   'user_id' => $user['user_id'],
                ];
            }
        }
    if (!isset($_SESSION['LOGGED_USER'])) {
        $_SESSION['LOGIN_ERROR_MESSAGE'] = sprintf(
            'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
            $postData['email'],
            strip_tags($postData['password'])
        );
    }
}
 redirectToUrl('home.php')  ; 
}