<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="colors.css" />
    <link rel="stylesheet" href="style_contact.css" />
    <link rel="stylesheet" href="commons.css" />
    <script
      src="https://kit.fontawesome.com/95f6c2e1db.js"
      crossorigin="anonymous"
    ></script>
    <title>Memory Game</title>
  </head>
  <body>
    <header>
      <h1>
        <i
          class="fa-solid fa-gamepad fa-rotate-by"
          style="--fa-rotate-angle: 25deg"
        ></i
        >Nexi's Games
      </h1>
      <nav>
        <a href="#" class="menu"><i class="fa-solid fa-house"></i></a>
        <a href="memory.php" class="menu"
          ><i class="fa-brands fa-fantasy-flight-games"></i
        ></a>
        <a href="contact.php" class="menu"
          ><i class="fa-solid fa-paper-plane"></i
        ></a>
        <a href="inscription.php" class="menu"><i class="fa-solid fa-user"></i></a>
      </nav>
    </header>

    <h2>Nous contactez ?</h2>

    <form method="post" action="traitement_contact.php">
      <label for="email">Email :</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Mathys@exemple.com"
        required
      />
      <label for="sujet">Sujet :</label>
      <input
        type="text"
        id="sujet"
        name="sujet"
        placeholder="Parlons un peu..."
        required
      />
      <label for="message">Message :</label>
      <textarea
        id="message"
        name="message"
        placeholder="Voici mon message"
        rows="4"
        cols="50"
        required
      ></textarea>
      <button type="submit" name="submit">Envoyer</button>
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
