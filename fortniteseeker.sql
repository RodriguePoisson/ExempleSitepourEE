-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 08 juin 2021 à 16:51
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
-- Base de données :  `fortniteseeker`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`, `date`) VALUES
(3, 'AdminFande69', 'Rodrigue est vraiment le boss', '2019-05-15 03:37:30'),
(4, 'AdminFande69', 'Rodrigue est vraiment le boss', '2019-05-15 03:41:04'),
(5, 'AdminFande69', 'Rodrigue est vraiment le boss', '2019-05-15 03:41:26'),
(6, 'AdminFande69', 'Le dieu', '2019-05-15 03:41:37'),
(7, 'froti', 'coucou', '2021-06-08 18:07:27'),
(8, 'froti', 'coucou', '2021-06-08 18:07:36'),
(9, 'froti', 'azeeaz', '2021-06-08 18:10:10');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `date_naissance`, `email`, `password`) VALUES
(33, 'froti', '1999-02-23', 'frotifrota@lol.com', '$2y$10$Cy8/OqTli2lxU/cZQGH2QuSAGvbdBzzxv73PYS38ZrggBgRuMqh5S'),
(32, 'azeazesqdqsd', '1999-02-23', 'azesqd@lol.com', '$2y$10$mvsN/w8ck9NXJH37Hr8dpOybiONO5oh/n44hL7EHQw4Y72gpV1dl.'),
(31, 'Rodrigue', '1999-02-23', 'xaiver.poisson@orange.fr', '$2y$10$p5DRrLfp3GC1kv8vwz7qlu77mMRq6aMZZNWjsT906j7mkVuWB4eeS'),
(29, 'AdminFande69', '1999-02-23', 'rorodrigue77@hotmail.fr', '$2y$10$F4C1WcK46XJyJE2fwtHkO.iPrSzc8Li.AmkJJr44JAIgh8Hj7xwLq'),
(28, 'poisson', '1984-01-21', 'xaiverz@orange.fr', '$2y$10$xMjIk3Syp7/gRkUJkLsmFOd2OWAAM0FdkRpbYHRZfYuW4wyTQxi7S'),
(27, 'Kezdiath', '1999-02-23', 'vcxcx5vxc@hotmail.com', '$2y$10$uVzC4WXP6TBa5uvWLlVHUujazFTFmhyodLv8QGXc7w7RSDkS9jr0C'),
(25, 'azeaze', '1999-02-23', 'vcxcxvxc@hotmail.com', '$2y$10$hCdn8O.N2fx4Fa.3DUd7/OF3qrp5mUdxuD.zTKIDhE8m8O/VkEr2G'),
(26, 'LeMonstre', '1999-02-23', 'azeaze@hotmail.fr', '$2y$10$rHI4Yrh4HD568qnrHZydXOvPPh0zCELk/04WMywwfZxjsnjUhpV.G'),
(19, 'Kediath', '1999-02-23', 'azert@hotmail.fr', '$2y$10$9Ywk.Na0M4qamcjGqFKP7eLLwoWr6yqGVODgqBL3R8twBbDfwQUyW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
