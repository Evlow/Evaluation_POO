-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 déc. 2021 à 12:23
-- Version du serveur : 5.7.35
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_final_mathilde`
--

-- --------------------------------------------------------

--
-- Structure de la table `contest`
--

DROP TABLE IF EXISTS `contest`;
CREATE TABLE IF NOT EXISTS `contest` (
  `contest_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `winner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`contest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contest`
--

INSERT INTO `contest` (`contest_id`, `game_id`, `start_date`, `winner_id`) VALUES
(1, 23, '2019-12-25', 2),
(2, 23, '2020-12-25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `min_players` tinyint(4) NOT NULL,
  `max_players` tinyint(4) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`game_id`, `title`, `min_players`, `max_players`) VALUES
(23, '7 Wonders', 2, 7),
(24, 'Ticket to Ride', 5, 5),
(25, 'Pandemic', 2, 4),
(26, 'Munchkin', 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`player_id`, `email`, `nickname`) VALUES
(1, 'luke.skywalker@rogue.sw', 'Luke'),
(2, 'amidala.padme@naboo.gov', 'Padme'),
(3, 'han.solo@millenium-falcon.com', 'HanSolo'),
(4, 'chewbacca@wook.ie', 'Chewbie'),
(5, 'rey@jakku.planet', 'Rey');

-- --------------------------------------------------------

--
-- Structure de la table `player_contest`
--

DROP TABLE IF EXISTS `player_contest`;
CREATE TABLE IF NOT EXISTS `player_contest` (
  `player_contest_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  PRIMARY KEY (`player_contest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `player_contest`
--

INSERT INTO `player_contest` (`player_contest_id`, `player_id`, `contest_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 2, 2),
(7, 3, 2),
(8, 5, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
