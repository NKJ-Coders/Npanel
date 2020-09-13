-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 août 2020 à 08:13
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u929660141_geomerit_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `plaquette` int(11) DEFAULT NULL,
  `date_pub` int(11) DEFAULT NULL,
  `online` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id`, `id_entreprise`, `nom`, `ville`, `pays`, `adresse`, `plaquette`, `date_pub`, `online`, `logo`, `slogan`, `description`) VALUES
(1, 1, 'Direction générale', 'Douala', 'Cameroun', 'Akwa', NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `banniere`
--

CREATE TABLE `banniere` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) DEFAULT NULL,
  `texte1` text DEFAULT NULL,
  `texte2` text DEFAULT NULL,
  `texte3` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `taille` int(5) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `online` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `id_parent`, `nom`, `online`) VALUES
(1, 0, 'Instruments de mesure', 1),
(2, 0, 'Matériel en location', 1),
(3, 0, 'Niveau laser construction', 1),
(4, 0, 'Accessoires de messures', 1),
(5, 0, 'Accessoires de securité', 1),
(6, 5, 'Casques', 1),
(7, 1, 'Stations totales  ', 1),
(8, 1, 'Niveau optique de chantier', 1),
(9, 1, 'Théodolites', 1),
(10, 1, 'Scanners laser', 1),
(11, 1, 'Système GPS∕GNSS', 1),
(12, 1, 'Télémètres', 1),
(13, 1, 'Système de détection de câbles', 1),
(14, 1, 'Carnet & contrôleur', 1),
(15, 1, 'GPS de navigation', 1),
(16, 2, 'Matériel de topographie', 1),
(17, 2, 'Matériel de génie civil', 1),
(18, 2, 'Matériel de télécommunication', 1),
(19, 3, 'Laser  rotatifs', 1),
(20, 3, 'Laser cross & line', 1),
(21, 3, 'Récepteurs manuel', 1),
(22, 3, 'Laser d’égout', 1),
(23, 4, 'Batterie', 1),
(24, 4, 'Câble', 1),
(25, 4, 'Caisse et sac de transport', 1),
(26, 4, 'Stockage des données', 1),
(27, 4, 'Prismes', 1),
(28, 4, 'Odomètres & topomètres', 1),
(29, 4, 'Cannes', 1),
(30, 4, 'Adaptateurs', 1),
(31, 4, 'Cibles réfléchissantes', 1),
(32, 4, 'Jalons', 1),
(33, 4, 'Embases', 1),
(34, 4, 'Nivelles', 1),
(35, 4, 'Chargeurs', 1),
(36, 4, 'Accessoire contrôleur  & carnet  terrain', 1),
(37, 4, 'Trépieds', 1),
(38, 4, 'Accessoire pour GPS & GNSS', 1),
(39, 4, 'Mires', 1),
(40, 5, 'Balises tournantes', 1),
(41, 5, 'Ruban de balisage', 1),
(42, 5, 'Cônes de signalisation', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_closing` date DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `closing` int(11) NOT NULL DEFAULT -1,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conditionnement`
--

CREATE TABLE `conditionnement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conditionnement`
--

INSERT INTO `conditionnement` (`id`, `nom`, `online`) VALUES
(1, 'Nouveau', 1),
(2, 'Arrivage', 1),
(3, 'Promo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) DEFAULT 1,
  `id_agence` int(11) DEFAULT 1,
  `type` varchar(255) NOT NULL,
  `valeur` varchar(70) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `id_entreprise`, `id_agence`, `type`, `valeur`, `online`) VALUES
(1, 1, 1, 'Tel', '(+237) 699 877 086', 1),
(2, 1, 1, 'Email', 'geomeritsarl@gmail.com', 1),
(3, 1, 1, 'BP', '26 Douala - Cameroun', 1);

-- --------------------------------------------------------

--
-- Structure de la table `custumer`
--

CREATE TABLE `custumer` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `custumer`
--

INSERT INTO `custumer` (`id`, `nom`, `pays`, `ville`, `adresse`, `tel`, `email`, `online`) VALUES
(1, 'Guy NOBI', 'Cameroun', 'Douala', 'Akwa Ngodi', '691481493', 'nobsonguy@yahoo.fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `date_demarrage` date NOT NULL,
  `date` date NOT NULL,
  `adresse_site` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `closing` int(11) NOT NULL DEFAULT -1,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `plaquette` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(11) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT 1,
  `description` longtext DEFAULT NULL,
  `site_web` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `logo`, `plaquette`, `slogan`, `adresse`, `ville`, `pays`, `online`, `description`, `site_web`) VALUES
(1, 'Geomerit sarl', 'img/logo_geomerit.png', '', '                                                    Parceque la précision compte !!!                                            ', 'Entrée de la gare Bessengue - Douala', 'Douala', 'Cameroun', 1, 'Entreprise spécialisée dans le levé topographique aérien et terrestre. Dans le domaine du foncier et de l’immobilier, notre société accompagne les acteurs du public, du privé, et les collectivités sur tous types de projets : travaux, études d’aménagement, urbanisme…			      		\r\n				      	', 'www.geomerit.net');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`, `logo`, `online`) VALUES
(1, 'Leica', 'img/leica.png', 1),
(2, 'Thales', 'img/thales.png', 1),
(3, 'Topcon', 'img/topcon.png', 1),
(4, 'Spectra', 'img/spectra.png', 1),
(5, ' metrica ', 'img/client5.png', 0),
(6, 'AWH', 'img/client5.png', 0),
(7, 'Zagg', 'img/client5.png', 0),
(8, 'Phengta', 'img/client5.png', 0),
(9, 'Garmin', 'img/client5.png', 0),
(10, 'Kipor', 'img/client5.png', 0),
(11, 'Scheppach', 'img/client5.png', 0),
(12, 'Nikon', 'img/nikon.png', 1),
(13, 'Ruris', 'img/client5.png', 0),
(14, 'Worms', 'img/client5.png', 0),
(15, 'Benzina', 'img/client5.png', 0),
(16, 'Tristar', 'img/client5.png', 0),
(17, 'Maker', 'img/client5.png', 0),
(18, 'Mahi printer', 'img/client5.png', 0),
(19, 'Faro', 'img/client5.png', 0),
(20, 'Geomax', 'img/geomax.png', 1),
(21, 'Trimble ', 'img/trimble.png', 1),
(22, 'icon', 'img/icone.png', 1),
(23, 'Bosch', 'img/client5.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(3) NOT NULL,
  `id_prestation` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `objet` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `fonction_personne` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT 1,
  `date_message` date NOT NULL,
  `date_commande` date NOT NULL,
  `statut` int(1) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `pu` int(11) DEFAULT 0,
  `qt` int(11) NOT NULL DEFAULT 0,
  `online` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_commande`, `id_produit`, `pu`, `qt`, `online`) VALUES
(1, 1, 73, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) NOT NULL,
  `id_entreprise` int(3) NOT NULL DEFAULT 1,
  `rubrique` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `resume` longtext DEFAULT NULL,
  `date_pub` date NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `id_parent`, `id_entreprise`, `rubrique`, `description`, `image`, `video`, `resume`, `date_pub`, `online`) VALUES
(1, 0, 1, 'Présentation', '<p><strong>Géomerit sarl, société de prestations de service en topographie, cartographie aérienne et modélisation 3D, cabinet de géomètres-expert foncier / études d’aménagement – VRD.</strong></p>\n\n<p>Depuis sa création en 2006, Géomerit intervient dans tous les domaines liés à l’aménagement du territoire et au cadre de vie. Implanté à Douala, Yaoundé et Kribi, notre société effectue régulièrement des prestations au niveau local, national, et sous régional. L’entreprise s’est spécialisée dans le levé topographique aérien et terrestre. Dans le domaine du foncier et de l’immobilier, notre société accompagne les acteurs du public, du privé, et les collectivités sur tous types de projets : travaux, études d’aménagement, urbanisme… </p>\n\n<p>Notre expertise et notre réactivité sont basées sur une équipe forte de 2 géomètres-experts, 3 ingénieurs et 15 techniciens, un parc de matériels et de logiciels performants, et une activité R&D en partenariat avec des laboratoires. </p>\n\n<p>Notre pluridisciplinarité nous permet d’être efficaces aussi bien sur des prestations courantes (bornages, plans de voirie et de récolement de réseaux…), que sur des projets plus complexes nécessitant de faire appel à des compétences variées en topographie (prise de vue aérienne par drone, levé topographique au sol. </p>\n\n<p>Nos ingénieurs et géomètres topographes étudieront avec vous les besoins exprimés et vous proposeront une solution adaptée, à votre cahier des charges, dans le respect des règles de l’art et de nos procédures de Qualité. </p>\n', NULL, NULL, NULL, '0000-00-00', 1),
(2, 0, 1, 'Nos objectifs', '\n<p>\n<strong>GEOMERIT SARL</strong>, opérationnelle depuis Mai 2006, a pour objectifs de: \n<ul style=\'list-style-type:circle;\'>\n<li><i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Enrichir et diversifier qualitativement et quantitativement les matériels du secteur de la construction au Cameroun et dans la région </li>\n<li><i style=\'color:#3498DB\'  class=\"fa fa-check\" aria-hidden=\"true\"></i>  Renforcer la maintenance in-situ des matériels de topographie à travers la formation des opérateurs (techniciens) de terrain </li>\n<li><i style=\'color:#3498DB\'  class=\"fa fa-check\" aria-hidden=\"true\"></i> Appuyer techniquement l’ensemble des projets de croissance directe ou différé des populations camerounaises </li>\n<li><i style=\'color:#3498DB\'  class=\"fa fa-check\" aria-hidden=\"true\"></i> Encadrer les jeunes diplômés et assurer le transfert mutuel des connaissances et des compétences entre les diverses générations </li>\n</ul>\n', NULL, NULL, NULL, '0000-00-00', 1),
(3, 0, 1, 'Mot du Ceo', '	uidsuiduiqsuiqsui				 ', NULL, NULL, NULL, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id` int(3) NOT NULL,
  `id_parent` int(3) DEFAULT NULL,
  `id_entreprise` int(3) DEFAULT 1,
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `icone2` varchar(255) DEFAULT NULL,
  `plaquette` varchar(255) NOT NULL,
  `resume` longtext NOT NULL,
  `refference` varchar(255) NOT NULL,
  `e_service` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `duree` time NOT NULL,
  `prix` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_pub` date DEFAULT NULL,
  `online` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `id_parent`, `id_entreprise`, `titre`, `description`, `icone`, `icone2`, `plaquette`, `resume`, `refference`, `e_service`, `image`, `video`, `duree`, `prix`, `type`, `date_pub`, `online`) VALUES
(1, 0, 1, 'Topographie', 'L’entreprise s’est spécialisée dans le levé topographique aérien et terrestre. Dans le domaine du foncier et de l’immobilier, notre société accompagne les acteurs du public, du privé, et les collectivités sur tous types de projets :', NULL, NULL, '', 'Nous intervennons et innovons dans les domaines de la topographie terrestre et la cartographie aérienne par photogrammétrie, en intégrant les nouvelles technologies.', '', 0, 'img/service/Topographie__Cartographie.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(2, 0, 1, 'Genie civil', '         ', NULL, NULL, '', 'Nous réalisons des études, des travaux routiers, des projets dans le bâtiments comme de construction de bâtiments et de petits ouvrages en BA.', '', 0, 'img/service/Genie_civil__BTP.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(3, 0, 1, 'Télécommunication', '\nSous l’encadrement d’un Chargé d’Affaires, des équipes internes ou sous-traitantes\nréférencées réalisent les types de travaux en radiocommunication :<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>      Les sites pylônes en green field avec Shelter<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>      Les sites sur terrasse en milieu urbain, <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>       Les sites Indoors (galeries commerciales, bureaux, espaces publics…)<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>       L’optimisation de sites existants (passage UMTS, DCS, rajout de secteurs…)<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>       Mise en place des infrastructures des faisceaux hertziens<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>       L’intégration de sites existants<br><br>\n', NULL, NULL, '', ' Pour la filière TELECOM, nous assurons un service de qualité et de précision dans les\ndomaines de la radiocommunication, de la fibre optique, et  faisceaux hertziens.', '', 0, 'img/service/Telecommunication.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(4, 1, 1, 'Lévés aérients et drônes', 'Fort d’une expérience de plus de 11 ans en topographie aérienne et en cartographie aérienne, la société Géomerit Sarl vous accompagne dans vos projets de prises de vue pour vous proposer la meilleure prestation technique et économique. Grâce à notre équipe d’ingénieurs, techniciens et pilotes hautement qualifiés spécialistes de la prise de vue aérienne, les plans de vol sont préparés avec soin de façon à garantir la qualité et la précision de la prestation en maîtrisant les coûts.<br><br>\n <h3> Quelques applications de la prise de vue aérienne </h3><br>\nLes photographies aériennes réalisées par notre bureau d’étude sont généralement destinées à la création de cartographie\nLes applications sont nombreuses :<br><br>\n<ul>\n<li>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  État des lieux exhaustif d’un territoire : Gestion du territoire au travers de la création et de la mise à jour d’un SIG (Système d’Information Géographique). <br><br>\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Hydrologie et barrages : Études préalables d’impact, mesure de volumes potentiels, hauteur de chute, simulations de montée des eaux, ruissellement, bassins versants. <br><br>\n\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Carrières et mines : suivi de l’exploitation, calcul des cubatures, réhabilitation du site. <br><br>\n\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Études environnementales : impact écologique d’un projet, étude d’aménagement, relevés d’urgence… <br><br>\n\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n   Foresterie et agriculture : champ d’irrigation, inventaire forestier… \n<br><br>\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n   Étude d’infrastructures : Aménagement de territoire : génie civil, BTP, architecture, urbanisme <br><br>\n\n</li>\n<li>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Transport : routier, ferroviaire, fluvial… transport d’énergie, lignes à haute tension, pipelines, installation de la fibre optique… <br><br>\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Risques naturels : plans de prévention du risque d’inondation (PPRI), surveillance de sites (glissements de terrain, érosion…), risques gravitaires (chutes de blocs), trajectographie, Outil de texturation (« mappage ») et colorisation d’un modèle 3D. <br><br>\n</li>\n\n<li>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n  Archivage d’un état : Garder une trace juridiquement opposable d’un étant antérieur, état des lieux après un événement majeur (catastrophe naturelle…). \n</li>\n\n\n\n</ul>\n<br><br><h3>Applications de la photogrammétrie aérienne </h3><br>\nParticulièrement adaptée aux grandes surfaces ou des zones difficiles d’accès, la photogrammétrie aérienne produit des plans topographiques et/ou des orthophotoplans à toutes échelles, du 1/25 000 au 1/100.\nLa cartographie numérique qui en résulte trouve de très nombreuses applications :\n<br><br><i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n État des lieux exhaustif d’un territoire : \n SIG (Système d’information géographique); MNE (Modèle numérique d’élévation); MNT (Modèle numérique de terrain); MNC (Modèle numérique de canopée). <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Hydrologie et barrages : Plans topographiques ; Études préalables d’impact ; Mesure de la hauteur de chute ; Mesure des volumes de réservoirs ; Simulations de montée des eaux ; Capacité du bassin versant, ruissellement…  <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Étude d’infrastructures : Calcul de surfaces et de volumes ; Aménagement de territoire (génie civil, BTP, architecture, urbanisme) ; Plan de corps de rue simplifié (PCRS) ; Voies de communication (routes, autoroutes, voies ferrées, canaux…) ; Transport d’énergie et de données numériques (lignes électriques, fibre optique) ; Énergies renouvelables (éoliennes, panneaux solaires) ; Aménagement de la montagne ; Pipelines… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Risques naturels : Risques gravitaires (chutes de blocs, trajectographie) ; Plans de prévention du risque d’inondation (PPRI) ; Suivi de déformation (mouvements de terrain, transport de matériaux, érosion de falaises…) ; Suivi de glaciers, corridors d’avalanches ; Relevés d’urgence suite à un événement majeur… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Carrières et mines : Suivi de l’exploitation ; Calcul des cubatures ; État des lieux ; Réhabilitation du site… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Études environnementales : Mesure de l’impact écologique d’un projet ; Conseil, expertise et simulation de projets d’aménagements… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Foresterie et agriculture : Champ d’irrigation possible ; Détection des essences végétales ; Inventaire forestier… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Archéologie et patrimoine : État des lieux ; Suivi de chantier ; Modélisation 3D… \n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Outil de texturation (« mappage ») et colorisation : Association d’une photographie à un MNE (Modèle Numérique d’Élévation) pour un rendu plus réaliste de la scène. <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>\n Archivage d’un état :  Garder une trace juridiquement opposable d’un étant antérieur ; État des lieux après une catastrophe naturelle… <br><br>\n\n\n<br><br><h3>Applications de l’orthophotoplan  </h3><br>\nL’ortho photo est souvent intégré à un SIG dans un format standard (Géo TIFF, ECW/ERS.) car il est particulièrement intéressant pour visualiser l’occupation et la nature d’une surface. Et comme on dit qu’une image vaut mille mots, les orthophotoplans sont aussi souvent utilisés comme supports de communication:<br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> État des lieux exhaustif d’un territoire : Constitution de systèmes de représentation topographiques  tels que SIG (Système d’Information Géographique) et Création de maquette… <br><br>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Étude d’infrastructures : Aménagements routiers, ferroviaires ou fluviaux ; Transport d’énergie ; Installation de la fibre optique ou de lignes à haute tension ; Pipelines… <br><br>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Risques naturels : PPRI ; Risques gravitaire, érosion… <br><br>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Hydrologie et barrages :  Plans hydrographiques ; Études d’impact, études environnementales ;  Simulation de montée des eaux… <br><br>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Archivage d’un état : Après un événement majeur (catastrophe naturelle) ; Garder une trace juridiquement opposable d’un état antérieur. <br><br>\n\n\n', NULL, NULL, '', '         ', '', 0, 'img/service/Leves_aerients_et_drones.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(5, 1, 1, 'Lévés térrestres', '<p>\nDans le domaine de la topographie terrestre, notre cabinet de géomètres-experts a accumulé, en 13 ans d’existence, une expérience très importante portant sur de multiples projets correspondant à des problématiques très différentes les unes des autres :<br><br>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> Projets d’aménagements du territoire émanant de collectivités publiques ou de bureaux d’études<br>\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> États des lieux topographiques divers requis pour des études techniques nécessitant de connaître la morphologie du terrain naturel et les infrastructures existantes<br>\n\n <i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>Relevés adaptés à des besoins spécifiques en lien avec le patrimoine ou l’architecture, l’hydrographie, l’industrie, le BTP, etc.\n\n</p><br><br>\n\n<p>\nLa topographie classique dite « terrestre » constitue souvent la bonne réponse aux besoins exprimés en matière de plans nécessaires à la réalisation d’un projet d’aménagement ou de construction.\n</p><br><br>\n<p>\n\nNos moyens importants en matériel et en personnel nous rendent particulièrement performants sur des appels d’offres nécessitant de travailler dans des délais serrés, tout en étant capable de mobiliser les ressources et les équipements néccessaires.\n</p><br><br>\n\n<p>\nPrestataire présentant une polyvalence rare, Géomerit sarl peut répondre à des demandes portant sur des besoins aussi variés que :<br>\nLa réalisation de <strong>levés topographiques</strong>, destinés à produire des plans, de type voirie ou terrain naturel, en milieu rural ou urbain, constituant le support de projets d’aménagements, L’acquisition 3D d’objets, L’établissement de <strong>canevas géodésiques</strong>, dédiés au géo référencement de données topographiques ou tonométriques, par la mise en place et la détermination de points de référence XY et Z, L’auscultation tonométrique, consistant à assurer le suivi des déformations géométriques d’un ouvrage d’art, d’une structure ou d’un site naturel instable, avec un haut niveau de fiabilité et de précision, La <strong>géolocalisation de réseaux</strong>, afin de détecter et géo référencer la position de canalisations enterrées<br><br>\n\nPour des prestations complexes nécessitant des relevés à différentes échelles, suivant différents niveaux de densité, ou devant s’affranchir de contraintes d’accès ou de visibilité, Géomerit peut compléter ses levés terrestres à l’aide de techniques de cartographie aérienne, comme la photogrammétrie (par drone).\n</p>', NULL, NULL, '', '         ', '', 0, 'img/service/Leves_terrestres.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(6, 1, 1, 'Geometre-Expert & Foncier', '<p>L’établissement des plans et des divers documents délimitant les propriétés foncières relève de la compétence du géomètre-expert, seul habilité à « dire la propriété ». Il est un praticien du droit, également expert de la mesure, capable de garantir les limites et les droits attachés à la propriété et de vous apporter conseil et assistance. Cette expérience de plus de 13 ans de services en travaux foncier dans la région nous a apporté une connaissance très fine du tissu local, atout indéniable lorsqu’il s’agit de travailler sur un projet où des problématiques liées à des communes ou à des acteurs spécifiques ont de fortes chances d’être soulevées. Nous effectuons très régulièrement des prestations en foncier en partenariat avec des géomètres assermentés pour des demandes émanant : <p><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>  De collectivités territoriales <br><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>   D’acteurs du public <br><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>    D’acteurs du privé (particuliers, promoteurs immobiliers, etc.) <br><br>\r\n\r\n<p>Le service foncier de Géomerit regroupe des géomètres-experts et des techniciens spécialisés dans le domaine des travaux fonciers et de la topographie. L’importance de ses ressources lui permet de garantir réactivité et qualité, dans le respect des délais impartis. Il est appuyé par un service d’études VRD lui permettant de proposer des prestations complètes intégrant la conception et le suivi de la réalisation de travaux d’aménagement et de paysage, L’entreprise peut donc vous accompagner à tous les niveaux de votre projet foncier et immobilier : <p><br>\r\n\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>     Travaux fonciers : lotissement, bornage et divisions de terrains, <br><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>     Topographie : levés de terrain et de bâtiments, plans de récolement, DOE  <br><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>     Opérateur foncier : négociation des acquisitions et suivi des dossiers <br><br>\r\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i>     Études d’aménagement : conception et viabilisation des terrains, consultation des entreprises (DCE) et suivi des travaux <br><br>\r\n', NULL, NULL, '', '         ', '', 0, 'img/service/Geometre-Expert__Foncier.png', NULL, '00:00:00', 0, 'Service', NULL, 1),
(7, 2, 1, 'bâtiment', '<p> Les Compétence de Geomerit Sarl en bâtiments font de notre entreprise une référence incontournable pour la réalisation d’ouvrage de qualités. Nous apportons une réponse personnalité à tous les projets de construction ou de réhabilitation des bâtiments publics et privés.Un bureau d’études, parc matériel adapté et varié, personnel qualifié nous assure une indépendance et une parfaite autonomie. Nos travaux se font dans un cadre réglementaire avec les principales exigences afférentes à des principes généraux de conception des espaces et de sécurité.</p>', NULL, NULL, '', '        ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(8, 2, 1, 'La Conception et Dessins 3D', '<p>La conception de tout ouvrage appelle à la prise en compte d’une série d’éléments tant techniques qu’humains. Rappelons à ce stade qu’il convient de concevoir une architecture qui répond : à la fonction, aux besoins des usagers, à la zone d’implantation, au climat afin que l’ouvrage soit durable.</p><br><br>\n<p>\nUne réflexion devrait être suscitée au plus tôt, tant avec le concepteur qu’avec le bénéficiaire sur l’entretien et la maintenance du futur bâtiment. Ces plans prennent en compte les souhaits d’aménagement, les besoins de surface, mais aussi des contraintes règlementaires d’urbanisme et normes de construction en vigueur ainsi que les aspects esthétiques et financiers. A la phase de conception, deux études préalables sont nécessaires :<br><br></P>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong> ETUDE ENVIRONNEMENTALE</strong>\nCette étude permet le respect et la préservation de l’environnement tout en reflétant la culture dans laquelle le bâtiment s’inscrit et son rapport à la modernité ainsi que les contraintes règlementaires d’urbanisme et normes de construction en vigueur;<br><br>\n\n\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong> ETUDE ARCHITECTURALE</strong> \nA la fin de cette étude, il sera dressé les plans du projet en image 2D et 3D.\n\n\n\n\n', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(9, 2, 1, 'Etudes techniques', '   <p> \n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong> ETUDE GEOTECHNIQUE </strong>: Pour mener à bien la réalisation d’un ouvrage, une étude du sol par sondage mené par des géotechniciens permettra de déterminer la capacité portante (résistance) du sol et la profondeur à atteindre. Un rapport est réalisé à la fin de cette étude géotechnique pour exploitation des données qui seront prises en compte dans le dimensionnement de l’ouvrage.\n </p><br><br>\n<p>\n<i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong>ETUDE STRUCTURALE</strong>: Il s’agit du :<br><br>\n1. <i>Pré dimensionnement</i> de la structure : il nous permet de définir et de choisir les sections de béton des éléments porteurs de la structure à dimensionner ;<br><br>\n2. <i>Dimensionnement de l’ouvrage </i>: Il aura pour but de déterminer la section d’acier nécessaire pour chaque élément de la structure porteuse dimensionnée.\n\n</p>\n', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(10, 2, 1, 'Evaluation', '<p>\n       <i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong>EVALUATION DES PRIX</strong>: Elle se fait à travers l’élaboration d’un devis quantitatif et estimatif qui tiendra compte des quantités de matériaux à mettre en œuvre, du matériel et de la main d’œuvre à utiliser pour la réalisation de l’ouvrage.\n<p>\n<p><br><br>\n      <i style=\'color:#3498DB\' class=\"fa fa-check\" aria-hidden=\"true\"></i> <strong>EVALUATION DU TIMING</strong>: Il est important de ressortir un planning des travaux de tout ouvrage à réaliser. Celui-ci nous permettra de dégager : <br><br>\n1. La durée du chantier exprimée généralement en (jours ou en mois);<br>\n2. L’effectif alloué pour chaque tâche du projet à réaliser;<br>\n3. Le coût de main d’œuvre : il sera étalé de manière hebdomadaire ou mensuelle selon les exigences de l’entreprise afin de payer ses ouvriers;<br>\n4. Une éventuelle anticipation sur le retard et des potentielles difficultés à rencontrer durant la phase de réalisation;\n\n<p>', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(11, 3, 1, 'Radiocommunication', ' <p>Vous avez besoin de communiquer dans des zones non couvertes par le signal GSM et dans les chantiers tout en souhaitant maintenir un réseau de communication stable et facilement accessible. La radiocommunication est la solution qu’il vous faut. C’est une communication vocale ou data par les ondes hertziennes et selon des plans de fréquences précis. Nous vous  proposons  une offre capable de couvrir l’ensemble de vos besoins.<br><br>\nIls s’agit de :<br><br>\n1.	Ingénierie radio <br>\n2.	Conception de sites <br>\n3.	Bureau d’étude et étude technique <br>\n4.	 Réalisation du Génie civil <br>\n5.	Montage mâts, pylônes, tructures métalliqueses <br>\n6.	Pose antennes et câbles coaxiaux <br>\n7.	Aménagement des locaux techniques <br>\n8.	Travaux électriques <br>\n9.	Mesures radio <br>\n10.	Réception et audit <br>\n11.	Commisionning des équipements <br>\n12.	Mise en sécurités des sites <br>\n13.	Maintenance Curative et Préventive <br>\n</p>\n', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(12, 3, 1, 'Telediffusion', '         ', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(13, 3, 1, 'Multimedia', '         ', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(14, 3, 1, 'Fibre Optique', '         ', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1),
(15, 3, 1, 'Sécurité', '         ', NULL, NULL, '', '         ', '', 0, '', NULL, '00:00:00', 0, 'Service', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(3) NOT NULL,
  `id_cat` int(3) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `image3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `marque` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantite` int(50) DEFAULT NULL,
  `conditionnement` varchar(255) DEFAULT NULL,
  `disponible` int(255) DEFAULT 1,
  `description` longtext CHARACTER SET latin1 DEFAULT NULL,
  `online` tinyint(1) DEFAULT 1,
  `vitrine` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `id_cat`, `image1`, `image2`, `image3`, `nom`, `marque`, `quantite`, `conditionnement`, `disponible`, `description`, `online`, `vitrine`) VALUES
(1, 7, 'images/shop/stationtotale_leica_ts60.jpg', NULL, NULL, 'Station totale leica ts60', 'Leica', NULL, NULL, 1, 'La seule station totale au monde qui offre une excellente précision dans les conditions les plus difficiles; le Leica Nova TS60 est conçu pour la plus grande précision dans la gamme «submillimètre» et «sous-seconde». Découvrez le sens d\'une précision sophistiquée<br><br>\n\n<strong>Logiciel convivial</strong><br>\nLe Nova TS60 est livré avec le logiciel révolutionnaire  Leica Captivate , qui vous permet de transformer des données complexes en modèles 3D les plus réalistes et réalisables. Avec les applications conviviales et la technologie tactile familière, toutes les formes de données de mesure et de conception peuvent être visualisées dans toutes les dimensions. Captivate couvre des segments et des applications de l\'industrie en un rien de plus qu\'un simple glissement, que vous travailliez avec GNSS, des stations totales ou les deux.</br></br>\n\n<strong>Des possibilités infinies</strong><br>\nCaptivate s\'occupe de la capture et de la modélisation des données sur le terrain et avec  Leica Infinity,  vous traitez les données lorsque vous revenez au bureau. Un transfert de données fluide garantit que le projet se déroule comme prévu. Captivate et Infinity travaillent ensemble pour lier les mesures précédentes et modifier les données de projet plus rapidement et plus efficacement.</br></br>\n\n<strong>ATRplus</strong><br>\nATRplus, développé à partir de cinq générations d\'optimisation, fait passer les performances d\'automatisation connues et fiables au niveau supérieur. Cette technologie supérieure maximise la capacité de votre station totale à rester concentré sur votre cible et à ignorer les autres distractions sur le terrain. Le Nova TS60 apprend à connaître l\'environnement, fournit des positions précises même dans des applications difficiles et dynamiques, et dispose du verrouillage le plus rapide en cas de ligne de vue interrompue.', 1, 1),
(2, 7, 'images/shop/stationtotale_leica_ts16.jpg', NULL, NULL, 'Station totale leica ts16', 'Leica', NULL, NULL, 1, '<p>Station totale Leica Viva TS16. La première station totale d\'auto-apprentissage. S\'adapte automatiquement aux conditions environnementales telles que la pluie, le brouillard, la poussière et les reflets du soleil pour des performances de mesure optimales. Reconnaît et ignore les prismes et réflexions sans importance. Les logiciels, batteries, chargeurs et autres accessoires ne sont pas inclus. Pour plus d\'informations ou une offre adaptée, veuillez contacter l\'un de nos spécialistes<br>\nStation totale pour un homme<br>\nFonctionne sur le logiciel Leica Captivate<br>\nCompensateur à deux axes<br>\nTrouvez rapidement une cible avec PowerSearch<br>\nFaisceau de mesure visible avec petit spot<br>\nApplications fiables </p><br><br>\n<p>\n<strong> Logiciel Captivate convivial: </strong> </br>\nLa station totale Leica Viva TS16 est livrée avec le logiciel révolutionnaire Captivate, qui vous permet de transformer des données complexes en modèles 3D les plus réalistes et réalisables. Avec les applications conviviales et la technologie d\'écran tactile familière, toutes les formes de données mesurées et de données de conception peuvent être affichées dans toutes les dimensions. Leica Captivate couvre les segments de l\'industrie et les applications en un rien de plus qu\'un simple glissement, que vous travailliez avec GNSS, des stations totales ou les deux. \n</p><br><br>\n<p>\n<strong> Un pont entre le terrain et le bureau: </strong>  </br>\nAlors que Leica Captivate capture et modélise les données sur le terrain, Leica Infinity traite les informations au bureau. Un transfert de données fluide garantit que le projet continue de fonctionner dans les délais. Leica Captivate et Leica Infinity travaillent ensemble pour fusionner les données de mesure précédentes et éditer des projets plus rapidement et plus efficacement.\n</p></br></br>\n<p>\n<strong >À un clic du support:</strong ></br>\nAvec le programme Active Customer Care (ACC), vous n\'êtes qu\'à un clic d\'un réseau mondial de professionnels expérimentés qui peuvent vous guider de manière experte à travers n\'importe quel problème. Éliminez les retards avec un service technique supérieur, terminez les projets plus tôt avec d\'excellents conseils et évitez les visites sur site coûteuses avec le service en ligne pour envoyer et recevoir des données directement sur le terrain. Contrôlez vos coûts avec un forfait de service à la clientèle personnalisé, vous donnant la tranquillité d\'esprit que vous serez aidé à tout moment, n\'importe où\n</p>\n', 1, 0),
(3, 7, 'images/shop/stationtotale_robotique_leica_ts13.jpg', NULL, NULL, 'Station totale robotique Leica TS13', 'Leica', NULL, NULL, 1, '<p><strong>Une nouvelle norme pour une recherche efficace</strong><br>\n\nLe Leica TS13 est une station totale évolutive de milieu de gamme, alimentée par le logiciel Leica Captivate et pouvant être connectée au contrôleur de terrain CS20.<br>\nLe TS13 fournit une solution rapide, fiable et efficace adaptée aux besoins de l\'utilisateur pour mesurer et définir des points. Équipé de la technologie de reconnaissance automatique de cible (ATR) et en option avec verrouillage de cible et Speed Search pour trouver et verrouiller rapidement des prismes, il fournit des mesures de cible précises. Associé au logiciel de terrain Leica Captivate, le TS13 offre le codage et le travail en ligne les plus simples et les plus productifs.</br></p>\n<p><br><br>\n<strong>Reliez le terrain au bureau</strong><br>\nLe TS13 fonctionne avec le logiciel de terrain révolutionnaire Leica Captivate, qui convertit les données complexes en modèles 3D les plus réalistes et réalisables. Il couvre les industries et les applications avec un peu plus qu\'un simple glissement, que vous travailliez avec GNSS, des stations totales ou les deux.<br>\nUn transfert de données en douceur maintient le projet dans les délais. Captivate et le logiciel bureautique Leica Infinity travaillent ensemble pour agréger les données d\'enquête antérieures et modifier les projets plus rapidement et plus efficacement.\n</p>\n\n', 1, 1),
(4, 7, 'images/shop/stationtotale_leica_flexline_ts03.jpg', NULL, NULL, 'Station totale leica flexline ts03', 'Leica', NULL, NULL, 1, '<p>Une station totale manuelle classique pour les tâches de mesure standard, qui vous permet d\'effectuer des tâches de recherche et de mise en page facilement et efficacement. <br><br>\nLa nouvelle série Leica FlexLine est basée sur un concept éprouvé qui a révolutionné le monde de la mesure et de la mesure depuis près de 200 ans. Contrairement à toute autre station totale sur le marché, les stations totales manuelles de Leica Geosystems se concentrent sur la fourniture de la plus haute qualité, du coût total de possession le plus bas et de la durabilité la plus longue de l\'industrie, permettant aux utilisateurs de travailler avec des solutions ciblées pour les résultats de performance. <br><br>\nLe TS03 est équipé du logiciel Leica FlexField, un logiciel intuitif, facile à utiliser et bien connu. Les workflows guidés et les graphiques et icônes faciles à comprendre garantissent une faible courbe d\'apprentissage lorsque vous travaillez sur le terrain. Le logiciel ne nécessite plus l\'interprétation des valeurs mesurées ou du texte et garantit un fonctionnement plus rapide et plus facile lorsque vous en avez besoin. Avec son système de mesure de distance précis, vous pouvez mesurer à la fois sur des prismes et des surfaces.</p><br><br>\n\n<p><strong>Travailler plus vite</strong><br>\n\nMesurez plus de points par jour grâce à des procédures de mesure et d\'implantation plus rapides (lecteurs sans fin, touche de déclenchement, lecteurs des deux côtés, EDM ponctuel et plus) pris en charge par notre logiciel FlexField facile à utiliser et fiable. Accélérez votre courbe d\'apprentissage sur site, profitez d\'une grande ergonomie et de mesures fiables. Réduisez les erreurs et retravaillez.</p><br><br>\n<p><strong>Utilisez-le sans aucun problème</strong><br>\nAugmentez la productivité et minimisez les temps d\'arrêt en vous appuyant sur des outils qui fonctionnent facilement et sont fournis avec un réseau mondial de service et d\'assistance.</p><br><br>\n<p><strong><br> Choisissez des produits faits pour durer</strong><br>\n\nMême après des années d\'utilisation dans des conditions difficiles (comme la boue, la poussière, la pluie battante, la chaleur et le froid extrêmes), FlexLine fonctionne toujours avec la même précision et fiabilité.</p><br><br>\n<p><strong><br>\nContrôlez votre investissement</strong><br>\n\nLa qualité de l\'instrument est notre norme depuis près de 200 ans, vous pouvez donc compter sur un investissement moindre sur toute la durée de vie de l\'instrument et sans vous soucier des coûts imprévus.</p>\n', 1, 0),
(5, 7, 'images/shop/stationtotale_leica_flexline_ts07.jpg', NULL, NULL, 'Station totale leica flexline ts07', 'Leica', NULL, NULL, 1, 'Une station totale manuelle qui vous permet d\'effectuer facilement et efficacement des missions précises de sondage et d\'implantation à moyenne et grande échelle.<br><br>\r\nLe TS07 est équipé du logiciel Leica FlexField, un logiciel intuitif, facile à utiliser et bien connu. Les workflows guidés et les graphiques et icônes faciles à comprendre garantissent une faible courbe d\'apprentissage lorsque vous travaillez sur le terrain. Le logiciel ne nécessite plus l\'interprétation des valeurs mesurées ou du texte et garantit un fonctionnement plus rapide et plus facile lorsque vous en avez besoin. Avec son système de mesure de distance précis, vous pouvez mesurer à la fois sur des prismes et des surfaces.<br><br>\r\nLe TS07 propose en option la première fonction AutoHeight au monde. AutoHeight permet à l\'instrument de mesurer, lire et ajuster automatiquement la hauteur de l\'instrument. Évitez les efforts manuels fastidieux et éliminez les erreurs critiques lors de la configuration de l\'instrument lorsque cette fonction révolutionnaire utilise un laser d\'instrument pour mesurer au sol et transmet automatiquement la mesure au logiciel.<br><br><br>\r\n\r\n\r\n<strong>Travailler plus vite</strong><br>\r\n\r\nMesurez plus de points par jour grâce à des procédures de mesure et d\'implantation plus rapides (lecteurs sans fin, touche de déclenchement, lecteurs des deux côtés, EDM ponctuel et plus) pris en charge par notre logiciel FlexField facile à utiliser et fiable. Accélérez votre courbe d\'apprentissage sur site, profitez d\'une grande ergonomie et de mesures fiables. Réduisez les erreurs et retravaillez. .<br><br><br>\r\n\r\n<strong>Utilisez-le sans aucun problème</strong><br>\r\n\r\nAugmentez la productivité et minimisez les temps d\'arrêt en vous appuyant sur des outils qui fonctionnent facilement et sont fournis avec un réseau mondial de service et d\'assistance. .<br><br><br>\r\n<strong>Choisissez des produits faits pour durer</strong><br>\r\n\r\nMême après des années d\'utilisation dans des conditions difficiles (comme la boue, la poussière, la pluie battante, la chaleur et le froid extrêmes), FlexLine fonctionne toujours avec la même précision et fiabilité. <br><br><br>\r\n<strong>Contrôlez votre investissement</strong><br>\r\n\r\nLa qualité de l\'instrument est notre norme depuis près de 200 ans, vous pouvez donc compter sur un investissement moindre sur toute la durée de vie de l\'instrument et sans vous soucier des coûts imprévus.\r\n', 1, 1),
(6, 7, 'images/shop/stationtotale_leica_flexline_ts10.jpg', NULL, NULL, 'Station totale leica flexline ts10', 'Leica', NULL, NULL, 1, 'Le Leica TS10 est une station totale manuelle haut de gamme, qui vous permet d\'effectuer nos tâches d\'enquête exigeantes avec Leica Captivate Software. .<br><br>\r\n \r\nLe TS10 propose en option la première fonction AutoHeight au monde. AutoHeight permet à l\'instrument de mesurer, lire et ajuster automatiquement la hauteur de l\'instrument. Évitez les efforts manuels fastidieux et éliminez les erreurs critiques lors de la configuration de l\'instrument lorsque cette fonction révolutionnaire utilise un laser d\'instrument pour mesurer au sol et transmet automatiquement la mesure au logiciel. .<br><br>\r\n \r\nLe TS10 est équipé du logiciel de terrain Leica Captivate, un progiciel complet basé sur des applications. Ce logiciel intuitif et familier vous aide à capturer encore plus de points qu\'auparavant. Vous pouvez également vous connecter au flux de données 3D moderne et aux routines de contrôle qualité et de contrôle strictes. .<br><br>\r\n \r\nDésormais doté d\'un accès Internet mobile en option, le TS10 se connecte au bureau pour un flux de données transparent et le service et l\'assistance mondial de confiance de Leica Geosystems sur simple pression d\'un bouton. Avec le programme Active Customer Care et le portail client, les utilisateurs ont accès aux dernières mises à jour logicielles, au service et à l\'assistance, ainsi qu\'à MySecurity. Lorsque mySecurity est activé, le mécanisme de verrouillage garantit que l\'appareil est éteint et ne peut plus être utilisé. .<br><br>\r\n\r\n\r\n<strong>Travailler plus vite</strong><br>\r\nMesurez plus de points par jour grâce à des procédures de mesure et d\'implantation plus rapides (lecteurs sans fin, touche de déclenchement, lecteurs des deux côtés, EDM ponctuel et plus) pris en charge par notre logiciel FlexField facile à utiliser et fiable. Accélérez votre courbe d\'apprentissage sur site, profitez d\'une grande ergonomie et de mesures fiables. Réduisez les erreurs et retravaillez. .<br><br>\r\n \r\n<strong>Utilisez-le sans aucun problème</strong><br>\r\nAugmentez la productivité et minimisez les temps d\'arrêt en vous appuyant sur des outils qui fonctionnent facilement et sont fournis avec un réseau mondial de service et d\'assistance. .<br><br>\r\n \r\n<strong>Choisissez des produits faits pour durer</strong><br>\r\nMême après des années d\'utilisation dans des conditions difficiles (comme la boue, la poussière, la pluie battante, la chaleur et le froid extrêmes), FlexLine fonctionne toujours avec la même précision et fiabilité. .<br><br>\r\n<strong>Contrôlez votre investissement</strong><br>\r\nLa qualité de l\'instrument est notre norme depuis près de 200 ans, vous pouvez donc compter sur un investissement moindre sur toute la durée de vie de l\'instrument et sans vous soucier des coûts imprévus. .<br><br>\r\n \r\n<strong>Profitez de la connectivité mobile</strong><br>\r\nGrâce à l\'accès Internet mobile en option, vous pouvez partager vos données beaucoup plus rapidement en ligne, concevoir des données de conception de vos concepteurs et techniciens sur site et utiliser les services Leica Geosystems tels que Leica Exchange ou Leica Active Assist.<br><br>\r\n \r\n<strong>Gagnez du temps avec AutoHeight</strong><br>\r\nGrâce à cette fonction révolutionnaire, votre TS10 peut mesurer, lire et régler automatiquement sa propre hauteur. Cette fonctionnalité minimise les erreurs et accélère le processus d\'installation sur site.\r\n\r\n', 1, 0),
(7, 7, 'images/shop/leicaicr62,_station_totale_robotique_icon_2_pouces.jpg', NULL, NULL, 'Leica icr62, station totale robotique icon 2 pouces', 'Icône', NULL, NULL, 1, 'La station totale robotique Leica iCON iCR62 a une précision angulaire élevée de 2 \". En raison de son fonctionnement manuel, elle est idéale pour les dimensions de construction et d\'infrastructure. L\'instrument est également adapté pour la commande de machine 3D. Simplifiez votre travail sur le chantier avec ce total innovant Station avec son système de suivi de haute qualité Le logiciel iCONstruct est adapté à presque tous les travaux de dimensionnement liés à la construction et aux infrastructures. <br><br>\r\nConfiguration du pilote - détermination entièrement automatique de l\'emplacement (en option)<br>\r\nCube Search - limite la zone de recherche, ce qui augmente la recherche du prisme (facultatif)<br>\r\nAccrochage cible - ignore les autres prismes, verrouille uniquement votre cible (facultatif)<br>\r\nPrise en charge ATACK pour PaveSmart 3D<br>\r\nConnexion avec le champ de disposition AutoDesk BIM possible<br>\r\n', 1, 0),
(8, 7, 'images/shop/leicaicr65,_station_totale_robotique_icon_5_pouces.jpg', NULL, NULL, 'Leica icr65, station totale robotique icon 5 pouces', 'Icône', NULL, NULL, 1, 'La station totale robotique Leica iCON iCR65 est suffisamment précise pour la plupart des projets. En raison de son fonctionnement manuel, il est idéal pour les dimensions de la construction et de l\'infrastructure, l\'instrument est également adapté au contrôle de machine 3D. Simplifiez votre travail sur le chantier avec cette station totale innovante avec son système de suivi de haute qualité. Le logiciel iCONstruct est adapté à presque tous les travaux de dimensionnement liés à la construction et aux infrastructures. <br><br>\r\n\r\nPolyvalent et extrêmement efficace, vous récupérez rapidement l\'investissement! <br><br>\r\n\r\nConfiguration du pilote - détermination entièrement automatique de l\'emplacement (en option)<br>\r\nCube Search - limite la zone de recherche, ce qui augmente la recherche du prisme (facultatif)<br>\r\nAccrochage cible - ignore les autres prismes, verrouille uniquement votre cible (facultatif)<br>\r\nPrise en charge ATACK pour PaveSmart 3D\r\n<br>\r\nConnexion avec le champ de disposition AutoDesk BIM possible<br>\r\n', 1, 0),
(9, 7, 'images/shop/leicaicr52,_station_totale_robotique_icon_2_pouces.jpg', NULL, NULL, 'Leica icr52, station totale robotique icon 2 pouces', 'Icône', NULL, NULL, 1, 'Leica iCON robot 50 est spécialement conçu pour être facile à utiliser dans le secteur de la construction et des infrastructures. Installez l\'instrument, allumez-le et c\'est parti! Avec le logiciel iCONstruct, le robot est polyvalent et adapté à presque tous les projets.<br><br>\r\nTélémètre sans réflecteur le plus précis de sa catégorie<br>\r\nFonctionnement à un bouton<br>\r\nFonction PowerSearch pour un suivi rapide du prisme (technologie brevetée)<br>\r\nSystème de suivi unique pour un temps d\'arrêt minimal en mode robotique<br>\r\nCommunication de données flexible: WILAN (portée 150m ou Bluetooth® longue portée (350m)<br>\r\nConnexion avec le champ de disposition AutoDesk BIM possible', 1, 1),
(10, 7, 'images/shop/leicaicr55,_station_totale_robotique_icon_5_pouces.jpg', NULL, NULL, 'Leica icr55, station totale robotique icon 5 pouces', 'Icône', NULL, NULL, 1, 'Leica iCON robot 50 est spécialement conçu pour être facile à utiliser dans le secteur de la construction et des infrastructures. Installez l\'instrument, allumez-le et c\'est parti! Avec le logiciel iCONstruct, le robot est polyvalent et adapté à presque tous les projets.<br><br>\r\nTélémètre sans réflecteur le plus précis de sa catégorie<br>\r\nFonctionnement à un bouton<br>\r\nFonction PowerSearch pour un suivi rapide du prisme (technologie brevetée)<br>\r\nSystème de suivi unique pour un temps d\'arrêt minimal en mode robotique<br>\r\nCommunication de données flexible: WILAN (portée 150m ou Bluetooth® longue portée (350m)<br>\r\nConnexion avec le champ de disposition AutoDesk BIM possible<br>', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE `reference` (
  `id` int(3) NOT NULL,
  `id_entreprise` int(3) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `chiffre` int(4) DEFAULT NULL,
  `date_reference` date DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `site_web` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reference`
--

INSERT INTO `reference` (`id`, `id_entreprise`, `nom`, `logo`, `description`, `type`, `chiffre`, `date_reference`, `online`, `site_web`) VALUES
(1, 1, 'mtn', 'img/client5.png', 'res', 'Client', NULL, NULL, 1, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `banniere`
--
ALTER TABLE `banniere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `conditionnement`
--
ALTER TABLE `conditionnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `banniere`
--
ALTER TABLE `banniere`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conditionnement`
--
ALTER TABLE `conditionnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `prestation`
--
ALTER TABLE `prestation`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
