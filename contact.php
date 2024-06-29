<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id=""></textarea>
        </div>
        <div>
            <label for="screenshot">Votre capture d'écran</label>
            <input type="file" name="screenshot" id="screenshot">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>