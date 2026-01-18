<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
	$subject = $_POST["subject"];
    $message = $_POST["message"];
	

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'roraglobal.lk@gmail.com';
    $mail->Password = 'ahhvdfmjydizddck';
    $mail->SMTPSecure = 'tls'; // Change to TLS
    $mail->Port = 587; // Change to Gmail TLS port
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info@sapthaglobal.com');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $bodyContent = "<h1>$subject</h1>";
    $bodyContent .= "<p>Name : $name</p>";
    $bodyContent .= "<p>Email : $email</p>";
    $bodyContent .= "<p>Subject : $subject</p>";
    $bodyContent .= "<p>Message : $message</p>";
    $mail->Body = $bodyContent;

    if (!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // JavaScript to display a success message and redirect
        echo '<script>';
        echo 'alert("Message has been sent.");';
        echo 'window.location.href = "contacts.php";';
        echo '</script>';
    }
}
?>