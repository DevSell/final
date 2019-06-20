-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 15 Février 2019 à 13:14
-- Version du serveur :  5.5.59-0+deb8u1
-- Version de PHP :  5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ChrisAlpha`
--

-- --------------------------------------------------------

--
-- Structure de la table `alpha_experiences`
--

CREATE TABLE IF NOT EXISTS `alpha_experiences` (
`id` int(11) NOT NULL,
  `dates` varchar(2500) NOT NULL,
  `poste` varchar(2500) NOT NULL,
  `societe` varchar(2500) NOT NULL,
  `desc` varchar(2500) DEFAULT NULL,
  `desc_en` varchar(2500) DEFAULT NULL,
  `desc_it` varchar(2500) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alpha_experiences`
--

INSERT INTO `alpha_experiences` (`id`, `dates`, `poste`, `societe`, `desc`, `desc_en`, `desc_it`) VALUES
(1, '2019 - Aujourd''hui', 'Fondateur', 'PokeFun', 'Site internet spécialisé dans la revente de services liés aux différents jeux Pokémons sur DS.', 'Website specialized in reselling services related to the various Pokémon games on DS.', 'Sito web specializzato nella rivendita di servizi relativi ai vari giochi Pokémon su DS.'),
(2, '2018 - Aujourd''hui', 'Fondateur', 'YLab', 'Laboratoire spécialisé dans la formation sur le développement d''applications mobiles.', 'Laboratory specialized in training on the development of mobile applications.', 'Laboratorio specializzato nella formazione sullo sviluppo di applicazioni mobili.'),
(3, '2017 - 2018', 'Développeur', 'Groupe Magellan', 'Création d''un site internet de type "Vitrine" développé en PHP/SQL permettant de présenter les différentes activités de l''entreprise.', 'Creation of a "Showcase" website developed in PHP/SQL to present the company''s various activities.', 'Creazione di un sito web "Showcase" sviluppato in PHP/SQL per presentare le varie attività dell''azienda.'),
(4, '2016 - 2017', 'Développeur', 'Gaia-Consulting', 'Création d''un système développé en PHP/SQL avec pour but de permettre à des auditeurs de concevoir des documents unique directement par un système accessible par l''intermédiaire d''une application pour téléphone et/ou d''un site web créé pour cette utilisation.', 'Creation of a system developed in PHP/SQL with the aim of allowing auditors to design unique documents directly by a system accessible via a telephone application and/or a website created for this purpose.', 'Creazione di un sistema sviluppato in PHP/SQL con l''obiettivo di consentire agli auditor di progettare documenti unici direttamente da un sistema accessibile tramite un''applicazione telefonica e/o un sito web creato a tale scopo.'),
(5, '2015 - 2017', 'Développeur', 'Chambres des Métiers et de l''Artisanat du Val-de-Marne', 'Création d''un système de type "Extranet Scolaire" développé en PHP/SQL permettant aux étudiants de consulter leurs notes, leurs sanctions, leurs retards etc.', 'Creation of a "School Extranet" system developed in PHP/SQL allowing students to consult their grades, sanctions, delays, etc.', 'Creazione di un sistema "School Extranet" sviluppato in PHP/SQL che permette agli studenti di consultare i loro voti, sanzioni, ritardi, ecc.'),
(6, '2014 - 2016', 'Développeur', 'Alls-Heberg', 'Mise en place d''un système de carte cadeau pour les clients de cet Hébergeur.', 'Implementation of a gift card system for the customers of this Hosting Company.', 'Implementazione di un sistema di gift card per i clienti di questa Hosting Company.'),
(7, '2012 - 2013', 'Fondateur', 'MyHabbo', 'Création d''un jeu principalement développé en HTML/CSS/JS et DCR de type "Les Sims" et jouable par l''intermédiaire d''un navigateur web.', 'Creation of a game mainly developed in HTML/CSS/JS and DCR of the "The Sims" type and playable through a web browser.', 'Creazione di un gioco sviluppato principalmente in HTML/CSS/JS e DCR di tipo "The Sims" e giocabile attraverso un browser web.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alpha_experiences`
--
ALTER TABLE `alpha_experiences`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alpha_experiences`
--
ALTER TABLE `alpha_experiences`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
