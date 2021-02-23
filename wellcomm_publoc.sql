-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 19 jan. 2021 à 10:09
-- Version du serveur :  10.3.27-MariaDB
-- Version de PHP : 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wellcomm_publoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement_client`
--

CREATE TABLE `abonnement_client` (
  `ID_ABONNEMENT2` int(11) NOT NULL,
  `ID_PANNEAU` int(11) NOT NULL,
  `TYPE_ABONNEMENT` longtext DEFAULT NULL,
  `ID_RESERVATION` int(11) NOT NULL,
  `DEBUT_RESERVATION` datetime DEFAULT NULL,
  `FIN_RESERVATION` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` decimal(8,0) NOT NULL,
  `USERNAME` longtext DEFAULT NULL,
  `PASSEWORD` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSEWORD`) VALUES
(1, 'Tamby', '1234'),
(2, 'Publoc', 'admin786');

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `ID_CLIENT2` decimal(8,0) NOT NULL,
  `ID_ABONNEMENT2` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `resume` varchar(150) NOT NULL,
  `image_blog` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `description`, `resume`, `image_blog`) VALUES
(1, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'un panneau d\'affichage est une grande structure de publicité extérieure', '53564b1f6686abb19164380b0489662c.png');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id_carte` int(10) NOT NULL,
  `ID_CLIENT2` int(10) NOT NULL,
  `ID_REGISSEUR` int(10) NOT NULL,
  `ID_PANNEAU` int(10) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `SERVICE` varchar(50) NOT NULL,
  `FACE` varchar(10) NOT NULL,
  `LUMIERE` varchar(10) NOT NULL,
  `LARGEUR` varchar(20) NOT NULL,
  `LONGUEUR` varchar(20) NOT NULL,
  `LOGITUDE` float NOT NULL,
  `LATITUDE` float NOT NULL,
  `VILLE` varchar(50) NOT NULL,
  `HABILLAGE` varchar(50) NOT NULL,
  `NOM_CLIENT` varchar(50) DEFAULT NULL,
  `PRENOM_CLIENT` varchar(50) DEFAULT NULL,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  `status_carte` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id_carte`, `ID_CLIENT2`, `ID_REGISSEUR`, `ID_PANNEAU`, `TYPE`, `SERVICE`, `FACE`, `LUMIERE`, `LARGEUR`, `LONGUEUR`, `LOGITUDE`, `LATITUDE`, `VILLE`, `HABILLAGE`, `NOM_CLIENT`, `PRENOM_CLIENT`, `debut`, `fin`, `status_carte`) VALUES
(2, 0, 2, 3, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5261, -18.9083, 'Antananarivo', 'Papier autocollante', NULL, NULL, '2020-12-22', '2021-12-22', 0),
(6, 4, 5, 320, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.5082, -18.8751, 'Antananarivo', 'Papier autocollante', NULL, NULL, '2021-01-09', '2021-12-31', 0),
(9, 2, 5, 308, '8/3', 'Location, Conception et Pose', '1', '0', '8.000', '3.000', 47.6032, -18.8994, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', '2021-01-12', '2022-01-12', 0),
(11, 2, 6, 186, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.5552, -18.8402, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', '2021-01-12', '2021-02-12', 0),
(12, 2, 6, 186, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.5552, -18.8402, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', NULL, NULL, 0),
(13, 2, 6, 208, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.536, -18.9986, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', '2021-01-12', '2021-01-31', 0),
(14, 2, 6, 208, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.536, -18.9986, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', NULL, NULL, 0),
(19, 2, 3, 4, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5609, -18.8197, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', NULL, NULL, 0),
(20, 2, 3, 4, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5609, -18.8197, 'Antananarivo', 'Papier autocollante', 'FIDELPASS', 'Madagascar', NULL, NULL, 0),
(21, 4, 3, 323, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5252, -18.8903, 'Antananarivo', 'Papier autocollante', 'Veloptic ', 'Madagascar', '2021-01-09', '2021-12-31', 0),
(22, 4, 5, 324, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5271, -18.9522, 'Antananarivo', 'Papier autocollante', 'Veloptic ', 'Madagascar', '2021-01-09', '2021-12-31', 0),
(23, 1, 2, 3, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5261, -18.9083, 'Antananarivo', 'Papier autocollante', 'Ucomad', 'Madagascar', NULL, NULL, 0),
(24, 0, 3, 5, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5609, -18.8198, 'Antananarivo', 'Papier autocollante', NULL, NULL, NULL, NULL, 1),
(25, 1, 2, 3, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.5261, -18.9083, 'Antananarivo', 'Papier autocollante', 'Ucomad', 'Madagascar', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID_CLIENT2` int(11) NOT NULL,
  `NOM_CLIENT` longtext DEFAULT NULL,
  `PRENOM_CLIENT` longtext DEFAULT NULL,
  `ADRESSE_CLIENT` varchar(250) NOT NULL,
  `NUM_CLIENT` varchar(10) NOT NULL,
  `EMAIL_CLIENT` longtext DEFAULT NULL,
  `MOT_DE_PASS` longtext DEFAULT NULL,
  `TYPE_COMPTE` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_CLIENT2`, `NOM_CLIENT`, `PRENOM_CLIENT`, `ADRESSE_CLIENT`, `NUM_CLIENT`, `EMAIL_CLIENT`, `MOT_DE_PASS`, `TYPE_COMPTE`, `status`) VALUES
(1, 'Ucomad', 'Madagascar', 'immeuble tmt', '0340577541', 'contact@ucomad.mg', 'ucomad', 'Professionnel', 1),
(2, 'FIDELPASS', 'Madagascar', 'Anosivavaka', '034 40 383', 'andrianandrasana7manjato@gmail.com', 'Manjato@0705', 'Professionnel', 1),
(3, 'Tamby Mampionona', 'HERIHARSON', 'Anjanahary-Tananarivo', '0340652221', 'tambymampioninaheriharson@gmail.com', '1234', 'Professionnel', 1),
(4, 'Veloptic ', 'Madagascar', 'Tana Water Front', '0321114552', 'veloptic@gmail.com', '123456', 'Professionnel', 1);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `ID_DEMANDE` int(11) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `NOM_CLIENT` varchar(50) NOT NULL,
  `PRENOM_CLIENT` varchar(50) NOT NULL,
  `dimension` varchar(20) NOT NULL,
  `nombre` varchar(5) NOT NULL,
  `lieu1` varchar(50) NOT NULL,
  `nombre_1` int(5) NOT NULL,
  `lieu2` varchar(50) NOT NULL,
  `nombre_2` int(5) NOT NULL,
  `ADRESSE_CLIENT` varchar(100) NOT NULL,
  `NUM_CLIENT` varchar(20) NOT NULL,
  `EMAIL_CLIENT` varchar(100) NOT NULL,
  `SERVICE` varchar(100) NOT NULL,
  `TYPE_COMPTE` varchar(50) NOT NULL,
  `ID_CLIENT2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`ID_DEMANDE`, `TYPE`, `NOM_CLIENT`, `PRENOM_CLIENT`, `dimension`, `nombre`, `lieu1`, `nombre_1`, `lieu2`, `nombre_2`, `ADRESSE_CLIENT`, `NUM_CLIENT`, `EMAIL_CLIENT`, `SERVICE`, `TYPE_COMPTE`, `ID_CLIENT2`) VALUES
(1, 'Panneaux', 'FIDELPASS', 'Madagascar', '4/3', '1', 'TANJOMBATO ANTANANARIVO', 1, '', 0, 'Anosivavaka', '034 40 383 42', 'andrianandrasana7manjato@gmail.com', 'Location, Conception et Pose', 'Professionnel', 2),
(2, 'Panneaux', 'Ucomad', 'Madagascar', '2500', '1', '12', 1, '14', 1, 'immeuble tmt', '0340577541', 'contact@ucomad.mg', 'Location de l\'emplacement', 'Professionnel', 1),
(3, 'Panneaux', 'Ucomad', 'Madagascar', '2500', '1', '12', 1, '14', 1, 'immeuble tmt', '0340577541', 'contact@ucomad.mg', 'Location de l\'emplacement', 'Professionnel', 1);

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id_favoris` int(4) NOT NULL,
  `ID_CLIENT2` int(11) NOT NULL,
  `ID_PANNEAU` int(11) NOT NULL,
  `ID_REGISSEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id_favoris`, `ID_CLIENT2`, `ID_PANNEAU`, `ID_REGISSEUR`) VALUES
(1, 1, 13, 3),
(2, 0, 214, 9),
(3, 0, 214, 9),
(4, 0, 214, 9),
(5, 1, 206, 9),
(6, 2, 216, 9),
(7, 2, 224, 9),
(12, 2, 184, 6),
(13, 2, 284, 3),
(17, 2, 346, 14);

-- --------------------------------------------------------

--
-- Structure de la table `fiche_presta`
--

CREATE TABLE `fiche_presta` (
  `id` int(20) NOT NULL,
  `ID_PRESTATAIRE` int(20) NOT NULL,
  `description` longtext NOT NULL,
  `nbre` int(50) NOT NULL,
  `photo_coverture` varchar(500) NOT NULL,
  `service` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `id_carte` int(11) NOT NULL,
  `ID_CLIENT2` int(11) NOT NULL,
  `ID_REGISSEUR` int(11) NOT NULL,
  `ID_PANNEAU` int(11) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `id_carte`, `ID_CLIENT2`, `ID_REGISSEUR`, `ID_PANNEAU`, `debut`, `fin`) VALUES
(1, 1, 1, 1, 2, '2020-12-31', '2021-01-31'),
(2, 2, 0, 2, 3, '2020-12-22', '2021-12-22'),
(3, 3, 2, 1, 2, '2021-01-02', '2021-01-30'),
(4, 6, 4, 5, 320, '2021-01-09', '2021-12-31'),
(5, 7, 0, 5, 87, '2021-01-10', '2021-01-31'),
(6, 9, 2, 5, 308, '2021-01-12', '2022-01-12'),
(7, 11, 2, 6, 186, '2021-01-12', '2021-02-12'),
(8, 11, 2, 6, 186, '2021-01-12', '2021-02-12'),
(9, 13, 2, 6, 208, '2021-01-12', '2021-01-31'),
(10, 15, 4, 6, 184, '2021-01-09', '2021-01-31'),
(11, 16, 4, 3, 322, '2021-01-09', '2021-01-31'),
(12, 18, 4, 3, 322, '2021-01-09', '2021-12-31'),
(13, 17, 2, 3, 4, '2021-01-09', '2021-01-31'),
(14, 21, 4, 3, 323, '2021-01-09', '2021-12-31'),
(15, 22, 4, 5, 324, '2021-01-09', '2021-12-31'),
(16, 22, 4, 5, 324, '2021-01-09', '2021-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `panneau`
--

CREATE TABLE `panneau` (
  `ID_PANNEAU` int(11) NOT NULL,
  `TYPE` longtext DEFAULT NULL,
  `SERVICE` varchar(50) NOT NULL,
  `FACE` varchar(20) NOT NULL,
  `LUMIERE` varchar(50) NOT NULL,
  `LARGEUR` varchar(20) NOT NULL,
  `LONGUEUR` varchar(20) NOT NULL,
  `LOGITUDE` float(10,6) DEFAULT NULL,
  `LATITUDE` float(10,6) DEFAULT NULL,
  `VILLE` longtext DEFAULT NULL,
  `HABILLAGE` varchar(100) NOT NULL,
  `REFERENCE` varchar(100) NOT NULL,
  `ADRESSE` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(150) NOT NULL,
  `INFO` varchar(100) DEFAULT NULL,
  `MOT_CLES` varchar(100) DEFAULT NULL,
  `MENSUEL` varchar(100) DEFAULT NULL,
  `ANNUEL` varchar(100) DEFAULT NULL,
  `SEMESTRIEL` varchar(100) DEFAULT NULL,
  `POSE` varchar(100) DEFAULT NULL,
  `TAXE` varchar(100) DEFAULT NULL,
  `Impression` varchar(100) DEFAULT NULL,
  `Conception` varchar(100) DEFAULT NULL,
  `image_panneau1` varchar(200) DEFAULT NULL,
  `image_panneau` varchar(50) NOT NULL,
  `STATUS` varchar(5) DEFAULT '0',
  `verifier` int(2) NOT NULL,
  `ID_REGISSEUR` int(11) NOT NULL,
  `gerer` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panneau`
