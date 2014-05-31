-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 31 Mai 2014 à 16:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ggiroud-ppe1`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ajout_club`(IN `nom` VARCHAR(100), IN `ville` VARCHAR(100), IN `nomdirigeant` VARCHAR(100))
    NO SQL
BEGIN 
INSERT INTO `clubs` ( `idc` , `nom`, `ville`, `nomdirigeant` ) 
VALUES ( '' , nom, ville, nomdirigeant ); 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nomcategories` varchar(50) NOT NULL,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`idcat`, `nomcategories`) VALUES
(1, 'Seniors'),
(2, '-18 ans'),
(3, 'Junior'),
(4, 'vétéran'),
(5, 'poussin');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `nomdirigeant` varchar(50) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`idc`, `nom`, `ville`, `nomdirigeant`) VALUES
(9, 'Nancy', 'Nancy', 'TEST'),
(10, 'PSG', 'Paris ', 'Gatien'),
(12, 'clubtest2', 'Strasbourg', 'Gggagaga'),
(13, 'USL', 'Ligny', 'Giroud');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `user` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`user`, `mdp`, `nom`, `prenom`) VALUES
('admin', 'password', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE IF NOT EXISTS `joueurs` (
  `idj` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `idc` int(11) NOT NULL,
  `idcat` int(11) NOT NULL,
  PRIMARY KEY (`idj`),
  KEY `idc` (`idc`),
  KEY `idcat` (`idcat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`idj`, `nom`, `prenom`, `idc`, `idcat`) VALUES
(20, 'Douchet', 'Loic', 9, 5),
(23, 'Douchet', 'Joris', 10, 2),
(24, 'Giroud', 'Morgan', 13, 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `joueurs_ibfk_1` FOREIGN KEY (`idc`) REFERENCES `clubs` (`idc`),
  ADD CONSTRAINT `joueurs_ibfk_2` FOREIGN KEY (`idcat`) REFERENCES `categories` (`idcat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
