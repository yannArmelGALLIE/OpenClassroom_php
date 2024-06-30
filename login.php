<?php

$postData = $_POST;

// validation du formulaire
if (isset($postData['email']) && isset($postData['password'])){
    if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)){
        $errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
    }else{
        foreach($users as $user){
            if (
                $user['email'] == $postData['email'] &&
                $user['password'] == $postData['password'] 
            ){
                $loggedUser = ['email' => $user['email'],];
            }
        }
    if (!isset($loggedUser)) {
        $errorMessage = sprintf(
            'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
            $postData['email'],
            strip_tags($postData['password'])
        );
    }
}
    
}
?>
<!-- Si l'utilisateur est non identifié on affiche le formulaire -->
<?php if (!isset($loggedUser)) : ?>
<form action="form.php" method="POST">
    <!-- si le message d'erreur on  l'affiche -->
    <?php if (isset($errorMessage)) : ?>
    <div class="alert_alert-danger" role="alert">
        <?php echo $errorMessage; ?>
    </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help"
            placeholder="you@example">
        <div class="form-text" id="form-text">L'email utilisé lors de la création du compte</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
        <button type="submit" class="btn_btn-primary">Envoyer</button>
    </div>
</form>
<!-- Si l'utilisateur est bien connecté on affiche un message de succès -->
<?php else: ?>
<div class="alert_alert-success" role="alert">
    Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
</div>
<?php endif; ?>