<?php
    // Démarrer la session pour récupérer les messages
    session_start();

    // Vérifier si un message existe dans la session
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message']; // Récupérer le message
        unset($_SESSION['message']); // Supprimer le message après l'affichage
        $color = 'green'; 
    } else {
        $message = "Qu'est-ce que tu regardes ? Inscris-toi !";
        $color = 'red'; 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="style_contact.css">
    <link rel="stylesheet" href="commons.css">
    <script src="https://kit.fontawesome.com/95f6c2e1db.js" crossorigin="anonymous"></script>
    <title>Memory Game</title>
</head>
<body>
    <header>
        <h1><i class="fa-solid fa-gamepad fa-rotate-by" style="--fa-rotate-angle: 25deg;"></i>Nexi's Games</h1>
        <nav>
            <a href="#" class="menu"><i class="fa-solid fa-house"></i></a>
            <a href="memory.php" class="menu"><i class="fa-brands fa-fantasy-flight-games"></i></a>
            <a href="contact.php" class="menu"><i class="fa-solid fa-paper-plane"></i></a>
            <a href="inscription.php" class="menu"><i class="fa-solid fa-user"></i></a>
        </nav>
    </header>
    <h2>Inscription</h2>
    <form method="POST" action="traitement_inscription.php">
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="example@email.fr" required>

        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" placeholder="Votre nom d'utilisateur" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

        <button type="submit" name="submit">S'inscrire</button>

        <!-- Afficher le message avec la couleur correspondante -->
        <div style="color: <?php echo $color; ?>; text-align: center; margin-top: 10px;">
            <?php echo $message; ?>
        </div>
    </form>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <a href="#privacy">Privacy Policy</a>
            </div>
            <div class="footer-social">
                <a href="#" aria-label="Facebook">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="#" aria-label="Twitter">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
                <a href="#" aria-label="Instagram">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Nexi Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
