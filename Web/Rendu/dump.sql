-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 20 juin 2019 à 14:31
-- Version du serveur :  5.7.25
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ChrisAlpha`
--

-- --------------------------------------------------------

--
-- Structure de la table `alpha_articles`
--

CREATE TABLE `alpha_articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `background` text NOT NULL,
  `contenu` text NOT NULL,
  `date_p` int(11) NOT NULL,
  `auteur` varchar(15) NOT NULL,
  `categorie` enum('1','2','3','4') NOT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_articles`
--

INSERT INTO `alpha_articles` (`id`, `titre`, `description`, `background`, `contenu`, `date_p`, `auteur`, `categorie`, `nom_utilisateur`) VALUES
(8, 'Test', 'Test', 'https://www.swiss-image.ch/fileadmin/_processed_/csm_Swiss_Image_sts8595_788cf78097.jpg', '<p>Test</p>\r\n', 1560955991, 'Chris', '1', 'Chris'),
(4, 'Hadil', 'Test', 'https://vignette.wikia.nocookie.net/habbo/images/5/50/Wiki-background/revision/latest?cb=20121030150706&path-prefix=answers', 'Test', 0, 'sddsdsdss', '', 'Hadil');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_article_comments`
--

CREATE TABLE `alpha_article_comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `commentaire` varchar(220) NOT NULL,
  `date_p` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `alpha_article_views`
--

CREATE TABLE `alpha_article_views` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `alpha_clients`
--

CREATE TABLE `alpha_clients` (
  `id` int(11) NOT NULL,
  `image` varchar(2500) NOT NULL,
  `lien` varchar(2500) NOT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_clients`
--

INSERT INTO `alpha_clients` (`id`, `image`, `lien`, `nom_utilisateur`) VALUES
(1, 'https://alls-heberg.fr/img/logoblanc.png', 'https://alls-heberg.fr', 'Chris'),
(2, 'https://gaia-consulting.fr/img/resources/logo.png', 'https://gaia-consulting.fr', 'Chris'),
(3, 'https://www.cma94.com/uploads/_crma_94/slide_siteCMA/cfa-nat.jpg', 'https://www.cma94.com', 'Chris'),
(4, 'https://gitclothes.fr/wp-content/uploads/2019/01/sign_car.png', 'https://gitclothes.fr', 'Chris');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_competences`
--

CREATE TABLE `alpha_competences` (
  `id` int(11) NOT NULL,
  `type` set('Commerciale','Informatique','Graphisme') NOT NULL,
  `competence` varchar(2500) NOT NULL,
  `pct` varchar(2500) NOT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_competences`
--

INSERT INTO `alpha_competences` (`id`, `type`, `competence`, `pct`, `nom_utilisateur`) VALUES
(20, 'Informatique', 'C', '70', 'Chris'),
(2, 'Informatique', 'PHP & SQL', '90', 'Chris'),
(3, 'Informatique', 'HTML5 & CSS3', '70', 'Chris'),
(4, 'Informatique', 'JS & jQuery', '25', 'Chris'),
(5, 'Informatique', 'Python', '50', 'Chris'),
(6, 'Commerciale', 'Animation', '75', 'Chris'),
(7, 'Commerciale', 'Gestion', '30', 'Chris'),
(8, 'Commerciale', 'Marketing', '40', 'Chris'),
(9, 'Commerciale', 'Marketing Digitale', '60', 'Chris'),
(10, 'Commerciale', 'Promoteur', '90', 'Chris'),
(11, 'Commerciale', 'Community Management', '10', 'Chris'),
(12, 'Informatique', 'PHP', '50', 'Hadil'),
(13, 'Informatique', 'HTML/CSS', '50', 'Hadil'),
(14, 'Informatique', 'C', '50', 'Hadil'),
(15, 'Informatique', 'UI/UX', '50', 'Hadil'),
(16, 'Informatique', 'Python', '50', 'Hadil'),
(17, 'Informatique', 'CCNA', '50', 'Hadil'),
(18, 'Informatique', 'Linux', '50', 'Hadil'),
(19, 'Informatique', 'Windows', '50', 'Hadil');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_experiences`
--

CREATE TABLE `alpha_experiences` (
  `id` int(11) NOT NULL,
  `dates` varchar(2500) NOT NULL,
  `poste` varchar(2500) NOT NULL,
  `societe` varchar(2500) NOT NULL,
  `description` varchar(2500) DEFAULT NULL,
  `desc_en` varchar(2500) DEFAULT NULL,
  `desc_it` varchar(2500) DEFAULT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_experiences`
