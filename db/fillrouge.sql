-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juil. 2021 à 10:01
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fillrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Besoin` varchar(100) NOT NULL,
  `Meessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Id`, `Nom`, `Prenom`, `Email`, `Besoin`, `Meessage`) VALUES
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, 'abdelbarre', 'dazia', 'abdelbarredazia@gmail.com', 'dazd', 'csdnkcnsdkcnklceklce'),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, 'abdelbarre', 'dazia', 'abdelbarredazia@gmail.com', 'dazd', 'csdnkcnsdkcnklceklce'),
(14, 'Abdelbarre', 'DAZIA', 'abdelbarr.dazia@gmail.com', 'Request order status', 'qdsdqd'),
(15, 'az', 'ad', 'abdelbarr.dazia@gmail.com', 'Request order status', 'sdsfsdfsd'),
(16, 'abdo', 'diaz', 'abdelbarre@gmail.com', 'Haven\'t received cashback yet', 'sdfdfsdfds');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `Role`) VALUES
(1, 'Abdelbarre', 'abdelbarredazia@gmail.com', '79b0fa1825646c99f4a3fe409b4d790d', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Ville` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`Id`, `Nom`, `Prenom`, `Email`, `Phone`, `Ville`) VALUES
(1, 'Dazia', 'abdelbarre', 'abdelbarredazia@gmail.com', '0706654771', 'Sidi bennour');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur_msg`
--

CREATE TABLE `vendeur_msg` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur_msg`
--

INSERT INTO `vendeur_msg` (`Id`, `Nom`, `Prenom`, `Telephone`, `Email`, `Ville`, `Marque`, `Model`) VALUES
(5, 'Dazia', 'Abdelbarre', '0706654771', 'abdelbarredazia@gmail.com', 'sidi bennour', 'Chevrolet', 'Aveo');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `Id` int(11) NOT NULL,
  `Marque` varchar(100) NOT NULL,
  `Finition` varchar(100) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Carburant` varchar(20) NOT NULL,
  `Transmission` varchar(20) NOT NULL,
  `Annee` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`Id`, `Marque`, `Finition`, `Model`, `Carburant`, `Transmission`, `Annee`, `Img`) VALUES
(1, 'MERCEDES-BENZ', 'Classe C II - Ph1 - 220 CDI Elegance BVM 170ch', 'Classe C', 'Diesel', 'Manuelle', 2009, 'presentationduvehicule2_expertise_1627478869219_445308.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `voiture_vendre`
--

CREATE TABLE `voiture_vendre` (
  `Id` int(11) NOT NULL,
  `Id_Voiture` int(11) NOT NULL,
  `Id_Vendeur` int(11) NOT NULL,
  `Kilometrage` int(11) NOT NULL,
  `Puissance` int(11) NOT NULL,
  `Origine` varchar(20) NOT NULL,
  `Premiere_main` tinyint(1) NOT NULL,
  `Type_Voiture` varchar(50) NOT NULL,
  `Prix` decimal(10,0) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture_vendre`
--

INSERT INTO `voiture_vendre` (`Id`, `Id_Voiture`, `Id_Vendeur`, `Kilometrage`, `Puissance`, `Origine`, `Premiere_main`, `Type_Voiture`, `Prix`, `Description`) VALUES
(1, 1, 1, 250252, 9, 'Dédouané', 1, 'Berline', '125', ' Type boite vitesse BVM\r\nCylindrée (enL) 2 L\r\nPuissance DIN (ch) 170 ch\r\nConsommation ville (l/100km) 9.2 L/100Km\r\nConsommation route (l/100km) 5.3 L/100Km\r\nConsommation mixte (l/100km) 6.7 L/100Km\r\nEmission CO2 (g/km) 173 g/Km\r\nVitesse maxi.(km/h) 173 km/h\r\nKw 125 kw'),
(2, 1, 1, 250252, 9, 'Dédouané', 1, 'Berline', '125', ' Type boite vitesse BVM\r\nCylindrée (enL) 2 L\r\nPuissance DIN (ch) 170 ch\r\nConsommation ville (l/100km) 9.2 L/100Km\r\nConsommation route (l/100km) 5.3 L/100Km\r\nConsommation mixte (l/100km) 6.7 L/100Km\r\nEmission CO2 (g/km) 173 g/Km\r\nVitesse maxi.(km/h) 173 km/h\r\nKw 125 kw');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `vendeur_msg`
--
ALTER TABLE `vendeur_msg`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `voiture_vendre`
--
ALTER TABLE `voiture_vendre`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Voiture` (`Id_Vendeur`),
  ADD KEY `V_V` (`Id_Voiture`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vendeur_msg`
--
ALTER TABLE `vendeur_msg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `voiture_vendre`
--
ALTER TABLE `voiture_vendre`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `voiture_vendre`
--
ALTER TABLE `voiture_vendre`
  ADD CONSTRAINT `V_V` FOREIGN KEY (`Id_Voiture`) REFERENCES `voiture` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Vendeur` FOREIGN KEY (`Id_Vendeur`) REFERENCES `vendeur` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
