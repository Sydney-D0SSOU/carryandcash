-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 15 oct. 2024 à 17:40
-- Version du serveur : 10.6.19-MariaDB
-- Version de PHP : 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ch66c48ee3b0012_carrycash`
--

-- --------------------------------------------------------

--
-- Structure de la table `reduction_rates`
--

CREATE TABLE `reduction_rates` (
  `id` int(11) NOT NULL,
  `rate` decimal(5,2) NOT NULL DEFAULT 0.70
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `reduction_rates`
--

INSERT INTO `reduction_rates` (`id`, `rate`) VALUES
(1, 0.25);

-- --------------------------------------------------------

--
-- Structure de la table `ventes_credits`
--

CREATE TABLE `ventes_credits` (
  `id` int(11) NOT NULL,
  `montant` decimal(15,2) DEFAULT NULL,
  `cash_possible` decimal(10,2) NOT NULL,
  `network` varchar(50) NOT NULL,
  `personal_number` varchar(20) NOT NULL,
  `reception_number` varchar(20) NOT NULL,
  `sim_holder` varchar(100) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `reception_network` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `statut` varchar(50) DEFAULT 'En cours'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `ventes_credits`
--

INSERT INTO `ventes_credits` (`id`, `montant`, `cash_possible`, `network`, `personal_number`, `reception_number`, `sim_holder`, `transaction_id`, `reception_network`, `created_at`, `statut`) VALUES
(1, 1242.00, 869.40, 'celtis', '3424', '3434', 'arr', '2344', '', '2024-08-26 13:01:36', 'traité'),
(2, 1242.00, 869.40, 'celtis', '3424', '3434', 'arr', '2344', '', '2024-08-26 13:01:36', 'traité'),
(3, 98429.00, 68900.30, 'moov', '8709', '7778', 'ghh', '8778', '', '2024-08-26 13:01:36', 'traité'),
(4, 13.00, 9.10, 'mtn', '2324', '2342', 'add', '324', '', '2024-08-26 13:01:36', 'traité'),
(5, 45.00, 31.50, 'celtis', '345', '3535', 'sfeg', '245653', '', '2024-08-26 13:01:36', 'traité'),
(6, 3453.00, 2417.10, 'celtis', '435', '14343', 'wrww', '2445', '', '2024-08-26 13:01:36', 'traité'),
(7, 6000.00, 2400.00, 'moov', '688888', '555552', 'Dxdfxfffzd', '455&6666666', '', '2024-08-26 13:32:04', 'traitÃ©'),
(8, 0.00, 0.00, 'moov', '3528844839286893', '', '', '', '', '2024-08-27 06:10:14', 'traitÃ©'),
(9, 0.00, 0.00, 'moov', '3586733695421331', '', '', '', '', '2024-08-27 08:23:38', 'traitÃ©'),
(10, 8516417.00, 0.00, 'moov', '5174720445172507', '', '', '', '', '2024-08-28 08:40:10', 'traitÃ©'),
(11, 1000.00, 400.00, 'moov', '51588057', '67080520', 'Kolakol', '77779990', '', '2024-08-28 10:26:29', 'En cours'),
(12, 5000.00, 4000.00, 'moov', '61149953', '55070345', 'Sylvain', 'K\'jkjk', '', '2024-08-29 11:25:51', 'traitÃ©'),
(13, 0.00, 0.00, 'mtn', '5288686803045879', '', '', '', '', '2024-09-04 21:16:42', 'En cours'),
(14, 0.00, 0.00, 'mtn', '5239878246647482', '', '', '', '', '2024-09-04 21:25:58', 'En cours'),
(15, 4.00, 3.00, 'moov', '94016575', '94026575', 'GLELE Kennethe', '1', '', '2024-09-17 08:41:52', 'En cours'),
(16, 200.00, 150.00, 'mtn', '61398532', '61398532', 'GLELE Kennethe', ' 1', '', '2024-10-04 12:39:46', 'En cours'),
(17, 0.00, 0.00, 'moov', 'hello@wpzone.co', 'hello@wpzone.co', 'hello@wpzone.co', 'hello@wpzone.co', '', '2024-10-13 06:02:20', 'En cours');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reduction_rates`
--
ALTER TABLE `reduction_rates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ventes_credits`
--
ALTER TABLE `ventes_credits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reduction_rates`
--
ALTER TABLE `reduction_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ventes_credits`
--
ALTER TABLE `ventes_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