--

INSERT INTO `alpha_experiences` (`id`, `dates`, `poste`, `societe`, `description`, `desc_en`, `desc_it`, `nom_utilisateur`) VALUES
(1, '2019 - Aujourd\'huii', 'Fondateur', 'MeetsFriends', '<p>R&eacute;seau social de rencontre</p>\r\n', '<p>Social network to be deployed in Italy by&#39; January 2020</p>\r\n', '<p>Implementazione del social network in Italia entro gennaio 2020</p>\r\n', 'Chris'),
(2, '2018 - Aujourd\'hui', 'Fondateur', 'YLab', 'Laboratoire spécialisé dans la formation sur le développement d\'applications mobiles.', 'Laboratory specialized in training on the development of mobile applications.', 'Laboratorio specializzato nella formazione sullo sviluppo di applicazioni mobili.', 'Chris'),
(3, '2017 - 2018', 'Développeur', 'Groupe Magellan', 'Création d\'un site internet de type \"Vitrine\" développé en PHP/SQL permettant de présenter les différentes activités de l\'entreprise.', 'Creation of a \"Showcase\" website developed in PHP/SQL to present the company\'s various activities.', 'Creazione di un sito web \"Showcase\" sviluppato in PHP/SQL per presentare le varie attività dell\'azienda.', 'Chris'),
(4, '2016 - 2017', 'Développeur', 'Gaia-Consulting', '<p>Cr&eacute;ation d&#39;un syst&egrave;me d&eacute;velopp&eacute; en PHP/SQL avec pour but de permettre &agrave; des auditeurs de concevoir des documents unique directement par un syst&egrave;me accessible par l&#39;interm&eacute;diaire d&#39;une application pour t&eacute;l&eacute;phone et/ou d&#39;un site web cr&eacute;&eacute; pour cette utilisation.</p>\r\n', '<p>Creation of a system developed in PHP/SQL with the aim of allowing auditors to design unique documents directly by a system accessible via a telephone application and/or a website created for this purpose.</p>\r\n', '<p>Creazione di un sistema sviluppato in <strong>PHP/SQL</strong> con l&#39;obiettivo di consentire agli auditor di progettare documenti unici direttamente da un sistema accessibile tramite un&#39;applicazione telefonica e/o un sito web creato a tale scopo.</p>\r\n', 'Chris'),
(5, '2015 - 2017', 'Développeur', 'Chambres des Métiers et de l\'Artisanat du Val-de-Marne', 'Création d\'un système de type \"Extranet Scolaire\" développé en PHP/SQL permettant aux étudiants de consulter leurs notes, leurs sanctions, leurs retards etc.', 'Creation of a \"School Extranet\" system developed in PHP/SQL allowing students to consult their grades, sanctions, delays, etc.', 'Creazione di un sistema \"School Extranet\" sviluppato in PHP/SQL che permette agli studenti di consultare i loro voti, sanzioni, ritardi, ecc.', 'Chris'),
(6, '2014 - 2016', 'Développeur', 'Alls-Heberg', 'Mise en place d\'un système de carte cadeau pour les clients de cet Hébergeur.', 'Implementation of a gift card system for the customers of this Hosting Company.', 'Implementazione di un sistema di gift card per i clienti di questa Hosting Company.', 'Chris');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_portfolio`
--

CREATE TABLE `alpha_portfolio` (
  `id` int(11) NOT NULL,
  `type` set('vitrine','cms','plugins') NOT NULL,
  `titre` varchar(2500) NOT NULL,
  `image` varchar(2500) NOT NULL,
  `description` varchar(2500) DEFAULT NULL,
  `desc_it` varchar(2500) DEFAULT NULL,
  `desc_en` varchar(2500) DEFAULT NULL,
  `propos` text,
  `propos_en` text,
  `propos_it` text,
  `lien` varchar(2500) DEFAULT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_portfolio`
