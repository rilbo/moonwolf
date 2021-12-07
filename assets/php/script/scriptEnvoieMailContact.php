<?php
if (
  !isset($_POST['nom']) || htmlspecialchars(strip_tags($_POST['nom'])) == '' ||
  !isset($_POST['prenom']) || htmlspecialchars(strip_tags($_POST['prenom'])) == '' ||
  !isset($_POST['mail']) || htmlspecialchars(strip_tags($_POST['mail'])) == '' ||
  !isset($_POST['message']) || htmlspecialchars(strip_tags($_POST['message'])) == ''
) {
  header('Location: /');
}

// Champs obligatoires
$nom = htmlspecialchars(strip_tags($_POST['nom']));
$prenom = htmlspecialchars(strip_tags($_POST['prenom']));
$mailUser = htmlspecialchars(strip_tags($_POST['mail']));
$message = htmlspecialchars(strip_tags($_POST['message']));

require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/php/config.php';

header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->isSMTP();
  $mail->Host       = 'smtp.hostinger.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = $_SERVER['ADRESSE_MAIL'];
  $mail->Password   = $_SERVER['MDP_MAIL'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom("hello@un-premier-pas.fr", 'Formulaire de contact de Premier Pas');
  $mail->addAddress("hello@un-premier-pas.fr");
  $mail->addReplyTo($mailUser, "Contact Premier Pas");

  //Content
  $mail->isHTML(true);
  $mail->Subject = "FORMULAIRE DE CONTACT PREMIER PAS";
  $mail->Body    =
'
<div id="mail" style="width: 100%;max-width: 600px;background-color: #fff7e0;margin: 50px auto;">
<div class="banner" style="height: 100px;width: 100%;background-color: #346751;display: flex;justify-content: center;align-items: center;font-family: Verdana, Geneva, Tahoma, sans-serif;">
  <img src="https://un-premier-pas.fr/assets/img/logo_blanc.png" alt="logo" style="margin: auto;height: 80%;text-align: center;font-family: Verdana, Geneva, Tahoma, sans-serif;">
  <span class="logo_text" style="color: white;font-size: 2em;font-family: Verdana, Geneva, Tahoma, sans-serif;margin: auto;">Premier Pas</span>
</div>
<div id="content" style="font-family: Verdana, Geneva, Tahoma, sans-serif;padding: 50px 15px;">
  <h1 style="text-align: center;font-weight: bold;font-size: 1.2em;margin-bottom: 20px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Formulaire de contact de Premier Pas</h1>
  <p style="margin-bottom: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;"><span class="item" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">Auteur :</span> '.$mailUser.'</p>
  <p style="margin-bottom: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;"><span class="item" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">Nom :</span> '.$nom.'</p>
  <p style="margin-bottom: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;"><span class="item" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">Prénom :</span> '.$prenom.'</p>
  <p style="margin-bottom: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;"><span class="item" style="font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">Message :</span></p>
  <pre style="margin-bottom: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;">
'.$message.'
  </pre>
</div>
<div class="banner" style="height: 100px;width: 100%;background-color: #346751;display: flex;justify-content: center;align-items: center;font-family: Verdana, Geneva, Tahoma, sans-serif;"></div>
</div>
';
  $mail->AltBody = "Mail de l'utilisateur : ".$mailUser." | Nom : ".$nom." | Prénom : ".$prenom." | Message : ".$message;

  $mail->send();
  // Message envoyé
  // echo 'Message has been sent';
  echo(json_encode([
    "error"   =>    false,
    "message" =>    "Le message a bien été envoyé !",
  ]));
} catch (Exception $e) {
  // Message non envoyé
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  echo(json_encode([
    "error"           =>    true,
    "errorMessage"    =>    $mail->ErrorInfo,
    "message"         =>    "Une erreur est survenue !",
  ]));
}
