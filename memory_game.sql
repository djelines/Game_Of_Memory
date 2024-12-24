-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 24 déc. 2024 à 12:17
-- Version du serveur : 5.7.24
-- Version de PHP : 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memory_game`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `identifiant_joueur` int(11) NOT NULL,
  `email` text NOT NULL,
  `mot_de_passe` text NOT NULL,
  `pseudo` text NOT NULL,
  `date_et_heure_inscription` datetime NOT NULL,
  `date_et_heure_connexion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`identifiant_joueur`, `email`, `mot_de_passe`, `pseudo`, `date_et_heure_inscription`, `date_et_heure_connexion`) VALUES
(1, 'yannick@example.fr', 'dac35d46140d78ad62205ab9b0c70a2f79c487ac5bcce3489e2cccc100279212', 'yannick', '2024-12-24 12:11:52', '2024-12-24 13:11:52'),
(2, 'ines@example.fr', 'dac35d46140d78ad62205ab9b0c70a2f79c487ac5bcce3489e...', 'ines', '2024-12-24 12:11:52', '2024-12-24 13:11:52'),
(3, 'emma@example.fr', '5d41402abc4b2a76b9719d911017c592dac35d...', 'emma', '2024-12-24 12:12:52', '2024-12-24 13:12:52'),
(4, 'lucas@example.fr', '6cb75f652a9b52798eb6cf2201057c73dac35d...', 'lucas', '2024-12-24 12:13:52', '2024-12-24 13:13:52'),
(5, 'lea@example.fr', '70efdf2ec9b086079795c442636b55fbda...', 'lea', '2024-12-24 12:14:52', '2024-12-24 13:14:52'),
(6, 'paul@example.fr', '9c1185a5c5e9fc54612808977ee8f548b2258d...', 'paul', '2024-12-24 12:15:52', '2024-12-24 13:15:52'),
(7, 'clara@example.fr', '34173cb38f07f89ddbebc2ac9128303f7852d3...', 'clara', '2024-12-24 12:16:52', '2024-12-24 13:16:52'),
(8, 'maxime@example.fr', '45c48cce2e2d7fbdea1afc51c7c6ad26dac35d...', 'maxime', '2024-12-24 12:17:52', '2024-12-24 13:17:52'),
(9, 'julie@example.fr', 'd41d8cd98f00b204e9800998ecf8427edac35d...', 'julie', '2024-12-24 12:18:52', '2024-12-24 13:18:52'),
(10, 'antoine@example.fr', '0cc175b9c0f1b6a831c399e269772661dac...', 'antoine', '2024-12-24 12:19:52', '2024-12-24 13:19:52'),
(11, 'sarah@example.fr', '900150983cd24fb0d6963f7d28e17f72dac35d...', 'sarah', '2024-12-24 12:20:52', '2024-12-24 13:20:52');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`identifiant_joueur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `identifiant_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
