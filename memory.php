<!DOCTYPE html>
<html lang="fr">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="style_memory.css">
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

    <h2>Une petite partie ?</h2>

    <!-- Game Start-->
    <button class="valid-button" >START</button>
    <h3>Chronomètre : <span class="chrono"></span></h3>

    <!-- Popup -->
    <div id="popup">
        <div class="pop-message">
            <h4>Vous avez gagné !</h4>
            <p>Votre score : <span id="time_text"></span></p>
            <a href="index.html" class="pop-link">Rejouer !</a> 
            <a href="javascript:void(0)" class="popup-exit" onclick="togglePopupRemove()">X</a>
        </div>
    </div>

   <!-- Game --> 
<section class="memory_game">
    
    <div class="card" data-framework="celestin">
        <img class="front_card" src="Images/celestin.png" alt="celestin">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    <div class="card" data-framework="celestin">
        <img class="front_card" src="Images/celestin.png" alt="celestin">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>

    <div class="card" data-framework="clement">
        <img class="front_card" src="Images/clement.png" alt="clement">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    <div class="card" data-framework="clement">
        <img class="front_card" src="Images/clement.png" alt="clement">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>

    <div class="card" data-framework="mael">
        <img class="front_card" src="Images/mael.png" alt="mael">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    <div class="card" data-framework="mael">
        <img class="front_card" src="Images/mael.png" alt="mael">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>

    <div class="card" data-framework="mateis">
        <img class="front_card" src="Images/mateis.png" alt="mateis">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div> 
    <div class="card" data-framework="mateis">
        <img class="front_card" src="Images/mateis.png" alt="mateis">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    
    <div class="card" data-framework="matheo">
        <img class="front_card" src="Images/matheo.png" alt="matheo">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    <div class="card" data-framework="matheo">
        <img class="front_card" src="Images/matheo.png" alt="matheo">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    
    <div class="card" data-framework="mathys">
        <img class="front_card" src="Images/mathys.png" alt="mathys">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>
    <div class="card" data-framework="mathys">
        <img class="front_card" src="Images/mathys.png" alt="mathys">
        <img class="back_card" src="Images/king.jpg" alt="King">
    </div>

</section>

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
  
    <script src="script.js"></script>
</body>
</html>