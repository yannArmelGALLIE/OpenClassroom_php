<!-- Si l'utilisateur est non identifié on affiche le formulaire -->
<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
<form action="submit_login.php" method="POST">
    <!-- si le message d'erreur on  l'affiche -->
    <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
    <div class="alert_alert-danger" role="alert">
        <?php echo $_SESSION['LOGIN_ERROR_MESSAGE']; 
        unset($_SESSION['LOGIN_ERROR_MESSAGE']);
        ?>
    </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help"
            placeholder="you@example.com">
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
    Bonjour <?php echo $_SESSION['LOGGED_USER']['email']; ?> et bienvenue sur le site !
</div>
<?php endif; ?>