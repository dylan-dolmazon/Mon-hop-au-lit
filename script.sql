-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 fév. 2023 à 15:44
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
  `price` double DEFAULT NULL,
  `value` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cases`
--

INSERT INTO `cases` (`id`, `type_id`, `property_id`, `station_id`, `name`, `position`, `price`, `value`, `owner_id`) VALUES
(1, 5, NULL, NULL, 'Début de la fin', 1, NULL, 0, NULL),
(2, 4, 1, NULL, '8.6', 10, 60, 1, NULL),
(7, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 9, NULL, 2, NULL),
(8, 4, 2, NULL, 'Grimbergen', 8, 60, 3, NULL),
(9, 8, NULL, NULL, 'Licence de breuvage', 7, 200, 4, NULL),
(10, 3, NULL, 1, 'Au fût et à mesure', 6, 200, 5, NULL),
(11, 4, 3, NULL, 'Gin bombay', 5, 100, 6, NULL),
(12, 1, NULL, NULL, 'CHANCE', 4, NULL, 7, NULL),
(13, 4, 4, NULL, 'Gin citadelle', 3, 120, 8, NULL),
(14, 4, 5, NULL, 'Gin Gibson\'s', 2, 120, 9, NULL),
(15, 6, NULL, NULL, 'Cellule de dégrisement', 11, NULL, 10, NULL),
(16, 4, 6, NULL, 'Rosé de Provence', 20, 140, 11, NULL),
(17, 8, NULL, NULL, 'CUL SEC', 19, NULL, 12, NULL),
(18, 4, 7, NULL, 'Rosé d\'anjou', 18, 140, 13, NULL),
(19, 4, 8, NULL, 'Rosé Argali', 17, 160, 14, NULL),
(21, 3, NULL, 2, 'Hopper', 16, 200, 15, NULL),
(22, 4, 9, NULL, 'Jack daniel\'s', 15, 200, 16, NULL),
(23, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 14, NULL, 17, NULL),
(24, 4, 10, NULL, 'Ballantine\'s', 13, 180, 18, NULL),
(25, 4, 11, NULL, 'William Peel', 12, 200, 19, NULL),
(26, 7, NULL, NULL, 'HAPPY HOUR', 21, NULL, 20, NULL),
(27, 4, 12, NULL, 'Villageoise', 22, 220, 21, NULL),
(28, 1, NULL, NULL, 'CHANCE', 23, NULL, 22, NULL),
(29, 4, 13, NULL, 'Côte du Rhone', 24, 220, 23, NULL),
(30, 4, 14, NULL, 'Domaine du Moulin', 25, 240, 24, NULL),
(31, 3, NULL, 4, 'La levrette', 26, 200, 25, NULL),
(32, 4, 15, NULL, 'Pastis', 27, 260, 26, NULL),
(33, 4, 16, NULL, '51', 28, 260, 27, NULL),
(34, 8, NULL, NULL, 'Les dés maléfiques', 29, NULL, 28, NULL),
(35, 4, 17, NULL, 'Ricard', 30, 260, 29, NULL),
(36, 9, NULL, NULL, 'Ivresse sur voie publique', 31, NULL, 30, NULL),
(37, 4, 18, NULL, 'GET 27', 32, 300, 31, NULL),
(38, 4, 19, NULL, 'Verveine', 33, 300, 32, NULL),
(39, 2, NULL, NULL, 'CAISSE DE COMMUNAUTE', 34, NULL, 33, NULL),
(40, 4, 20, NULL, 'Absinthe', 35, 320, 34, NULL),
(41, 3, NULL, 3, 'V&B', 36, 200, 35, NULL),
(42, 1, NULL, NULL, 'CHANCE', 37, NULL, 36, NULL),
(43, 4, 21, NULL, 'Grey Goose', 38, 350, 37, NULL),
(44, 8, NULL, NULL, 'Rinçage du foie', 39, 200, 38, NULL),
(45, 4, 22, NULL, 'Belvédère', 40, 400, 39, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221114155651', '2022-11-14 16:58:59', 67),
('DoctrineMigrations\\Version20221114163039', '2022-11-14 17:31:08', 590),
('DoctrineMigrations\\Version20221205125843', '2022-12-05 14:06:34', 48),
('DoctrineMigrations\\Version20221205153023', '2022-12-05 16:31:49', 63),
('DoctrineMigrations\\Version20221205154012', '2022-12-05 16:40:19', 63),
('DoctrineMigrations\\Version20221212080619', '2022-12-12 09:06:38', 514);

-- --------------------------------------------------------

--
-- Structure de la table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `icon`
--

INSERT INTO `icon` (`id`, `name`, `value`) VALUES
(4, 'Pinard', '<i class=\"fa-solid fa-wine-bottle\"></i>'),
(5, 'Chope', '<i class=\"fa-solid fa-beer-mug-empty\"></i>'),
(6, 'Verre d\'eau', '<i class=\"fa-solid fa-glass-water\"></i>'),
(7, 'Verre à cocktail', '<i class=\"fa-solid fa-martini-glass\"></i>'),
(8, 'Whisky', '<i class=\"fa-solid fa-whiskey-glass\"></i>'),
(9, 'Verre à pinard', '<i class=\"fa-solid fa-wine-glass\"></i>'),
(10, 'Bouteille d\'eau', '<i class=\"fa-solid fa-bottle-water\"></i>'),
(11, 'Pimpo', '<i class=\"fa-solid fa-cat\"></i>');

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
(2, NULL, 'Avancer jusqu’au début de la fin (recevez 200€)'),
(3, NULL, 'Rendez-vous sur Côtes du Rhône. Si vous passez par le début de la fin, recevez 200€'),
(4, NULL, 'Avancer jusqu’au Rosé de Provence, si vous passez par début de la fin, recevez 200€'),
(5, NULL, 'Trop bourré ! Allez en cellule de dégrisement'),
(7, NULL, 'Belle descente, vous avez gagné 200€'),
(8, NULL, 'Visite chez le médecin. Payer 50€'),
(9, NULL, 'Frais d\'hospitalisation. Payer 50€'),
(10, NULL, 'T\'es trop beau, t\'a gagné 10€'),
(11, NULL, 'Tu payes ta tournée ! tu dois 20€ à chaque joueur'),
(12, NULL, 'C\'est ton anniversaire ! tout le monde t\'offre 15€ de bon cœur'),
(13, NULL, 'Cul sec chef'),
(14, NULL, 'Donne un cul sec au joueur de ton choix'),
(15, NULL, 'Donne 5 gorgées au joueur de ton choix'),
(16, NULL, 'Bois 3 gorgées'),
(17, NULL, 'Imite la tortue'),
(18, NULL, 'Vous buvez un coup avec vos amis, et avancez de 3 cases pour fêter ça'),
(19, NULL, 'Bois 3 gorgées ou la prochaine musique sera du Wejdene.'),
(20, NULL, 'Choisis l\'alcool que tu veux, et affronte un joueur au jeu du doigt.'),
(21, NULL, 'Avance de 5 cases'),
(22, NULL, 'Recule de 5 cases'),
(23, NULL, 'Tu es fan de la personne qui vient de jouer, fait lui un bisous et buvez 3 gorgées au nom de votre amitié');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` double DEFAULT NULL,
  `cases_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turn` tinyint(1) NOT NULL,
  `prison` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `icon_id` int(11) NOT NULL,
  `nb_double` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`id`, `name`, `money`, `cases_id`, `color`, `turn`, `prison`, `ordre`, `icon_id`, `nb_double`) VALUES
