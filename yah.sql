-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 05 jan. 2019 à 02:53
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `yah`
--

-- --------------------------------------------------------

--
-- Structure de la table `yahtzee`
--

CREATE TABLE `yahtzee` (
  `id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `uno` varchar(10) NOT NULL,
  `deux` varchar(10) NOT NULL,
  `trois` varchar(10) NOT NULL,
  `quatre` varchar(10) NOT NULL,
  `cinq` varchar(10) NOT NULL,
  `six` varchar(10) NOT NULL,
  `haut` int(10) NOT NULL,
  `brelan` varchar(10) NOT NULL,
  `carre` varchar(10) NOT NULL,
  `full` varchar(10) NOT NULL,
  `petitesuite` varchar(10) NOT NULL,
  `grandesuite` varchar(10) NOT NULL,
  `yahtzee` varchar(10) NOT NULL,
  `chance` varchar(10) NOT NULL,
  `bas` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `yahtzee`
--
ALTER TABLE `yahtzee`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
