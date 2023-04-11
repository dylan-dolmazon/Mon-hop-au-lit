-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 15:16
-- Version du serveur : 10.11.0-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monopoly`
--

-- --------------------------------------------------------

--
-- Structure de la table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cases`
--

INSERT INTO `cases` (`id`, `type_id`, `property_id`, `station_id`, `name`, `position`, `price`) VALUES
(1, 5, NULL, NULL, 'Début de la fin', 1, NULL),
(2, 4, 1, NULL, '8.6', 10, 60),
(7, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 9, NULL),
(8, 4, 2, NULL, 'Grimbergen', 8, 60),
(9, 8, NULL, NULL, 'Licence de breuvage', 7, 200),
(10, 3, NULL, 1, 'Au fût et à mesure', 6, 200),
(11, 4, 3, NULL, 'Gin bombay', 5, 100),
(12, 1, NULL, NULL, 'CHANCE', 4, NULL),
(13, 4, 4, NULL, 'Gin citadelle', 3, 120),
(14, 4, 5, NULL, 'Gin Gibson\'s', 2, 120),
(15, 6, NULL, NULL, 'Cellule de dégrisement', 11, NULL),
(16, 4, 6, NULL, 'Rosé de Provence', 20, 140),
(17, 8, NULL, NULL, 'CUL SEC', 19, NULL),
(18, 4, 7, NULL, 'Rosé d\'anjou', 18, 140),
(19, 4, 8, NULL, 'Rosé Argali', 17, 160),
(21, 3, NULL, 2, 'Hopper', 16, 200),
(22, 4, 9, NULL, 'Jack daniel\'s', 15, 200),
(23, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 14, NULL),
(24, 4, 10, NULL, 'Ballantine\'s', 13, 180),
(25, 4, 11, NULL, 'William Peel', 12, 200),
(26, 7, NULL, NULL, 'HAPPY HOUR', 21, NULL),
(27, 4, 12, NULL, 'Villageoise', 22, 220),
(28, 1, NULL, NULL, 'CHANCE', 23, NULL),
(29, 4, 13, NULL, 'Côte du Rhone', 24, 220),
(30, 4, 14, NULL, 'Domaine du Moulin', 25, 240),
(31, 3, NULL, 4, 'La levrette', 26, 200),
(32, 4, 15, NULL, 'Pastis', 27, 260),
(33, 4, 16, NULL, '51', 28, 260),
(34, 8, NULL, NULL, 'Les dés maléfiques', 29, NULL),
(35, 4, 17, NULL, 'Ricard', 30, 260),
(36, 9, NULL, NULL, 'Ivresse sur voie publique', 31, NULL),
(37, 4, 18, NULL, 'GET 27', 32, 300),
(38, 4, 19, NULL, 'Verveine', 33, 300),
(39, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 34, NULL),
(40, 4, 20, NULL, 'Absinthe', 35, 320),
(41, 3, NULL, 3, 'V&B', 36, 200),
(42, 1, NULL, NULL, 'CHANCE', 37, NULL),
(43, 4, 21, NULL, 'Grey Goose', 38, 350),
(44, 8, NULL, NULL, 'Rinçage du foie', 39, 200),
(45, 4, 22, NULL, 'Belvédère', 40, 400);

-- --------------------------------------------------------

--
-- Structure de la table `luck`
--

CREATE TABLE `luck` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `luck`
--

INSERT INTO `luck` (`id`, `player_id`, `description`) VALUES
(1, NULL, 'Rendez-vous sur Belvédère'),
(2, NULL, 'Avancer jusqu’au début de la fin'),
(3, NULL, 'Rendez-vous sur Côtes du Rhône. Si vous passez par le début de la fin, recevez 200€'),
(4, NULL, 'Avancer jusqu’au Rosé de Provence, si vous passez par début de la fin, recevez 200€'),
(5, NULL, 'Trop bourré ! Allez en cellule de dégrisement'),
(6, NULL, '-3 grammes, vous pouvez utiliser cette carte pour sortir de cellule de dégrisement');

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` double DEFAULT NULL,
  `cases_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` int(11) DEFAULT NULL,
  `rent` double NOT NULL,
  `rent1` double NOT NULL,
  `rent2` double NOT NULL,
  `rent3` double NOT NULL,
  `rent4` double NOT NULL,
  `mortgage` double NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent5` double DEFAULT NULL,
  `price_house` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `property`
--

