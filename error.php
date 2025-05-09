<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Erreur - Bright Coders</title>
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

    <section class="error-section">
        <div class="error-container">
            <h1>Oups ! Une erreur s'est produite 😕</h1>
            <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) : ?>
                <div class="error-messages">
                    <?php foreach ($_SESSION['errors'] as $error) : ?>
                        <p class="error-message"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="error-actions">
                <button onclick="window.history.back()" class="back-button">Retourner au formulaire</button>
                <button onclick="window.location.href='index.html'" class="home-button">Page d'accueil</button>
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
// Nettoyage des variables de session après affichage
unset($_SESSION['errors']);
?>
