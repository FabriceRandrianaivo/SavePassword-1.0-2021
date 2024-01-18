-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 18 Janvier 2024 à 12:40
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `savepassword`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pseudo`, `mdp`) VALUES
(1, 'admin', 'admin', '', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'moi', 'moi', '', 'moi', 'a4f0e1d1b5eb23e3482a14b4a9d4e8106e83f7887471e4a73c2557ade280bfe5'),
(7, 'Randrianaivo', 'Fabrice', 'randrianaivotolotralalainafab@gmail.com', 'FabriceRandrianaivo', '29ed7ce86ffca452a73d6be646bf900bfaa395cf7ff10cc632e6d5580270a516'),
(8, 'Randrianaivo', 'Fabrice', 'fabricerandrianvo8@gmail.com', 'fabricerandrianaivo8', '29ed7ce86ffca452a73d6be646bf900bfaa395cf7ff10cc632e6d5580270a516');

-- --------------------------------------------------------

--
-- Structure de la table `users_comptes`
--

CREATE TABLE IF NOT EXISTS `users_comptes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_c` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `ident` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `users_comptes`
--

INSERT INTO `users_comptes` (`id`, `nom_c`, `user`, `pass`, `ident`) VALUES
(1, 'Facebook', 'admin', 'admin00', 1),
(2, 'twitter', 'admin', 'admin000', 1),
(3, 'instagram', 'admin01', 'admin0000', 1),
(4, 'Facebook', 'moi', 'moi0', 2),
(5, 'twitter', 'moitwitt', 'moi00', 2),
(6, 'instagram', 'moi@gram09', 'moigram09', 2),
(7, 'Facebook', 'Phania Ratovoson', 'shdkflglxss', 3),
(8, 'twitter', 'Phania Ratovoson', 'qssjfkgk:hk:g', 3),
(9, 'instagram', 'Phania Ratovoson', 'cfghjgjhgfg', 3),
(10, 'gjcjhchch', 'bgjhcvgnc', 'jvh,kv,', 4),
(11, 'xcghx', 'hvjcf', 'jbjhvgjnc', 4),
(12, 'Facebook', 'toi', 'toui', 5),
(13, 'twitter', 'Phania99', 'fgdfsdhùl', 3),
(14, 'instagram', 'admin', 'hodfddjfkjglf', 1),
(15, 'instagram', 'admin', 'admin', 2),
(16, 'Facebook', 'Fabrice Randrianaivo', 'vérotiana0310', 7),
(17, 'instagram', 'fabricerandrianaivo08', 'fabrice0310', 7),
(18, 'E-mail', 'fabricerandrianaivo8@gmail.com', 'fabrice0310', 7),
(19, 'Facebook', 'Fabrice Randrianaivo', 'hdjsfhs', 1),
(20, 'lindin', 'admin@gmail.com', 'link', 1),
(21, 'Facebook', 'Fabrice Randrianaivo', 'vérotiana0310', 8),
(22, 'Gmail', 'fabricerandrianaivo8@gmail.com', 'Fabrice0310', 8),
(23, 'Facebook', 'mathias.dylan', 'dhfzfgzj', 9),
(24, 'LinkedIn', 'https://www.linkedin.com/in/Fabrice-randrianaivo', 'fabrice0310', 7),
(25, 'E-mail', 'randrianaivotolotralalainafabr@gmail.com', 'fabrice03102000', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