--

INSERT INTO `alpha_portfolio` (`id`, `type`, `titre`, `image`, `description`, `desc_it`, `desc_en`, `propos`, `propos_en`, `propos_it`, `lien`, `nom_utilisateur`) VALUES
(1, '', 'Alls-Heberg', 'https://chrisd.fr/images/portfolio/alls.png', '<p>Cr&eacute;ation d&#39;un plugin de carte cadeau pour le syst&egrave;me WHMCS.</p>\r\n', '<p>Creazione di un plugin per i buoni regalo per il sistema <strong>WHMCS</strong>.</p>\r\n', '<p>Creation of a gift card plugin for the WHMCS system.</p>\r\n', NULL, NULL, NULL, 'https://alls-heberg.fr', 'Chris'),
(10, 'plugins', 'C-Game', 'https://chrisd.fr/images/portfolio/cgame.png', 'Création d\'un plugin comme Diablo, permettant de jouer sur Windows en textuel.', 'Creazione di un plugin come Diablo, che permette di giocare su Windows in modalità testo.', 'Creation of a plugin like Diablo, allowing to play on Windows in text mode.', NULL, NULL, NULL, '#', 'Chris'),
(3, 'cms', 'DevSide', 'https://chrisd.fr/images/portfolio/devside.png', 'Création d\'un CMS de gestion.', 'Creazione di un CMS di gestione.', 'Creation of a management CMS.', NULL, NULL, NULL, 'https://devside.fr', 'Chris'),
(4, 'cms', 'Gaia-Consulting', 'https://chrisd.fr/images/portfolio/gaia.png', 'Création d\'un CMS permettant aux auditeurs de créer des documents uniques.', 'Creazione di un CMS che consente agli auditor di creare documenti unici.', 'Creation of a CMS allowing auditors to create unique documents.', NULL, NULL, NULL, 'https://gaia-consulting.fr', 'Chris'),
(5, 'vitrine', 'Groupe-Magellan', 'https://chrisd.fr/images/portfolio/magellan.png', 'Création d\'un site vitrine présentant l\'entreprise.', 'Creazione di un sito vetrina di presentazione dell\'azienda.', 'Creation of a showcase site presenting the company.', NULL, NULL, NULL, 'https://groupe-magellan.fr', 'Chris'),
(6, 'cms', 'MyHabbo', 'https://chrisd.fr/images/portfolio/myh.png', 'Création d\'un jeu en ligne avec CMS de type Habbo.', 'Creazione di un gioco online con Habbo CMS.', 'Creation of an online game with Habbo CMS.', NULL, NULL, NULL, 'https://myhabbo.fr', 'Chris'),
(7, 'cms', 'Pokéfun', 'https://chrisd.fr/images/portfolio/pokefun.png', 'Création d\'un CMS entièrement en Laravel pour un site de vente de \"cheats\" en ligne.', 'Creazione di un CMS interamente in Laravel per un sito di vendita online di cheats.', 'Creation of a CMS entirely in Laravel for an online cheats sales site.', NULL, NULL, NULL, 'https://pokefun.fr', 'Chris'),
(8, 'cms', 'SchoolSpirit', 'https://chrisd.fr/images/portfolio/school.png', 'Création d\'un site de type \"Extranet Scolaire\" multilingues. ', 'Creazione di un sito multilingue di tipo \"School Extranet\". ', 'Creation of a multilingual \"School Extranet\" type site. ', NULL, NULL, NULL, 'https://schoolspirit.fr', 'Chris'),
(9, 'vitrine', 'YLab', 'https://chrisd.fr/images/portfolio/ylab.png', 'Création d\'un site de type \"Vitrine\" pour mon laboratoire de développement mobile universitaire. ', 'Creazione di un sito di tipo \"Showcase\" per il mio laboratorio di sviluppo mobile universitario. ', 'Creation of a \"Showcase\" type site for my university mobile development laboratory. ', NULL, NULL, NULL, 'https://ylab.fr', 'Chris');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_scolarite`
--

CREATE TABLE `alpha_scolarite` (
  `id` int(11) NOT NULL,
  `dates` varchar(2500) NOT NULL,
  `diplome` varchar(2500) NOT NULL,
  `ecole` varchar(2500) NOT NULL,
  `description` varchar(2500) DEFAULT NULL,
  `desc_en` varchar(2500) DEFAULT NULL,
  `desc_it` varchar(2500) DEFAULT NULL,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_scolarite`
