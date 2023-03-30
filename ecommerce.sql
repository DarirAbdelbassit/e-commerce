-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 mai 2022 à 15:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `checkout`
--

CREATE TABLE `checkout` (
  `id_client` int(11) NOT NULL,
  `firstname` char(60) NOT NULL,
  `lastname` char(60) NOT NULL,
  `emailadd` char(60) NOT NULL,
  `phone` int(30) NOT NULL,
  `country` char(100) NOT NULL,
  `region` char(100) NOT NULL,
  `addresse` char(100) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `checkout`
--

INSERT INTO `checkout` (`id_client`, `firstname`, `lastname`, `emailadd`, `phone`, `country`, `region`, `addresse`, `zip`) VALUES
(46, 'Suzanne', 'Boulanger', 'suzanne.boulanger22@mailgen.pw', 695333923, 'France', 'RÃ©gion de Guelmim-Oued Noun', 'Rue Jean Jacques Rousseau 90b', 21000),
(47, 'Suzanne', 'Boulanger', 'suzanne.boulanger22@mailgen.pw', 695333923, 'France', 'RÃ©gion de Guelmim-Oued Noun', 'Rue Jean Jacques Rousseau 90b', 21000),
(49, 'Suzanne', 'Boulanger', 'suzanne.boulanger22@mailgen.pw', 695333923, 'France', 'RÃ©gion de Guelmim-Oued Noun', 'Rue Jean Jacques Rousseau 90b', 21000),
(50, 'Suzanne', 'Boulanger', 'suzanne.boulanger22@mailgen.pw', 695333923, 'France', 'RÃ©gion de Guelmim-Oued Noun', 'Rue Jean Jacques Rousseau 90b', 21000),
(51, 'Suzanne', 'Boulanger', 'suzanne.boulanger22@mailgen.pw', 2147483647, 'France', 'RÃ©gion de Guelmim-Oued Noun', 'Rue Jean Jacques Rousseau 90b', 21000),
(52, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(53, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'guelmim', 'Rue id hmad sidi moulen', 1456362),
(54, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(55, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(56, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(57, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(58, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'guelmim', 'Rue id hmad sidi moulen', 1456362),
(59, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(60, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(61, 'Brahim', 'Bikta', 'settafabdellah@gmail.com', 659251248, 'Maroc', 'geulmim', 'Dr id Settaf, Sidi mbarek, Sidi ifni', 85550),
(62, 'Brahim', 'Bikta', 'settafabdellah@gmail.com', 659251248, 'Maroc', 'geulmim', 'Dr id Settaf, Sidi mbarek, Sidi ifni', 85550),
(63, 'Brahim', 'Bikta', 'settafabdellah@gmail.com', 659251248, 'Maroc', 'geulmim', 'Dr id Settaf, Sidi mbarek, Sidi ifni', 85550),
(64, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(65, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'lakhsas', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(66, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'lakhsas', 'geulmim', 'Rue id hmad sidi moulen', 1456362),
(67, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'Maroc', 'guelmim', 'Rue id hmad sidi moulen', 1456362),
(68, 'Samir', 'Illan', 'settafabdellah@gmail.com', 634285038, 'ffff', 'geulmim', 'Rue id hmad sidi moulen', 1456362);

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id` int(11) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `Pprice` varchar(100) NOT NULL,
  `Pimage` varchar(100) NOT NULL,
  `Pcategorie` varchar(100) NOT NULL,
  `Pdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id`, `Pname`, `Pprice`, `Pimage`, `Pcategorie`, `Pdescription`) VALUES
(85, 'Sony Casque', '80', 'ImageProduit/headphones-png-20157.png', 'Home', 'Casque sans fil Bluetooth haute performance en noir,Avec jusquâ€™Ã  40 heures dâ€™autonomie'),
(95, 'LENOVO IdeaPad 3', '569', 'ImageProduit/MN0005705297_1_0005903328.jpg', 'Home', 'Processeur Intel Core i3 basse consommation, stockage SSD grosse capacitÃ© et RAM 8 Go '),
(96, 'ASUS Vivobook', '769', 'ImageProduit/MN0005899490_1.jpg', 'laptop', 'Le PC Portable Asus Vivobook S15 S533EA-L11045T conjugue finesse, lÃ©gÃ¨retÃ© et Ã©lÃ©gance dans un chÃ¢ssis aluminium qui intÃ¨gre un magnifique Ã©cran OLED bord Ã  bord.'),
(97, 'ASUS TUF GAMING', '899', 'ImageProduit/sdf.jpg', 'laptop', 'Avec le PC Portable Gamer Asus F15-TUF566HC-HN269, offrez vous un PC Portable gamer de derniÃ¨re gÃ©nÃ©ration Ã  coÃ»t maitrisÃ© ! '),
(100, 'DELL G5', '799', 'ImageProduit/MN0005849362_1_0005849372.jpg', 'laptop', 'Processeur Intel Core i5 Comet Lake, carte graphique NVIDIA RTX 3050 et SSD ultra rÃ©actif de 256 Go'),
(101, 'Samsung Galaxy A52s', '399', 'ImageProduit/sum.png', 'mobil', ' LÃ©cran Infinity-O avec un taux de rafraÃ®chissement de 120 Hz.'),
(102, 'Samsung Galaxy A32', '299', 'ImageProduit/MN0005774445_1.jpg', 'mobil', 'Le Samsung A32 est un smartphone compatible avec grand Ã©cran HD+ de 6,5 pouces. '),
(103, 'Honor 50 5G', '449', 'ImageProduit/f.jpg', 'mobil', ''),
(104, 'Samsung Galaxy Buds Pro', '178', 'ImageProduit/MN0005771664_1.jpg', 'accessoire', 'Ils vous accompagneront toute la journÃ©e grÃ¢ce au boÃ®tier de charge.'),
(105, 'Samsung Galaxy Watch4 ', '299', 'ImageProduit/MN0005871280_1_0005871285.jpg', 'accessoire', 'le magnifique Ã©cran Super AMOLED 1.36 pouces'),
(107, 'pc portable', '200', 'ImageProduit/374-3744318_asus-laptop-png.png', 'laptop', 'pc portable simple'),
(108, 'MED', '50', 'ImageProduit/MN0005897897_1.jpg', 'accessoire', 'this product is an of the best product that we sell  in this web site sense we started');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `codeP` char(10) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id`, `username`, `email`, `codeP`, `percentage`) VALUES
(21, 'Abdelbassit', 'mariet@mailgen.xyz', 'DARIR', 30),
(24, 'Samir', 'hid@gmail.com', 'ABO', 10),
(25, 'TOTO', 'toto@gamil.lco', 'TOTO12', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` int(10) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `usertype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `number`, `image`, `usertype`) VALUES
(1, 'darirabdelbassit', 'darir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 65230411, '', 'administrateur'),
(4, 'abdelbassit', 'abdelbassitdarir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 625326051, '', 'administrateur'),
(6, 'staf', 'stafabdoulah200@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 659251248, '', ''),
(7, 'staf', 'stafabdoulah200@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 65951248, '', ''),
(9, 'home', 'home@gmail.com', '25d55ad283aa400af464c76d713c07ad', 600000000, '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_us` (`id_user`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
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
-- AUTO_INCREMENT pour la table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
