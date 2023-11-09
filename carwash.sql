-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 19 oct. 2023 à 02:12
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
-- Base de données : `carwash`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `nomAdmin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenomAdmin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pseudoAdmin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdpAdmin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nomAdmin`, `prenomAdmin`, `pseudoAdmin`, `mdpAdmin`) VALUES
(1, 'manioc', 'thomas', 'oyokii', 'Ma-Tho@36seb'),
(2, 'joseph', 'loonike', 'loonike', 'loonike');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int NOT NULL AUTO_INCREMENT,
  `imageArticle` varchar(255) NOT NULL,
  `libelleArticle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descriptionArticle` varchar(255) NOT NULL,
  `prixArticle` varchar(255) NOT NULL,
  `quantiteArticle` int NOT NULL,
  `typeArticle` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ajouterPanier` tinyint(1) NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `imageArticle`, `libelleArticle`, `descriptionArticle`, `prixArticle`, `quantiteArticle`, `typeArticle`, `ajouterPanier`) VALUES
(1, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'BASIC WASH CITADINE', 'Nettoyage intérieur OU Nettoyage extérieur', '50', 0, 'PE', 0),
(2, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'BASIC WASH SUV/4x4', 'Nettoyage intérieur OU Nettoyage extérieur', '80', 0, 'PE', 0),
(3, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'SUPER WASH CITADINE', 'Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle', '120', 0, 'PE', 0),
(4, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'SUPER WASH SUV/4x4', 'Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle', '170', 0, 'PE', 0),
(5, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'MAXI WASH CITADINE', 'Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe', '230', 0, 'PE', 0),
(6, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'MAXI WASH SUV/4x4', 'Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe', '300', 0, 'PE', 0),
(7, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Aspirateur', 'Aspire tout', '300', 50, 'PO', 0),
(8, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Chiffon', 'Lave tout', '40', 50, 'PO', 0),
(9, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Savon', 'Mousse bien', '30', 50, 'PO', 0),
(10, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Pinceau anti-poussière', 'Pince bien', '40', 50, 'PO', 0),
(11, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Renovateur de plastique', 'Rénove bien', '80', 50, 'PO', 0);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `idDevis` int NOT NULL AUTO_INCREMENT,
  `dateCreationDevis` date NOT NULL,
  `nomEntreprise` varchar(255) NOT NULL,
  PRIMARY KEY (`idDevis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idCommande` int NOT NULL AUTO_INCREMENT,
  `idArticle` int NOT NULL,
  `idDevis` int NOT NULL,
  `dateDevis` date NOT NULL,
  `qteArticle` int NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
