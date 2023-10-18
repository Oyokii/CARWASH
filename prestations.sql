-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 12:02
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

INSERT INTO `articles` (`idArticle`, `imageArticle`, `libelleArticle`, `descriptionArticle`, `prixArticle`, `quantiteArticle`, `typeArticle`) VALUES
(1, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'BASIC WASH CITADINE', 'Nettoyage intérieur OU Nettoyage extérieur', 50, 0,PE),
(2, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'BASIC WASH SUV/4x4', 'Nettoyage intérieur OU Nettoyage extérieur', 80, 0,PE),
(3, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'SUPER WASH CITADINE', 'Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle', 120,0,PE),
(4, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'SUPER WASH SUV/4x4', 'Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle', 170, 0,PE),
(5, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'MAXI WASH CITADINE', 'Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe', 230, 0,PE),
(6, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'MAXI WASH SUV/4x4', 'Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe', 300, 0,PE);
(7, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Aspirateur', 'Aspire tout', 300, 50,PO),
(8, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Chiffon', 'Lave tout', 40, 50,PO),
(9, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Savon', 'Mousse bien', 30, 50,PO),
(10, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Pinceau anti-poussière', 'Pince bien', 40, 50,PO),
(11, '.\\ASSETS\\IMAGES\\imgvwati.jpeg', 'Renovateur de plastique', 'Rénove bien', 80, 50,PO);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