--

INSERT INTO `panneau` (`ID_PANNEAU`, `TYPE`, `SERVICE`, `FACE`, `LUMIERE`, `LARGEUR`, `LONGUEUR`, `LOGITUDE`, `LATITUDE`, `VILLE`, `HABILLAGE`, `REFERENCE`, `ADRESSE`, `DESCRIPTION`, `INFO`, `MOT_CLES`, `MENSUEL`, `ANNUEL`, `SEMESTRIEL`, `POSE`, `TAXE`, `Impression`, `Conception`, `image_panneau1`, `image_panneau`, `STATUS`, `verifier`, `ID_REGISSEUR`, `gerer`) VALUES
(3, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.526138, -18.908340, 'Antananarivo', 'Papier autocollante', 'MDTA024-01', 'ANALAKELY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'centre', '100.000', '1.200000', '600.000', '50.000', '15.000', '60.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n.jpg', '0', 1, 2, 0),
(4, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.560921, -18.819719, 'Antananarivo', 'Papier autocollante', 'A5', 'Antsofinondry', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo.jpg', '1', 0, 3, 0),
(5, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.560860, -18.819811, 'Antananarivo', 'Papier autocollante', 'A6', 'Antsofinondry', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo1.jpg', '1', 0, 3, 0),
(6, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.567211, -18.894039, 'Antananarivo', 'Papier autocollante', 'II1', 'AMBOHIMAHINTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '500.000', '15.000', '140.000', NULL, NULL, '1ere_photo2.jpg', '1', 0, 3, 0),
(7, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.472931, -18.803030, 'Antananarivo', 'Papier autocollante', 'II16', 'FACE DON BOSCO IVATO', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo.jpeg', '1', 0, 3, 0),
(8, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.472809, -18.803040, 'Antananarivo', 'Papier autocollante', 'II17', 'MUR DON BOSCO IVATO vue vers Tana', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo1.jpeg', '1', 0, 3, 0),
(9, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.472809, -18.803040, 'Antananarivo', 'Papier autocollante', 'II15', 'ROUTE D\'IVATO croisement  Village', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo2.jpeg', '1', 0, 3, 0),
(10, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.522541, -18.902950, 'Antananarivo', 'Papier autocollante', 'G4', 'ANALAKELY', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'G', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo3.jpg', '0', 0, 3, 0),
(11, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.528091, -18.910919, 'Antananarivo', 'Papier autocollante', 'H6', 'ANALAKELY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'H', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo4.jpg', '0', 0, 3, 0),
(12, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.522541, -18.902950, 'Antananarivo', 'Papier autocollante', 'G4', 'ANALAKELY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'H', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo5.jpg', '1', 0, 3, 0),
(13, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.528091, -18.910919, 'Antananarivo', 'Papier autocollante', 'H6', 'ANALAKELY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'H', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo6.jpg', '1', 0, 3, 0),
(14, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.482609, -18.857401, 'Antananarivo', 'Papier autocollante', 'II26', 'DIGUE ANDRANOMENA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo7.jpg', '1', 0, 3, 0),
(15, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.482609, -18.857401, 'Antananarivo', 'Papier autocollante', 'II33', 'DIGUE ANDRANOMENA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo8.jpg', '1', 0, 3, 0),
(16, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.484760, -18.860180, 'Antananarivo', 'Papier autocollante', 'II34', 'PONT AMBOHIDROA', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo9.jpg', '1', 0, 3, 0),
(17, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.482521, -18.861860, 'Antananarivo', 'Papier autocollante', 'II37', 'STATION POMPAGE DIGUE', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo10.jpg', '1', 0, 3, 0),
(18, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.486191, -18.866039, 'Antananarivo', 'Papier autocollante', 'II38', 'DIGUE AMBODIMITA', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo3.jpeg', '1', 0, 3, 0),
(19, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.480301, -18.857121, 'Antananarivo', 'Papier autocollante', 'II42', 'DIGUE AMBODIMITA', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo11.jpg', '1', 0, 3, 0),
(20, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.480171, -18.855530, 'Antananarivo', 'Papier autocollante', 'II43', 'DIGUE AMBOTRIMANJAKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo12.jpg', '1', 0, 3, 0),
(21, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.477692, -18.848400, 'Antananarivo', 'Papier autocollante', 'II49', 'AMBOHIBAO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo13.jpg', '1', 0, 3, 0),
(22, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528389, -18.905920, 'Antananarivo', 'Papier autocollante', 'N3', 'FARAVOHITRA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'N', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo14.jpg', '1', 0, 3, 0),
(23, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.546501, -18.895639, 'Antananarivo', 'Papier autocollante', 'P5', 'AMPASAPITO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo15.jpg', '1', 0, 3, 0),
(24, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.530788, -18.914690, 'Antananarivo', 'Papier autocollante', 'U5', 'AMBOHIJATOVO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'U', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo16.jpg', '1', 0, 3, 0),
(25, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528900, -18.912790, 'Antananarivo', 'Papier autocollante', 'U6', 'AMBOHIJATOVO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'U', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo17.jpg', '1', 0, 3, 0),
(26, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.516659, -18.895161, 'Antananarivo', 'Papier autocollante', 'W1', 'ANKAZOMANGA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'W', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo18.jpg', '1', 0, 3, 0),
(27, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.533501, -18.913900, 'Antananarivo', 'Papier autocollante', 'V3', 'ANTSAHABE', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'V', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo19.jpg', '1', 0, 3, 0),
(28, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520168, -18.931910, 'Antananarivo', 'Papier autocollante', 'Y5', 'SOANIERANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo20.jpg', '1', 0, 3, 0),
(29, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523190, -18.917810, 'Antananarivo', 'Papier autocollante', 'S1', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo21.jpg', '1', 0, 3, 0),
(30, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523121, -18.917801, 'Antananarivo', 'Papier autocollante', 'S5', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo22.jpg', '1', 0, 3, 0),
(31, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523460, -18.917770, 'Antananarivo', 'Papier autocollante', 'S7', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo23.jpg', '1', 0, 3, 0),
(32, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523529, -18.917749, 'Antananarivo', 'Papier autocollante', 'S8', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo24.jpg', '1', 0, 3, 0),
(33, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523281, -18.917801, 'Antananarivo', 'Papier autocollante', 'S10', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo25.jpg', '1', 0, 3, 0),
(34, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523350, -18.917780, 'Antananarivo', 'Papier autocollante', 'S11', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo26.jpg', '1', 0, 3, 0),
(35, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523762, -18.917700, 'Antananarivo', 'Papier autocollante', 'S12', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo27.jpg', '1', 0, 3, 0),
(36, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523579, -18.917740, 'Antananarivo', 'Papier autocollante', 'S14', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo28.jpg', '1', 0, 3, 0),
(37, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523720, -18.917709, 'Antananarivo', 'Papier autocollante', 'S16', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'S', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo29.jpg', '1', 0, 3, 0),
(38, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520088, -18.931890, 'Antananarivo', 'Papier autocollante', 'Y1', 'SOANIERANA SOLIMA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo30.jpg', '1', 0, 3, 0),
(39, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520088, -18.931890, 'Antananarivo', 'Papier autocollante', 'Y2', 'SOANIERANA SOLIMA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo31.jpg', '1', 0, 3, 0),
(40, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520020, -18.931910, 'Antananarivo', 'Papier autocollante', 'Y3', 'SOANIERANA SOLIMA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo32.jpg', '1', 0, 3, 0),
(41, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520020, -18.931910, 'Antananarivo', 'Papier autocollante', 'Y4', 'SOANIERANA SOLIMA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo33.jpg', '1', 0, 3, 0),
(42, '4/3', 'Location, Conception et Pose', '1', '00', '4.000', '3.000', 47.519379, -18.927099, 'Antananarivo', 'Papier autocollante', 'Y6', 'SOANIERANA CIMELTA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'Y', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo34.jpg', '1', 0, 3, 0),
(43, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528809, -18.901859, 'Antananarivo', 'Papier autocollante', 'M4', 'AMBATOMITSANGANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'M', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo35.jpg', '1', 0, 3, 0),
(44, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.525372, -18.909149, 'Antananarivo', 'Papier autocollante', 'J3', 'ANTANINARENINA', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'J', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo36.jpg', '1', 0, 3, 0),
(45, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521412, -18.896231, 'Antananarivo', 'Papier autocollante', 'F9', 'ANKORONDRANO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'F', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo37.jpg', '1', 0, 3, 0),
(46, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521141, -18.870110, 'Antananarivo', 'Papier autocollante', 'D29', 'TSARASAOTRA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'D', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo38.jpg', '1', 0, 3, 0),
(47, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.479259, -18.853769, 'Antananarivo', 'Papier autocollante', 'II30', 'DIGUE ANDRANOMENA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo39.jpg', '1', 0, 3, 0),
(48, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527691, -18.903440, 'Antananarivo', 'Papier autocollante', 'M1', 'TSIAZOTAFO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'M', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo40.jpg', '1', 0, 3, 0),
(49, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478619, -18.852011, 'Antananarivo', 'Papier autocollante', 'II25', 'DIGUE FACE PACOM', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo41.jpg', '1', 0, 3, 0),
(50, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.542789, -18.871300, 'Antananarivo', 'Papier autocollante', 'A2', 'ANALAMAHINTSY', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo42.jpg', '1', 0, 3, 0),
(51, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.546398, -18.895590, 'Antananarivo', 'Papier autocollante', 'P4', 'APMASAMPITO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo43.jpg', '1', 0, 3, 0),
(52, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519390, -18.913330, 'Antananarivo', 'Papier autocollante', 'R3', 'ANOSY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'R', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo44.jpg', '1', 0, 3, 0),
(53, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.479939, -18.855061, 'Antananarivo', 'Papier autocollante', 'II29', 'DIGUE ANDRANOMENA', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'II', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo45.jpg', '1', 0, 3, 0),
(54, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.542042, -18.871269, 'Antananarivo', 'Papier autocollante', 'A1', 'ANALAMAHINTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo46.jpg', '1', 0, 3, 0),
(55, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521389, -18.896290, 'Antananarivo', 'Papier autocollante', 'F14', 'AKORONDRANO ', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'F', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo47.jpg', '1', 0, 3, 0),
(56, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528049, -18.910870, 'Antananarivo', 'Papier autocollante', 'H5', 'ANALAKELY', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'H', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo48.jpg', '1', 0, 3, 0),
(57, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.533508, -18.913931, 'Antananarivo', 'Papier autocollante', 'V1', 'ANTSAHABE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'V', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo49.jpg', '1', 0, 3, 0),
(58, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.530338, -18.914221, 'Antananarivo', 'Papier autocollante', '6', 'AMBOHIJATOVO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo50.jpg', '1', 0, 3, 0),
(59, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.491581, -18.892160, 'Antananarivo', 'Papier autocollante', '56', 'SCORE DIGUE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo51.jpg', '1', 0, 3, 0),
(60, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.476608, -18.799761, 'Antananarivo', 'Papier autocollante', '63', 'AÉROPORT IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo52.jpg', '1', 0, 3, 0),
(61, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.476768, -18.799770, 'Antananarivo', 'Papier autocollante', '64', 'AÉROPORT IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo53.jpg', '1', 0, 3, 0),
(62, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.442551, -18.819990, 'Antananarivo', 'Papier autocollante', '66', 'AMBOHIDRATRIMO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo54.jpg', '1', 0, 3, 0),
(63, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478840, -18.936279, 'Antananarivo', 'Papier autocollante', '88', 'AMPIPTATAFIKA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo55.jpg', '1', 0, 3, 0),
(64, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.577419, -18.903160, 'Antananarivo', 'Papier autocollante', '96', 'AMBOHIMANGALEKY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo56.jpg', '1', 0, 3, 0),
(65, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.445229, -18.813721, 'Antananarivo', 'Papier autocollante', '114', 'AMBOHIDRATRIMO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo57.jpg', '1', 0, 3, 0),
(66, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.491421, -18.892220, 'Antananarivo', 'Papier autocollante', '119', 'SCORE DIGUE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo58.jpg', '1', 0, 3, 0),
(67, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.550819, -18.862659, 'Antananarivo', 'Papier autocollante', '121', 'AMBOHITRARAHABA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo59.jpg', '1', 0, 3, 0),
(68, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.550819, -18.862659, 'Antananarivo', 'Papier autocollante', '128', 'AMBOHITRARAHABA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo60.jpg', '1', 0, 3, 0),
(69, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.472939, -18.802931, 'Antananarivo', 'Papier autocollante', '129', 'DON BOSCO IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo61.jpg', '1', 0, 3, 0),
(70, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.441971, -18.862869, 'Antananarivo', 'Papier autocollante', '131', 'AMBOTRIMANJAKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo62.jpg', '1', 0, 3, 0),
(71, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.477501, -18.848551, 'Antananarivo', 'Papier autocollante', '137', 'AMBOHIBAO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo63.jpg', '1', 0, 3, 0),
(72, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519470, -18.898840, 'Antananarivo', 'Papier autocollante', '2T', 'ANTANIMENA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo64.jpg', '1', 0, 3, 0),
(73, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521358, -18.896330, 'Antananarivo', 'Papier autocollante', '7T', 'ANTANIMENA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo65.jpg', '1', 0, 3, 0),
(74, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.551491, -18.872540, 'Antananarivo', 'Papier autocollante', '14T', 'ANDRONONOBE,ANALAMAHINTSY', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo66.jpg', '1', 0, 3, 0),
(75, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.526138, -18.908340, 'Antananarivo', 'Papier autocollante', 'H1', 'ANALAKELY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'H', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo67.jpg', '1', 0, 3, 0),
(76, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529739, -18.958941, 'Antananarivo', 'Papier autocollante', '29T', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo68.jpg', '1', 0, 3, 0),
(77, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.479092, -18.851490, 'Antananarivo', 'Papier autocollante', '42T', 'AMBOHIBAO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo69.jpg', '1', 0, 3, 0),
(78, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519310, -18.913290, 'Antananarivo', 'Papier autocollante', '34T', 'ANOSY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo70.jpg', '1', 0, 3, 0),
(79, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521580, -18.895660, 'Antananarivo', 'Papier autocollante', 'D29', 'TSARASAOTRA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'D', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo71.jpg', '1', 0, 3, 0),
(80, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.539360, -18.901581, 'Antananarivo', 'Papier autocollante', '40', 'BESARETY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo72.jpg', '1', 0, 3, 0),
(81, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.554859, -18.938829, 'Antananarivo', 'Papier autocollante', '85', 'ANKADINDRATOMBO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo73.jpg', '1', 0, 3, 0),
(82, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.551071, -18.884359, 'Antananarivo', 'Papier autocollante', '18T', 'NANISANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'T', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo74.jpg', '1', 0, 3, 0),
(83, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.537491, -18.918400, 'Antananarivo', 'Papier autocollante', '3', 'ANKORAHOTRA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo75.jpg', '1', 0, 3, 0),
(84, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.533829, -18.993759, 'Antananarivo', 'Papier autocollante', '74', 'ANDOHARANOFOTSY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo76.jpg', '1', 0, 3, 0),
(85, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.577431, -18.903170, 'Antananarivo', 'Papier autocollante', '77', 'AMBOHIMANGALEKY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo77.jpg', '1', 0, 3, 0),
(86, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.476238, -18.909929, 'Antananarivo', 'Papier autocollante', '98', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo78.jpg', '1', 0, 3, 0),
(87, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.538898, -18.905870, 'Antananarivo', 'Papier autocollante', 'A015', 'AMPAHIBE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe.jpg', '1', 0, 5, 0),
(88, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.508209, -18.875120, 'Antananarivo', 'Papier autocollante', 'A087', 'ANOSIVAVAKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe1.jpg', '1', 0, 5, 0),
(89, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.542809, -18.901779, 'Antananarivo', 'Papier autocollante', 'AO18', 'AVARADOHA BETONGOLO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '1117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe2.jpg', '1', 0, 5, 0),
(90, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.550991, -18.884420, 'Antananarivo', 'Papier autocollante', 'A020', 'NANISANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe3.jpg', '1', 0, 5, 0),
(91, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478611, -18.852180, 'Antananarivo', 'Papier autocollante', 'A031', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.0000', '500.000', NULL, NULL, 'change-bebe4.jpg', '1', 0, 5, 0),
(92, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478512, -18.851690, 'Antananarivo', 'Papier autocollante', 'A032', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe5.jpg', '1', 0, 5, 0),
(93, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.477539, -18.849091, 'Antananarivo', 'Papier autocollante', 'A033', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe6.jpg', '1', 0, 5, 0),
(94, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.477531, -18.849131, 'Antananarivo', 'Papier autocollante', 'A034', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe7.jpg', '1', 0, 5, 0),
(95, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478390, -18.851681, 'Antananarivo', 'Papier autocollante', 'AO42', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe8.jpg', '1', 0, 5, 0),
(96, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478619, -18.851959, 'Antananarivo', 'Papier autocollante', 'A043', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe9.jpg', '1', 0, 5, 0),
(97, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.546879, -18.895050, 'Antananarivo', 'Papier autocollante', 'A051', 'AVARADOHA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe10.jpg', '1', 0, 5, 0),
(98, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.477470, -18.849581, 'Antananarivo', 'Papier autocollante', 'A071', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe11.jpg', '1', 0, 5, 0),
(99, '4/3', 'Location, Conception et Pose', '1', '00', '4.000', '3.000', 47.527050, -18.921450, 'Antananarivo', 'Papier autocollante', 'A068', 'MAHAMSINA', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe12.jpg', '1', 0, 5, 0),
(100, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527630, -18.917431, NULL, 'Papier autocollante', 'A069', 'MAHAMASINA', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe13.jpg', '1', 0, 5, 0),
(101, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529861, -18.899561, 'Antananarivo', 'Papier autocollante', 'A077', 'ANDRAVOANGY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe14.jpg', '1', 0, 5, 0),
(102, '', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529861, -18.899561, 'Antananarivo', 'Papier autocollante', 'A077', 'ANDRAVOANGY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe15.jpg', '1', 0, 5, 0),
(103, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528111, -18.952669, 'Antananarivo', 'Papier autocollante', 'A009', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe16.jpg', '1', 0, 5, 0),
(104, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.468269, -18.842760, 'Antananarivo', 'Papier autocollante', 'BO29', 'TALATAMATY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe17.jpg', '1', 0, 5, 0),
(105, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528858, -18.955660, 'Antananarivo', 'Papier autocollante', 'B044', 'TANJOMBATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe19.jpg', '1', 0, 5, 0),
(106, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529110, -18.956011, 'Antananarivo', 'Papier autocollante', 'B045', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe20.jpg', '1', 0, 5, 0),
(107, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495232, -18.912001, 'Antananarivo', 'Papier autocollante', 'B032', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe21.jpg', '1', 0, 5, 0),
(108, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.465900, -18.922461, 'Antananarivo', 'Papier autocollante', 'B094', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe22.jpg', '1', 0, 5, 0),
(109, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.476528, -18.909500, 'Antananarivo', 'Papier autocollante', 'B056', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe23.jpg', '1', 0, 5, 0),
(110, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.532501, -18.982100, 'Antananarivo', 'Papier autocollante', 'B046', 'ANDOHARANOFOTSY', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe24.jpg', '1', 0, 5, 0),
(111, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.532028, -18.974630, 'Antananarivo', 'Papier autocollante', 'B049', 'ANDOHARANOFOTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe25.jpg', '1', 0, 5, 0),
(112, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.485699, -18.937889, 'Antananarivo', 'Papier autocollante', 'B038', 'AMPITATAFIKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.4000000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo4.jpeg', '1', 0, 5, 0),
(113, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.484852, -18.937540, 'Antananarivo', 'Papier autocollante', 'B096', 'AMPITATAFIKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe26.jpg', '1', 0, 5, 0),
(114, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.480049, -18.803560, 'Antananarivo', 'Papier autocollante', 'B007', 'JIRAMA IVATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '2e_photo5.jpeg', '1', 0, 5, 0),
(115, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.479820, -18.803520, 'Antananarivo', 'Papier autocollante', 'B008', 'JIRAMA IVATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe27.jpg', '1', 0, 5, 0),
(116, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.472919, -18.803301, 'Antananarivo', 'Papier autocollante', 'B009', 'MAMORY IVATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe28.jpg', '1', 0, 5, 0),
(117, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.472950, -18.802790, 'Antananarivo', 'Papier autocollante', 'B010', 'DON BOSCO IVATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe29.jpg', '1', 0, 5, 0),
(118, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.472660, -18.808050, 'Antananarivo', 'Papier autocollante', 'B011', 'HORIZON IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe30.jpg', '1', 0, 5, 0),
(119, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.473011, -18.802629, 'Antananarivo', 'Papier autocollante', 'B013', 'DON BOSCO IVATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe31.jpg', '1', 0, 5, 0),
(120, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.509102, -18.908060, 'Antananarivo', 'Papier autocollante', 'A073', 'CENAM 67Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe32.jpg', '1', 0, 5, 0),
(121, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.475632, -18.801399, 'Antananarivo', 'Papier autocollante', 'B014', 'MANDROSOA IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe33.jpg', '1', 0, 5, 0),
(122, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.471531, -18.813280, 'Antananarivo', 'Papier autocollante', 'B016', 'ECOLE DE POLICE IVATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe34.jpg', '1', 0, 5, 0),
(123, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.471352, -18.813290, 'Antananarivo', 'Papier autocollante', 'B017', 'ECOLE DE POLICE IVATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe35.jpg', '1', 0, 5, 0),
(124, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.508041, -18.904835, 'Antananarivo', 'Papier autocollante', 'A085', 'NYB HAVANA 67Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe36.jpg', '1', 0, 5, 0),
(125, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.476780, -18.799250, 'Antananarivo', 'Papier autocollante', 'B018', 'ASECNA IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, 'change-bebe37.jpg', '1', 0, 5, 0),
(126, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.507690, -18.904800, 'Antananarivo', 'Papier autocollante', 'A050', 'NY HAVANA 67Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '117.000', '1.400000', '705.000', '140.000', '15.000', '500.000', NULL, NULL, '1ere_photo79.jpg', '1', 0, 5, 0),
(127, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.474831, -18.801220, 'Antananarivo', 'Papier autocollante', 'B072', 'SORTIE AÉROPORT IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe38.jpg', '1', 0, 5, 0),
(128, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.562778, -18.889160, 'Antananarivo', 'Papier autocollante', 'B088', 'ADVENTISTE MAHAZO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe39.jpg', '1', 0, 5, 0),
(129, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.562809, -18.889139, 'Antananarivo', 'Papier autocollante', 'B089', 'ADVENTISTE MAHAZO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe40.jpg', '1', 0, 5, 0),
(130, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.508202, -18.875130, 'Antananarivo', 'Papier autocollante', 'A017', 'ANOSIVAVAKA ', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe41.jpg', '1', 0, 5, 0),
(131, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.538521, -18.905190, 'Antananarivo', 'Papier autocollante', 'A016', 'CHAPELLE AMPAHIBE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe42.jpg', '1', 0, 5, 0),
(132, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.550968, -18.925659, 'Antananarivo', 'Papier autocollante', 'A023', 'AMBOHIPO', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'A', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, '1ere_photo80.jpg', '1', 0, 5, 0),
(133, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.485458, -18.937790, 'Antananarivo', 'Papier autocollante', 'B039', 'ANTANANARIVO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'B', '137.500', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'change-bebe43.jpg', '1', 0, 5, 0),
(134, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.490479, -18.890791, 'Antananarivo', 'Papier autocollante', 'P-A1-001', 'ANDOHATAPENAKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo82.jpg', '1', 0, 7, 0),
(135, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527390, -18.917370, 'Antananarivo', 'Papier autocollante', 'P-A4-002', 'MAHAMASINA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo83.jpg', '1', 0, 7, 0),
(136, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.494701, -18.896830, 'Antananarivo', 'Papier autocollante', 'P-A1-004', 'ANOSIPATRANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '2e_photo6.jpeg', '1', 0, 7, 0);
INSERT INTO `panneau` (`ID_PANNEAU`, `TYPE`, `SERVICE`, `FACE`, `LUMIERE`, `LARGEUR`, `LONGUEUR`, `LOGITUDE`, `LATITUDE`, `VILLE`, `HABILLAGE`, `REFERENCE`, `ADRESSE`, `DESCRIPTION`, `INFO`, `MOT_CLES`, `MENSUEL`, `ANNUEL`, `SEMESTRIEL`, `POSE`, `TAXE`, `Impression`, `Conception`, `image_panneau1`, `image_panneau`, `STATUS`, `verifier`, `ID_REGISSEUR`, `gerer`) VALUES
(137, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.494732, -18.896870, 'Antananarivo', 'Papier autocollante', 'P-A1-005', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo84.jpg', '1', 0, 7, 0),
(138, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495251, -18.897160, 'Antananarivo', 'Papier autocollante', 'P-A1-006', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo85.jpg', '1', 0, 7, 0),
(139, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495232, -18.897169, 'Antananarivo', 'Papier autocollante', 'P-A1-008', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo86.jpg', '1', 0, 7, 0),
(140, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495209, -18.897169, 'Antananarivo', 'Papier autocollante', 'P-A1-008', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo87.jpg', '1', 0, 7, 0),
(141, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.498421, -18.935310, 'Antananarivo', 'Papier autocollante', 'P-A1-003 F1', 'ANOSIPATRANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo88.jpg', '1', 0, 7, 0),
(142, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.498360, -18.935320, 'Antananarivo', 'Papier autocollante', 'P-A1-003 F2', 'ANOSIPATRANA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'P', '759.000', '2.131525', '1.258675', '140.000', '15.000', '550.000', NULL, NULL, '1ere_photo89.jpg', '1', 0, 7, 0),
(143, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527210, -18.905550, 'Antananarivo', 'Papier autocollante', 'A-1', 'AMBONDRONA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '00000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, '1ere_photo90.jpg', '1', 0, 8, 0),
(144, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527290, -18.905630, 'Antananarivo', 'Papier autocollante', 'A-2', 'AMBONDRONA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo91.jpg', '1', 0, 8, 0),
(145, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.518848, -18.871920, 'Antananarivo', 'Papier autocollante', 'A-3', 'ALAROBIA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo92.jpg', '1', 0, 8, 0),
(146, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.524288, -18.914480, 'Antananarivo', 'Papier autocollante', 'A-5', 'ANOSY MUR St MICHEL', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo93.jpg', '1', 0, 8, 0),
(147, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521118, -18.918421, 'Antananarivo', 'Papier autocollante', 'A-6', 'ANOSY ROND POINT', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo94.jpg', '1', 0, 8, 0),
(148, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519341, -18.915960, 'Antananarivo', 'Papier autocollante', 'A-7', 'ROND POINT ANOSY', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo95.jpg', '1', 0, 8, 0),
(149, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521801, -18.918550, 'Antananarivo', 'Papier autocollante', 'A-10', 'ANOSY SENAT', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo96.jpg', '1', 0, 8, 0),
(150, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.523270, -18.943211, 'Antananarivo', 'Papier autocollante', 'A-11', 'ANKADIMBAHOAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo97.jpg', '1', 0, 8, 0),
(151, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.526199, -18.873171, 'Antananarivo', 'Papier autocollante', 'A-14', 'IVANDRY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '0000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo98.jpg', '1', 0, 8, 0),
(152, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.506222, -18.904659, 'Antananarivo', 'Papier autocollante', 'A-15', '67Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '1ere_photo99.jpg', '1', 0, 8, 0),
(154, 'Cylindrique', 'Location, Conception et Pose', '1', '0', '1350', '60', 45.375401, -21.444510, 'Antananarivo', 'Papier autocollante', 'CLI0287', 'Immeuble TMT', 'distributeur 100% personnalisé', 'Donne du gel', 'distributeur, gel, hydroalccolique, personnalisé,', '99000', '990000', '0', '0', '0', '0', NULL, NULL, 'WhatsApp_Image_2020-05-01_at_11_16_501.jpeg', '0', 0, 1, 0),
(155, 'Cylindrique', 'Location, Conception et Pose', '1', '0', '1350', '60', 47.087330, -21.447069, 'Fianarantsoa', 'Papier autocollante', 'CLI0289', 'malaza trading', 'distributeur 100% personnalisé', 'Donne du gel', 'distributeur, gel, hydroalccolique, personnalisé,', '99000', '990000', '0', '0', '0', '0', NULL, NULL, 'WhatsApp_Image_2020-05-13_at_11_16_43.jpeg', '0', 0, 1, 0),
(156, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.532848, -18.976320, 'Antananarivo', 'Papier autocollante', '1', 'ANALAKELY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '2e_photo7.jpeg', '1', 0, 10, 0),
(157, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.524368, -18.914360, 'Antananarivo', 'Papier autocollante', '2', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n6.jp', '1', 0, 10, 0),
(158, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.463989, -18.841351, 'Antananarivo', 'Papier autocollante', '3', 'TALATAMATY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n7.jp', '1', 0, 10, 0),
(159, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.461369, -18.840380, 'Antananarivo', 'Papier autocollante', '4', 'TALATAMATY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n8.jp', '1', 0, 10, 0),
(160, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.516781, -18.922750, 'Antananarivo', 'Papier autocollante', '5', 'ANOSY', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n10.j', '1', 0, 10, 0),
(161, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527790, -18.952761, 'Antananarivo', 'Papier autocollante', '6', 'TANJOMBATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n11.j', '1', 0, 10, 0),
(162, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.559250, -18.894670, 'Antananarivo', 'Papier autocollante', '7', 'AMBANIDIA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n12.j', '1', 0, 10, 0),
(163, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.531898, -18.974319, 'Antananarivo', 'Papier autocollante', '8', 'ANDOHARANOFOTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n13.j', '1', 0, 10, 0),
(164, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.547451, -18.912510, 'Antananarivo', 'Papier autocollante', '9', 'ANDRAINARIVO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n14.j', '1', 0, 10, 0),
(165, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.525501, -18.909260, 'Antananarivo', 'Papier autocollante', '10', 'ANTANINARENINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n15.j', '1', 0, 10, 0),
(166, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529331, -18.954830, 'Antananarivo', 'Papier autocollante', '11', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n16.j', '1', 0, 10, 0),
(167, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.538132, -18.913891, 'Antananarivo', 'Papier autocollante', '12', 'ANTSAHABE', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n17.j', '1', 0, 10, 0),
(168, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.562801, -18.889170, 'Antananarivo', 'Papier autocollante', '13', 'ANALAMAHINTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n18.j', '1', 0, 10, 0),
(169, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.507671, -18.904800, 'Antananarivo', 'Papier autocollante', '14', '67 Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n19.j', '1', 0, 10, 0),
(170, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527149, -18.909651, 'Antananarivo', 'Papier autocollante', '15', 'FARAVOHITRA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n20.j', '1', 0, 10, 0),
(171, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.529800, -18.955059, 'Antananarivo', 'Papier autocollante', '16', 'TANJOMBATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'C', '151.250', '1.815000', '907.500', '181.500', '15.000', '500.000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n21.j', '1', 0, 10, 0),
(172, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521000, -18.877411, 'Antananarivo', 'Papier autocollante', 'A-22', 'ALAROBIA IVANDRY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '15.000', NULL, NULL, '2e_photo8.jpeg', '1', 0, 8, 0),
(173, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.525269, -18.908871, 'Antananarivo', 'Papier autocollante', 'A-23', 'ANTANINARENINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo9.jpeg', '1', 0, 8, 0),
(174, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.525501, -18.909050, 'Antananarivo', 'Papier autocollante', 'A-24', 'ANTANINARENINA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n22.j', '1', 0, 8, 0),
(175, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521900, -18.902460, 'Antananarivo', 'Papier autocollante', 'A-25', 'SOARANO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo10.jpeg', '1', 0, 8, 0),
(176, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522289, -18.873760, 'Antananarivo', 'Papier autocollante', 'A-26', 'MONTE IVANDRY', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo11.jpeg', '1', 0, 8, 0),
(177, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.513008, -18.916750, 'Antananarivo', 'Papier autocollante', 'A-27', 'PRES ANS AMPEFILOHA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo12.jpeg', '1', 0, 8, 0),
(178, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521091, -18.878414, 'Antananarivo', 'Papier autocollante', 'A-28', 'ANKORONDRANO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '0000000', '000000', '15.000', '000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n23.j', '1', 0, 8, 0),
(179, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522549, -18.884060, 'Antananarivo', 'Papier autocollante', 'A-29', 'ANKORONDRANO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo13.jpeg', '1', 0, 8, 0),
(180, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495571, -18.897181, 'Antananarivo', 'Papier autocollante', 'A-34', 'GARE ROUTIERE DIGUE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo14.jpeg', '1', 0, 8, 0),
(181, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.482269, -18.877911, 'Antananarivo', 'Papier autocollante', 'A-35', 'ROCADE DIGUE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'A', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n24.j', '1', 0, 8, 0),
(182, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.488609, -18.913481, 'Antananarivo', 'Papier autocollante', '214', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicite', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(184, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.406250, -18.788679, 'Antananarivo', 'Papier autocollante', '271', 'ANDAKANA', '0', '1', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(185, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.466431, -18.819870, 'Antananarivo', 'Papier autocollante', '400', 'MANDROSOA IVATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo15.jpeg', '1', 0, 6, 0),
(186, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.555210, -18.840170, 'Antananarivo', 'Papier autocollante', '335', 'SAB NAM', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(187, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527351, -18.952150, 'Antananarivo', 'Papier autocollante', 'T-33', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo16.jpeg', '1', 0, 6, 0),
(188, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.524380, -18.944120, 'Antananarivo', 'Papier autocollante', '181', 'ANKADIMBAHOAKA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(189, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.490761, -18.891350, 'Antananarivo', 'Papier autocollante', '336', 'DIGUE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(190, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.495571, -18.897181, 'Antananarivo', 'Papier autocollante', 'TNR-001', 'DIGUE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo17.jpeg', '1', 0, 6, 0),
(191, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.482769, -18.862600, 'Antananarivo', 'Papier autocollante', 'DT 20', 'DIGUE', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '0000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo18.jpeg', '1', 0, 6, 0),
(192, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.514610, -18.946440, 'Antananarivo', 'Papier autocollante', '345', 'FASAN\'I KARANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'dodie.jpg', '1', 0, 6, 0),
(193, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.514500, -18.946329, 'Antananarivo', 'Papier autocollante', '346', 'FASAN\'I KARANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(194, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519890, -18.874451, 'Antananarivo', 'Papier autocollante', '262', 'IVANDRY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'dodie1.jpg', '1', 0, 6, 0),
(195, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522518, -18.936119, 'Antananarivo', 'Papier autocollante', 'DT 27', 'SOANIERANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'C', '000000', '0000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, '2e_photo19.jpeg', '1', 0, 6, 0),
(196, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.530731, -18.914730, 'Antananarivo', 'Papier autocollante', 'DT 5', 'AMBOHIJATOVO', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publicité', 'C', '0000000', '0000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(197, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.519421, -18.873211, 'Antananarivo', 'Papier autocollante', 'E 32', 'ALAROBIA', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo20.jpeg', '1', 0, 6, 0),
(200, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522369, -18.893339, 'Antananarivo', 'Papier autocollante', 'ABB01', 'ANKORONDRANO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(201, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.532749, -18.914829, 'Antananarivo', 'Papier autocollante', '0 référence', 'IMERITSIATOSIKA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo21.jpeg', '1', 0, 6, 0),
(203, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522171, -18.913349, 'Antananarivo', 'Papier autocollante', 'V0026CUA', 'ANOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'V', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, '2e_photo22.jpeg', '1', 0, 9, 0),
(204, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.507809, -18.904831, 'Antananarivo', 'Papier autocollante', 'VOO39CUA', '67 Ha', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'V', '0000000', '0000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'change-bebe44.jpg', '1', 0, 9, 0),
(205, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.507210, -18.904751, 'Antananarivo', 'Papier autocollante', 'V0041CUA', '67 Ha', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicite', 'V', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'change-bebe45.jpg', '1', 0, 9, 0),
(206, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.507149, -18.904751, 'Antananarivo', 'Papier autocollante', 'V0042CUA', '67 Ha', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'V', '000000', '000000', '000000', '000000', '15.000', '0000000', NULL, NULL, '2e_photo23.jpeg', '1', 0, 9, 0),
(207, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.478611, -18.936630, 'Antananarivo', 'Papier autocollante', '216', 'ITAOSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'dodie2.jpg', '1', 0, 6, 0),
(208, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.535992, -18.998610, 'Antananarivo', 'Papier autocollante', 'TNR 020', 'ANDOHARANOFOTSY', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'T', '0000000', '0000000', '0000000', '00000000', '15.000', '000000', NULL, NULL, '2e_photo24.jpeg', '1', 0, 6, 0),
(209, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.520840, -18.877069, 'Antananarivo', 'Papier autocollante', '508', 'IVANDRY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'C', '000000', '000000', '000000', '00000000', '15.000', '00000', NULL, NULL, 'change-bebe46.jpg', '1', 0, 6, 0),
(213, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.494591, -18.897169, 'Antananarivo', 'Papier autocollante', 'V0049CUA', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'V', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'femme_qui_allaite.jpg', '1', 0, 9, 0),
(214, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.552689, -18.857651, 'Antananarivo', 'Papier autocollante', 'P0096T', 'ILAFY', 'aux moins 1.000 passage de voiture par jours', 'une très bonne emplacement pour votre publicité', 'P', '0000000', '0000000', '00000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_2.jpg', '1', 0, 9, 0),
(215, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.552380, -18.858690, 'Antananarivo', 'Papier autocollante', 'P0097T', 'ANDAFIAVARATRA', '0', '1', 'P', '0000000', '0000000', '0000000', '00000000', '15.000', '000000', NULL, NULL, 'papa_et_bébé1.jpg', '1', 0, 9, 0),
(216, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.603271, -18.893801, 'Antananarivo', 'Papier autocollante', 'P0098T', 'ANDOHALO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '000000', '000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_21.jpg', '1', 0, 9, 0),
(217, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.554741, -18.839899, 'Antananarivo', 'Papier autocollante', 'P0103T', 'ILAFY', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '00000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_22.jpg', '1', 0, 9, 0),
(218, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.522652, -18.942511, 'Antananarivo', 'Papier autocollante', 'P0105T', 'ANKADIMBAHOKA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publicité', 'P', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_23.jpg', '1', 0, 9, 0),
(219, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.524570, -18.944460, 'Antananarivo', 'Papier autocollante', 'P0106T', 'ANKADIMBAHOAKA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publicité', 'P', '0000000', '0000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_24.jpg', '1', 0, 9, 0),
(220, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.530479, -18.956461, 'Antananarivo', 'Papier autocollante', 'P0108T', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_25.jpg', '1', 0, 9, 0),
(221, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.527271, -18.953230, 'Antananarivo', 'Papier autocollante', 'P0109T', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '000000', '0000000', '0000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_26.jpg', '1', 0, 9, 0),
(222, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.531071, -18.968161, 'Antananarivo', 'Papier autocollante', 'P0110T', 'ANDOHARANOFOTSY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'P', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_27.jpg', '1', 0, 9, 0),
(223, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.426250, -18.792919, NULL, 'Papier autocollante', 'P0126T', 'AMBOHIDRATRIMO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '0000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_28.jpg', '1', 0, 9, 0),
(224, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.409672, -18.789230, 'Antananarivo', 'Papier autocollante', 'P0128T', 'ALAKAMISY', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'P', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_29.jpg', '1', 0, 9, 0),
(225, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.494621, -18.896540, 'Antananarivo', 'Papier autocollante', 'V0151CUA', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'P', '0000000', '0000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_210.jpg', '1', 0, 9, 0),
(226, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.496830, -18.902960, 'Antananarivo', 'Papier autocollante', 'V0045CUA', 'ANDOHATAPENAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'V', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_211.jpg', '1', 0, 9, 0),
(227, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.475361, -18.799971, 'Antananarivo', 'Papier autocollante', 'MDTA020-01', 'IVATO AÉROPORT', 'plus de 1.200.000 passager qui y passe par ans', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_212.jpg', '1', 0, 12, 0),
(228, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.475361, -18.799971, 'Antananarivo', 'Papier autocollante', 'MDTA020-02', 'IVATO AÉROPORT', 'au moins 1.200.000 passager par ans', 'une très bonne emplacement pour votre publicité', 'M', '000000', '0000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_213.jpg', '1', 0, 12, 0),
(230, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.474911, -18.800369, 'Antananarivo', 'Papier autocollante', 'MDTA021-02', 'IVATO AÉROPORT', 'au moins 1.2.000.000 passager par ans', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '0000000', '00000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_215.jpg', '1', 0, 12, 0),
(231, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.472980, -18.802139, 'Antananarivo', 'Papier autocollante', 'MDTA01-01', 'IVATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_216.jpg', '1', 0, 12, 0),
(232, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.472980, -18.802139, 'Antananarivo', 'Papier autocollante', 'MDTA01-02', 'IVATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '0000000', '15.000', '00000', NULL, NULL, 'Papa_et_bébé_217.jpg', '1', 0, 12, 0),
(233, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.464561, -18.833759, 'Antananarivo', 'Papier autocollante', 'MDTA02-01', 'IVATO ATEHIROKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'papa_et_bébé2.jpg', '1', 0, 12, 0),
(234, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.464561, -18.833759, 'Antananarivo', 'Papier autocollante', 'MDTA02-02', 'IVATO ATEHIROKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'papa_et_bébé3.jpg', '1', 0, 12, 0),
(235, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.461632, -18.840099, 'Antananarivo', 'Papier autocollante', 'MDTA03-01', 'TALATAMATY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_218.jpg', '1', 0, 12, 0),
(236, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.461632, -18.840099, 'Antananarivo', 'Papier autocollante', 'MDTA03-02', 'TALATAMATY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '0000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_219.jpg', '1', 0, 12, 0),
(237, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.477589, -18.849520, 'Antananarivo', 'Papier autocollante', 'MDTA04-01', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '0000000', '0000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_220.jpg', '1', 0, 12, 0),
(238, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.477589, -18.849520, 'Antananarivo', 'Papier autocollante', 'MDTA04-02', 'ANDRANOMENA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_221.jpg', '1', 0, 12, 0),
(239, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.508430, -18.916229, 'Antananarivo', 'Papier autocollante', 'MDTA08-01', 'ANDAVAMAMBA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_222.jpg', '1', 0, 12, 0),
(240, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.508430, -18.916229, 'Antananarivo', 'Papier autocollante', 'MDTA08-02', 'ANDAVAMAMBA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '0000000', '0000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_223.jpg', '1', 0, 12, 0),
(241, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.508320, -18.915850, 'Antananarivo', 'Papier autocollante', 'MDTA09-01', 'ANDAVAMAMBA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_224.jpg', '1', 0, 12, 0),
(242, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.508320, -18.915850, 'Antananarivo', 'Papier autocollante', 'MDTA09-02', 'ANDAVAMAMBA', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_225.jpg', '1', 0, 12, 0),
(243, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.448681, -18.822870, 'Antananarivo', 'Papier autocollante', 'MDTA11-01', 'TALATAMATY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_226.jpg', '1', 0, 12, 0),
(244, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.448681, -18.822870, 'Antananarivo', 'Papier autocollante', 'MDTA11-02', 'TALATAMATY', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_227.jpg', '1', 0, 12, 0),
(246, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.527130, -18.951870, 'Antananarivo', 'Papier autocollante', 'MDTAO12-02', 'TANJOMBATO', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '000000', '000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_229.jpg', '1', 0, 12, 0),
(248, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522949, -18.873751, 'Antananarivo', 'Papier autocollante', 'MDTA015-02', 'IVANDRY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '0000000', '0000000', '0000000', '00000000', '15.000', '00000', NULL, NULL, 'Papa_et_bébé_230.jpg', '1', 0, 12, 0),
(249, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522541, -18.887550, 'Antananarivo', 'Papier autocollante', 'MDTA080-01', 'ANKORONDRANO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_231.jpg', '1', 0, 12, 0),
(250, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522541, -18.887550, 'Antananarivo', 'Papier autocollante', 'MDTA080-02', 'ANKORONDRANO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_232.jpg', '1', 0, 12, 0),
(251, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.512981, -18.869329, 'Antananarivo', 'Papier autocollante', 'MDTA081-01', 'ANOSIVAVAKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '0000000', '0000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_233.jpg', '1', 0, 12, 0),
(252, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.512981, -18.869329, NULL, 'Papier autocollante', 'MDTA081-02', 'ANOSIVAVAKA ', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicite', 'M', '000000', '0000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_234.jpg', '1', 0, 12, 0),
(253, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.521980, -18.894260, 'Antananarivo', 'Papier autocollante', 'MDTA092-01', 'ANKORONDRANO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicite', 'M', '000000', '000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_235.jpg', '1', 0, 12, 0),
(254, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.521980, -18.894260, 'Antananarivo', 'Papier autocollante', 'MDTA092-01', 'ANKORONDRANO pres Henri fraise', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '0000000', '0000000', '0000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_236.jpg', '1', 0, 12, 0),
(255, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.521980, -18.894260, 'Antananarivo', 'Papier autocollante', 'MDTA092-02', 'ANKORONDRANO pres Henri fraise', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '0000000', '00000000', '0000000', '00000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_237.jpg', '1', 0, 12, 0),
(256, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.520531, -18.876801, 'Antananarivo', 'Papier autocollante', 'MDTA095-01', 'AKONRONDRANO en face METAPLASCO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_238.jpg', '1', 0, 12, 0),
(257, '8/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.520531, -18.876801, 'Antananarivo', 'Papier autocollante', 'MDTA095-02', 'ANKORONDRANO en face METAPLASCO', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '0000000', '0000000', '00000000', '15.000', '000000000', NULL, NULL, 'Papa_et_bébé_239.jpg', '1', 0, 12, 0),
(258, '12/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.525089, -18.901440, 'Antananarivo', 'Bâche', 'MDTA024-01', 'BEHORIRIKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '00000', '000000', '000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_240.jpg', '1', 0, 12, 0),
(259, '3/6', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.525089, -18.901421, 'Antananarivo', 'Bâche', 'MDTA024-02', 'BEHORIRIK', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_241.jpg', '1', 0, 12, 0),
(260, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522511, -18.917700, 'Antananarivo', 'Papier autocollante', 'MDTA093-01', 'ANOSY', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_242.jpg', '1', 0, 12, 0),
(261, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522511, -18.917700, 'Antananarivo', 'Papier autocollante', 'MDTA093-02', 'ANOSY', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'papa_et_bébé5.jpg', '1', 0, 12, 0),
(262, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.541069, -18.880980, 'Antananarivo', 'Papier autocollante', 'MDTA094-01', 'ANDRANOBEVAVA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '0000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_243.jpg', '1', 0, 12, 0),
(263, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.541069, -18.880980, 'Antananarivo', 'Papier autocollante', 'MDTA094-02', 'ANDRANOBEVAVA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_244.jpg', '1', 0, 12, 0),
(264, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.558338, -18.825029, 'Antananarivo', 'Papier autocollante', 'MDTA013-01', 'ANOSY AVARATRA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_245.jpg', '1', 0, 12, 0),
(265, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.558338, -18.825029, 'Antananarivo', 'Papier autocollante', 'MDTA024-02', 'ANOSY AVARATRA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '0000000', '000000', '000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_246.jpg', '1', 0, 12, 0),
(266, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.544552, -18.979540, 'Antananarivo', 'Papier autocollante', 'MDTA014-01', 'BY-PASS', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '0000000', '0000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_247.jpg', '1', 0, 12, 0),
(267, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.544552, -18.979540, 'Antananarivo', 'Papier autocollante', 'MDTA014-02', 'BY-PASS', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '000000', '0000000', '0000000', '0000000', '15.000', '0000000', NULL, NULL, 'papa_et_bébé6.jpg', '1', 0, 12, 0),
(268, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.429459, -18.803690, 'Antananarivo', 'Papier autocollante', 'MDTA016-01', 'ANOSIALA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '000000', '0000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_248.jpg', '1', 0, 12, 0),
(269, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.429459, -18.803690, 'Antananarivo', 'Papier autocollante', 'MDTA016-02', 'ANOSIALA', 'vue pour tous les passants', 'centre ville beaucoup de passage de piéton et de voiture ', 'M', '000000', '000000', '000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_249.jpg', '1', 0, 12, 0),
(273, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.496311, -18.938120, 'Antananarivo', 'Bâche', 'MDTA017-01', 'ANOSIZATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publiciter', 'M', '000000', '000000', '000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_253.jpg', '1', 0, 12, 0),
(274, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.496311, -18.938120, 'Antananarivo', 'Bâche', 'MDTA017-02', 'ANOSIZATO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_254.jpg', '1', 0, 12, 0),
(275, '12/3', 'Location, Conception et Pose', '2', '0', '12.000', '3.000', 47.514721, -18.924999, 'Antananarivo', 'Bâche', 'MDTA018', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicite', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_255.jpg', '1', 0, 12, 0),
(276, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.522949, -18.873751, 'Antananarivo', 'Papier autocollante', 'MDTA015-01', 'IVANDRY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_256.jpg', '1', 0, 12, 0),
(277, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.527130, -18.951870, 'Antananarivo', 'Papier autocollante', 'MDTA012-01', 'IVANDRY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '000000', '0000000', '0000000', '0000000', '15.000', '000000', NULL, NULL, 'Papa_et_bébé_257.jpg', '1', 0, 12, 0),
(278, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.475368, -18.799990, 'Antananarivo', 'Papier autocollante', 'MDTA021-01', 'IVANDRY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicite', 'M', '0000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'Papa_et_bébé_258.jpg', '1', 0, 12, 0),
(279, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.523159, -18.905809, 'Antananarivo', 'Papier autocollante', 'E23-7', 'ANALAKELY', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_0052.JPG', '1', 0, 3, 0),
(280, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.498199, -18.937901, 'Antananarivo', 'Papier autocollante', 'E26-18', 'ANOSIZATO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_0053.JPG', '1', 0, 3, 0),
(281, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.530701, -18.891630, 'Antananarivo', 'Papier autocollante', 'E4-13', 'TSIAZOTAFO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00531.JPG', '1', 0, 3, 0),
(282, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.525471, -18.902990, 'Antananarivo', 'Papier autocollante', 'E4-14', 'TSIAZOTAFO', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_0054.JPG', '1', 0, 3, 0);
INSERT INTO `panneau` (`ID_PANNEAU`, `TYPE`, `SERVICE`, `FACE`, `LUMIERE`, `LARGEUR`, `LONGUEUR`, `LOGITUDE`, `LATITUDE`, `VILLE`, `HABILLAGE`, `REFERENCE`, `ADRESSE`, `DESCRIPTION`, `INFO`, `MOT_CLES`, `MENSUEL`, `ANNUEL`, `SEMESTRIEL`, `POSE`, `TAXE`, `Impression`, `Conception`, `image_panneau1`, `image_panneau`, `STATUS`, `verifier`, `ID_REGISSEUR`, `gerer`) VALUES
(283, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.528889, -18.901890, 'Antananarivo', 'Papier autocollante', 'E13-34', 'AMBATOMITSANGANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00532.JPG', '1', 0, 3, 0),
(284, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.503738, -18.934919, 'Antananarivo', 'Papier autocollante', 'E27-19', 'ANOSIZATO', '0', '1', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00533.JPG', '1', 0, 3, 0),
(285, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.528900, -18.901850, 'Antananarivo', 'Papier autocollante', 'E13-31', 'ANDRAVOANGY TRANO NJIRO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00541.JPG', '1', 0, 3, 0),
(286, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.528919, -18.901871, 'Antananarivo', 'Papier autocollante', 'E13-32', 'ANDRAVOANGY TRANO NJIRO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'E', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00534.JPG', '1', 0, 3, 0),
(287, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.550919, -18.884190, 'Antananarivo', 'Papier autocollante', 'BT 12-36', 'NANISANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'B', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00535.JPG', '1', 0, 3, 0),
(288, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.528198, -18.918200, 'Antananarivo', 'Papier autocollante', 'BT 12-24', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'B', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00536.JPG', '1', 0, 3, 0),
(289, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.537720, -18.995310, 'Antananarivo', 'Papier autocollante', '13B12', 'IAVOLOHA BY PASS', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'B', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00537.JPG', '1', 0, 3, 0),
(291, '12/3', 'Location, Conception et Pose', '2', '0', '12.000', '3.000', 47.603130, -18.898899, 'Antananarivo', 'Papier autocollante', 'BT 12-16', 'AMBOHIMANGAKELY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'B', '117.000', '1.4000000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_00539.JPG', '1', 0, 3, 0),
(292, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.498852, -18.909710, 'Antananarivo', 'Papier autocollante', '15B12', 'ANDOHATAPENAKA SORTIE 67 Ha', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'B', '117.000', '1.400000', '700.000', '140.000', '15.000', '500.000', NULL, NULL, 'DSC_005310.JPG', '1', 0, 3, 0),
(293, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.503590, -18.935169, 'Antananarivo', 'Papier autocollante', 'S-AZT-005-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '56.000', '00000000', '15.0000', '000000', NULL, NULL, 'DSC_00521.JPG', '1', 0, 7, 0),
(294, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.503052, -18.935659, 'Antananarivo', 'Papier autocollante', 'S-AZT-004-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, 'DSC_005311.JPG', '1', 0, 7, 0),
(295, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.502491, -18.936140, 'Antananarivo', 'Papier autocollante', 'S-AZT-003-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '00000000', NULL, NULL, 'DSC_005312.JPG', '1', 0, 7, 0),
(296, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.501930, -18.936701, 'Antananarivo', 'Papier autocollante', 'S-AZT-002-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, 'DSC_005313.JPG', '1', 0, 7, 0),
(297, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.501320, -18.937260, 'Antananarivo', 'Papier autocollante', 'S-AZT-001-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '000000', NULL, NULL, 'DSC_005314.JPG', '1', 0, 7, 0),
(298, 'Sucette', 'Location, Conception et Pose', '3', '0', '2.000', '1.500', 47.527248, -18.921570, 'Antananarivo', 'Papier autocollante', 'T-A4-001 F1/F2/F3', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'centre ville beaucoup de passage de piéton et de voiture ', 'T', '26.000', '931.000', '156.000', '00000', '15.000', '0000000', NULL, NULL, 'DSC_005315.JPG', '1', 0, 7, 0),
(299, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.504082, -18.934710, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-001-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, 'DSC_005316.JPG', '1', 0, 7, 0),
(300, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.504940, -18.933901, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-002-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, 'DSC_00542.JPG', '1', 0, 7, 0),
(301, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.506550, -18.932461, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-003-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, 'DSC_005317.JPG', '1', 0, 7, 0),
(302, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.507019, -18.932011, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-004-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, 'DSC_00522.JPG', '1', 0, 7, 0),
(303, 'Sucette', 'Location, Conception et Pose', '2', '0', '2.000', '1.500', 47.508492, -18.930620, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-005-F1/F2', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'S', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, 'DSC_005318.JPG', '1', 0, 7, 0),
(304, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.530788, -18.914690, 'Antananarivo', 'Papier autocollante', 'D017', 'AMBOHIJATOVO', 'embouteillage tous le temps ', 'centre ville beaucoup de passage de piéton et de voiture ', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005319.JPG', '1', 0, 5, 0),
(305, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.514690, -18.946350, 'Antananarivo', 'Papier autocollante', 'A066', 'DIGUE FAASAN\'I KARANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'A', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_0051.JPG', '1', 0, 5, 0),
(306, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.554989, -18.840960, 'Antananarivo', 'Papier autocollante', 'D042', 'ENTREE SAB NAM', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005320.JPG', '1', 0, 5, 0),
(307, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.603321, -18.898540, 'Antananarivo', 'Papier autocollante', 'D008', 'AMBOHIMANGAKELY BY PASS', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005321.JPG', '1', 0, 5, 0),
(308, '8/3', 'Location, Conception et Pose', '1', '0', '8.000', '3.000', 47.603210, -18.899389, 'Antananarivo', 'Papier autocollante', 'D007', 'SORTIE AMBOHIMANGAKELY', 'vue pour tous les passants VERS TANA', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005322.JPG', '1', 0, 5, 0),
(309, '8/3', 'Location, Conception et Pose', '1', '0', '8.000', '3.000', 47.557240, -18.831390, 'Antananarivo', 'Papier autocollante', 'D053', 'SORTIE SABOTSY NAMEHANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.6500000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005323.JPG', '1', 0, 5, 0),
(310, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.542461, -18.871429, 'Antananarivo', 'Papier autocollante', 'D003', 'ANALAMAHINTSY COLISEUM', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005324.JPG', '1', 0, 5, 0),
(311, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.519550, -18.873541, 'Antananarivo', 'Papier autocollante', 'D046', 'ALAROBIA FACE TRADE TOWER', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.6500000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_0050.JPG', '1', 0, 5, 0),
(312, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.514641, -18.946449, 'Antananarivo', 'Papier autocollante', 'A067', 'FASAN\'I KARANA', 'embouteillage tous le temps ', 'une très bonne emplacement pour votre publicité', 'A', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_00523.JPG', '1', 0, 5, 0),
(313, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.548820, -18.889730, 'Antananarivo', 'Papier autocollante', 'A039', 'NANISANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'A', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_00524.JPG', '1', 0, 5, 0),
(314, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.543030, -18.925619, 'Antananarivo', 'Papier autocollante', 'A075', 'AMBATOROKA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'A', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005325.JPG', '1', 0, 5, 0),
(315, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.545300, -18.862520, 'Antananarivo', 'Papier autocollante', 'D013', 'ANDRONONOBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005326.JPG', '1', 0, 5, 0),
(316, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.478279, -18.851440, 'Antananarivo', 'Papier autocollante', 'D043', 'ANDRANOMENA PACOM', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005327.JPG', '1', 0, 5, 0),
(317, '6/3', 'Location, Conception et Pose', '1', '0', '6.000', '3.000', 47.477539, -18.846870, 'Antananarivo', 'Papier autocollante', 'D016', 'AMBOHIBAO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'D', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005328.JPG', '1', 0, 5, 0),
(318, '6/3', 'Location, Conception et Pose', '1', '0', '5.000', '4.000', 47.544270, -18.901011, 'Antananarivo', 'Papier autocollante', 'M004', 'ANALAMAHINTSY EN FACE BASSIN', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'M', '138.000', '1.650000', '825.000', '265.000', '15.000', '550.000', NULL, NULL, 'DSC_005329.JPG', '1', 0, 5, 0),
(320, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.508209, -18.875120, 'Antananarivo', 'Papier autocollante', 'A017', 'ANDRAHARO', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'A', '000000', '0000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'DSC_005331.JPG', '1', 1, 5, 0),
(322, '4/3', 'Location, Conception et Pose', '1', '0', '3000', '4000', 47.519611, -18.875370, 'Antananarivo', 'Papier autocollante', 'Opticity', 'La City - Alarobia', 'en bord de route à la sortie principale du centre commerciale La city', 'Visible du coté Ankorondrano-Alarobia', 'panneau,4/3,', '0', '1400000', '0', '165000', '180000', '500000', NULL, NULL, '91563489_147893730087672_6634022247931576320_n.jpg', '1', 1, 3, 0),
(323, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.525150, -18.890320, 'Antananarivo', 'Papier autocollante', 'Veloptic', 'Tana Water Front - Ambodivona ', 'Dans le parking de tana water front ', '.', 'panneau,4/3,', '0', '1400000', '0', '190000', '180000', '500000', NULL, NULL, '91563489_147893730087672_6634022247931576320_n1.jp', '1', 0, 3, 0),
(324, '4/3', 'Location, Conception et Pose', '1', '0', '4000', '3000', 47.527061, -18.952240, 'Antananarivo', 'Papier autocollante', 'A057', 'Entre Sanifer et Disconord (vers Ampasika)', 'En plein Tanjombato, à proximité d\'établissement de renom et à haute frequentation ', 'vers antananarivo', 'panneau,4/3,', '0', '1650000', '0', '264000', '180000', '550000', NULL, NULL, '91563489_147893730087672_6634022247931576320_n2.jp', '1', 0, 5, 0),
(326, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528591, -18.869770, 'Antananarivo', 'Papier autocollante', 'B7', 'ALAROBIA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'B', '000000', '0000000', '000000', '000000', '15.000', '000000', NULL, NULL, 'Panneau_4x3_Aiko_B7_B8_Ivandry.jpg', '1', 0, 14, 0),
(327, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.528591, -18.869749, 'Antananarivo', 'Papier autocollante', 'B8', 'IVANDRY', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'B', '000000', '0000000', '0000000', '000000', '15.000', '0000000', NULL, NULL, 'Panneau_4x3_Aiko_B7_B8_Ivandry1.jpg', '1', 0, 14, 0),
(329, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.522190, -18.938181, 'Antananarivo', 'Papier autocollante', 'a', 'SOANIERANA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'axes', '0000000', '0000000', '00000000', '000000', '15.000', '0000000', NULL, NULL, 'Panneau_12x3_Aiko_Soanierana_(Bc_et_Bd).jpg', '1', 0, 14, 0),
(330, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.522190, -18.938210, 'Antananarivo', 'Papier autocollante', 'b', 'SOANIERANA', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'axes', '00000000', '00000000', '00000000', '00000000', '15.000', '00000000', NULL, NULL, 'Panneau_12x3_Aiko_Soanierana_(Bc_et_Bd)1.jpg', '1', 0, 14, 0),
(331, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.521641, -18.938021, 'Antananarivo', 'Papier autocollante', 'c', 'SOANIERANA', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'axes', '0000000', '0000000', '00000000', '0000000', '15.000', '0000000', NULL, NULL, 'Panneau_12x3_Aiko_Soanierana_(Bc_et_Bd)2.jpg', '1', 0, 14, 0),
(332, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.521660, -18.938021, 'Antananarivo', 'Papier autocollante', 'd', 'SOANIERANA', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'axes', '0000000', '0000000', '00000000', '0000000', '15.000', '00000000', NULL, NULL, 'Panneau_12x3_Aiko_Soanierana_(Bc_et_Bd)3.jpg', '1', 0, 14, 0),
(334, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.527248, -18.921570, 'Antananarivo', 'Papier autocollante', 'T-A4-001-F1', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '156.000', '931.000', '000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n37.j', '1', 0, 7, 0),
(335, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.527248, -18.921570, 'Antananarivo', 'Papier autocollante', 'T-A4-001-F1/F2', 'MAHAMASINA', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.00', '156.000', '931.000', '0000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n38.j', '1', 0, 7, 0),
(336, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.501320, -18.937260, 'Antananarivo', 'Papier autocollante', 'S-AZT-001-F1', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '156.000', '931.000', '00000', '15.000', '000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n39.j', '1', 0, 7, 0),
(337, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.501930, -18.936701, 'Antananarivo', 'Papier autocollante', 'S-AZT-002-F1', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '156.000', '931.000', '0000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n40.j', '1', 0, 7, 0),
(338, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.502491, -18.936140, 'Antananarivo', 'Papier autocollante', 'S-AZT-003-F1', 'ANOSIBE', 'lieux avec au moins 3000 passage de voiture/jours', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.0000', '156.000', '00000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n41.j', '1', 0, 7, 0),
(339, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.503052, -18.935659, 'Antananarivo', 'Papier autocollante', 'S-AZT-004-F1', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n42.j', '1', 0, 7, 0),
(340, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.503590, -18.935169, 'Antananarivo', 'Papier autocollante', 'S-AZT-005-F1', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '0000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n43.j', '1', 0, 7, 0),
(341, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.504940, -18.933901, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-002-F1', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '00000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n44.j', '1', 0, 7, 0),
(342, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.504082, -18.934710, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-001-F1', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '0000000', '15.000', '000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n45.j', '1', 0, 7, 0),
(343, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.506550, -18.932461, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-003', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n46.j', '1', 0, 7, 0),
(344, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.507019, -18.932011, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-004', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n47.j', '1', 0, 7, 0),
(345, 'Sucette', 'Location, Conception et Pose', '1', '0', '2.000', '1.500', 47.508492, -18.930620, 'Antananarivo', 'Papier autocollante', 'S-A4-ANB-005', 'ANOSIBE', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'Sucette', '26.000', '931.000', '156.000', '000000', '15.000', '0000000', NULL, NULL, '61902657_423728528208626_6943108736164560896_n48.j', '1', 0, 7, 0),
(346, '4/3', 'Location, Conception et Pose', '1', '0', '4.000', '3.000', 47.521412, -18.873791, 'Antananarivo', 'Papier autocollante', 'B 3', 'ALAROBIA', 'embouteillage presque à tout heure de la journée', 'une très bonne emplacement pour votre publicité', 'bien', '183.000', '2.192000', '1.096000', '200.000', '16.000', '900.000', NULL, NULL, 'panneau_4x3_Aiko_Alarobia_(disponible)1.JPG', '1', 0, 14, 0),
(348, '12/3', 'Location, Conception et Pose', '1', '0', '12.000', '3.000', 47.509251, -18.903971, 'Antananarivo', 'Papier autocollante', 'AP 19', 'ANKASINA 67 Ha', 'vue pour tous les passants', 'une très bonne emplacement pour votre publicité', 'A', '960.500', '11.525000', '5.762000', '250.000', '48.000', '1.750000', NULL, NULL, 'Panneau_12x3_Aiko_Ankasina_67ha2.jpg', '1', 0, 14, 0);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `ID_PRESTATAIRE` int(11) NOT NULL,
  `NOM_PRESTATAIRE` longtext DEFAULT NULL,
  `CONTACT_PRESTATAIRE` char(10) DEFAULT NULL,
  `EMAIL_PRESTATAIRE` longtext DEFAULT NULL,
  `TYPE_ABONNEMENT` longtext DEFAULT NULL,
  `MOT_DE_PASS` varchar(100) NOT NULL,
  `concepteur` int(2) NOT NULL DEFAULT 1,
  `imprimerie` int(2) NOT NULL DEFAULT 1,
  `conseil` int(2) NOT NULL DEFAULT 1,
  `logo_prestataire` varchar(500) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `professionnel`
--

CREATE TABLE `professionnel` (
  `id` int(2) NOT NULL,
  `ID_REGISSEUR` int(2) NOT NULL,
  `image_pro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professionnel`
--

INSERT INTO `professionnel` (`id`, `ID_REGISSEUR`, `image_pro`) VALUES
(1, 1, '46479845_144894679818002_8798349516420939776_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id` int(3) NOT NULL,
  `quartier` varchar(200) NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`id`, `quartier`, `id_ville`) VALUES
(1, 'Anjoma', 2),
(3, 'ANALAKELY', 1),
(4, 'MAHAMASINA', 1),
(5, 'ANKORONDRANO', 1),
(6, 'TALATAMATY', 1),
(7, 'IVATO', 1),
(8, 'AMBOHIBAO', 1),
(9, 'ANALAMAHINTSY', 1),
(10, 'ANDOHARANOFOTSY', 1),
(11, 'TANJOMBATO', 1),
(12, 'IVANDRY', 1),
(13, 'ALAROBIA', 1),
(14, 'SOANIERANA', 1),
(15, 'ANKADIMBAHOAKA', 1),
(16, 'FASAN\'I KARANA', 1),
(17, 'AMPITATAFIKA', 1),
(18, 'ITAOSY', 1),
(19, 'ANDOHATAPENAKA', 1),
(20, '67 Ha', 1),
(21, 'ANDRANOMENA', 1),
(22, 'SCORE DIGUE', 1),
(23, 'AMBOHIJATOVO', 1),
(24, 'ANTSAHABE', 1),
(25, 'AMBANIDIA', 1),
(26, 'AMBATOROKA', 1),
(27, 'ILAFY', 1),
(28, 'AMPASAMPITO', 1),
(29, 'AMPASAMPITO', 1),
(30, 'BEHORIRIKA', 1),
(31, 'ANDRAVOANGY', 1),
(32, 'FARAVOHITRA', 1),
(33, 'ANDOHALO', 1),
(34, 'TSARALALANA', 1),
(35, 'ANOSIBE', 1),
(36, 'ANOSIZATO', 1),
(37, 'DIGUE AMPASIKA', 1),
(38, 'AMBOHIDRATRIMO', 1),
(39, 'AMBOHIMANARINA', 1),
(40, 'AMBODIMITA', 1),
(41, 'ANDRAHARO', 1),
(42, 'ANKAZOMANGA', 1),
(43, 'ALAKAMISY', 1),
(44, 'SABOTSY NAMEHANA', 1),
(45, 'ANOSY', 1),
(46, 'BY PASS', 1),
(47, 'ANOSIVAVAKA', 1),
(48, 'ANDAVAMAMBA', 1),
(49, 'NANISANA', 1),
(50, 'SOAVIMASOANDRO', 1),
(51, 'ANTANINARENINA', 1);

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE `realisation` (
  `id_realisation` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `nom_image` varchar(500) NOT NULL,
  `ID_PRESTATAIRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `regisseur`
--

CREATE TABLE `regisseur` (
  `ID_REGISSEUR` int(11) NOT NULL,
  `ENTREPRISE` varchar(100) DEFAULT NULL,
  `EMAIL_REGISSEUR` longtext DEFAULT NULL,
  `CONTACT_REGISSEUR` longtext DEFAULT NULL,
  `MOT_DE_PASS` longtext DEFAULT NULL,
  `ADRESSE` varchar(200) NOT NULL,
  `LOGO` varchar(100) NOT NULL,
  `etat` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `regisseur`
--

INSERT INTO `regisseur` (`ID_REGISSEUR`, `ENTREPRISE`, `EMAIL_REGISSEUR`, `CONTACT_REGISSEUR`, `MOT_DE_PASS`, `ADRESSE`, `LOGO`, `etat`, `status`) VALUES
(1, 'Clinogel Madagascar', 'clinogel@gmail.com', '0340577541', 'clinogel', 'Imm tmt', '16085554465687827808507007173170.jpg', 1, 0),
(2, 'TAHIRY', 'andrianandrasana7manjato@gmail.com', '034 40 383 42', 'Manjato@0705', 'Njato', 'UCO_001-0143.png', 0, 0),
(3, 'INJET', 'injet@domapub.mg', ' 034 05 369 75', '123456', 'DOMAPUB', '61902657_423728528208626_6943108736164560896_n1.jpg', 1, 0),
(4, 'Tamby Mampionona HERIHARSON', 'tambymampioninaheriharson@gmail.com', '0340652221', '1234', 'Anjanahary-Tananarivo', '10711.png', 0, 0),
(5, 'ERRE', 'erre@erregmail.com', '020 22 535 34', '123456', 'ILAFY ANTANANARIVO', '61902657_423728528208626_6943108736164560896_n2.jpg', 1, 0),
(6, 'JOCKER', 'jocker@moov.mg', '034 14 694 93/98', '123456', 'ANTANANARIVO', '1ere_photo81.jpg', 1, 0),
(7, 'ECO FUSSION', 'ecofussion@gmail.com', '032 07 022 64', '123456', 'ANTANANARIVO', 'papa_et_bébé.jpg', 1, 0),
(8, 'HERTIE', 'hertiecomm@gmail.com', '034 89 004 56', '123456', 'ANTANANARIVO', '61902657_423728528208626_6943108736164560896_n3.jpg', 1, 0),
(9, 'JR PRINT', 'jrprint@gmail.com', '034 68 937 57', '123456', 'ANTANANARIVO', '61902657_423728528208626_6943108736164560896_n4.jpg', 1, 0),
(10, 'I-MADA', 'imada@gmail.com', '033 07 071 46', '123456', 'ANTANANARIVO', '61902657_423728528208626_6943108736164560896_n5.jpg', 1, 0),
(11, 'JC DECAUX', 'jcdecaudx@gmail.com', '020 23 422 75/76', '1123456', 'ANTANANARIVO', '411991b6476c59516bee1674d2459931.jpg', 0, 0),
(12, 'JC DECAUX 2', 'jcdecaux@gmail.com', '020 23 422 75/76', '123456', 'ANTANANARIVO', 'd9e0fb06122cb041b3611fb544b6312c.jpg', 1, 0),
(14, 'Aiko Prod', 'aiko@gmail.com', '034 05 613 55', '123456', 'ANTANANARIVO', 'ac499a474982344a31afcf29e5013e9f.JPG', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service_presta`
--

CREATE TABLE `service_presta` (
  `id_prestataire` int(2) NOT NULL,
  `service` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sous_type`
--

CREATE TABLE `sous_type` (
  `id` int(11) NOT NULL,
  `sous` varchar(100) NOT NULL,
  `id_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_type`
--

INSERT INTO `sous_type` (`id`, `sous`, `id_type`) VALUES
(2, '4/3', 1),
(3, '8/3', 1),
(4, 'Sucette', 1),
(5, 'Cylindrique', 2),
(7, '6/3', 1),
(8, '12/3', 1),
(9, '3/6', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Panneau '),
(2, 'Distributeur Personn'),
(3, 'Digital'),
(4, 'Véhicule'),
(5, 'Magasine '),
(6, 'Mur');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`) VALUES
(1, 'Antananarivo'),
(2, 'Fianarantsoa'),
(3, 'Tamatave '),
(4, 'Diego-Suarez'),
(5, 'Tuléar'),
(6, 'Majunga'),
(7, 'Antsirabe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement_client`
--
ALTER TABLE `abonnement_client`
  ADD PRIMARY KEY (`ID_ABONNEMENT2`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`ID_CLIENT2`,`ID_ABONNEMENT2`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id_carte`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_CLIENT2`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID_DEMANDE`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id_favoris`);

--
-- Index pour la table `fiche_presta`
--
ALTER TABLE `fiche_presta`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panneau`
--
ALTER TABLE `panneau`
  ADD PRIMARY KEY (`ID_PANNEAU`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`ID_PRESTATAIRE`);

--
-- Index pour la table `professionnel`
--
ALTER TABLE `professionnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id_realisation`);

--
-- Index pour la table `regisseur`
--
ALTER TABLE `regisseur`
  ADD PRIMARY KEY (`ID_REGISSEUR`);

--
-- Index pour la table `service_presta`
--
ALTER TABLE `service_presta`
  ADD PRIMARY KEY (`id_prestataire`);

--
-- Index pour la table `sous_type`
--
ALTER TABLE `sous_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement_client`
--
ALTER TABLE `abonnement_client`
  MODIFY `ID_ABONNEMENT2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id_carte` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID_CLIENT2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `ID_DEMANDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id_favoris` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `fiche_presta`
--
ALTER TABLE `fiche_presta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `panneau`
--
ALTER TABLE `panneau`
  MODIFY `ID_PANNEAU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `ID_PRESTATAIRE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professionnel`
--
ALTER TABLE `professionnel`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `regisseur`
--
ALTER TABLE `regisseur`
  MODIFY `ID_REGISSEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `service_presta`
--
ALTER TABLE `service_presta`
  MODIFY `id_prestataire` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sous_type`
--
ALTER TABLE `sous_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
