<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "perpetualfuneralservice@gmail.com";
$mail->Password = "yjwredmaiouekznv";

$mail->setFrom($email, $name);
$mail->addAddress("perpetualfuneralservice@gmail.com", $name);

$mail->Subject = $subject;
$mail->Body = $message; 

$mail->addReplyTo($email, $name);

if ($mail->send()) {
    header("Location: inquiry-modal.html");
} else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>