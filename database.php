<?php

function connectToDbAndGetPdo(){
    // Etablir la connexion entre le serveur et PHP
$servername = "localhost";
$username = "root";
$password = "root";


try {
    $bdd = new PDO("mysql:host=$servername;dbname=memory_game", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie";
    return $bdd;
}catch (PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

}


?>