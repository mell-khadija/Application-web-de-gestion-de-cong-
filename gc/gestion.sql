-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 22 juin 2020 à 09:58
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `congé`
--

CREATE TABLE `congé` (
  `id` int(100) NOT NULL,
  `date_demande` date NOT NULL DEFAULT current_timestamp(),
  `type_congé` varchar(100) NOT NULL,
  `date_sortie` date NOT NULL,
  `date_retour` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `CIN` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `congé`
--

INSERT INTO `congé` (`id`, `date_demande`, `type_congé`, `date_sortie`, `date_retour`, `status`, `CIN`) VALUES
(1, '2020-06-01', 'Congé annuel ', '0000-00-00', '0000-00-00', 'Approuvé', 12),
(8, '2020-06-16', 'Congé exceptionnel', '0000-00-00', '0000-00-00', 'Refusé', 13),
(10, '2020-06-16', 'Congé annuel', '2020-07-13', '2020-08-03', 'Refusé', 40),
(11, '2020-06-16', 'Congé exceptionnel', '2020-06-22', '2020-06-29', 'Approuvé', 30),
(12, '2020-06-17', 'Congé maladie', '2020-06-29', '2020-07-06', 'Approuvé', 12);

-- --------------------------------------------------------

--
-- Structure de la table `typecongé`
--

CREATE TABLE `typecongé` (
  `id` int(100) NOT NULL,
  `type_congé` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typecongé`
--

INSERT INTO `typecongé` (`id`, `type_congé`) VALUES
(1, 'Congé annuel'),
(2, 'Congé exceptionnel'),
(3, 'Congé de maladie'),
(4, 'Maternité');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `CIN` int(100) NOT NULL,
  `tel` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `CIN`, `tel`, `email`, `Service`, `grade`, `user_type`, `password`) VALUES
(1, 'yousra', 'ben', 3, 2345, 'yousra@gmail.com', 'mainte', '1er grade', 'admin', 'wxyz'),
(2, 'leyla', 'deniz', 2, 768, 'leyla@gmail.com', 'info', '1er grade', 'employe', 'abcd'),
(4, 'hazar', 'fares', 123, 6891567, 'hazar@gmail.com', 'info', '2em grade', 'employe', 'aze'),
(200, 'safi', 'nada', 4, 789, 'safi@gmail.com', 'Info', '1er grade', 'admin', 'ERTY'),
(201, 'elyousfi', 'issra', 5, 12345, 'elyousfi@gmail.com', 'Info', '1er grade', 'employe', 'AZER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `congé`
--
ALTER TABLE `congé`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typecongé`
--
ALTER TABLE `typecongé`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `congé`
--
ALTER TABLE `congé`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `typecongé`
--
ALTER TABLE `typecongé`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