--

INSERT INTO `alpha_scolarite` (`id`, `dates`, `diplome`, `ecole`, `description`, `desc_en`, `desc_it`, `nom_utilisateur`) VALUES
(1, '2018 - 2021', 'Bachelor architecture informatique et systèmes d\'information', 'Ynov', '<p>J&#39;exerce actuellement un Bachelor <strong>pour 3 ans</strong>, afin de me perfectionner dans l&#39;informatique et plus particuli&egrave;rement dans le d&eacute;veloppement web.</p>\r\n', '<p>I am currently working on a Bachelor&#39;s degree <strong>for 3 years</strong>, in order to improve my computer skills and more particularly in web development.</p>\r\n', '<p>Attualmente sto lavorando ad un Bachelor&#39;s degree <strong>per 3 anni</strong>, al fine di migliorare le mie competenze informatiche e pi&ugrave; in particolare nello sviluppo web.</p>\r\n', 'Chris'),
(2, '2015 - 2018', 'BAC PRO COMMERCE', 'CFA94', 'J\'ai exercé un BAC PRO <b>que j\'ai obtenu</b>, pour me spécialisé dans le commerce.', 'I exercised a BAC PRO <b>which I obtained</b>, for me specialized in trade.', 'Ho esercitato un BAC PRO <b>che ho ottenuto</b>, per me specializzato nel commercio.', 'Chris'),
(3, '2014 - 2015', 'CAP RESTAURANT', 'Apprentis d\'Auteuil', 'J\'ai exercé un CAP <b>que je n\'ai pas obtenu</b>, pour me spécialisé dans la restauration.', 'I exercised a CAP <b>which I did not obtain</b>, to specialize in catering.', 'Ho esercitato un CAP <b>che non ho ottenuto</b> per specializzarmi nella ristorazione.', 'Chris'),
(4, '2012 - 2014', 'CAP APR', 'Lycée Emmanuel Chabrier', 'J\'ai exercé un CAP <b>que j\'ai obtenu</b>, spécialisé dans la polyvalence en restauration.', 'I exercised a CAP <b>which I obtained</b>, specialized in versatility in catering.', 'Ho esercitato un CAP <b>che ho ottenuto</b>, specializzato nella versatilità nella ristorazione.', 'Chris'),
(5, '2021', 'Bachelor architecture informatique et systèmes d\'information', 'Ynov', 'J\'exerce actuellement un Bachelor <b>pour 3 ans</b>, afin de me perfectionner dans l\'informatique et plus particulièrement dans le développement web.', 'I am currently working on a Bachelor\'s degree <b>for 3 years</b>, in order to improve my computer skills and more particularly in web development.', 'Attualmente sto lavorando ad un Bachelor\'s degree <b>per 3 anni</b>, al fine di migliorare le mie competenze informatiche e più in particolare nello sviluppo web.', 'Hadil'),
(6, '2018', 'Baccalauréat', 'Lycée Zarzis', 'Obtention du baccalauréat', 'Obtaining the baccalaureate', 'Ottenere il diploma di maturità', 'Hadil');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_services`
--

CREATE TABLE `alpha_services` (
  `id` int(11) NOT NULL,
  `image` varchar(2500) NOT NULL,
  `titre` varchar(2500) NOT NULL,
  `description` text NOT NULL,
  `titre_en` varchar(2500) DEFAULT NULL,
  `titre_it` varchar(2500) DEFAULT NULL,
  `description_en` text,
  `description_it` text,
  `nom_utilisateur` set('Hadil','Chris') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_services`
