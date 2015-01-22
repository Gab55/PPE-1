-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 09 Octobre 2013 à 11:29
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `fff`
--
CREATE DATABASE IF NOT EXISTS `fff` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fff`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `IDannonce` int(11) NOT NULL,
  `titreannonce` varchar(100) NOT NULL,
  `contenuannonce` varchar(8000) NOT NULL,
  `dateannonce` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`IDannonce`, `titreannonce`, `contenuannonce`, `dateannonce`) VALUES
(1, 'YEAH', ' FC METZ', '2013-09-03');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `IDclub` int(11) NOT NULL AUTO_INCREMENT,
  `nomclub` text NOT NULL,
  `adresseclub` varchar(50) NOT NULL,
  `villeclub` varchar(30) NOT NULL,
  `cpclub` varchar(10) NOT NULL,
  `logoclub` varchar(200) NOT NULL,
  PRIMARY KEY (`IDclub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`IDclub`, `nomclub`, `adresseclub`, `villeclub`, `cpclub`, `logoclub`) VALUES
(2, 'BAR LE DUC', 'BAR LE DUC', 'BAR LE DUC', '55000', 'images/logo_barleduc.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `IDjoueur` int(11) NOT NULL,
  `dateinscription` int(11) NOT NULL,
  `IDclub` int(11) NOT NULL,
  PRIMARY KEY (`IDjoueur`,`dateinscription`,`IDclub`),
  KEY `IDclub` (`IDclub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`IDjoueur`, `dateinscription`, `IDclub`) VALUES
(1, 1, 2),
(1, 29, 2),
(564, 29, 2);

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

CREATE TABLE IF NOT EXISTS `joueurs` (
  `IDjoueur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `club` text NOT NULL,
  `categorie` text NOT NULL,
  `datenaissance` date NOT NULL,
  `teljoueur` varchar(10) NOT NULL,
  `mailjoueur` varchar(50) NOT NULL,
  `Nlicencejoueur` varchar(50) NOT NULL,
  PRIMARY KEY (`IDjoueur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=565 ;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`IDjoueur`, `nom`, `prenom`, `club`, `categorie`, `datenaissance`, `teljoueur`, `mailjoueur`, `Nlicencejoueur`) VALUES
(1, 'TEST', 'TEST', 'TEST', 'TEST', '2013-09-27', '0613245897', 'TEST@TEST.TEST', '1'),
(2, 'TRUC', 'TRUC', 'Bar le duc', 'test', '2013-10-11', '156456', 'fjsfiojsfo', '2'),
(5, 'Clement', 'Liberty', '', 'surprise', '2013-10-08', '0677898595', 'soih@live.fr', '0222'),
(6, '0', '0', '0', '0', '0000-00-00', '0', '0', '0'),
(7, '0', '0', '0', '0', '0000-00-00', '0', '0', '0'),
(8, '0', '0', '0', '0', '0000-00-00', '0', '0', '0'),
(9, '0', '0', '0', '0', '0000-00-00', '0', '0', '0'),
(14, 'lol', 'lol', 'ble', 'poupou', '1994-06-14', '0654521512', 'djsghfgfd', '246'),
(564, 'jhfjh', 'bhjbhjvh', 'jhvhgv', 'poussin', '1994-06-14', '0654521512', 'djsghfgfd', '934');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDuser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`IDuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDuser`, `login`, `mdp`, `nom`, `prenom`) VALUES
(1, 'toto', 'toto', 'Administrateur', 'Toto');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`IDjoueur`) REFERENCES `joueurs` (`IDjoueur`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`IDclub`) REFERENCES `clubs` (`IDclub`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
