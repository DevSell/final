-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 15 Février 2019 à 11:18
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
-- Structure de la table `alpha_services`
--

CREATE TABLE IF NOT EXISTS `alpha_services` (
`id` int(11) NOT NULL,
  `image` varchar(2500) NOT NULL,
  `titre` varchar(2500) NOT NULL,
  `description` text NOT NULL,
  `titre_en` varchar(2500) DEFAULT NULL,
  `titre_it` varchar(2500) DEFAULT NULL,
  `description_en` text,
  `description_it` text
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alpha_services`
--

INSERT INTO `alpha_services` (`id`, `image`, `titre`, `description`, `titre_en`, `titre_it`, `description_en`, `description_it`) VALUES
(1, 'images/site/videos.png', 'Vidéos', 'Je crée des vidéos professionnelles sur mesure et qui correspondent entièrement à vos besoins.', 'Videos', 'Video', 'I create professional videos that are tailored to your needs.', 'Creo video professionali su misura per le vostre esigenze.'),
(2, 'images/site/apps.png', 'Apps', 'Je suis spécialisé dans la création d''apps en <b>WebView</b> Android, iOS et Microsoft.', 'Apps', 'Apps', 'I specialize in creating apps in <b>WebView</b> Android, iOS and Microsoft.', 'Sono specializzato nella creazione di applicazioni in <b>WebView</b> Android, iOS e Microsoft.'),
(3, 'images/site/websites.png', 'Sites', 'Je développe des sites internet sur mesure allant d''une simple OnePage, à un CMS complet regroupant tout un tas de fonctionnalités qui correspondent à vos besoins.', 'Websites', 'Siti', 'I develop custom websites ranging from a simple OnePage to a complete CMS with a whole bunch of features that meet your needs.', 'Sviluppo siti web personalizzati che vanno da una semplice OnePage a un CMS completo con tutta una serie di caratteristiche che soddisfano le vostre esigenze.'),
(4, 'images/site/hosting.png', 'Hébergement', 'J''ai en ma possession un serveur basé sur Paris en DataCenter et géré par une équipe de professionnels qui me permettra d''héberger votre site internet en cas de besoin !', 'Hosting', 'Hosting', 'I have in my possession a server based in Paris in DataCenter and managed by a team of professionals that will allow me to host your website if necessary!', 'Ho in mio possesso un server con sede a Parigi in DataCenter e gestito da un team di professionisti che mi permetterà di ospitare il vostro sito web se necessario!');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alpha_services`
--
ALTER TABLE `alpha_services`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alpha_services`
--
ALTER TABLE `alpha_services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
