<?php

if (isset($_POST['submit'])) {
    echo "Le bouton est cliqué : ";
    header('Location: contact.php');
    exit(); // Arrête l'exécution du script
    }

// Destinataire et sujet de l'email
$to = "charines@outlook.fr";
$subject = "Voici le sujet : " . htmlspecialchars($sujet);

// Contenu du message email
$emailMessage = "
<html>
<body>
    <h3>Nouveau message de contact</h3>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Sujet:</strong> " . htmlspecialchars($sujet) . "</p>
    <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
</body>
</html>";

// Entêtes de l'email
$headers = "From: contact@tondomaine.com\r\n" .
    "Reply-To: " . htmlspecialchars($email) . "\r\n" .
    "Content-type: text/html; charset=UTF-8\r\n";

// Envoi de l'email
if (mail($to, $subject, $emailMessage, $headers)) {
    echo "mail envoyé";
} else {
    echo "mail non envoyé";
}
?>
