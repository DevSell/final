-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 15 Février 2019 à 13:27
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
-- Structure de la table `alpha_scolarite`
--

CREATE TABLE IF NOT EXISTS `alpha_scolarite` (
`id` int(11) NOT NULL,
  `dates` varchar(2500) NOT NULL,
  `diplome` varchar(2500) NOT NULL,
  `ecole` varchar(2500) NOT NULL,
  `desc` varchar(2500) DEFAULT NULL,
  `desc_en` varchar(2500) DEFAULT NULL,
  `desc_it` varchar(2500) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alpha_scolarite`
--

INSERT INTO `alpha_scolarite` (`id`, `dates`, `diplome`, `ecole`, `desc`, `desc_en`, `desc_it`) VALUES
(1, '2018 - 2021', 'Bachelor architecture informatique et systèmes d''information', 'Ynov', 'J''exerce actuellement un Bachelor <b>pour 3 ans</b>, afin de me perfectionner dans l''informatique et plus particulièrement dans le développement web.', 'I am currently working on a Bachelor''s degree <b>for 3 years</b>, in order to improve my computer skills and more particularly in web development.', 'Attualmente sto lavorando ad un Bachelor''s degree <b>per 3 anni</b>, al fine di migliorare le mie competenze informatiche e più in particolare nello sviluppo web.'),
(2, '2015 - 2018', 'BAC PRO COMMERCE', 'CFA94', 'J''ai exercé un BAC PRO <b>que j''ai obtenu</b>, pour me spécialisé dans le commerce.', 'I exercised a BAC PRO <b>which I obtained</b>, for me specialized in trade.', 'Ho esercitato un BAC PRO <b>che ho ottenuto</b>, per me specializzato nel commercio.'),
(3, '2014 - 2015', 'CAP RESTAURANT', 'CFA94', 'J''ai exercé un CAP <b>que je n''ai pas obtenu</b>, pour me spécialisé dans la restauration.', 'I exercised a CAP <b>which I did not obtain</b>, to specialize in catering.', 'Ho esercitato un CAP <b>che non ho ottenuto</b> per specializzarmi nella ristorazione.'),
(4, '2012 - 2014', 'CAP APR', 'Lycée Emmanuel Chabrier', 'J''ai exercé un CAP <b>que j''ai obtenu</b>, spécialisé dans la polyvalence en restauration.', 'I exercised a CAP <b>which I obtained</b>, specialized in versatility in catering.', 'Ho esercitato un CAP <b>che ho ottenuto</b>, specializzato nella versatilità nella ristorazione.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alpha_scolarite`
--
ALTER TABLE `alpha_scolarite`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alpha_scolarite`
--
ALTER TABLE `alpha_scolarite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
