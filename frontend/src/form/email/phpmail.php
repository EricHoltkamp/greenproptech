<?php
//require_once("mail/htmlMimeMail.php");
require_once("phpmailer/PHPMailerAutoload.php");
error_reporting(-1);
ini_set('display_errors',1);
ini_set('log_errors',0);

$mail = new PHPMailer;

$mail->IsSMTP();
$mail->Host = "";
$mail->Port = "";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'mail@gpt.com';
$mail->Password = '';

$_POST["email"] = trim($_POST["email"]);

$mail->isHTML(true);
$betreff = utf8_decode($_POST["email"]);
$betreff = "Anfrage über das Kontaktformular von " . $betreff;
$betreff = utf8_decode($betreff);
$mail->Subject = $betreff;

if($_POST["name"] == '' || $_POST["name"] == 'name'){
    header('HTTP/1.1 422 Validation failed');
    exit ("name");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    header('HTTP/1.1 422 Validation failed');
    exit ("email");
}

include('header.php');
include('footer.php');
$message = '
<p style="color:#333;"><strong>Name</strong>:<br>'.$_POST["name"].'</p>
<p style="color:#333;"><strong>E-Mail-Adresse</strong>:<br>'.$_POST["email"].'</p>
<p style="color:#333;"><strong>Nachricht</strong>:<br>'.$_POST["nachricht"].'</p>
';

$html = utf8_decode($header.$message.$footer);
$mail->Body = $html;
$mail->setFrom($mail->Username);
$mail->addReplyTo($_POST["email"], $_POST["name"]);
$mail->addAddress('mail@gpt.com');

#$mail->addAddress('#');
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
}
echo "success";
?>