INSERT INTO `property` (`id`, `player_id`, `name`, `house`, `rent`, `rent1`, `rent2`, `rent3`, `rent4`, `mortgage`, `color`, `rent5`, `price_house`) VALUES
(1, NULL, '8.6', NULL, 2, 10, 30, 90, 160, 30, '#944827', 250, 50),
(2, NULL, 'Grimbergen', NULL, 4, 20, 50, 180, 320, 30, '#944827', 450, 50),
(3, NULL, 'Gin bombay', NULL, 6, 30, 90, 270, 400, 50, '#DAE9D4', 550, 50),
(4, NULL, 'Gin citadelle', NULL, 6, 30, 90, 270, 400, 50, '#DAE9D4', 550, 50),
(5, NULL, 'Gin Gibson\'s', NULL, 8, 40, 100, 300, 450, 60, '#DAE9D4', 600, 50),
(6, NULL, 'Rosé de Provence', NULL, 10, 50, 150, 450, 625, 70, '#DB2C88', 750, 100),
(7, NULL, 'Rosé d\'Anjou', NULL, 10, 50, 150, 450, 625, 70, '#DB2C88', 750, 100),
(8, NULL, 'Rosé Argali', NULL, 12, 60, 180, 500, 700, 80, '#DB2C88', 900, 100),
(9, NULL, 'Jack daniel\'s', NULL, 14, 70, 200, 550, 700, 90, '#F49102', 900, 100),
(10, NULL, 'Ballantine\'s', NULL, 14, 70, 200, 550, 700, 90, '#F49102', 950, 100),
(11, NULL, 'William Peel', NULL, 16, 80, 220, 600, 800, 100, '#F49102', 1000, 100),
(12, NULL, 'Villageoise', NULL, 18, 90, 250, 700, 875, 110, '#E20110', 1050, 150),
(13, NULL, 'Côte du Rhone', NULL, 18, 90, 250, 700, 875, 110, '#E20110', 1050, 150),
(14, NULL, 'Domaine du Moulin', NULL, 20, 100, 300, 750, 925, 120, '#E20110', 1100, 150),
(15, NULL, 'Pastis', NULL, 22, 110, 330, 800, 975, 130, '#FDED04', 1150, 150),
(16, NULL, '51', NULL, 22, 110, 330, 800, 975, 130, '#FDED04', 1150, 150),
(17, NULL, 'Ricard', NULL, 24, 120, 360, 850, 1025, 140, '#FDED04', 1200, 150),
(18, NULL, 'GET 27', NULL, 26, 130, 390, 900, 1100, 150, '#1FA64A', 1275, 200),
(19, NULL, 'Verveine', NULL, 26, 130, 390, 900, 1100, 150, '#1FA64A', 1275, 200),
(20, NULL, 'Absinthe', NULL, 28, 150, 450, 1000, 1200, 160, '#1FA64A', 1400, 200),
(21, NULL, 'Grey Goose', NULL, 35, 175, 500, 1100, 1300, 175, '#0168B3', 1500, 200),
(22, NULL, 'Belvedere', NULL, 50, 200, 600, 1400, 1700, 200, '#0168B3', 2000, 200);

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent1` double NOT NULL,
  `rent2` double NOT NULL,
  `rent3` double NOT NULL,
  `rent4` double NOT NULL,
  `mortgage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `player_id`, `name`, `rent1`, `rent2`, `rent3`, `rent4`, `mortgage`) VALUES
(1, NULL, 'Au fût et à mesure', 25, 50, 100, 200, 100),
(2, NULL, 'Hopper', 25, 50, 100, 200, 100),
(3, NULL, 'V&B', 25, 50, 100, 200, 100),
(4, NULL, 'La levrette', 25, 50, 100, 200, 100);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `description`) VALUES
(1, 'chance'),
(2, 'caisse de communauté'),
(3, 'gare'),
(4, 'propriété'),
(5, 'départ'),
(6, 'cellule de dégrisement'),
(7, 'happy hour'),
(8, 'Impôt'),
(9, 'Ivresse sur voie publique');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(1, 'adrien', '[]', '$2y$13$tWm.LDv527a5FiUviAwZpeUfAPy0fc/r/FMyL7fIa/eRhG92/1IAG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1C1B038B549213EC` (`property_id`),
  ADD UNIQUE KEY `UNIQ_1C1B038B21BDB235` (`station_id`),
  ADD KEY `IDX_1C1B038BC54C8C93` (`type_id`);

--
-- Index pour la table `luck`
--
ALTER TABLE `luck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_963EBDA899E6F5DF` (`player_id`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_98197A652A69AB62` (`cases_id`);

--
-- Index pour la table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8BF21CDE99E6F5DF` (`player_id`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9F39F8B199E6F5DF` (`player_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `luck`
--
ALTER TABLE `luck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `FK_1C1B038B21BDB235` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `FK_1C1B038B549213EC` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `FK_1C1B038BC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `luck`
--
ALTER TABLE `luck`
  ADD CONSTRAINT `FK_963EBDA899E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Contraintes pour la table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `FK_98197A652A69AB62` FOREIGN KEY (`cases_id`) REFERENCES `cases` (`id`);

--
-- Contraintes pour la table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `FK_8BF21CDE99E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Contraintes pour la table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `FK_9F39F8B199E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
