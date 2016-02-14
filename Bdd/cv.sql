-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Février 2016 à 18:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mdp`) VALUES
(1, 'ba.bachir@hotmail.fr', 'azerty123');

-- --------------------------------------------------------

--
-- Structure de la table `autre`
--

CREATE TABLE IF NOT EXISTS `autre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `autre`
--

INSERT INTO `autre` (`id`, `contenu`) VALUES
(3, 'FranÃ§ais, Anglais, Arabe');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `competence`
--

INSERT INTO `competence` (`id`, `contenu`) VALUES
(2, 'Langages et Framework	Java/JEE (Hibernate, Struts 2), Symfony2, Zend Framework, PHP5, HTML/CSS/JAVASCRIPT, SDK Android.'),
(3, 'MÃ©thodes et technique	UML et SCRUM.'),
(4, 'SGBD	MySQL.'),
(5, 'Travail collaboratif	Git.');

-- --------------------------------------------------------

--
-- Structure de la table `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `exp`
--

INSERT INTO `exp` (`id`, `contenu`) VALUES
(1, 'ï‚§	Du 01/03/2015 au 30/09/2015 Stage de six mois en dÃ©veloppement web sous Zend chez EpressPack.'),
(2, 'ï‚§	Du 01/03/2015 au 30/09/2015 Stage de trois mois en dÃ©veloppement web sous Symfony2 chez SD3.');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `contenu`) VALUES
(8, '2015 - Aujourdâ€™hui	Master 2 informatique en technologies de lâ€™hypermÃ©dia Ã  lâ€™universitÃ© Paris VIII.'),
(9, '2014 - 2015	Master 1 informatique Ã  lâ€™universitÃ© Paris VIII.'),
(10, '2011 â€“ 2014	Licence Informatique spÃ©cialitÃ©â€“Micro-informatique et machines embarquÃ©es Ã  lâ€™universitÃ© Paris VIII');

-- --------------------------------------------------------

--
-- Structure de la table `loisir`
--

CREATE TABLE IF NOT EXISTS `loisir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `loisir`
--

INSERT INTO `loisir` (`id`, `contenu`) VALUES
(1, 'Lecture (roman, mangas), CinÃ©ma, Musique(Guitare) ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
