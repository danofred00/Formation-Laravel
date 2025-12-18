<?php 

    // ajout de phpmailer
    require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
    require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
  
    /**
     * Envoi d'un email
     */
    function sendMail($to, $sender, $senderName, $subject, $message) {

$mail = new PHPMailer\PHPMailer\PHPMailer(false);

        try {
    //Server settings
    // $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'VOTRE_ADRESSE_EMAIL_GOOGLE';                     //SMTP username
    $mail->Password   = 'VOTRE_MOT_DE_PASSE_APPLICATION';                               //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($sender, $senderName);
    $mail->addAddress($to);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }
?>