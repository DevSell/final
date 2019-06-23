-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 23 juin 2019 à 11:26
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
-- Base de données :  `Dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `humidite`
--

CREATE TABLE `humidite` (
  `id_humidite` int(10) NOT NULL,
  `humidite` enum('Sec','Moyen','Humide') NOT NULL,
  `id_plante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `humidite`
--

INSERT INTO `humidite` (`id_humidite`, `humidite`, `id_plante`) VALUES
(1, 'Sec', 1),
(2, 'Moyen', 2),
(3, 'Moyen', 3),
(4, 'Moyen', 4),
(5, 'Moyen', 5),
(6, 'Humide', 6),
(7, 'Moyen', 7),
(8, 'Moyen', 8),
(9, 'Moyen', 9),
(10, 'Sec', 10),
(11, 'Moyen', 11),
(12, 'Moyen', 12),
(13, 'Moyen', 13),
(14, 'Moyen', 14),
(15, 'Humide', 15),
(16, 'Moyen', 16),
(17, 'Moyen', 17),
(18, 'Moyen', 18),
(19, 'Moyen', 19),
(20, 'Humide', 20),
(21, 'Moyen', 21),
(22, 'Moyen', 22),
(23, 'Moyen', 23),
(24, 'Moyen', 24),
(25, 'Moyen', 25),
(26, 'Moyen', 26),
(27, 'Moyen', 27),
(28, 'Humide', 28),
(29, 'Humide', 29),
(30, 'Moyen', 30);

-- --------------------------------------------------------

--
-- Structure de la table `luminosite`
--