--

INSERT INTO `alpha_services` (`id`, `image`, `titre`, `description`, `titre_en`, `titre_it`, `description_en`, `description_it`, `nom_utilisateur`) VALUES
(9, 'https://chrisd.fr/images/site/videos.png', 'Vidéos', 'Je crée des vidéos professionnelles sur mesure et qui correspondent entièrement à vos besoins.', 'Videos', 'Video', 'I create professional videos that are tailored to your needs.', 'Creo video professionali su misura per le vostre esigenze.', 'Chris'),
(3, 'https://chrisd.fr/images/site/websites.png', 'Sites', '<p>Je d&eacute;veloppe des sites internet sur mesure allant d&#39;une simple OnePage, &agrave; un CMS complet regroupant tout un tas de fonctionnalit&eacute;s qui correspondent &agrave; vos besoins.</p>\r\n', 'Websites', 'Siti', '<p>I develop custom websites ranging from a simple OnePage to a complete CMS with a whole bunch of features that meet your needs.</p>\r\n', '<p>Sviluppo siti web personalizzati che vanno da una semplice OnePage a un CMS completo con tutta una serie di caratteristiche che soddisfano le vostre esigenze.</p>\r\n', 'Chris'),
(4, 'https://chrisd.fr/images/site/hosting.png', 'Hébergement', 'J\'ai en ma possession un serveur basé sur Paris en DataCenter et géré par une équipe de professionnels qui me permettra d\'héberger votre site internet en cas de besoin !', 'Hosting', 'Hosting', 'I have in my possession a server based in Paris in DataCenter and managed by a team of professionals that will allow me to host your website if necessary!', 'Ho in mio possesso un server con sede a Parigi in DataCenter e gestito da un team di professionisti che mi permetterà di ospitare il vostro sito web se necessario!', 'Chris'),
(5, 'https://chrisd.fr/images/site/videos.png', 'Vidéos', 'Je crée des vidéos professionnelles sur mesure et qui correspondent entièrement à vos besoins.', 'Videos', 'Video', 'I create professional videos that are tailored to your needs.', 'Creo video professionali su misura per le vostre esigenze.', 'Hadil'),
(6, 'https://chrisd.fr/images/site/apps.png', 'Apps', 'Je suis spécialisé dans la création d\'apps en <b>WebView</b> Android, iOS et Microsoft.', 'Apps', 'Apps', 'I specialize in creating apps in <b>WebView</b> Android, iOS and Microsoft.', 'Sono specializzato nella creazione di applicazioni in <b>WebView</b> Android, iOS e Microsoft.', 'Hadil'),
(7, 'https://chrisd.fr/images/site/websites.png', 'Sites', 'Je développe des sites internet sur mesure allant d\'une simple OnePage, à un CMS complet regroupant tout un tas de fonctionnalités qui correspondent à vos besoins.', 'Websites', 'Siti', 'I develop custom websites ranging from a simple OnePage to a complete CMS with a whole bunch of features that meet your needs.', 'Sviluppo siti web personalizzati che vanno da una semplice OnePage a un CMS completo con tutta una serie di caratteristiche che soddisfano le vostre esigenze.', 'Hadil'),
(8, 'https://chrisd.fr/images/site/hosting.png', 'Hébergement', 'J\'ai en ma possession un serveur basé sur Paris en DataCenter et géré par une équipe de professionnels qui me permettra d\'héberger votre site internet en cas de besoin !', 'Hosting', 'Hosting', 'I have in my possession a server based in Paris in DataCenter and managed by a team of professionals that will allow me to host your website if necessary!', 'Ho in mio possesso un server con sede a Parigi in DataCenter e gestito da un team di professionisti che mi permetterà di ospitare il vostro sito web se necessario!', 'Hadil'),
(10, 'https://chrisd.fr/images/site/apps.png', 'Apps', 'Je suis spécialisé dans la création d\'apps en <b>WebView</b> Android, iOS et Microsoft.', 'Apps', 'Apps', 'I specialize in creating apps in <b>WebView</b> Android, iOS and Microsoft.', 'Sono specializzato nella creazione di applicazioni in <b>WebView</b> Android, iOS e Microsoft.', 'Chris');

