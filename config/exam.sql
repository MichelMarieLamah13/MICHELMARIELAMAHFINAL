-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 mai 2019 à 08:09
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exam`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `sex` enum('H','F') DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `available_for_hiring` enum('0','1') DEFAULT '0',
  `bio` text,
  `github` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`login`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `city`, `country`, `sex`, `twitter`, `available_for_hiring`, `bio`, `github`, `lname`, `fname`) VALUES
(1, 'Mike', 'mike@gmail.com', 'b2ee60370ad57d9bc3877e9024c507ab99303a64', 'salÃ©', 'Morocco', 'H', 'mike07', '1', 'I\'am Mike\r\n', 'mike13', 'Lamah', 'Michel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
