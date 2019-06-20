--
-- Création des tables
--

CREATE TABLE plantes (
  id_plante int(10) NOT NULL,
  nom_plante char(25) NOT NULL,
  num_plante int(10) NOT NULL,
  categorie_plante char(50) NOT NULL,
  periode_floraison char(25) NOT NULL,
  description_plante char(800) NOT NULL,
  temperature_ideal int(10) NOT NULL,
  humidite_ideal int(10) NOT NULL,
  luminosite_ideal int(10) NOT NULL,
  id_utilisateur int(10) NOT NULL,
  CONSTRAINT pk_plante PRIMARY KEY (id_plante),
  CONSTRAINT fk_plante_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur)
) ;

CREATE TABLE temperature (
  id_temperature int(10) NOT NULL,
  temperature char(20) NOT NULL,
  id_plante int(10) NOT NULL,
  CONSTRAINT pk_temperature PRIMARY KEY (id_temperature),
  CONSTRAINT fk_temperature_plante FOREIGN KEY (id_plante) REFERENCES plantes(id_plante)
) ;

CREATE TABLE luminosite (
  id_luminosite int(10) NOT NULL,
  luminosite char(20) NOT NULL,
  id_plante enum('Ombre','Indifférent','Soleil') NOT NULL,
  CONSTRAINT pk_luminosite PRIMARY KEY (id_luminosite),
  CONSTRAINT fk_luminosite_plante FOREIGN KEY (id_plante) REFERENCES plantes(id_plante)
) ;

CREATE TABLE humidite (
  id_humidite int(10) NOT NULL,
  humidite enum('Sec','Moyen','Humide') NOT NULL,
  id_plante int(10) NOT NULL,
  CONSTRAINT pk_humidite PRIMARY KEY (id_humidite),
  CONSTRAINT fk_humidite_plante FOREIGN KEY (id_plante) REFERENCES plantes(id_plante)
) ;


CREATE TABLE utilisateur (
  id_utilisateur int(10) NOT NULL,
  nom_utilisateur char(20) NOT NULL,
  prenom_utilisateur char(20) NOT NULL
  CONSTRAINT pk_utilisateur PRIMARY KEY (id_utilisateur)
) ;


--
-- Insertion des données
--

