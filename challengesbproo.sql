-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 jan. 2023 à 00:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challengesbproo`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) NOT NULL,
  `description_categorie` varchar(500) NOT NULL,
  `id_createurchallenge` int(11) NOT NULL,
  `id_challengeReleves` int(11) NOT NULL,
  `id_challengeur` int(11) NOT NULL,
  `id_challengeur_1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

CREATE TABLE `challenge` (
  `id_challenge` int(11) NOT NULL,
  `id_createurchallenge` int(11) NOT NULL,
  `titre_challenge` varchar(50) NOT NULL,
  `timing_challenge` varchar(50) NOT NULL,
  `niveau_challenge` varchar(50) NOT NULL,
  `insertion_imagechallenge` varchar(70) NOT NULL,
  `insertion_resourcechallenge` varchar(70) NOT NULL,
  `description_challenge` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `challenges_releves`
--

CREATE TABLE `challenges_releves` (
  `id_challengeur_1` int(11) NOT NULL,
  `id_challengeReleves` int(11) NOT NULL,
  `id_challengeur` int(11) NOT NULL,
  `titre_challengeReleves` varchar(50) NOT NULL,
  `dossier_challengeReleves` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `challengeur`
--

CREATE TABLE `challengeur` (
  `id_challengeur` int(11) NOT NULL,
  `nom_challengeur` varchar(50) NOT NULL,
  `prenom_challengeur` varchar(50) NOT NULL,
  `email_challengeur` varchar(50) NOT NULL,
  `mdp_challengeur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `challengeur`
--

INSERT INTO `challengeur` (`id_challengeur`, `nom_challengeur`, `prenom_challengeur`, `email_challengeur`, `mdp_challengeur`) VALUES
(1, 'Tsangue', 'Eddie', 'b.ventures.ts@gmail.com', 'Eddinho'),
(2, 'Nguimfack', 'Leslie', 'leslie@yahoo:com', 'les');

-- --------------------------------------------------------

--
-- Structure de la table `createur_challenge`
--

CREATE TABLE `createur_challenge` (
  `id_createurchallenge` int(11) NOT NULL,
  `nom_createurchallenge` varchar(50) NOT NULL,
  `prenom_createurchallenge` varchar(50) NOT NULL,
  `email_createurchallenge` varchar(50) NOT NULL,
  `tel_createurchallenge` varchar(50) NOT NULL,
  `mdp_createurchallenge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `createur_challenge`
--

INSERT INTO `createur_challenge` (`id_createurchallenge`, `nom_createurchallenge`, `prenom_createurchallenge`, `email_createurchallenge`, `tel_createurchallenge`, `mdp_createurchallenge`) VALUES
(1, 'Tsangue', 'Eddie', 'b.ventures.ts@gmail.com', '672470527', 'Eddinho'),
(2, 'Frankenstein', 'Duglas', 'duglas@yahoomail.com', '096786452345', 'Dug432');

-- --------------------------------------------------------

--
-- Structure de la table `creationde_challenge`
--

CREATE TABLE `creationde_challenge` (
  `id_createurchallenge` int(11) NOT NULL,
  `id_challenge` int(11) NOT NULL,
  `id_createurchallenge_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `creation_categorie`
--

CREATE TABLE `creation_categorie` (
  `id_createurchallenge` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_createurchallenge_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `voir_challengescreer`
--

CREATE TABLE `voir_challengescreer` (
  `id_challenge` int(11) NOT NULL,
  `id_createurchallenge` int(11) NOT NULL,
  `id_challengeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`,`id_createurchallenge`);

--
-- Index pour la table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`id_challenge`,`id_createurchallenge`),
  ADD UNIQUE KEY `titre_challenge` (`titre_challenge`);

--
-- Index pour la table `challenges_releves`
--
ALTER TABLE `challenges_releves`
  ADD PRIMARY KEY (`id_challengeur_1`,`id_challengeReleves`,`id_challengeur`);

--
-- Index pour la table `challengeur`
--
ALTER TABLE `challengeur`
  ADD PRIMARY KEY (`id_challengeur`),
  ADD UNIQUE KEY `email_challengeur` (`email_challengeur`),
  ADD UNIQUE KEY `mdp_challengeur` (`mdp_challengeur`);

--
-- Index pour la table `createur_challenge`
--
ALTER TABLE `createur_challenge`
  ADD PRIMARY KEY (`id_createurchallenge`),
  ADD UNIQUE KEY `email_createurchallenge` (`email_createurchallenge`),
  ADD UNIQUE KEY `tel_createurchallenge` (`tel_createurchallenge`),
  ADD UNIQUE KEY `mdp_createurchallenge` (`mdp_createurchallenge`);

--
-- Index pour la table `creationde_challenge`
--
ALTER TABLE `creationde_challenge`
  ADD PRIMARY KEY (`id_createurchallenge`,`id_challenge`,`id_createurchallenge_1`),
  ADD KEY `id_challenge` (`id_challenge`,`id_createurchallenge_1`);

--
-- Index pour la table `creation_categorie`
--
ALTER TABLE `creation_categorie`
  ADD PRIMARY KEY (`id_createurchallenge`,`id_categorie`,`id_createurchallenge_1`),
  ADD KEY `id_categorie` (`id_categorie`,`id_createurchallenge_1`);

--
-- Index pour la table `voir_challengescreer`
--
ALTER TABLE `voir_challengescreer`
  ADD PRIMARY KEY (`id_challenge`,`id_createurchallenge`,`id_challengeur`),
  ADD KEY `id_challengeur` (`id_challengeur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `id_challenge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `challengeur`
--
ALTER TABLE `challengeur`
  MODIFY `id_challengeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `createur_challenge`
--
ALTER TABLE `createur_challenge`
  MODIFY `id_createurchallenge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_challengeur_1`,`id_challengeReleves`,`id_challengeur`) REFERENCES `challenges_releves` (`id_challengeur_1`, `id_challengeReleves`, `id_challengeur`);

--
-- Contraintes pour la table `challenges_releves`
--
ALTER TABLE `challenges_releves`
  ADD CONSTRAINT `challenges_releves_ibfk_1` FOREIGN KEY (`id_challengeur_1`) REFERENCES `challengeur` (`id_challengeur`);

--
-- Contraintes pour la table `creationde_challenge`
--
ALTER TABLE `creationde_challenge`
  ADD CONSTRAINT `creationde_challenge_ibfk_1` FOREIGN KEY (`id_createurchallenge`) REFERENCES `createur_challenge` (`id_createurchallenge`),
  ADD CONSTRAINT `creationde_challenge_ibfk_2` FOREIGN KEY (`id_challenge`,`id_createurchallenge_1`) REFERENCES `challenge` (`id_challenge`, `id_createurchallenge`);

--
-- Contraintes pour la table `creation_categorie`
--
ALTER TABLE `creation_categorie`
  ADD CONSTRAINT `creation_categorie_ibfk_1` FOREIGN KEY (`id_createurchallenge`) REFERENCES `createur_challenge` (`id_createurchallenge`),
  ADD CONSTRAINT `creation_categorie_ibfk_2` FOREIGN KEY (`id_categorie`,`id_createurchallenge_1`) REFERENCES `categorie` (`id_categorie`, `id_createurchallenge`);

--
-- Contraintes pour la table `voir_challengescreer`
--
ALTER TABLE `voir_challengescreer`
  ADD CONSTRAINT `voir_challengescreer_ibfk_1` FOREIGN KEY (`id_challenge`,`id_createurchallenge`) REFERENCES `challenge` (`id_challenge`, `id_createurchallenge`),
  ADD CONSTRAINT `voir_challengescreer_ibfk_2` FOREIGN KEY (`id_challengeur`) REFERENCES `challengeur` (`id_challengeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
