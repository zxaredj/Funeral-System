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


include '../database/config.php';

if ($mail->send()) {
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $subject = mysqli_real_escape_string($connection, $subject);
    $message = mysqli_real_escape_string($connection, $message);

    $query = "INSERT INTO inquiries (name, email, subject, message) 
    VALUES ('$name', '$email', '$subject', '$message')";

    if(mysqli_query($connection, $query)) {
        header("Location: inquiry-modal.html");
    } else {
        echo "Error inserting record: " . mysqli_error($connection);
    }
} else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>