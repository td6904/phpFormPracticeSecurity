<?php

$firstName = $_POST['user_firstname'];
$lastName = $_POST['user_name'];
$subject = $_POST['choice'];
$email = $_POST['user_email'];
$phone = $_POST['user_phonenumber'];
$message = $_POST['user_message'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front File</title>
</head>
<body>
<h1>Merci <?= $firstName . " " ?><?= $lastName . " " ?>de nous avoir contacté à propos de “<?= $subject ?>”.<br><br>

Un de nos conseiller vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : <br><br>

<?= '"' . $message . '"'?></h1>
</body>
</html>