INSERT INTO plantes (id_plante, nom_plante, num_plante, categorie_plante, periode_floraison, description_plante, temperature_ideal, humidite_ideal, luminosite_ideal, id_utilisateur) VALUES
(1, 'Violette des chiens', '1', 'Violaceae', 'Avril-Juin', "C'est une plante basse, sans rosette de feuilles basales, aux feuilles
ovales triangulaires à base plutôt cordiforme, aux stipules lancéolés aux extrémités
dentées, aux fleurs sans parfum, bleues ou violettes à éperon blanchâtre ou jaune
verdâtre", '10°', 'Sec', 'Indifférent', '1'),

(2, 'Trèfle rougeâtre', '2', 'Fabaceae', 'Juin-Juillet', "C'est une plante basse, sans rosette de feuilles basales, aux feuilles
ovales triangulaires à base plutôt cordiforme, aux stipules lancéolés aux extrémités
dentées, aux fleurs sans parfum, bleues ou violettes à éperon blanchâtre ou jaune
verdâtre", '10°', 'Sec', 'Indifférent', '2'),

(3, 'Grande consoude', '3', 'Boraginaceae', 'Mai-Juillet', "La Consoude officinale (Symphytum officinale) est l'espèce
caractéristique du genre Symphytum. Elle présente de nombreuses variétés et
s'hybride facilement, cette dernière caractéristique ayant été utilisée en agronomie
comme en horticulture. Les limites de définition de l'espèce ne sont d'ailleurs pas
fixées de manière définitive (voir l'article sur les consoudes). C'est une plante utile et
utilisée depuis longtemps, à la fois pour la production agricole, pour ses vertus
thérapeutiques et pour l'agrément des jardins.", '10°', 'Sec', 'Indifférent', '1'),

(4, 'Epiaire des bois', '4', 'Lamiaceae', 'Juin-Septembre', "C'est une plante moyenne (15 à 40 cm de haut en moyenne, pouvant
atteindre 80 cm). La partie souterraine est constituée d'un rhizome rameux formant de
nombreux rejets. Les tiges quadrangulaires sont velues et portent des feuilles
opposées longuement pétiolées, largement ovales, pointues, en cœur à la base,
dentées, molles et velues, d'un vert sombre, rappelant celles de l'ortie, d'où son nom
vernaculaire.", '10°', 'Moyen', 'Ombre', '2'),

(5, 'Stipe de France', '5', 'Poaceae', 'Août-Octobre', "Le stipe (ou faux-tronc) est, en botanique, la tige robuste de plantes
terrestres comme les palmiers, les yuccas, les dragonniers (Dracaena sp.), les
fougères arborescentes ou encore les bananiers.", '10°', 'Moyen', 'Soleil', '1'),

(6, 'Lynchnide fleur de coucou', '6', 'Caryophyllaceae', 'Mai-Juillet', "C'est une espèce de plante érigée, aux feuilles et fleurs fines. Souvent
ramifiée, feuilles basales pétiolées, oblongues, aux feuilles caulinaires lancéolées. Les
fleurs présentent un calice tubuleux à 10 nervures et 5 pointes. On observe 5 pétales
divisés en 4 fines lanières, dont 2 principales et 2 plus fines. 10 étamines, 5 styles.", '10°', 'Humide', 'Indifférent', '2'),

(7, 'Silène penché', '7', 'Caryophyllaceae', 'Mai-Juillet', "C'est une plante assez haute (20 à 50 cm), à fleurs blanches, avec des
pétales longuement échancrés.", '10°', 'Sec', 'Indifférent', '1'),

(8, 'Orpin âcre', '8', 'Crassulaceae', 'Juin-Juillet', "L'Orpin âcre encore appelé Orpin brûlant ou Poivre des murailles ou
Poivre de muraille est une plante vivace de la famille des Crassulacées. Cette espèce
est originaire de l'ancien monde: Europe, Afrique du Nord et Asie occidentale.", '10°', 'Moyen', 'Indifférent', '2'),

(9, 'Orpin blanc', '9', 'Crassulaceae', 'Juin-Juillet', "L'Orpin blanc aussi appelé Sédum blanc est une plante vivace de la
famille des Crassulacées.", '10°', 'Moyen', 'Indifférent', '1'),

(10, 'Scabieuse blanchâtre', '10', 'Caprifoliaceae', 'Juin-Septembre', "Plante de 20 à 60 cm, veloutée blanchâtre, peu ramifiée.
Feuilles espacées sur la tige se modifiant de la base au sommet, les inférieures en
forme de lyre, les supérieures profondément découpées en lanières.
Capitule de fleurs bleu-lilas, les extérieures plus grandes à lobes inégaux. Arêtes du
calice noirâtres.", '10°', 'Sec', 'Soleil', '2'),

(11, 'Scabieuse colombaire', '11', 'Caprifoliaceae', 'Juin-Octobre', "Plante de 20 à 60 cm, veloutée blanchâtre, peu ramifiée.
Feuilles espacées sur la tige se modifiant de la base au sommet, les inférieures en
forme de lyre, les supérieures profondément découpées en lanières.
Capitule de fleurs bleu-lilas, les extérieures plus grandes à lobes inégaux. Arêtes du
calice noirâtres.", '10°', 'Moyen', 'Soleil', '1'),

(12, 'Primevère acaule', '12', 'Primulaceae', 'Mars-Avril', "La Primevère commune, Primevère acaule ou Primevère sans tige
(Primula vulgaris) est une plante herbacée pérenne de la famille des Primulacées des
régions tempérées de l'hémisphère nord.", '10°', 'Sec', 'Indifférent', '2'),

(13, 'Origan commun', '13', 'Lamiaceae', 'Juillet-Septembre', "L'origan, moins utilisé en France que la marjolaine (ou origan des
jardins), a les mêmes usages condimentaires et médicinaux, et les deux plantes sont
souvent confondues. On retrouve l'origan dans la cuisine portugaise et la cuisine
italienne.", '10°', 'Sec', 'Indifférent', '1'),

(14, 'Menthe à feuilles rondes', '14', 'Lamiaceae', 'Juillet-Septembre', "La menthe odorante ou menthe à feuilles rondes1 (Mentha suaveolens)
est une plante herbacée de la famille des Lamiacées.", '10°', 'Sec', 'Soleil', '2'),

(15, 'Lysimaque commune', '15', 'Primulaceae', 'Juin-Août', "La lysimaque commune est cultivée dans les jardins depuis des siècles,
utilisée en tant que plante médicinale, plante ornementale et également pour ses
substances tinctoriales. Elle est naturalisée en Amérique du Nord, mais elle est
considérée comme invasive dans plusieurs états.", '10°', 'Humide', 'Indifférent', '1'),

(16, 'Gesse des près', '16', 'Fabaceae', 'Juin-Août', "Les inflorescences sont disposées en grappes de 5 à 12 fleurs d'un
jaune lumineux. Sa tige, angulaire, la distingue des autres gesses. Les feuilles se
terminent par une vrille..", '10°', 'Sec', 'Indifférent', '2'),

(17, 'Millepertuis perforé', '17', 'Hypericaceae', 'Juin-Août', "Le millepertuis perforé, millepertuis commun ou millepertuis officinal est
une plante herbacée vivace de la famille des Clusiacées selon la classification
classique.", '10°', 'Sec', 'Indifférent', '1'),

(18, 'Lierre terrestre', '18', 'Lamiaceae', 'Avril-Septembre', "Le lierre terrestre est répandu dans toute l’Europe jusqu’en Asie, même
au Japon. Considéré comme un cousin éloignée de la menthe (d’où les confusions de
nom “glechome” avec la menthe pouillot), il fait partie de la grande famille des
lamiacées.", '10°', 'Sec', 'Indifférent', '2'),

(19, 'Aspérule odorante', '19', 'Rubiaceae', 'Mai-Juin', "L'aspérule odorante est une plante très parfumée, appréciée depuis
longtemps pour ses vertus médicinales comme pour son action tranquillisante, ses
effets antistress et ses bienfaits sur le système digestif ou sur les insomnies.", '10°', 'Sec', 'Ombre', '1'),

(20, 'Reine des prés', '20', 'Rosaceae', 'Juin-Août', "La reine des prés est une plante herbacée, vivace, appartenant à la
famille des Rosacées. Son nom scientifique est Spiraea ulmaria L. ou Filipendula
ulmaria L. Maxim.", '10°', 'Humide', 'Indifférent', '2'),

(21, 'Epilobe à feuilles étroites', '21', 'Onagraceae', 'Juin-Août', "Les feuilles d'épilobe en épi sont uniques en ce sens que les nervures
des feuilles sont circulaires et ne prennent pas fin sur les bords de la feuille, mais
forment des boucles qui se rejoignent sur le bord extérieur des feuilles.", '10°', 'Sec', 'Indifférent', '1'),

(22, 'Eupatoire chanvrine', '22', 'Asteraceae', 'Juillet-Octobre', "L'Eupatoire à feuilles de chanvre ou Eupatoire chanvrine est une plante
herbacée vivace de la famille des Astéracées. Autre dénomination commune: d'après
Gaston Bonnier, elle porte également le nom de « Pantagruélion aquatique ».", '10°', 'Sec', 'Indifférent', '2'),

(23, 'Butome en ombelle', '23', 'Butomaceae', 'Juin-Août', "Cette très belle plante se rencontre aux bords des eaux, dans les
marécages et les sables humides. Ses fleurs roses sont disposées en ombelle en
haut d’une tige nue et dressée. Les feuilles sont longues et très étroites.", '10°', 'Moyen', 'Indifférent', '1'),

(24, 'Achillée millefeuille', '24', 'Asteraceae', 'Juin-Septembre', "L’achillée millefeuille pousse naturellement en plein soleil ou à la mi-
ombre sur le bord des routes, sur les talus herbeux, dans les prairies, les champs et les haies.", '10°', 'Sec', 'Soleil', '2'),

(25, 'Achillée sternutatoire', '25', 'Asteraceae', 'Juillet-Septembre', "Plante vivace assez grande, à tige (La tige est chez les plantes à fleurs,
l'axe, généralement aérien, qui prolonge la racine et porte les bourgeons et les
feuilles. La tige se ramifie généralement en...) érigée, à souche ligneuse rampante.", '10°', 'Moyen', 'Soleil', '1'),

(26, 'Bugle rampante', '26', 'Lamiaceae', 'Mai-Juin', "Les tiges sont partiellement pubescentes et portent des feuilles vert
foncé, ovales à oblongues, spatulées d'environ 10 cm de long. Floraison : en mai-juin ,
fleurs bleu foncé de 1 à 2 cm sur des épis pouvant atteindre 15 cm", '10°', 'Sec', 'Indifférent', '2'),

(27, 'Plantain d’eau commun', '27', 'Alismataceae', 'Juin-Septembre', "Cette plante, croissant au bord des eaux, mesure de 30 à 120 cm de
longueur. Ses feuilles ovales-elliptiques à forme de fer de lance, de 30 cm de longueur
pour 12 cm de largeur, sont généralement tronquées à la base et aériennes.", '10°', 'Moyen', 'Indifférent', '1'),

(28, 'Guimauve officinale', '28', 'Malvaceae', 'Juin-Août', "La Guimauve officinale, aussi appelée Guimauve sauvage ou Mauve
blanche, est une plante herbacée vivace de la famille des Malvacées, commune en
Europe. Elle est cultivée comme plante médicinale pour ses propriétés émollientes,
comme plante ornementale pour ses fleurs et quelquefois comme plante potagère
principalement pour ses racines.", '10°', 'Humide', 'Indifférent', '2'),

(29, 'Populage des marais', '29', 'Ranunculaceae', 'Mai-Juilet', "Le populage des marais teinte les zones humides de ses magnifiques
fleurs jaunes. Cette plante se rencontre au printemps, souvent en grosses touffes et
en grandes colonies. Elle est totalement absente du sud du département.", '10°', 'Humide', 'Indifférent', '1'),

(30, 'Erable champêtre', '30', 'Sapindaceae', 'Avril-Mai', "C'est un arbre pouvant atteindre 10 mètres à écorce gris pâle, fissurée,
à petites feuilles caduques simples à plusieurs lobes arrondis, à fleurs verdâtres
apparaissant avant les feuilles.", '10°', 'Sec', 'Indifférent', '2');


INSERT INTO utilisateur (id_utilisateur, nom_utilisateur, prenom_utilisateur) VALUES
(1, 'Friaa', 'Hadil');
(2, 'Dolbert', 'Christopher');

INSERT INTO luminosite (id_luminosite, luminosite, id_plante) VALUES
(1, 'Indifférent', '1'),
(2, 'Indifférent', '2'),
(3, 'Indifférent', '3'),
(4, 'Indifférent', '4'),
(5, 'Soleil', '5'),
(6, 'Indifférent', '6'),
(7, 'Indifférent', '7'),
(8, 'Indifférent', '8'),
(9, 'Indifférent', '9'),
(10, 'Soleil', '10'),
(11, 'Soleil', '11'),
(12, 'Indifférent', '12'),
(13, 'Indifférent', '13'),
(14, 'Indifférent', '14'),
(15, 'Indifférent', '15'),
(16, 'Indifférent', '16'),
(17, 'Indifférent', '17'),
(18, 'Indifférent', '18'),
(19, 'Ombre', '19'),
(20, 'Indifférent', '20'),
(21, 'Indifférent', '21'),
(22, 'Indifférent', '22'),
(23, 'Indifférent', '23'),
(24, 'Soleil', '24'),
(25, 'Soleil', '25'),
(26, 'Indifférent', '26'),
(27, 'Indifférent', '27'),
(28, 'Indifférent', '28'),
(29, 'Indifférent', '29'),
(30, 'Indifférent', '30');

INSERT INTO humidite (id_humidite, humidite, id_plante) VALUES
(1, 'Sec', '1'),
(2, 'Moyen', '2'),
(3, 'Moyen', '3'),
(4, 'Moyen', '4'),
(5, 'Moyen', '5'),
(6, 'Humide', '6'),
(7, 'Moyen', '7'),
(8, 'Moyen', '8'),
(9, 'Moyen', '9'),
(10, 'Sec', '10'),
(11, 'Moyen', '11'),
(12, 'Moyen', '12'),
(13, 'Moyen', '13'),
(14, 'Moyen', '14'),
(15, 'Humide', '15'),
(16, 'Moyen', '16'),
(17, 'Moyen', '17'),
(18, 'Moyen', '18'),
(19, 'Moyen', '19'),
(20, 'Humide', '20'),
(21, 'Moyen', '21'),
(22, 'Moyen', '22'),
(23, 'Moyen', '23'),
(24, 'Moyen', '24'),
(25, 'Moyen', '25'),
(26, 'Moyen', '26'),
(27, 'Moyen', '27'),
(28, 'Humide', '28'),
(29, 'Humide', '29'),
(30, 'Moyen', '30');

