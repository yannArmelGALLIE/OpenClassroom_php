<?php 
$getData =$_GET;

if (
     !isset($getData['email']) 
     || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
     || empty($getData['message'])
     || trim($getData['message']) === ''
   ) 
{
    echo ('Il faut renseigner un email et un message');
    return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Message bien réçu</h1>
    <div>
        <div>
            <h5>Rappel de vos informations</h5>
            <p>
                <b>Email</b> : <?php echo ($getData['email']); ?>
            </p>
            <p>
                <b>Message</b> : <?php echo ($getData['message']); ?>
            </p>
        </div>
    </div>
</body>

</html>