(18, 'Dylan', 1500, 1, '#c0c0c0', 0, 0, 1, 11, 0),
(19, 'Alexis', 1500, 1, '#800040', 0, 0, 2, 4, 0),
(20, 'Adrien', 1500, 1, '#00ffff', 0, 0, 3, 6, 0);

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
(1, 18, 'Au fût et à mesure', 25, 50, 100, 200, 100),
(2, 18, 'Hopper', 25, 50, 100, 200, 100),
(3, 19, 'V&B', 25, 50, 100, 200, 100),
(4, 20, 'La levrette', 25, 50, 100, 200, 100);

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
(1, 'adrien', '[\"ROLE_ADMIN\"]', '$2y$13$tWm.LDv527a5FiUviAwZpeUfAPy0fc/r/FMyL7fIa/eRhG92/1IAG'),
(2, 'pimpo', '[]', '$2y$13$94autOXt6HBc3FmsMI9eL.uodhtgRgGPgjdsgTllwUczbqdG35coC');

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
  ADD KEY `IDX_1C1B038BC54C8C93` (`type_id`),
  ADD KEY `IDX_1C1B038B7E3C61F9` (`owner_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `luck`
--
ALTER TABLE `luck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_963EBDA899E6F5DF` (`player_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_98197A652A69AB62` (`cases_id`),
  ADD KEY `IDX_98197A6554B9D732` (`icon_id`);

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
-- AUTO_INCREMENT pour la table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `luck`
--
ALTER TABLE `luck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `FK_1C1B038B21BDB235` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `FK_1C1B038B549213EC` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `FK_1C1B038B7E3C61F9` FOREIGN KEY (`owner_id`) REFERENCES `player` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_1C1B038BC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `luck`
--
ALTER TABLE `luck`
  ADD CONSTRAINT `FK_963EBDA899E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `FK_98197A652A69AB62` FOREIGN KEY (`cases_id`) REFERENCES `cases` (`id`),
  ADD CONSTRAINT `FK_98197A6554B9D732` FOREIGN KEY (`icon_id`) REFERENCES `icon` (`id`);

--
-- Contraintes pour la table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `FK_8BF21CDE99E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Contraintes pour la table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `FK_9F39F8B199E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
