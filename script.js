// Sélectionne toutes les cartes dans le HTML
const cards = document.querySelectorAll(".card");
let chrono = document.querySelector(".chrono");
let button = document.querySelector(".valid-button");
let popup = document.querySelector("#popup");
let time_text = document.querySelector("#time_text");

// Variables pour suivre l'état du jeu
let HasFlippedCard = false;
let FirstCard, SecondCard;
let lockBoard = false;
let TimerId;
let IsPlaying = false;
let sec = 0;
let PairsMatch = 0;

// MAIN
button.addEventListener("click", function () {
  IsPlaying = true;
  PairsMatch = 0;
  // Réinitialiser les cartes
  Reset();

  // Démarrer le timer
  TimerId = setInterval(StartTimer, 1000);

  if (IsPlaying === true) {
    // Ajoute un événement de clic à chaque carte
    cards.forEach((card) => card.addEventListener("click", flipCard));
    // Cache la face de solution
    cards.forEach((card) => card.classList.remove("flip"));
    // Mélanger les cartes
    shuffleCards();
  } else {
    console.log("Error, IsPlaying is false");
  }
});

// Convert seconds to hours, minutes, and seconds format
function getTimeInHoursMinutes(seconds) {
  const t = Math.round(seconds);
  if (t <= 3600) {
    return `${String(Math.floor(t / 60) % 60).padStart(2, "0")}min ${String(
      t % 60
    ).padStart(2, "0")}sec`;
  } else {
    return `${String(Math.floor(t / 3600)).padStart(2, "0")}h${String(
      Math.floor(t / 60) % 60
    ).padStart(2, "0")}min${String(t % 60).padStart(2, "0")}sec`;
  }
}

// Start the game timer
function StartTimer() {
  sec++;
  let chrono = document.querySelector(".chrono");
  chrono.textContent = getTimeInHoursMinutes(sec);
}

// Reset the game timer
function Reset() {
  sec = 0;
  clearInterval(TimerId);
  let chrono = document.querySelector(".chrono");
  chrono.textContent = sec + " s";
}

// Pop Up
function togglePopup() {
  popup.classList.add("open");
  time_text.textContent = sec + " !";
  IsPlaying = false;
  Reset();
}

function togglePopupRemove() {
  popup.classList.remove("open");
  Reset();
}

// Fonction pour retourner une carte
function flipCard() {
  if (lockBoard === true) {
    return; // Ignore le clic si le tableau est bloqué
  }

  if (this === FirstCard) {
    return; // Ignore le clic si c'est la même carte qu'on a déjà retournée
  }

  this.classList.toggle("flip"); // Retourne la carte

  if (HasFlippedCard === false) {
    // Premier clic : enregistre la première carte
    HasFlippedCard = true;
    FirstCard = this;
  } else {
    // Deuxième clic : enregistre la deuxième carte et vérifie la correspondance
    HasFlippedCard = false;
    SecondCard = this;
    CheckMatch();
  }
}

// Fonction pour vérifier si les deux cartes retournées correspondent
function CheckMatch() {
  if (FirstCard.dataset.framework === SecondCard.dataset.framework) {
    // Si les cartes correspondent, désactive les cartes
    PairsMatch += 1;

    // Condition de Victoire
    if (PairsMatch === 6) {
      togglePopup();
    }

    DisableCard();
  } else {
    // Si elles ne correspondent pas, retourne les cartes
    unflipCards();
  }
}

// Fonction pour désactiver les cartes après une correspondance
function DisableCard() {
  FirstCard.removeEventListener("click", flipCard);
  SecondCard.removeEventListener("click", flipCard);
  ResetBoard();
}

// Fonction pour retourner les cartes si elles ne correspondent pas
function unflipCards() {
  lockBoard = true; // Bloque le tableau pendant l'animation
  setTimeout(() => {
    FirstCard.classList.remove("flip");
    SecondCard.classList.remove("flip");
    ResetBoard();
  }, 1000);
}

// Fonction pour réinitialiser l'état du jeu
function ResetBoard() {
  HasFlippedCard = false; // Réinitialise la première carte
  lockBoard = false; // Débloque le tableau
  [FirstCard, SecondCard] = [null, null]; // Réinitialise les cartes retournées
}

// Fonction pour mélanger les cartes
function shuffleCards() {
  // Mélange aléatoire des cartes en réassignant leur ordre
  cards.forEach((card) => {
    let randomNbr = Math.floor(Math.random() * cards.length); // Génère un nombre aléatoire pour l'ordre des cartes
    card.style.order = randomNbr; // Applique l'ordre aléatoire aux cartes
  });
}