-- --------------------------------------------------------

--
-- Structure de la table `alpha_site`
--

CREATE TABLE `alpha_site` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL DEFAULT 'Habbo',
  `lien` varchar(2500) NOT NULL DEFAULT 'http://localhost',
  `email` varchar(255) NOT NULL DEFAULT 'contact@habbo.fr',
  `dedipass_public` varchar(255) NOT NULL DEFAULT '...',
  `dedipass_private` varchar(255) NOT NULL DEFAULT '...',
  `twitter` text NOT NULL,
  `fb` text NOT NULL,
  `maintenance` enum('0','1') NOT NULL DEFAULT '0',
  `nom_utilisateur` set('Hadil','Chris','Admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alpha_site`
--

INSERT INTO `alpha_site` (`id`, `nom`, `lien`, `email`, `dedipass_public`, `dedipass_private`, `twitter`, `fb`, `maintenance`, `nom_utilisateur`) VALUES
(1, 'Chris D.', 'https://alpha.chrisd.fr', 'contact@chrisd.fr', '...', '...', 'test', 'test', '0', 'Chris'),
(2, 'Hadil F.', 'https://hadil.chrisd.fr', 'contact@chrisd.fr', '...', '...', 'test', 'test', '0', 'Hadil'),
(3, 'Admin', 'https://admin.chrisd.fr', 'contact@chrisd.fr', '...', '...', '', '', '0', 'Admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alpha_articles`
--
ALTER TABLE `alpha_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_article_comments`
--
ALTER TABLE `alpha_article_comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_article_views`
--
ALTER TABLE `alpha_article_views`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_clients`
--
ALTER TABLE `alpha_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_competences`
--
ALTER TABLE `alpha_competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_experiences`
--
ALTER TABLE `alpha_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_portfolio`
--
ALTER TABLE `alpha_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_scolarite`
--
ALTER TABLE `alpha_scolarite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_services`
--
ALTER TABLE `alpha_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alpha_site`
--
ALTER TABLE `alpha_site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alpha_articles`
--
ALTER TABLE `alpha_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `alpha_article_comments`
--
ALTER TABLE `alpha_article_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `alpha_article_views`
--
ALTER TABLE `alpha_article_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `alpha_clients`
--
ALTER TABLE `alpha_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `alpha_competences`
--
ALTER TABLE `alpha_competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `alpha_experiences`
--
ALTER TABLE `alpha_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `alpha_portfolio`
--
ALTER TABLE `alpha_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `alpha_scolarite`
--
ALTER TABLE `alpha_scolarite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `alpha_services`
--
ALTER TABLE `alpha_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `alpha_site`
--
ALTER TABLE `alpha_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
