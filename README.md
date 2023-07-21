Garage V.Parrot


Utilisation


Ouvrez garage.html pour accéder à la page d'accueil de l'application.

Naviguez vers les sections spécifiques à l'aide de la barre de navigation.


Liens vers les sections :

Mécanique
Carrosserie
À propos

Liens vers d'autres pages :

Vente auto
Contact

Bouton « Se connecter » :

Le bouton "Se connecter" est réservé à l'administrateur et aux employés pour accéder à des fonctionnalités spéciales.

Il y a 2 autres liens sur la page :

Formulaire de contact
Témoignage


Fonctionnalités

Mécanique, Carrosserie, À propos
Le garage propose différentes prestations pour ses clients dans les domaines de la mécanique et de la carrosserie. Voici un aperçu des services offerts :

Mécanique
Réparations mécaniques pour tous types de véhicules.
Entretien régulier : vidange, remplacement des filtres, etc.
Diagnostic des problèmes mécaniques.
Réglage et réparation du moteur.

Carrosserie
Réparation des dégâts suite à un accident.
Peinture et retouche de la carrosserie.
Remplacement des éléments endommagés.
Débosselage et réparation des rayures.

À propos
Cette section fournit des informations sur le garage et son histoire. Vous y trouverez également des détails sur les valeurs et l'engagement du garage envers ses clients.

Page Vente de véhicules d'occasions
Description du service proposé par le garage pour la vente de véhicules d'occasions avec un système de filtre.


Formulaire de Contact
Il permet aux visiteurs de contacter le garage en fournissant les informations suivantes :

Nom
Prénom
E-mail
Téléphone
Numéro d'immatriculation
Message
Lien de connexion administrateur et employé
Il permet à l'administrateur et aux employés de se connecter pour gérer les informations du site.


Formulaire de Témoignage
Il permet aux visiteurs de partager leur expérience en utilisant ce formulaire et en attribuant une note comprise entre 1 et 5.

Footer
Le footer contient les horaires d'ouverture sur la page principale et la page de vente de véhicules d'occasions.

Technologies utilisées
HTML 5
CSS
JavaScript
PHP 8.2.6

Base de données

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 juil. 2023 à 11:00
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(10, 'vincentparrot@gmail.com', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `email`, `password`) VALUES
(1, 'jose@gmail.com', '1111'),
(2, 'pierre@gmail.com', '2222\r\n'),
(3, 'paul@gmail.com', '3333');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `numero_immatriculation` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `condition_acceptee` tinyint(1) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `prenom`, `email`, `telephone`, `numero_immatriculation`, `message`, `condition_acceptee`, `date_creation`) VALUES
(1, 'JEAN', 'Pierre', 'oves7860@gmail.com', '0612363636', '152pl45', 'test', 1, '2023-07-19 22:00:06'),
(2, 'JEAN', 'Pierre', 'moh_rahila@hotmail.com', '0612363636', '152pl45', 'test', 1, '2023-07-21 00:35:46');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `name`, `comment`, `rating`, `created_at`) VALUES
(1, 'VincentParrot', 'super', 2, '2023-07-20 10:34:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


Auteur
Mohammad Aowis
