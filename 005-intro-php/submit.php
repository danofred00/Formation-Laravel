<?php
    require_once 'utils.php';

    // Definition de la constante MY_EMAIL
    define('MY_EMAIL', "VOTRE_EMAIL_PERSONNELLE");

    // Récupération des données du formulaire
    $senderName = $_POST['name'];
    $sender = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    sendMail(MY_EMAIL, $sender, $senderName, $subject, $message);
?>