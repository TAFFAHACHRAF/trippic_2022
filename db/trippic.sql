-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Juin 2022 à 23:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `trippic`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `agence_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `agence_nom` varchar(40) DEFAULT NULL,
  `agence_tel` varchar(40) DEFAULT NULL,
  `agence_logo` varchar(100) DEFAULT NULL,
  `agence_description` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`agence_id`),
  KEY `user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`agence_id`, `user_id`, `agence_nom`, `agence_tel`, `agence_logo`, `agence_description`) VALUES
(1, 0, 'Compass Rose', '05124785', 'img-1.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A'),
(2, 0, 'The Travel Guys', '01478542', 'img-2.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A'),
(3, 0, 'Air Travel', '05145786', 'img-3.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A'),
(4, 0, 'Adventure & Tour', '08124785', 'img-4.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A'),
(5, 0, 'Down Home', '09654784', 'img-5.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A'),
(6, 0, 'Tickets', '04758469', 'img-6.jpg', 'Lorem Ipsum Dolor Sit Amet Consectetur A');

-- --------------------------------------------------------

--
-- Structure de la table `trip`
--

CREATE TABLE IF NOT EXISTS `trip` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`trip_id`),
  KEY `user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `trip`
--

INSERT INTO `trip` (`trip_id`, `user_id`, `date_debut`, `date_fin`, `description`) VALUES
(3, 8, '2022-06-01', '2022-06-17', 'aspaps'),
(4, 104, '2022-06-09', '2022-06-30', 'AAAAAAAAA');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `user_tele` varchar(40) DEFAULT NULL,
  `user_adress` varchar(40) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_pass` varchar(50) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT 'pic-1.png',
  `user_guide_ville` varchar(80) DEFAULT NULL,
  `user_guide_prix` varchar(40) DEFAULT NULL,
  `user_guide_disponibilite` date DEFAULT NULL,
  `user_guide_langues` varchar(40) DEFAULT NULL,
  `user_guide_description` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `birth_date`, `user_tele`, `user_adress`, `user_email`, `user_pass`, `user_role`, `user_image`, `user_guide_ville`, `user_guide_prix`, `user_guide_disponibilite`, `user_guide_langues`, `user_guide_description`) VALUES
(1, 'Achraf', '2001-07-09 00:00:00', '0684134782', 'casablanca', 'taffahachraf@gmail.com', '0000', 'admin', NULL, NULL, NULL, NULL, NULL, ''),
(2, 'Anas jelloul', '1970-07-09 00:00:00', '05124788', 'casablanca', 'guide1@gmail.com', 'oiazjd8745z12d', 'guide', 'pic-1.png', 'casablanca', '1000', '2022-07-14', 'francais', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(3, 'Abderrahmane ET-TOUNANI', '1980-07-09 00:00:00', '05478457', 'rabat', 'guide2@gmail.com', '87945eded', 'guide', 'pic-2.png', 'rabat', '500', '2022-08-19', 'arabe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(4, 'Zohair ait ben aisa', '1999-07-09 00:00:00', '05369852', 'tanger', 'guide3@gmail.com', 'iozjda7', 'guide', 'pic-3.png', 'casablanca', '800', '2023-01-13', 'anglais', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(5, 'Abderrahmane darwa', '1988-07-09 00:00:00', '05284695', 'tetwan', 'guide4@gmail.com', 'zoidjedc@', 'guide', 'pic-4.png', 'safie', '200', '2022-10-11', 'arabe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(6, 'Abdelmalek EN-NANI', '1982-07-09 00:00:00', '05214477', 'oujda', 'guide5@gmail.com', 'oidjzd4512', 'guide', 'pic-5.png', 'chefchawen', '900', '2023-07-01', 'anglais', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(7, 'Aya ait oulhyane', '1966-07-09 00:00:00', '05221144', 'casablanca', 'guide6@gmail.com', 'zpodkzd874512zd', 'guide', 'pic-6.png', 'rabt', '2000', '2022-06-04', 'francais', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciat'),
(8, 'Abdo', '1980-06-08 00:00:00', '05124784', 'casablanca', 'user4@gmail.com', '4444', 'leader', 'pic-1.png', NULL, NULL, NULL, NULL, ''),
(9, 'abdellah', '1977-06-27 00:00:00', '05744488', 'rabat', 'ab@gmail.com', '4747', 'leader', 'pic-3.png', NULL, NULL, NULL, NULL, ''),
(102, 'oikioj', '2001-05-05 00:00:00', '0547785', 'rabat', 'zodk@ez.com', '9999', 'guide', 'pic-5.png', 'oujda', '', '0000-00-00', '', ''),
(103, 'sara', '2001-07-09 00:00:00', '05124477', 'rabat', 'sara@gmail.com', '1111', 'guide', 'pic-4.png', 'rabat', '', '0000-00-00', '', ''),
(109, 'oizkdop', '0000-00-00 00:00:00', '897456', 'zdd', 'zd@zdj.com', '0000', 'guide', '97433472-et.png', 'rabat', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `voyage_id` int(11) NOT NULL AUTO_INCREMENT,
  `agence_id` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `destination` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`voyage_id`),
  KEY `user` (`agence_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`voyage_id`, `agence_id`, `date_debut`, `date_fin`, `destination`) VALUES
(1, 1, '2022-06-08', '2022-06-09', 'casablanca'),
(2, 2, '2022-06-20', '2022-06-30', 'oujda'),
(3, 3, '2022-06-27', '2022-06-30', 'kenitra'),
(4, 4, '2022-06-01', '2022-06-29', 'sale'),
(5, 5, '2022-06-01', '2022-06-29', 'tetwan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
