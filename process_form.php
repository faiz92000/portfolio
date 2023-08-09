<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = $email;
    $subject = "Confirmation de réception de votre message";
    $message = "Cher $name,\n\nVotre message a été reçu avec succès.\n\nMerci pour votre contact!\n\nCordialement,\nVotre équipe.";

    $headers = "From: votre@email.com\r\n";
    $headers .= "Reply-To: votre@email.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Merci! Votre message a été envoyé et une confirmation a été envoyée à votre adresse e-mail.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
}
?>
