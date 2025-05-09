<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Validation des données
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Le nom est requis";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis";
    }

    // S'il y a des erreurs
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        header("Location: error.php");
        exit();
    }

    // Configuration pour l'envoi d'email
    $to = "hello@Kidscoding.ma"; // L'adresse email de réception
    $subject = "Nouveau message de Bright Coders";
    $email_message = "Nouveau message de contact :\n\n";
    $email_message .= "Nom: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Message:\n" . $message . "\n";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Tentative d'envoi de l'email
    if (mail($to, $subject, $email_message, $headers)) {
        // Enregistrement dans un fichier log
        $log_file = 'contact_log.txt';
        $log_message = date('Y-m-d H:i:s') . " - Message reçu de : " . $email . "\n";
        file_put_contents($log_file, $log_message, FILE_APPEND);

        $_SESSION['success'] = true;
        header("Location: thank_you.php");
        exit();
    } else {
        $_SESSION['errors'] = ["Une erreur est survenue lors de l'envoi du message"];
        header("Location: error.php");
        exit();
    }
} else {
    // Si quelqu'un essaie d'accéder directement au fichier
    header("Location: index.html");
    exit();
}
?>
