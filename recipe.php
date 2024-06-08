<?php

$recipes = [
    ['Cassoulet', '[...]', 'mickael.andrieu@gmail.com', true,],
    ['Couscous', '[...]', 'mickael.andrieu@gmail.com', false,],
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
    <ul>
        <?php for($lines = 0; $lines <= 1; $lines++): ?>
        <li>
            <?php echo $recipes[$lines][0] . '('. $recipes[$lines][2] . ')'; ?>
        </li>
        <?php endfor; ?>
    </ul>
</body>

</html>