CREATE TABLE `luminosite` (
  `id_luminosite` int(10) NOT NULL,
  `luminosite` char(20) NOT NULL,
  `id_plante` enum('Ombre','IndiffÈrent','Soleil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `luminosite`
--

INSERT INTO `luminosite` (`id_luminosite`, `luminosite`, `id_plante`) VALUES
(1, 'IndiffÈrent', 'Ombre'),
(2, 'IndiffÈrent', 'IndiffÈrent'),
(3, 'IndiffÈrent', 'Soleil'),
(4, 'IndiffÈrent', ''),
(5, 'Soleil', ''),
(6, 'IndiffÈrent', ''),
(7, 'IndiffÈrent', ''),
(8, 'IndiffÈrent', ''),
(9, 'IndiffÈrent', ''),
(10, 'Soleil', ''),
(11, 'Soleil', ''),
(12, 'IndiffÈrent', ''),
(13, 'IndiffÈrent', ''),
(14, 'IndiffÈrent', ''),
(15, 'IndiffÈrent', ''),
(16, 'IndiffÈrent', ''),
(17, 'IndiffÈrent', ''),
(18, 'IndiffÈrent', ''),
(19, 'Ombre', ''),
(20, 'IndiffÈrent', ''),
(21, 'IndiffÈrent', ''),
(22, 'IndiffÈrent', ''),
(23, 'IndiffÈrent', ''),
(24, 'Soleil', ''),
(25, 'Soleil', ''),
(26, 'IndiffÈrent', ''),
(27, 'IndiffÈrent', ''),
(28, 'IndiffÈrent', ''),
(29, 'IndiffÈrent', ''),
(30, 'IndiffÈrent', '');

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

CREATE TABLE `plantes` (
  `id_plante` int(10) NOT NULL,
  `nom_plante` char(25) NOT NULL,
  `num_plante` int(10) NOT NULL,
  `categorie_plante` char(50) NOT NULL,
  `periode_floraison` char(25) NOT NULL,
  `description_plante` char(255) NOT NULL,
  `temperature_ideal` int(10) NOT NULL,
  `humidite_ideal` int(10) NOT NULL,
  `luminosite_ideal` int(10) NOT NULL,
  `id_utilisateur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plantes`
--

INSERT INTO `plantes` (`id_plante`, `nom_plante`, `num_plante`, `categorie_plante`, `periode_floraison`, `description_plante`, `temperature_ideal`, `humidite_ideal`, `luminosite_ideal`, `id_utilisateur`) VALUES
(1, 'Violette des chiens', 1, 'Violaceae', 'Avril-Juin', 'C\'est une plante basse, sans rosette de feuilles basales, aux feuilles\r\novales triangulaires ‡ base plutÙt cordiforme, aux stipules lancÈolÈs aux extrÈmitÈs\r\ndentÈes, aux fleurs sans parfum, bleues ou violettes ‡ Èperon blanch‚tre ou jaune\r\nverd‚tre', 10, 0, 0, 1),
(2, 'TrËfle rouge‚tre', 2, 'Fabaceae', 'Juin-Juillet', 'C\'est une plante basse, sans rosette de feuilles basales, aux feuilles\r\novales triangulaires ‡ base plutÙt cordiforme, aux stipules lancÈolÈs aux extrÈmitÈs\r\ndentÈes, aux fleurs sans parfum, bleues ou violettes ‡ Èperon blanch‚tre ou jaune\r\nverd‚tre', 10, 0, 0, 2),
(3, 'Grande consoude', 3, 'Boraginaceae', 'Mai-Juillet', 'La Consoude officinale (Symphytum officinale) est l\'espËce\r\ncaractÈristique du genre Symphytum. Elle prÈsente de nombreuses variÈtÈs et\r\ns\'hybride facilement, cette derniËre caractÈristique ayant ÈtÈ utilisÈe en agronomie\r\ncomme en horticulture. Les limit', 10, 0, 0, 1),
(4, 'Epiaire des bois', 4, 'Lamiaceae', 'Juin-Septembre', 'C\'est une plante moyenne (15 ‡ 40 cm de haut en moyenne, pouvant\r\natteindre 80 cm). La partie souterraine est constituÈe d\'un rhizome rameux formant de\r\nnombreux rejets. Les tiges quadrangulaires sont velues et portent des feuilles\r\nopposÈes longuement pÈ', 10, 0, 0, 2),
(5, 'Stipe de France', 5, 'Poaceae', 'Ao?t-Octobre', 'Le stipe (ou faux-tronc) est, en botanique, la tige robuste de plantes\r\nterrestres comme les palmiers, les yuccas, les dragonniers (Dracaena sp.), les\r\nfougËres arborescentes ou encore les bananiers.', 10, 0, 0, 1),
(6, 'Lynchnide fleur de coucou', 6, 'Caryophyllaceae', 'Mai-Juillet', 'C\'est une espËce de plante ÈrigÈe, aux feuilles et fleurs fines. Souvent\r\nramifiÈe, feuilles basales pÈtiolÈes, oblongues, aux feuilles caulinaires lancÈolÈes. Les\r\nfleurs prÈsentent un calice tubuleux ‡ 10 nervures et 5 pointes. On observe 5 pÈtales\r\ndiv', 10, 0, 0, 2),
(7, 'SilËne penchÈ', 7, 'Caryophyllaceae', 'Mai-Juillet', 'C\'est une plante assez haute (20 ‡ 50 cm), ‡ fleurs blanches, avec des\r\npÈtales longuement ÈchancrÈs.', 10, 0, 0, 1),
(8, 'Orpin ‚cre', 8, 'Crassulaceae', 'Juin-Juillet', 'L\'Orpin ‚cre encore appelÈ Orpin br?lant ou Poivre des murailles ou\r\nPoivre de muraille est une plante vivace de la famille des CrassulacÈes. Cette espËce\r\nest originaire de l\'ancien monde: Europe, Afrique du Nord et Asie occidentale.', 10, 0, 0, 2),
(9, 'Orpin blanc', 9, 'Crassulaceae', 'Juin-Juillet', 'L\'Orpin blanc aussi appelÈ SÈdum blanc est une plante vivace de la\r\nfamille des CrassulacÈes.', 10, 0, 0, 1),
(10, 'Scabieuse blanch‚tre', 10, 'Caprifoliaceae', 'Juin-Septembre', 'Plante de 20 ‡ 60 cm, veloutÈe blanch‚tre, peu ramifiÈe.\r\nFeuilles espacÈes sur la tige se modifiant de la base au sommet, les infÈrieures en\r\nforme de lyre, les supÈrieures profondÈment dÈcoupÈes en laniËres.\r\nCapitule de fleurs bleu-lilas, les extÈrieur', 10, 0, 0, 2),
(11, 'Scabieuse colombaire', 11, 'Caprifoliaceae', 'Juin-Octobre', 'Plante de 20 ‡ 60 cm, veloutÈe blanch‚tre, peu ramifiÈe.\r\nFeuilles espacÈes sur la tige se modifiant de la base au sommet, les infÈrieures en\r\nforme de lyre, les supÈrieures profondÈment dÈcoupÈes en laniËres.\r\nCapitule de fleurs bleu-lilas, les extÈrieur', 10, 0, 0, 1),
(12, 'PrimevËre acaule', 12, 'Primulaceae', 'Mars-Avril', 'La PrimevËre commune, PrimevËre acaule ou PrimevËre sans tige\r\n(Primula vulgaris) est une plante herbacÈe pÈrenne de la famille des PrimulacÈes des\r\nrÈgions tempÈrÈes de l\'hÈmisphËre nord.', 10, 0, 0, 2),
(13, 'Origan commun', 13, 'Lamiaceae', 'Juillet-Septembre', 'L\'origan, moins utilisÈ en France que la marjolaine (ou origan des\r\njardins), a les mÍmes usages condimentaires et mÈdicinaux, et les deux plantes sont\r\nsouvent confondues. On retrouve l\'origan dans la cuisine portugaise et la cuisine\r\nitalienne.', 10, 0, 0, 1),
(14, 'Menthe ‡ feuilles rondes', 14, 'Lamiaceae', 'Juillet-Septembre', 'La menthe odorante ou menthe ‡ feuilles rondes1 (Mentha suaveolens)\r\nest une plante herbacÈe de la famille des LamiacÈes.', 10, 0, 0, 2),
(15, 'Lysimaque commune', 15, 'Primulaceae', 'Juin-Ao?t', 'La lysimaque commune est cultivÈe dans les jardins depuis des siËcles,\r\nutilisÈe en tant que plante mÈdicinale, plante ornementale et Ègalement pour ses\r\nsubstances tinctoriales. Elle est naturalisÈe en AmÈrique du Nord, mais elle est\r\nconsidÈrÈe comme in', 10, 0, 0, 1),
(16, 'Gesse des prËs', 16, 'Fabaceae', 'Juin-Ao?t', 'Les inflorescences sont disposÈes en grappes de 5 ‡ 12 fleurs d\'un\r\njaune lumineux. Sa tige, angulaire, la distingue des autres gesses. Les feuilles se\r\nterminent par une vrille..', 10, 0, 0, 2),
(17, 'Millepertuis perforÈ', 17, 'Hypericaceae', 'Juin-Ao?t', 'Le millepertuis perforÈ, millepertuis commun ou millepertuis officinal est\r\nune plante herbacÈe vivace de la famille des ClusiacÈes selon la classification\r\nclassique.', 10, 0, 0, 1),
(18, 'Lierre terrestre', 18, 'Lamiaceae', 'Avril-Septembre', 'Le lierre terrestre est rÈpandu dans toute líEurope jusquíen Asie, mÍme\r\nau Japon. ConsidÈrÈ comme un cousin ÈloignÈe de la menthe (dío? les confusions de\r\nnom ìglechomeî avec la menthe pouillot), il fait partie de la grande famille des\r\nlamiacÈes.', 10, 0, 0, 2),
(19, 'AspÈrule odorante', 19, 'Rubiaceae', 'Mai-Juin', 'L\'aspÈrule odorante est une plante trËs parfumÈe, apprÈciÈe depuis\r\nlongtemps pour ses vertus mÈdicinales comme pour son action tranquillisante, ses\r\neffets antistress et ses bienfaits sur le systËme digestif ou sur les insomnies.', 10, 0, 0, 1),
(20, 'Reine des prÈs', 20, 'Rosaceae', 'Juin-Ao?t', 'La reine des prÈs est une plante herbacÈe, vivace, appartenant ‡ la\r\nfamille des RosacÈes. Son nom scientifique est Spiraea ulmaria L. ou Filipendula\r\nulmaria L. Maxim.', 10, 0, 0, 2),
(21, 'Epilobe ‡ feuilles Ètroit', 21, 'Onagraceae', 'Juin-Ao?t', 'Les feuilles d\'Èpilobe en Èpi sont uniques en ce sens que les nervures\r\ndes feuilles sont circulaires et ne prennent pas fin sur les bords de la feuille, mais\r\nforment des boucles qui se rejoignent sur le bord extÈrieur des feuilles.', 10, 0, 0, 1),
(22, 'Eupatoire chanvrine', 22, 'Asteraceae', 'Juillet-Octobre', 'L\'Eupatoire ‡ feuilles de chanvre ou Eupatoire chanvrine est une plante\r\nherbacÈe vivace de la famille des AstÈracÈes. Autre dÈnomination commune: d\'aprËs\r\nGaston Bonnier, elle porte Ègalement le nom de ´ PantagruÈlion aquatique ª.', 10, 0, 0, 2),
(23, 'Butome en ombelle', 23, 'Butomaceae', 'Juin-Ao?t', 'Cette trËs belle plante se rencontre aux bords des eaux, dans les\r\nmarÈcages et les sables humides. Ses fleurs roses sont disposÈes en ombelle en\r\nhaut díune tige nue et dressÈe. Les feuilles sont longues et trËs Ètroites.', 10, 0, 0, 1),
(24, 'AchillÈe millefeuille', 24, 'Asteraceae', 'Juin-Septembre', 'LíachillÈe millefeuille pousse naturellement en plein soleil ou ‡ la mi-\r\nombre sur le bord des routes, sur les talus herbeux, dans les prairies, les champs et les haies.', 10, 0, 0, 2),
(25, 'AchillÈe sternutatoire', 25, 'Asteraceae', 'Juillet-Septembre', 'Plante vivace assez grande, ‡ tige (La tige est chez les plantes ‡ fleurs,\r\nl\'axe, gÈnÈralement aÈrien, qui prolonge la racine et porte les bourgeons et les\r\nfeuilles. La tige se ramifie gÈnÈralement en...) ÈrigÈe, ‡ souche ligneuse rampante.', 10, 0, 0, 1),
(26, 'Bugle rampante', 26, 'Lamiaceae', 'Mai-Juin', 'Les tiges sont partiellement pubescentes et portent des feuilles vert\r\nfoncÈ, ovales ‡ oblongues, spatulÈes d\'environ 10 cm de long. Floraison : en mai-juin ,\r\nfleurs bleu foncÈ de 1 ‡ 2 cm sur des Èpis pouvant atteindre 15 cm', 10, 0, 0, 2),
(27, 'Plantain díeau commun', 27, 'Alismataceae', 'Juin-Septembre', 'Cette plante, croissant au bord des eaux, mesure de 30 ‡ 120 cm de\r\nlongueur. Ses feuilles ovales-elliptiques ‡ forme de fer de lance, de 30 cm de longueur\r\npour 12 cm de largeur, sont gÈnÈralement tronquÈes ‡ la base et aÈriennes.', 10, 0, 0, 1),
(28, 'Guimauve officinale', 28, 'Malvaceae', 'Juin-Ao?t', 'La Guimauve officinale, aussi appelÈe Guimauve sauvage ou Mauve\r\nblanche, est une plante herbacÈe vivace de la famille des MalvacÈes, commune en\r\nEurope. Elle est cultivÈe comme plante mÈdicinale pour ses propriÈtÈs Èmollientes,\r\ncomme plante ornementale', 10, 0, 0, 2),
(29, 'Populage des marais', 29, 'Ranunculaceae', 'Mai-Juilet', 'Le populage des marais teinte les zones humides de ses magnifiques\r\nfleurs jaunes. Cette plante se rencontre au printemps, souvent en grosses touffes et\r\nen grandes colonies. Elle est totalement absente du sud du dÈpartement.', 10, 0, 0, 1),
(30, 'Erable champÍtre', 30, 'Sapindaceae', 'Avril-Mai', 'C\'est un arbre pouvant atteindre 10 mËtres ‡ Ècorce gris p‚le, fissurÈe,\r\n‡ petites feuilles caduques simples ‡ plusieurs lobes arrondis, ‡ fleurs verd‚tres\r\napparaissant avant les feuilles.', 10, 0, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `temperature`
--

CREATE TABLE `temperature` (
  `id_temperature` int(10) NOT NULL,
  `temperature` char(20) NOT NULL,
  `id_plante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(10) NOT NULL,
  `nom_utilisateur` char(20) NOT NULL,
  `prenom_utilisateur` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`) VALUES
(1, 'Friaa', 'Hadil'),
(1, 'Friaa', 'Hadil'),
(2, 'Dolbert', 'Christopher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
