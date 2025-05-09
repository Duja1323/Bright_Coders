<?php
session_start();
if (!isset($_SESSION['success'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Merci - Bright Coders</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
    <header>
        <h1 class="header__logo">
            <img src="images/logo.png" alt="Bright Coders">
        </h1>
        <div class="header__btn_menu">
            <button onclick="window.location.href='index.html'" class="home-btn">Retour à l'accueil</button>
        </div>
    </header>

    <section class="thank-you-section">
        <div class="thank-you-container">
            <div class="success-icon">🎉</div>
            <h1>Merci pour votre message !</h1>
            <p>Nous avons bien reçu votre demande et nous vous répondrons dans les plus brefs délais.</p>
            <div class="next-steps">
                <h2>Prochaines étapes</h2>
                <ul>
                    <li>✉️ Vous recevrez un email de confirmation</li>
                    <li>📞 Notre équipe vous contactera sous 24-48h</li>
                    <li>🌟 En attendant, découvrez nos autres services</li>
                </ul>
            </div>
            <div class="thank-you-actions">
                <button onclick="window.location.href='index.html'" class="home-button">Retour à l'accueil</button>
                <button onclick="window.location.href='about.html'" class="about-button">En savoir plus</button>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-content">
            <div class="footer-text">
                <h3>Rejoignez l'aventure du codage !</h3>
                <p>Transformez vos enfants en super-héros du numérique</p>
            </div>
        </div>
        <p class="copyright">@bright_coders &copy; 2024 | Tous les droits sont réservés.</p>
    </footer>
</body>
</html>
<?php

unset($_SESSION['success']);
?>
