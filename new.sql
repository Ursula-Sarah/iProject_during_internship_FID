-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 mars 2023 à 06:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `new`
--

-- --------------------------------------------------------

--
-- Structure de la table `activation`
--

DROP TABLE IF EXISTS `activation`;
CREATE TABLE IF NOT EXISTS `activation` (
  `id_activation` int NOT NULL,
  `id_codeActivation` int NOT NULL,
  `id_machine` int NOT NULL,
  `date_activation` date NOT NULL,
  `date_expiration` date NOT NULL,
  `nombre_jour_restant` int DEFAULT NULL,
  PRIMARY KEY (`id_activation`),
  KEY `id_machine` (`id_machine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `activation`
--

INSERT INTO `activation` (`id_activation`, `id_codeActivation`, `id_machine`, `date_activation`, `date_expiration`, `nombre_jour_restant`) VALUES
(77777, 7777, 4454, '2020-02-03', '2020-02-04', 0),
(1234, 44444, 2222, '2010-02-23', '2020-04-24', 0);

-- --------------------------------------------------------

--
-- Structure de la table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `mdp` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4564652 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin_user`
--

INSERT INTO `admin_user` (`id_user`, `email`, `mdp`) VALUES
(4564651, 'lo@gmail.com', '4255');

-- --------------------------------------------------------

--
-- Structure de la table `code_activation`
--

DROP TABLE IF EXISTS `code_activation`;
CREATE TABLE IF NOT EXISTS `code_activation` (
  `id_codeActivation` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) DEFAULT NULL,
  `quantite_machine` int NOT NULL,
  `date_reception` date NOT NULL,
  PRIMARY KEY (`id_codeActivation`)
) ENGINE=MyISAM AUTO_INCREMENT=7981 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `id_machine` int NOT NULL AUTO_INCREMENT,
  `code_IMMO` varchar(200) DEFAULT NULL,
  `id_user` int NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` varchar(200) NOT NULL,
  PRIMARY KEY (`id_machine`),
  KEY `id_user` (`id_user`),
  KEY `id_machine` (`id_machine`)
) ENGINE=MyISAM AUTO_INCREMENT=1000001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`id_machine`, `code_IMMO`, `id_user`, `gender`, `age`) VALUES
(46, '4444', 2, '', ''),
(55555, '4545', 0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
