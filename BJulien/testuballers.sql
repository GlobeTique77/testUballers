-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 24 avr. 2021 à 20:21
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testuballers`
--

-- --------------------------------------------------------

--
-- Structure de la table `testuballers`
--

CREATE TABLE `testuballers` (
  `id` int(11) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `numMail` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `datenaissance` date NOT NULL,
  `sexe` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `testuballers`
--

INSERT INTO `testuballers` (`id`, `prenom`, `nom`, `numMail`, `password`, `datenaissance`, `sexe`) VALUES
(2, 'Jean', 'Azerty', 'jeanjean@gmail.com', 'jesaispas', '1981-08-13', 'Homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `testuballers`
--
ALTER TABLE `testuballers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `testuballers`
--
ALTER TABLE `testuballers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
