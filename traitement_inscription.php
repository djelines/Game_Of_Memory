<?php

// Démarre la session pour utiliser $_SESSION
session_start();

include "database.php";

function Register() {
    // Si le formulaire est soumis
    if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $current_date = date("Y-m-d H:i:s");  
        // Initialisation des messages
        $message = ""; 

        // Connexion à la base de données
        $pdo = connectToDbAndGetPdo();
        
        // Hash du mot de passe
        $hashed_password = hash('sha256', $password);

        // Insertion de l'utilisateur dans la base de données
        $query = $pdo->prepare("INSERT INTO `utilisateur` (`email`, `mot_de_passe`, `pseudo`, `date_et_heure_inscription`) 
                    VALUES (:email, :mot_de_passe, :pseudo, :date_et_heure_inscription)");

        $query->execute([
            'email' => $email,
            'mot_de_passe' => $hashed_password,
            'pseudo' => $username,
            'date_et_heure_inscription' => $current_date,
        ]);

        // Créer un message de bienvenue
        $message = "Inscription réussie ! Bienvenue, $username.";

        // Sauvegarder les messages dans la session
        $_SESSION['message'] = $message;

        // echo $message;
        // echo $_SESSION['message']; 
        
        // Rediriger vers la page d'accueil après l'inscription
        header("Location: inscription.php");
        exit;
        
    }
}

Register(); 

?>
