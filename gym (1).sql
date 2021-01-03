-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 jan. 2021 à 22:36
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
-- Base de données :  `gym`
--

-- --------------------------------------------------------

--
-- Structure de la table `dislike`
--

DROP TABLE IF EXISTS `dislike`;
CREATE TABLE IF NOT EXISTS `dislike` (
  `id_dislike` int(11) NOT NULL AUTO_INCREMENT,
  `id_evenement` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dislike`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dislike`
--

INSERT INTO `dislike` (`id_dislike`, `id_evenement`, `id_user`) VALUES
(3, 61, 5),
(10, 63, 6);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_evenement` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `nb_participants` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `delai` varchar(255) NOT NULL,
  `nb_places` int(11) DEFAULT NULL,
  `nb_like` int(11) DEFAULT NULL,
  `nb_dislike` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_evenement`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `name`, `date`, `nb_participants`, `image`, `description`, `delai`, `nb_places`, `nb_like`, `nb_dislike`) VALUES
(61, 'rania haj youssef', '2021-01-08', 5, 'camping-tente.jpg', 'azure', 'true', 9, 1, 0),
(63, 'hsine', '2021-01-19', 0, 'camping-tente.jpg', 'ahla', 'true', 15, 1, 1),
(64, 'nadine', '2020-12-23', 0, 'camping-tente.jpg', 'ahla', 'false', 56, 0, 0),
(65, 'yoga', '2020-12-31', 0, 'sortie.jfif', 'jhbn', 'false', 15, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `like1`
--

DROP TABLE IF EXISTS `like1`;
CREATE TABLE IF NOT EXISTS `like1` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_evenement` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_like`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `like1`
--

INSERT INTO `like1` (`id_like`, `id_evenement`, `id_user`) VALUES
(8, 62, 5),
(11, 65, 6),
(13, 63, 5),
(14, 61, 6);

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id_part` int(11) NOT NULL AUTO_INCREMENT,
  `id_evenement` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `placesDemandees` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_part`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`id_part`, `id_evenement`, `id_user`, `placesDemandees`) VALUES
(81, 61, 6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evenement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `evenement_id` (`evenement_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`id`, `evenement_id`, `user_id`, `rating`) VALUES
(21, 61, 5, 5),
(20, 61, 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `random` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `confirm_password`, `created_at`, `role`, `email`, `random`) VALUES
(5, 'hsine', '$2y$10$TbB.woxiC2B/eRD1.J2LMOw4z.tCkCXmuG1I6e6gmyJ7gdC.7LBtG', '$2y$10$TbB.woxiC2B/eRD1.J2LMOw4z.tCkCXmuG1I6e6gmyJ7gdC.7LBtG', '2020-12-11 09:37:05', 'Admin', 'hsine.gabsi@esprit.tn', 'lf6VJVykmoyeS6Ir0Cfd'),
(6, 'rania', '$2y$10$VDVe.XqIoeUFVboFG6EX4ueoM9KXj./O//wNln8EeOXW.z48IXCbu', '$2y$10$VDVe.XqIoeUFVboFG6EX4ueoM9KXj./O//wNln8EeOXW.z48IXCbu', '2020-12-11 09:47:31', 'client', 'ranianadine.benhadjyoussef@esprit.tn', 'Ggvc9fZQ9rpommUV0mYS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
