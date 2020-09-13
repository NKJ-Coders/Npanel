-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Août 2020 à 15:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `u929660141_panes`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
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
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`id`, `id_entreprise`, `nom`, `ville`, `pays`, `adresse`, `plaquette`, `date_pub`, `online`, `logo`, `slogan`, `description`) VALUES
(1, 1, 'Douala Akwa', 'Douala', 'Cameroun', '', NULL, NULL, 1, NULL, NULL, NULL),
(2, 1, 'Yaounde', 'Yaounde', '', '', NULL, NULL, 1, NULL, NULL, NULL),
(3, 1, 'Côte d''ivoire', '', 'Côte d''ivoire', '', NULL, NULL, 1, NULL, NULL, NULL),
(4, 1, 'Bafoussam', 'Bafoussam', 'Cameroun', '', NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_theme` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `date_mj` date NOT NULL,
  `nombre_vue` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `resume` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `id_theme`, `titre`, `date_creation`, `date_mj`, `nombre_vue`, `contenu`, `resume`, `source`, `auteur`, `online`) VALUES
(1, 1, 'This is standard sticky post sample', '2020-08-04', '0000-00-00', 0, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'www.source.com', 'Admin', 1),
(2, 1, 'Sticky', '2020-08-04', '0000-00-00', 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'www.my.fr', 'Idriss', 1);

-- --------------------------------------------------------

--
-- Structure de la table `banniere`
--

CREATE TABLE IF NOT EXISTS `banniere` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(3) DEFAULT NULL,
  `id_produit` int(3) NOT NULL,
  `id_position` int(3) NOT NULL,
  `texte1` text,
  `texte2` text,
  `texte3` text,
  `date_pub` date NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `banniere`
--

INSERT INTO `banniere` (`id`, `id_entreprise`, `id_produit`, `id_position`, `texte1`, `texte2`, `texte3`, `date_pub`, `online`) VALUES
(1, 1, 0, 1, 'Paness informatique', 'Nous vous accompagnons', '', '2020-03-25', 1),
(2, 1, 0, 1, 'Intégrateur de solution', 'Confiez nous vos projets', '', '2020-03-25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_parent` int(3) DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `online` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `id_parent`, `nom`, `img`, `online`) VALUES
(1, 0, 'PC', 'img/boutique/banniere/pc.png', 1),
(2, 0, 'Solution de mobilité', 'img/boutique/banniere/solution_mobilite.png', 1),
(3, 0, 'Produits de protection', 'img/boutique/banniere/produits_protection.png', 1),
(4, 0, 'Solutions Tablettes', 'img/boutique/banniere/tablettes.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_closing` date DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `closing` int(11) NOT NULL DEFAULT '-1',
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `conditionnement`
--

CREATE TABLE IF NOT EXISTS `conditionnement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(11) DEFAULT '1',
  `id_agence` int(11) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `valeur` varchar(70) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

CREATE TABLE IF NOT EXISTS `couleur` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `code_hexadecimal` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `couleur`
--

INSERT INTO `couleur` (`id`, `nom`, `code_hexadecimal`, `online`) VALUES
(1, 'rouge', '#CB4335', 1),
(2, 'violet', '#9B59B6', 1),
(3, 'bleu', '#3498DB', 1),
(4, 'jaune', '#F1C40F', 1),
(5, 'orange', '#F39C12', 1),
(6, 'vert', '#27AE60', 1),
(7, 'brun', '#7E5109', 1),
(8, 'gris', '#BDC3C7', 1),
(9, 'blanc', '#FFFFFF', 1),
(10, 'noir', '#000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `custumer`
--

CREATE TABLE IF NOT EXISTS `custumer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `detail_prestation`
--

CREATE TABLE IF NOT EXISTS `detail_prestation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_prestation` int(3) NOT NULL,
  `description` text NOT NULL,
  `detail` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `detail_prestation`
--

INSERT INTO `detail_prestation` (`id`, `id_prestation`, `description`, `detail`, `online`) VALUES
(1, 15, '', 'Formation / recrutements', 1),
(2, 15, '', 'Gestion des carrières', 1),
(3, 15, '', 'Gestion des compétences', 1),
(4, 15, '', 'Gestion de la paie', 1),
(5, 15, '', 'Suivi des performances jjj', 1),
(6, 15, '', 'Organisation, structure et effectifs', 1),
(7, 15, '', 'Tableaux de bord et statistiques', 1),
(8, 15, '', 'Gestion administrative du personnel', 1),
(9, 15, '', 'Evaluation des performances', 1);

-- --------------------------------------------------------

--
-- Structure de la table `detail_produit`
--

CREATE TABLE IF NOT EXISTS `detail_produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_produit` int(3) NOT NULL,
  `detail` varchar(255) CHARACTER SET utf32 NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `detail_produit_prestation`
--

CREATE TABLE IF NOT EXISTS `detail_produit_prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit_prestation` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `online` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `detail_produit_prestation`
--

INSERT INTO `detail_produit_prestation` (`id`, `id_produit_prestation`, `detail`, `description`, `online`) VALUES
(1, 5, 'Gestion de la paie', 'PANESS Informatique se positionne avec\ndes partenaires éditeurs internationaux\n(GOOGLE – JWAY…) sur le marché de\nl’intégration de solutions de\ndématérialisation et de Cloud Computing,\nnotamment sur la dimension Software asPANESS Informatique se positionne avec\ndes partenaires éditeurs internationaux\n(GOOGLE – JWAY…) sur le marché de\nl’intégration de solutions de\ndématérialisation et de Cloud Computing,\nnotamment sur la dimension Software as\na Service (SaaS).\na Service (SaaS).', 1),
(2, 5, 'Gestion des carrières', 'La gestion des carrières a sous sa responsabilité de multiples volets liés à   la gestion du capital humain tels que le recrutement, la formation, et la mobilité des salariés.\r\nLa gestion des carrières permet de concevoir et de mettre en oeuvre des parcours personnalisés pour des salariés. Ainsi, elle se doit d''être anticipative et proactive pour répondre au mieux aux besoins actuels et futurs de l''entreprise.', 1),
(3, 5, 'Suivi des performances', 'PANNES Informatique vous propose une solution visant à améliorer les performances de l''entreprise en boostant la productivité de ses collaborateurs. Il s''agit de veiller à ce que les employés et les équipes s''investissent et soit en accord avec les objectifs de l''entreprise.', 1),
(4, 5, 'Formation et recrutement', 'Afin de se développer et d''être d''avantage productive, une organisation doit valoriser et augmenter les connaissances de ses équipes grâce à la formation continue.\r\nLa gestion de la Formation et du recrutement représentent un réel levier stratégique pour l''entreprise.Elle consiste à gérer, suivre et contrôler toutes les données concernant les formations et recrutement passés.', 1),
(5, 5, 'Gestion des compétences', 'Gérer les compétences c''est gérer votre vivier de collaborateurs en fonction de leur maîtrise dans des domaines spécifiques. La reconnaissance de leur compétences vous permettra d''augmenter encore plus votre cohésion d''équipe et vous pourrez ainsi mieux envisager leur plan de développement.\r\nGrâce à une bonne vision et gestion des compétences de vos salariés, vous serez en mesure d''attribuer les bonnes tâches aux bonnes personnes et identifier les compétences qui vous manquent.', 1),
(6, 5, 'Evaluation des performances', 'La gestion des performances est l''un des sujets les plus importants et les plus parlés en gestion des RH. C''est l''un des principaux outils de gestion visant à analyser les performances d''une personne ou d''un groupe de personnes dans un environnement organisationnel.', 1),
(7, 5, 'Organisation, structure et effectifs', 'ras', 1),
(8, 5, 'Tableaux de bord et statistiques ', 'les tableaux de bords RH font partie des outils incontournables pour analyser, visualiser et prendre les décisions qui impactent positivement l''entreprise.\r\nIls répondent aux nouvelles préoccupations des DRH et les aident à devenir les leaders agiles du changement dans l''entreprise.', 1),
(9, 5, 'Gestion administrative du personnel', 'Cette fonction traite diverses problématiques, chacune indispensable à la vie de l''entreprise. Elle couvre notamment : respect et suivi de la législation, gestion des contrats de travail, calcul et gestion des salaires, gestion des absences, étude et analyses comme le coût de l''absentéisme, le coût de la maladie, ...', 1),
(10, 148, 'VOUS ETES UNE ORGANISATION QUI SOUHAITE DIGITALISER L’ENSEMBLE DE SON PROCESSUS FORMATION ?', '<strong>PANESS</strong> vous assure un accompagnement en End to End qui couvre les aspects suivants : analyse et évaluation de vos besoins assortie du choix de la solution, mise en place et intégration de la solution technologique, assistance à la création et à la médiatisation des contenus e-learning, transfert des compétences à votre personnel utilisateur et d’administration.', 1),
(11, 148, 'VOUS SOUHAITEZ UNE ASSISTANCE DANS LA REDACTION DE VOS CONTENUS E-LEARNING ? ', '<strong>PANESS</strong> vous accompagne grâce à son pôle de rédaction professionnel   \r\nUne équipe dédiée composée :\r\n<ul class="check-square">\r\n<li><strong>Un responsable du pôle de rédaction :</strong><br>\r\nExpert rédacteur et formateur avec plus de 25 ans d’expérience, il est votre interlocuteur unique pour la phase de conception – rédaction.</li>\r\n<li><strong>Un réseau de rédacteurs :</strong><br>\r\nDes professionnels issus de divers domaines d’expertise avec une solide expérience en rédaction et en formation.\r\n<li><strong>Des ingénieurs pédagogiques :</strong><br>\r\nDont le rôle spécifique est de participer à l’élaboration de la structure du document et de garantir la clarté du message.</li>\r\n</ul>\r\n', 0),
(12, 148, 'VOUS CHERCHEZ DES SUPPORTS E-LEARNING INNOVANTS ET MOBILES ?  ', 'Nous vous accompagnons dans le choix et l’identification des outils mobile Learning adaptées à vos besoins métiers. Nous pouvons intégrer et configurer pour vous des outils Mobile Learning de formation ou d’information. Ces solutions peuvent être des supports de formation pour collaborateurs nomades, des outils marketing pour vos équipes terrain ou bien des outils d’aide à la vente efficaces et innovants.', 1),
(13, 148, 'PEUT-ETRE CHERCHEZ VOUS A DIGITALISER VOS EVENEMENTS OU A ORGANISER DES WEBINAIRS ? ', 'Les solutions que nous vous proposons vous assurent des options de restitution des évents en live webcast ou en différé. La digitalisation d’événements physiques offre un double avantage. Tout d’abord vous maximiser votre audience lors de l’événement, puis, cet événement reste consultable et de manière enrichie. L’événement n’est donc pas terminé et sa durée de vie est prolongée. ', 1),
(14, 149, 'Expérience employé', 'Offrez à vos employés toutes les possibilités d''atteindre leur plein potentiel. Écoutez leurs commentaires, profitez au maximum de ce qu''ils peuvent vous apporter et faites-leur vivre des expériences collaborateurs qui leurs sont adaptées.', 1),
(15, 149, 'Portail RH et Paie', 'Soutenez vos employés, où qu''ils soient et quelle que soit leur manière de travailler, grâce à un portail RH global et des logiciels RH dédiés à la paie, la gestion des temps de présence, l''administration des avantages sociaux, la prestation de services RH.', 1),
(16, 149, 'Talent Management', 'Adaptez-vous rapidement aux besoins fluctuants en matière de talents - grâce aux meilleurs logiciels RH pour le recrutement, l''onboarding, la gestion de performances, la rémunération, la formation, la succession et le développement.', 1),
(17, 149, 'Analyse et Planification', 'Gagnez du temps pour prendre des décisions, en utilisant les données disponibles pour chaque processus RH. Notre SIRH est doté de logiciels RH d''analyse et de planification des effectifs simples à utiliser et entièrement paramétrables.', 1),
(18, 150, 'Evaluation et Certification', 'Créez facilement des questionnaires d’évaluation et délivrez automatiquement des certificats conformes avec les exigences réglementaires de votre industrie.', 1),
(19, 150, 'Reporting et OPCO', 'Le LMS des experts pour suivre et mesurer la progression de vos utilisateurs dans vos parcours de formation ', 1),
(20, 150, 'Contenus et SCORM', 'Des centaines de formats interactifs pour une expérience d’apprentissage plus engageante que jamais', 1),
(21, 150, 'Visioconférences', 'Créez vos classes virtuelles et webinaires:\r\nDokeos Live est la solution de visioconférence cryptée et sécurisée des entreprises qui forment à distance', 1),
(22, 150, 'Social et Collaboratif', 'Impliquez vos experts métiers et favorisez les échanges de savoirs entre apprenants.', 1),
(23, 150, 'Multi Portails', 'Créez plusieurs portails de formation avec leur identité propre et leur audience distincte', 1),
(24, 150, 'E-commerce', 'Vendre en ligne des formations:Déployez votre catalogue de formations en ligne et boostez vos ventes grâce à nos outils marketing ', 1),
(25, 151, 'Création intuitive des formations ', 'Une interface intuitive et personnalisable qui accompagne chaque formateur dans son parcours de création. 360Learning permet aux experts métier de créer des formations très facilement même sans connaissance préalable du e-learning.', 1),
(26, 151, 'Un parcours de formation séquencé par différentes briques', ' Les “modules e-learning” développés via la plateforme à partir de documents préalablement créés. la brique “présentiel” qui fixe la date, la thématique et le lieu des sessions de formation en présentiel. Le “webinaire” qui permet d’organiser des classes virtuelles pour, par exemple, approfondir des notions d’apprentissage complexes. La fonction “envoi d’email”, très utile pour donner un coup de boost afin suivre la formation jusqu’au bout et palier à l’absence de formateur en réel. “L''étape de validation” des acquis à la fin de chaque module et le “certificat” pour attester la réussite de l’apprenant à chaque étape du parcours de formation.', 1),
(27, 151, 'intégration des documests', 'L’intégration facile de nombreux documents préalablement développés tels que des images, des écrans et des animations interactifs (Genial.ly, Padlet, ThingLink, ..), des vidéos (Youtube, Vimeo, dailymotion, SlideShare), des fichiers issus du Pack Office (DOC, PDF, PPT, XLS, etc.) mais également Google Drive, Prezi ou encore Vyond.', 1),
(28, 151, 'Quiz', 'Les nombreux formats de quiz permettent de varier les types de questions.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_prestation` int(11) NOT NULL,
  `date_demarrage` date NOT NULL,
  `date` date NOT NULL,
  `adresse_site` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `closing` int(11) NOT NULL DEFAULT '-1',
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `devise`
--

CREATE TABLE IF NOT EXISTS `devise` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_prix_produit` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `taux` double NOT NULL,
  `code_devise` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `plaquette` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(11) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  `description` longtext,
  `site_web` varchar(255) DEFAULT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `logo`, `plaquette`, `slogan`, `adresse`, `ville`, `pays`, `online`, `description`, `site_web`, `date_creation`) VALUES
(1, 'Paness informatique', 'img/logo.png', 'img/paness_informatique.pdf', 'Une expertise au service de vos projets informatiques', 'Douala-AKWA', 'Douala', 'Cameroun', 1, '                            ', 'www.paness-informatique.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `resume` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `icone`
--

CREATE TABLE IF NOT EXISTS `icone` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_produit` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `icone`
--

INSERT INTO `icone` (`id`, `id_produit`, `nom`, `online`) VALUES
(1, 0, 'flaticon-syncing', 1),
(2, 0, 'fa fa-cubes', 1),
(3, 0, 'flaticon-file24', 1),
(4, 0, 'fa fa-code', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_article`
--

CREATE TABLE IF NOT EXISTS `illustration_article` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_article` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `illustration_article`
--

INSERT INTO `illustration_article` (`id`, `id_article`, `lien`, `type`, `online`) VALUES
(1, 1, 'img/blog/blog-1.jpg', 'Image', 1),
(2, 1, 'img/blog/blog-2.jpg', 'Image', 1),
(3, 2, 'img/blog/blog-3.jpg', 'Image', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_banniere`
--

CREATE TABLE IF NOT EXISTS `illustration_banniere` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_banniere` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `illustration_banniere`
--

INSERT INTO `illustration_banniere` (`id`, `id_banniere`, `lien`, `type`, `online`) VALUES
(1, 1, 'img/ban/home-1.png', 'Image', 1),
(2, 2, 'img/ban/home-2.png', 'Image', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_gallery`
--

CREATE TABLE IF NOT EXISTS `illustration_gallery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_gallery` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `couverture` tinyint(4) NOT NULL DEFAULT '1',
  `date_pub` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_presentation`
--

CREATE TABLE IF NOT EXISTS `illustration_presentation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_presentation` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `illustration_presentation`
--

INSERT INTO `illustration_presentation` (`id`, `id_presentation`, `lien`, `type`, `online`) VALUES
(1, 1, 'img/intro-bg.jpg', 'Image', 1),
(2, 2, 'img/abt-slider1.jpg', 'Image', 1),
(3, 3, 'img/abt-slider2.jpg', 'Image', 1),
(4, 4, 'img/support-bg.jpg', 'Image', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_prestation`
--

CREATE TABLE IF NOT EXISTS `illustration_prestation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_prestation` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `illustration_prestation`
--

INSERT INTO `illustration_prestation` (`id`, `id_prestation`, `lien`, `type`, `online`) VALUES
(1, 1, 'img/formation/digital.png', 'Image', 1),
(2, 3, 'img/formation/maketing.png', 'Image', 1),
(3, 2, 'img/formation/gouvernance.png', 'Image', 1),
(4, 4, 'img/formation/infrastructure.png', 'Image', 1),
(5, 5, 'img/formation/developpement.png', 'Image', 1),
(6, 20, 'img/service/strategie_digitale.png', 'Ban', 1),
(7, 21, 'img/service/projets_digitaux.png', 'Ban', 1),
(8, 22, 'img/service/sizing.png', 'Ban', 1),
(9, 23, 'img/service/audit.png', 'Ban', 1),
(10, 32, 'img/service/schemas_directeur.png', 'Ban', 1),
(11, 24, 'img/service/dimensionnement.png', 'Ban', 1),
(12, 25, 'img/service/cycle_vie.png', 'Ban', 1),
(13, 26, 'img/service/hardware.png', 'Ban', 1),
(14, 29, 'img/service/mobilite.png', 'Ban', 1),
(15, 30, 'img/service/integration.png', 'Ban', 1),
(16, 31, 'img/service/developpement_specifique.png', 'Ban', 1),
(17, 1, 'img/formation/banniere/infrastructure_it.png', 'Ban', 1),
(18, 2, 'img/formation/banniere/gouvernance_it.png', 'Ban', 1),
(19, 3, 'img/formation/banniere/marketing_digital.png', 'Ban', 1),
(20, 4, 'img/formation/banniere/transformation_digitale.png', 'Ban', 1),
(21, 5, 'img/formation/banniere/developpement_applicatif.png', 'Ban', 1);

-- --------------------------------------------------------

--
-- Structure de la table `illustration_produit`
--

CREATE TABLE IF NOT EXISTS `illustration_produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_produit` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `illustration_produit_prestation`
--

CREATE TABLE IF NOT EXISTS `illustration_produit_prestation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_produit_prestation` int(3) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Contenu de la table `illustration_produit_prestation`
--

INSERT INTO `illustration_produit_prestation` (`id`, `id_produit_prestation`, `lien`, `type`, `online`) VALUES
(1, 15, 'https://panessconseils.com/conduite-de-lentretien-individuel-annuel-devaluation-des-performances/', 'contenu_theme', 1),
(2, 5, 'img/solution/huris_produit.png', 'image', 1),
(3, 5, 'img/solution/huris.png', 'Ban', 1),
(4, 3, 'img/formation/Strategie_de_digitalisation.jpg', 'image', 1),
(5, 4, 'img/formation/Pratique_du_management_collaboratif.jpg', 'image', 1),
(6, 107, 'img/formation/Comment_preparer_la_Transformation_Digitale_de_votre _entreprise.jpg', 'image', 1),
(7, 108, 'img/formation/reussir_la_digitalisation_de_la_fonction_RH.jpg', 'image', 1),
(8, 109, 'img/formation/Une_equipe_de_vente_a_l_heure_du_digital.jpg', 'image', 1),
(9, 110, 'img/formation/Comment_utiliser_le_Big_Data_pour_optimiser_la_prise_de_decision.jpg', 'image', 1),
(10, 111, 'img/formation/Gestion_du_changement_dans_la_transformation_digitale.jpg', 'image', 1),
(11, 112, 'img/formation/Comment_utiliser_le_Big_Data_pour_optimiser_la_prise_de_decision.jpg', 'image', 1),
(12, 113, 'img/formation/Manager.jpg', 'image', 1),
(13, 114, 'img/formation/m1.jpg', 'image', 1),
(14, 115, 'img/formation/m2.jpg', 'image', 1),
(15, 116, 'img/formation/m3.jpg', 'image', 1),
(16, 117, 'img/formation/m4.jpg', 'image', 1),
(17, 118, 'img/formation/m5.jpg', 'image', 1),
(18, 119, 'img/formation/m6.jpg', 'image', 1),
(19, 120, 'img/formation/m7.jpg', 'image', 1),
(20, 121, 'img/formation/m8.jpg', 'image', 1),
(21, 122, 'img/formation/p1.jpg', 'image', 1),
(22, 123, 'img/formation/p2.jpg', 'image', 1),
(23, 124, 'img/formation/p3.jpg', 'image', 1),
(24, 125, 'img/formation/PRINCE2_Foundation.jpg', 'image', 1),
(25, 126, 'img/formation/PRINCE2_Practitioner_Upgrade.jpg', 'image', 1),
(26, 127, 'img/formation/cobit.jpg', 'image', 1),
(27, 128, 'img/formation/stat.jpg', 'image', 1),
(28, 129, 'img/formation/i1.jpg', 'image', 1),
(29, 130, 'img/formation/i2.jpg', 'image', 1),
(30, 131, 'img/formation/i3.jpg', 'image', 1),
(31, 132, 'img/formation/i4.jpg', 'image', 1),
(32, 133, 'img/formation/i5.jpg', 'image', 1),
(33, 134, 'img/formation/i6.jpg', 'image', 1),
(34, 135, 'img/formation/i7.jpg', 'image', 1),
(35, 136, 'img/formation/i8.jpg', 'image', 1),
(36, 103, 'img/formation/Preparation_a_la_certification_cissp.jpg', 'image', 1),
(37, 104, 'img/formation/Preparation_a_la_certification_cisa.jpg', 'image', 1),
(38, 105, 'img/formation/computer_hacking_forensic_investigator.jpg', 'image', 1),
(39, 106, 'img/formation/Preparation_a_la_certification_ccna_Security.jpg', 'image', 1),
(40, 1, 'img/formation/Cloud_Computing_Foundation_(certification Exin).jpg', 'image', 1),
(41, 2, 'img/formation/Cloud_Computing_Architectures_et_Services Avancee.jpg', 'image', 1),
(42, 146, 'img/formation/Big_Data_Les_essentiels.jpg', 'image', 1),
(43, 147, 'img/formation/Approche_et_reussite_d_un_projet_de_virtualisation.jpg', 'image', 1),
(44, 137, 'img/formation/Gestion_de_crise.jpg', 'image', 1),
(45, 138, 'img/formation/Securite_des_infrastructures.jpg', 'image', 1),
(46, 139, 'img/formation/Conception_des_strategies_et_politique_de_securite.jpg', 'image', 1),
(47, 140, 'img/formation/Securite_physique.jpg', 'image', 1),
(48, 141, 'img/formation/Securite_du_mail_et_du_courriel.jpg', 'image', 1),
(49, 143, 'img/formation/Audit_et_test_de_penetration.jpg', 'image', 1),
(50, 144, 'img/formation/Recherche_et_detection_de_Malware.jpg', 'image', 1),
(51, 145, 'img/formation/Investigation_numerique.jpg', 'image', 1),
(52, 148, 'img/solution/elearning_produit.png', 'Image', 1),
(53, 148, 'img/solution/ban_elearning.png', 'Ban', 1),
(54, 149, 'img/solution/sapsuccessfactors_produit.png', 'image', 1),
(55, 149, 'img/solution/ban_sapsuccessfactors.png', 'Ban', 1),
(56, 150, 'img/solution/dokeos_produit.png', 'image', 1),
(57, 150, 'img/solution/ban_dokeos.png', 'Ban', 1),
(58, 151, 'img/solution/360Learning_produit.png', 'image', 1),
(59, 151, 'img/solution/ban_360Learning.png', 'Ban', 1);

-- --------------------------------------------------------

--
-- Structure de la table `management_team`
--

CREATE TABLE IF NOT EXISTS `management_team` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `compte_facebook` varchar(255) NOT NULL,
  `compte_linkedin` varchar(255) NOT NULL,
  `compte_twitter` varchar(255) NOT NULL,
  `compte_instagram` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `couverture` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`, `logo`, `online`) VALUES
(1, 'HP', '', 1),
(2, 'LENOVO', '', 1),
(3, 'DELL', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_prestation` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `objet` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `fonction_personne` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '1',
  `date_message` date NOT NULL,
  `date_commande` date NOT NULL,
  `statut` int(1) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_taille` int(3) NOT NULL,
  `id_couleur` int(3) NOT NULL,
  `pu` int(11) DEFAULT '0',
  `qt` int(11) NOT NULL DEFAULT '0',
  `online` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `position_banniere`
--

CREATE TABLE IF NOT EXISTS `position_banniere` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `position_banniere`
--

INSERT INTO `position_banniere` (`id`, `nom`, `online`) VALUES
(1, 'home', 1);

-- --------------------------------------------------------

--
-- Structure de la table `position_presentation`
--

CREATE TABLE IF NOT EXISTS `position_presentation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `position_presentation`
--

INSERT INTO `position_presentation` (`id`, `nom`, `online`) VALUES
(1, 'home_bienvenue', 1),
(2, 'apropos', 1),
(3, 'home_bienvenue2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_parent` int(3) NOT NULL,
  `id_entreprise` int(3) NOT NULL DEFAULT '1',
  `id_position` int(3) NOT NULL,
  `rubrique` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `resume` longtext,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `presentation`
--

INSERT INTO `presentation` (`id`, `id_parent`, `id_entreprise`, `id_position`, `rubrique`, `description`, `resume`, `online`) VALUES
(1, 0, 1, 1, 'Bienvenue chez Paness Informatique', '<strong style="font-weight:1000;">PANESS Informatique</strong> est une entreprise de Service du Numérique (ESN). Crée en 1994, elle accompagne et conseille les organisations privées et publiques basées en Afrique Subsaharienne dans le domaine des technologies numériques.<br><br>Nous nous s’imposons dans les métiers du <a href="index.php?action=Services&saction=conseil">Conseil</a>, de <a href="index.php?action=Services&saction=application">l’Ingénierie applicative</a>, de <a href="index.php?action=Services&saction=infrastructure">l’Infrastructure</a>, de <a href="index.php?action=Services&saction=digital">La stransformation digitale</a>, assumant ainsi une approche métier singulière, faite d’anticipation de l’ensemble des besoins de ses clients.<br><br>\n         En Afrique subsaharienne et dans tous nos marchés cibles, Nous nous présentons comme une entreprise inclusive,\n        contribuant à la diffusion des NTIC et oeuvrant aux côtés des différents Etats et Organisations pour inverser la fracture technologique,\n        assurer le transfert de compétence et accélérer l’appropriation par les décideurs Africains des outils de gestion moderne', 'Une expertise au service de vos projets informatiques', 1),
(2, 0, 1, 2, 'Histoire', '<p>Leo cursus a nibh Vestibulum interdum sit nisl est lorem augue. Adipiscing hendrerit cursus et at nunc id natoque vitae mattis vitae. Curabitur tristique laoreet ut ut odio Lorem ante Integer tincidunt in. Congue Sed est quis justo pellentesque neque eros dolor eu et. Cras ipsum tempus non Donec ac ut neque sem nisl ut. Pretium magnis nisl nibh purus.</p>\r\n\r\n									<p>Sed enim eros Proin Nullam laoreet dictumst cursus Sed Fusce eu. Est auctor et mauris egestas at Quisque montes lacus ac pede. Felis vel tincidunt wisi elit quis vestibulum Curabitur iaculis consequat Proin itae Pellentesque.</p>', 'lassical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature', 1),
(3, 0, 1, 2, 'Mot du ceo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'lassical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature', 1),
(4, 0, 1, 3, 'VOTRE ORGANISATION MÉRITE L’EXCELLENCE', '', 'En permanace, à l''écoute des ses clients, Paness Information est disposé à <br>vous recevoir dans ses locaux de Lundi à vendredi, pendant les heurs ouvrables.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_parent` int(3) DEFAULT NULL,
  `id_entreprise` int(3) DEFAULT '1',
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `resume` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_pub` date DEFAULT NULL,
  `online` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Contenu de la table `prestation`
--

INSERT INTO `prestation` (`id`, `id_parent`, `id_entreprise`, `titre`, `description`, `resume`, `type`, `date_pub`, `online`) VALUES
(1, 0, 1, 'Infrastructure IT', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Formation', '2020-08-09', 1),
(2, 0, 1, 'Gouvernance IT', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Formation', '2020-08-09', 1),
(3, 0, 1, 'Marketing Digital', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Formation', '2020-08-09', 1),
(4, 0, 1, 'Transformation digitale', 'Nous faisons reposer les outils technologiques sur une stratégie et sur des business model lisibles!', 'Nous faisons reposer les outils technologiques sur une stratégie et sur des business model lisibles!', 'Formation', '2020-08-09', 1),
(5, 0, 1, 'Developpement applicatif', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu''il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', 'Formation', '2020-08-09', 1),
(6, 1, 1, 'Cloud, Architecture, Routage , Big Data, UC ', '', '', 'Formation', '2020-08-09', 1),
(7, 1, 1, 'Sécurité', '', '', 'Formation', '2020-08-09', 1),
(8, 1, 1, 'Réseaux, WIFI, Sécurité, VOIP, Data Center, Cloud', '', '', 'Formation', NULL, 1),
(9, 1, 1, 'IBASE DES DONNEES ORACLE, LINUX REDHAT ', '', '', 'Formation', NULL, 1),
(10, 1, 1, 'Serveurs Réseaux, Scripts, Virtualisation, Cloud Privé', '', '', 'Formation', NULL, 1),
(11, 1, 1, 'Poste client, Portail Collaboratif, Serveur Réseaux', '', '', 'Formation', NULL, 1),
(12, 1, 1, 'Serveurs Réseaux, Scripts, Virtualisation, Cloud Privé ', '', '', 'Formation', NULL, 1),
(13, 6, 1, 'Cloud Computing', '', '', 'Formation', '2020-08-09', 1),
(14, 6, 1, 'Les essentiels du système d\\''information', '', '', 'Formation', '2020-08-09', 1),
(15, 0, 1, 'Gestion des ressources humaines', '', '', 'Solution', '2020-08-09', 1),
(16, 0, 1, 'Transformation digitale', 'La transformation digitale bouleverse les frontières et les repères traditionnels des organisations. Elle pousse les directions métiers, marketing, digitale et SI à collaborer davantage pour créer de la valeur et permettre à l’entreprise de se différencier.', 'Une démarche cohérente autour de trois leviers: Trainning, conseil en stratégie, et le pilotage des projets. Nous faisons reposer les outils technologiques sur une stratégie et sur des business model lisibles.', 'Service', '2020-08-10', 1),
(17, 0, 1, 'Gouvernance IT', 'ras', 'Nous appliquons au Schéma Directeur les meilleures pratiques en matière de pilotage de projeten faisant appel aux principaux contributeurs de l’entreprise concernés : DG, DSI, équipes techniques, utilisateurs clés.', 'Service', '2020-08-10', 1),
(18, 0, 1, 'Systèmes et infrastructures', '', 'Dimensionnement et Fourniture des Infrastructures IT; Gestion du cycle de vie de la donnée; Optimisation des Systèmes et Infrastructures; Consolidation des Systèmes; Conception et déploiement des architectures réseaux; Solutions de mobilité.', 'Service', '2020-08-10', 1),
(19, 0, 1, 'Ingenierie applicative', '', 'Nous proposons aux PME et institutions africaines des solutions de gestion commerciale, gestion de la relation client, gestion des rh etc. En mode Saas, plus adaptées à leur besoin, moins contraignant et peu couteux.  ', 'Service', NULL, 1),
(20, 16, 1, 'Conseil en stratégie digitale', 'Face à l’accélération des innovations technologiques, des terminaux mobiles,des objets connectés et du bigdata,la transformation digitale est devenue une nécessité.', 'Face à l’accélération des innovations technologiques, des terminaux mobiles,des objets connectés et du big data,la transformation digitale est devenue une nécessité.', 'Service', NULL, 1),
(21, 16, 1, 'Conseil en management des projets digitaux', '', '', 'Service', NULL, 1),
(22, 16, 1, 'Sizing et intégration de outils technologiques', '', 'Nous faisons le rêve d’accompagner une Afrique en mutation à relever le défit du développement à travers la mise enplace de nouvelles technologies; innovantes dans la qualité et performances dans les résultats. <br>\nGrace à notre riche écosystème partenaire, nous proposons notre savoir afin d’intégrer les solutions des nombreux éditeurs et constructeurs.\n', 'Service', NULL, 1),
(23, 17, 1, 'Audit ', '', '<strong>Notre démarche</strong><br>\nNotre démarche d’audit des systèmes d’information repose sur :<br>\n<ul class="check-circle">\n<li>L’identification des risqueset des objectifs de contrôle</li>\n<li>Le diagnostic des mesures de contrôleinterne existantes</li>\n<li>L’identificationdesmesures complémentairesà mettre en place</li>\n<li>La formulation de recommandationsd’audit;</li>\n<li>Le suivi des préconisations.</li>\n</ul>', 'Service', NULL, 1),
(24, 18, 1, 'Dimensionnement et Fourniture des Infrastructures IT', '', 'Fort d’une expérience deplus de 20ans dans la distribution des infrastructures informatiques,<strong>PANESS informatique</strong> vous propose une expertise une gamme variée des solutions d’infrastructure:<br>\n<ul class="check-circle">\n<li>Déploiement de postes et périphériques dans votre environnement</li>\n<li>Maintenance de votre parc informatique avec le support téléphonique associé</li>\n<li>Mise en oeuvre et exploitation de votre infrastructure</li>\n<li>Intégration de solutions pour sécuriser votre système informatique</li>\n<li>Migration vers de nouvelles technologies</li>\n</ul>', 'Service', '2020-08-12', 1),
(25, 18, 1, 'Gestion du cycle de vie de la donnée', '', 'Notre offre de gestion du cycle de vie de la donnée est basée sur des politiques de stockage, des sauvegardes / restaurations et d’archivages, cohérentes, en rapport direct avec la cartographie, la criticité et la sensibilité des données.', 'Service', NULL, 1),
(26, 18, 1, 'Hardware, Réseaux / Télécoms, OS,\nOutils Systèmes, Middlewar', '', 'Paness informatique garantit à ses clients la disponibilité, l’évolutivité, la sécurité et l’optimisation de leurs infrastructures IT.<br>\nL’offre Infrastructures de PANESS Informatique s’articule essentiellement autour des infrastructures et outillages du marché (Microsoft, CISCO, IBM, HP, Oracle, Sybase…).<br>\nNous assurons le déploiement, la surveillance et la maintenance de divers types d’infrastructures : Hardware, Réseaux / Télécoms, OS, Outils Systèmes, Middleware, …\nNos consultants possèdent une expertise qui s’avère particulièrement précieuse pour la gestion de projets complexes, axés notamment sur la convergence entre le réseau informatique et le réseau de télécommunications.\nIls présentent des références de premier ordre en matière de déploiement de messageries, de solutions de téléphonie sur IP (ToIP), de vidéo et de solutions de conférences sur IP (VoIP).\nIls vous assistent également dans la supervision et la mise à jour de vos solutions de sécurité, afin d’assurer la protection de votre réseau, la sécurité de vos connexions et de mettre en place des sauvegardes automatiques, locales ou externalisées.', 'Service', NULL, 1),
(27, 18, 1, 'Consolidation des Systèmes', '', '', 'Service', NULL, 0),
(28, 18, 1, 'Conception et déploiement des architectures réseaux', '', '', 'Service', NULL, 0),
(29, 18, 1, 'Solutions de mobilité et de collaboration', '', 'Nous vous permettons de travailler plus intelligemment où que vous soyez, avec\nla messagerie professionnelle. Plus qu’une boite aux lettres, les solutions que\nnous intégrons vous permettent de gérer vos messages, votre annuaire de\ncontacts, votre calendrier, visionner celui de vos collaborateurs, créer et organiser\ndes tâches, synchroniser vos rendez-vous, créer des réunions collaboratives.<br>\n<strong>Restez connecté</strong><br>\nNous vous permettons de créer un véritable « portail de travail collectif ».\npour stocker, organiser, consulter, modifier et partager des documents\navec vos collaborateurs, avec vos clients, de façon totalement sécurisée à\npartir de la plupart des appareils.', 'Service', NULL, 1),
(30, 19, 1, 'Intégration ', '', 'PANESS Informatique se positionne avec\ndes partenaires éditeurs internationaux\n(GOOGLE – JWAY…) sur le marché de\nl’intégration de solutions de\ndématérialisation et de Cloud Computing,\nnotamment sur la dimension Software as\na Service (SaaS).\nNous proposons aux PME et institutions\nafricaines des solutions de gestion\ncommerciale, gestion de la relation client,\netc. en mode Saas, plus adaptées à leur\nbesoin, moins contraignant et peu\ncouteux.', 'Service', NULL, 1),
(31, 19, 1, 'Dévéloppement spécifique', '', 'La phase de consulting comporte un audit de l’existant, la mise en place des recommandations stratégiques et l’élaboration d’un cahier des charges fonctionnel. Notre force réside dans notre capacité à aborder vos projets à la fois sous l’angle technique et sous l’angle métier.<br>\nEn matière de développement, notre périmètre technique couvre:<br>\n<ul class="check-circle">\n<li>Les applications J2EE, basées sur les frameworksstandard (Struts, Spring, Hibernate, …)</li>\n<li>Les applications PHP</li>\n<li>Les IHM “richclient” (Ajax, GWT, Flex)</li>\n<li>L’interopérabilité des applications (web services)</li>\n<li>La modélisation et l’optimisation de bases de données à forte volumétrie (Oracle, Sybase, SQL Server)</li>\n</ul>', 'Service', NULL, 1),
(32, 17, 1, 'Schémas directeur', '', 'UNE METHODOLOGIE QUI IMPLIQUE L''ENSEMBLE DES ACTEURS DE L''ENTREPRISE<BR>\nNous appliquons au Schéma Directeur les meilleures pratiques en matière de pilotage de projeten faisant appel aux principaux contributeurs de l’entreprise concernés : DG, DSI, équipes techniques, utilisateurs clés.<br>\nNotre démarche est progressive, menée par une équipe pluridisciplinaire aux expertises complémentaires. Elle garantit la maîtrise de l’ensemble du périmètre du Schéma Directeur.', 'Service', NULL, 1),
(33, 8, 1, 'CISCO SYSTEMS', '', '', 'Formation', NULL, 1),
(34, 8, 1, 'Sécurité', '', '', 'Formation', NULL, 1),
(35, 9, 1, 'Oracle 11G-12C', '', '', 'Formation', NULL, 1),
(36, 9, 1, 'Administration dans l’environnement Système', '', '', 'Formation', NULL, 1),
(37, 10, 1, 'Cloud, Virtualisation et Supervision', '', '', 'Formation', NULL, 1),
(38, 10, 1, 'Messagerie & Communications Unifiées', '', '', 'Formation', NULL, 1),
(39, 10, 1, 'Data Platform & Business Intelligence avec SQL 2016', '', '', 'Formation', NULL, 1),
(40, 11, 1, 'Plate-forme collaborative', 'Formation', '', 'Formation', NULL, 1),
(41, 11, 1, 'Serveurs Windows Server 2016', '', '', 'Formation', NULL, 1),
(42, 12, 1, 'Cloud, Virtualisation et Supervision', '', '', 'Formation', NULL, 1),
(43, 12, 1, 'Messagerie & Communications Unifiées', '', '', 'Formation', NULL, 1),
(44, 12, 1, 'Data Platform & Business Intelligence avec SQL 2016', '', '', 'Formation', NULL, 1),
(45, 12, 1, 'Plate-forme collaborative', '', '', 'Formation', NULL, 1),
(46, 12, 1, 'Serveurs Windows Server 2016', '', '', 'Formation', NULL, 1),
(47, 7, 1, 'Certifications en Sécurité', '', '', 'Formation', NULL, 1),
(48, 2, 1, 'Gestion de projet', '', '', 'Formation', NULL, 1),
(49, 2, 1, 'Gouvernance des SI & Architecture de l''entreprise', '', '', 'Formation', NULL, 1),
(50, 48, 1, 'Méthode Agile', '', '', 'Formation', NULL, 1),
(51, 48, 1, 'Méthode PMP selon le PMI', '', '', 'Formation', NULL, 1),
(52, 48, 1, 'Méthode PRINCE2', '', '', 'Formation', NULL, 1),
(53, 49, 1, 'Méthode Agile', '', '', 'Formation', NULL, 1),
(54, 49, 1, 'Méthode ITIL - Service Management', '', '', 'Formation', NULL, 1),
(55, 49, 1, 'NORMES QUALITE ISO/IEC', '', '', 'Formation', NULL, 1),
(56, 0, 1, 'Solution E-learning', '', '', 'Solution', '2020-08-20', 1);

-- --------------------------------------------------------

--
-- Structure de la table `prix_produit`
--

CREATE TABLE IF NOT EXISTS `prix_produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `montant` int(20) NOT NULL,
  `date` int(11) NOT NULL,
  `onlline` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `prix_produit`
--

INSERT INTO `prix_produit` (`id`, `type`, `montant`, `date`, `onlline`) VALUES
(1, '', 385000, 0, 1),
(2, '', 565000, 0, 1),
(3, '', 820000, 0, 1),
(4, '', 475000, 0, 1),
(5, '', 955000, 0, 1),
(6, '', 299000, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_cat` int(3) DEFAULT NULL,
  `id_prix_produit` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_marque` int(3) NOT NULL,
  `quantite` int(50) DEFAULT NULL,
  `conditionnement` varchar(255) DEFAULT NULL,
  `disponible` int(255) DEFAULT '1',
  `description` longtext CHARACTER SET latin1,
  `online` tinyint(1) DEFAULT '1',
  `vitrine` int(255) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `id_cat`, `id_prix_produit`, `image`, `nom`, `id_marque`, `quantite`, `conditionnement`, `disponible`, `description`, `online`, `vitrine`) VALUES
(1, 1, 1, 'img/boutique/produits/hp_290g2_mt.png', 'MICRO ORDINATEUR HP 290 G2 MT', 1, 40, '', 1, 'Processeur: Core i3-7100\r\nRAM: 4 Go\r\nDisque dur SATA: 500 Go\r\nDVDRW\r\nEcran 20,7’\r\nFree dos', 1, 1),
(2, 1, 2, 'img/boutique/produits/hp_prodesk_400g4_mt.png', ' MICRO ORDINATEUR HP PRODESK 400 G4  MT', 1, 3, NULL, 1, 'Processeur: Core i5-7500 \r\nRAM: 4 Go \r\nDisque dur SATA: 500 Go \r\nDVDRW \r\nEcran 20,7’’ \r\nFree dos\r\n', 1, 1),
(3, 1, 3, 'img/boutique/produits/hp_prodesk_400g6_mt.png', 'MICRO ORDINATEUR HP PRODESK 400 G6  MT', 1, 4, NULL, 1, 'Processeur: Core i7-8700 \r\nRAM: 8 Go \r\nDisque dur SATA: 1TO \r\nDVDRW \r\nEcran 21,5’’ \r\nFree dos', 1, 1),
(4, 1, 4, 'img/boutique/produits/lenouvo_v_530.png', 'MICRO ORDINATEUR LENOVO V530', 2, 4, NULL, 1, 'Processeur: Core i5-8400 \r\nRAM: 4 Go \r\nDisque dur SATA: 1TO \r\nDVDRW Ecran 21,5’’ \r\nFree dos ', 1, 1),
(5, 1, 5, 'img/boutique/produits/dell_optiplex_7060_sff.png', 'ORDINATEUR DELL OPTIPLEX 7060 SFF', 3, 5, NULL, 1, 'Processeur: Core i7-8700 \r\nRam: 12 Go \r\nDisque dur: 1To HDD \r\nFree dos \r\nEcran dell 21,5'''' \r\nWindows 10 ', 1, 1),
(6, 1, 6, 'img/pr3.png', 'MICRO ORDINATEUR HP 290 G2 MT', 1, 26, NULL, 1, 'Processeur: Intel Dual core \r\nRAM: 4 Go \r\nDisque dur SATA: 500 Go \r\nEcran 20,7’’ \r\nFree dos ', 1, 1),
(7, 3, 0, '', 'Borne de désinfection', 0, NULL, NULL, 1, '<ul>\r\n<li>Mécanisme de fonctionnement du capteur de mouvement</li>\r\n<li>Structure en tube carré en alluminium</li>\r\n<li>Revêtement avec une feuille ACP de 3 mm d''épaisseur sur l''en-tête et une feuille de polycarbonate transparent transparent sur les côtés</li>\r\n<li>Base en structure d''alluminium avec revêtement en tôle quadrillée rampe de -à mm des deux côtés</li>\r\n<li>supermarchés</li>\r\n<li>24 Nos buses de brouillard SS (tubes cachés)</li>\r\n<li>Livré avec un réservoir de 1000 litres suffisant pour suffisant pour pulvériser environ 3000 personnes</li>\r\n<li>Tous les produits chimiques désinfectant s à base d''eau avec sont approuvés par les autorités pour la pulvérisation sur l''homme peuvent être utilisés</li>\r\n<li>Pompe à brouillard monophasé</li>\r\n</ul>\r\n<br>\r\n<b>Lieu d''utilisation : </b>Bureaux, banques, centres d''éducation, lieux publics, supermarchés, salles d''attente, centres commerciaux, immzubles résidentiels, hôpitaux et cliniques, hôtels, station de métro et bus ...\r\n', 1, 1),
(8, 3, 0, '', 'Chambre de désinfection', 0, NULL, NULL, 1, '<ul>\r\n<li>Mécanisme de fonctionnement du capteur de mouvement</li>\r\n<li>Structure en tube carré en alluminium</li>\r\n<li>Revêtement avec une feuille ACP de 3 mm d''épaisseur sur l''en-tête et une feuille de polycarbonate transparent transparent sur les côtés</li>\r\n<li>Base en structure d''alluminium avec revêtement en tôle quadrillée rampe de -à mm des deux côtés</li>\r\n<li>supermarchés</li>\r\n<li>24 Nos buses de brouillard SS (tubes cachés)</li>\r\n<li>Livré avec un réservoir de 1000 litres suffisant pour suffisant pour pulvériser environ 3000 personnes</li>\r\n<li>Tous les produits chimiques désinfectant s à base d''eau avec sont approuvés par les autorités pour la pulvérisation sur l''homme peuvent être utilisés</li>\r\n<li>Pompe à brouillard monophasé</li>\r\n</ul>\r\n<br>\r\n<b>Lieu d''utilisation : </b>Bureaux, banques, centres d''éducation, lieux publics, supermarchés, salles d''attente, centres commerciaux, immzubles résidentiels, hôpitaux et cliniques, hôtels, station de métro et bus ...\r\n', 1, 1),
(9, 3, 0, '', 'Machines à désinfecter les raulets à l''aréoport', 0, NULL, NULL, 1, '<b>Lieu d''utilisation : </b>supermarchés, centres commerciaux ...\r\n', 1, 1),
(10, 3, 0, '', 'Désinfectant pour main (POD2)', 0, NULL, NULL, 1, '<ul>\r\n<li>Station distribution avec papier hygiénique + gants et distributeur de désinfection</li>\r\n<li>peut également être utilisé comme kiosque publicitaire</li>\r\n<li>Durable et facile ^installer</li>\r\n<li>peut être personnalisé</li>\r\n<li>occupe un très petit espace</li>\r\n<li>Facile à maintenir</li>\r\n<li>Disponible en 2 options sans contact ou opération annuelle</li>\r\n<li>Stockage temporaire et de la poubelle et permet de nettoyer selon la convenance</li>\r\n</ul>\r\n<br>\r\n<b>Lieu d''utilisation : </b>Bureaux, banques, centres d''éducation, lieux publics, supermarchés, salles d''attente, centres commerciaux, immeubles résidentiels, hôpitaux et cliniques, hôtels, station de métro et bus ...\r\n', 1, 1),
(11, 3, 0, '', 'Cabine de protection', 0, NULL, NULL, 1, '<b>Lieu d''utilisation : </b>supermarchés, entres commerciaux, Restaurant, Cafés, Snacks, Cantines, Points de dégustation ...\r\n', 1, 1),
(12, 2, 0, '', 'LENOVO THINKPAD X1 CARBON G6', 2, 1, NULL, 1, 'Processeur: Intel Corei7-8550U\r\nMémoire totale: 16GB\r\nDisque dur: 512GB SSD\r\nType d''affichage: 14" FHD IPS\r\nSystème d''exploitation: Windows 10 Pro', 1, 1),
(13, 2, 0, '', 'LENOVO YOGA 390', 2, 10, '', 1, 'Processeur: Corei5-8265U\r\nRAM: 8Go\r\nDisque dur: 256GB SSD\r\nEcran: 13,3"\r\nFree dos', 1, 1),
(14, 2, 0, '', 'LENOVO THINKPAD E590', 2, 17, NULL, 1, 'Processeur: Corei5\r\nRAM: 8Go\r\nDisque dur: 1To\r\nEcran: 15,6" \r\nFree dos', 1, 1),
(15, 2, 0, '', 'LENOVO IDEAPAD L340', 2, 39, NULL, 1, 'Processeur: Intel Corei5-8265U\r\nRam: 4GB\r\nDisque dur: 1To\r\nEcran: 15,6" \r\nFree dos', 1, 1),
(16, 2, 0, '', 'LENOVO IDEAPAD 330', 0, 39, NULL, 1, 'Processeur: Corei3\r\nRAM: 4Go\r\nDisque dur: 1To\r\nEcran: 15,6" \r\nFree dos', 1, 1),
(17, 2, 0, '', 'HP EITE BOOK 850 G4', 1, 1, NULL, 1, 'Processeur: Intel Corei5\r\nRAM: 4Go\r\nDisque dur SATA: 500GB\r\nEcran: 15,6" \r\nWindows 10 Pro 64bits', 1, 1),
(18, 2, 0, '', 'HP ELITEBOOK 850 G2', 1, 1, NULL, 1, 'Processeur: Intel Corei5\r\nRAM: 8Go\r\nDisque dur SATA: 1To\r\nEcran: 15,6" \r\nWindows 7 / 8', 1, 1),
(19, 2, 0, '', 'HP PROBOOK 450 G4', 1, 1, NULL, 1, 'Processeur: Corei5\r\nRAM: 4Go DDR4\r\nDisque dur SATA: 500Go\r\nEcran: 15,6" \r\nFree dos', 1, 1),
(20, 2, 0, '', 'HP ELITE ONE 8000 AIO', 1, 4, NULL, 1, 'Processeur: Intel Corei7-8700\r\nRAM: 8Go\r\nDisque dur SATA: 1To\r\nEcran: 23,8" \r\nWindows 10', 1, 1),
(21, 2, 0, '', 'HP DELL LATITUDE E5590', 3, 4, NULL, 1, 'Processeur: Corei7-8650U\r\nRAM: 8Go\r\nDisque dur: 500Go\r\nEcran: 15,6" \r\nFree dos', 1, 1),
(22, 4, 0, '', 'Lenovo TB-7304I TAB 4 7 R Gift', 2, 4, NULL, 1, '<b>Pack</b> IPS, 1024x600,Multi-touch, MediaTek MT8735D QC 1.1GHZ, ANDROID 7, 1GB,16GB, 3G-WCDMA', 1, 1),
(23, 4, 0, '', 'Lenovo Tab 4-10"TB-X304X', 2, 1, NULL, 1, 'Dual Sim - 10.1 Inch, 16GB, 2GB RAM, 4G LTE, Slate\r\nAndroid 7.0 BK', 1, 1),
(24, 4, 0, '', 'Point of view mobii AB-P1005W-232--3G-KB', 0, 2, NULL, 1, '10", 32GB, 3G-KB', 1, 1),
(25, NULL, 0, '', 'TAB POINT OF VIEW TAB-P1020WM', 0, 9, NULL, 1, '10", 32Go, +Widows 8,1', 1, 1),
(26, 4, 0, '', 'TAB POINT OF VIEW TAB-P805W', 0, 2, NULL, 1, '8", 16GB black\r\n+Windows 10', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit_prestation`
--

CREATE TABLE IF NOT EXISTS `produit_prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prestation` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` text,
  `description` text,
  `mode` tinyint(1) NOT NULL DEFAULT '1',
  `prix` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '1',
  `timing` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=152 ;

--
-- Contenu de la table `produit_prestation`
--

INSERT INTO `produit_prestation` (`id`, `id_prestation`, `titre`, `resume`, `description`, `mode`, `prix`, `rating`, `online`, `timing`) VALUES
(1, 13, 'Cloud Computing Foundation (certification Exin) ', NULL, NULL, 1, 800000, 0, 1, '04 jours'),
(2, 13, 'Cloud Computing: Architectures et Services Avancée', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(3, 4, 'Stratégie de digitalisation', NULL, NULL, 1, 350000, 0, 1, '02 jours'),
(4, 4, 'Pratique du management collaboratif', NULL, NULL, 1, 350000, 0, 1, '02 jours'),
(5, 15, 'HURIS', 'Logiciel de gestion des ressources humaines', 'PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS). PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS). PANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software asPANESS Informatique se positionne avec des partenaires éditeurs internationaux (GOOGLE – JWAY…) sur le marché de l’intégration de solutions de dématérialisation et de Cloud Computing, notamment sur la dimension Software as a Service (SaaS). a Service (SaaS).', 1, 0, 0, 1, '0'),
(6, 20, 'Analyse de la maturité digitale', NULL, NULL, 1, 0, 0, 1, '0'),
(7, 20, 'Analyse de la maturité digitale', NULL, NULL, 1, 0, 0, 1, NULL),
(8, 20, 'Elaboration d\\’une feuille de route digitale', NULL, NULL, 1, 0, 0, 1, NULL),
(9, 20, 'Transformation de l’expérience client', NULL, NULL, 1, 0, 0, 1, NULL),
(10, 20, 'Evolution des usages et apparition de nouveaux «business models»', NULL, NULL, 1, 0, 0, 1, NULL),
(11, 20, 'Culture digitale auprès des collaborateurs', NULL, NULL, 1, 0, 0, 1, NULL),
(12, 20, 'Digitalisation des processus opérationnels, de support', NULL, NULL, 1, 0, 0, 1, NULL),
(13, 20, 'Etude d’impacts sur l’organisation, les modes de travail et sur la culture d’entreprise', NULL, NULL, 1, 0, 0, 1, NULL),
(14, 21, 'Mise en oeuvre et pilotage des projets digitaux', NULL, NULL, 1, 0, 0, 1, NULL),
(15, 21, 'Mise en oeuvre de l’organisation de l’entreprise digitale', NULL, NULL, 1, 0, 0, 1, NULL),
(16, 21, 'Etudes d’impacts technologiques : sur les applications, les données, le cloud, la mobilité, la sécurité', NULL, NULL, 1, 0, 0, 1, NULL),
(17, 21, 'Modélisation des impacts du digital sur les processus opérationnels (collaboratif, Lean 2.0)', NULL, NULL, 1, 0, 0, 1, NULL),
(18, 21, '', NULL, NULL, 1, 0, 0, 1, NULL),
(19, 21, 'Participation aux choix et arbitrage des solutions digitales', NULL, NULL, 1, 0, 0, 1, NULL),
(20, 21, 'Conception des architectures digitales innovantes', NULL, NULL, 1, 0, 0, 1, NULL),
(21, 22, 'Sur les aspects de l’expérience client nous positionnons les solutions à l’instar de Google, Microsoft Dynamics CRM, Odoo, ADEMPIRE…', NULL, NULL, 1, 0, 0, 1, NULL),
(22, 22, 'Sur les aspects des processus opérationnels nous positionnons les solutions Oracle ERP Cloud, Microsoft Office 365, Google…', NULL, NULL, 1, 0, 0, 1, NULL),
(23, 22, 'Sur la brique Infrastructure nous positionnons HP, IBM, DELL, ORACLE PAAS, ORACLE IAAS et Microsoft AZURE et MICROSOFT SYSTEM CENTER, CISCO, JUNIPER, UBIQUITI', NULL, NULL, 1, 0, 0, 1, NULL),
(24, 22, 'Agile Intégration: Développement de modules complémentaires pour combler les Gaps fonctionnels', NULL, NULL, 1, 0, 0, 1, NULL),
(25, 23, 'Identifier les risques liés à vos systèmes d’information à l’appui de la mise en oeuvre d’outils d’analyse et de scoringdes risques informatiques', NULL, NULL, 1, 0, 0, 1, NULL),
(26, 23, 'Mettre en place des contrôles informatisés sur des processus ou des zones de risque spécifiques comme notamment les achats, les stocks, les en-cours de production, la facturation, immobilisations, afin, entre autres, d’y détecter certaines pratiques anorm', NULL, NULL, 1, 0, 0, 1, NULL),
(27, 23, 'Analyser les conditions contractuelles d’usage des licences logicielles dans l’optique d’un contrôle de l’éditeur', NULL, NULL, 1, 0, 0, 1, NULL),
(28, 23, 'Analyser et renforcer la sécurité de vos systèmes d’information', NULL, NULL, 1, 0, 0, 1, NULL),
(29, 32, '<strong>Concevoir des Schémas Directeur Informatique:</strong> Nous vous aidons à aligner le Système d''Information sur la stratégie de l''entreprise. Il s''agit d''aligner la technologie, les hommes et les processus SI pour répondre aux enjeux métier de l''or', NULL, NULL, 1, 0, 0, 1, NULL),
(30, 24, 'Postes de travail bureautique HP, Lenovo, Dell, Fujitsu, Asus,Toshiba', NULL, NULL, 1, 0, 0, 1, NULL),
(31, 24, 'Stations de travail DAO/CAOHP, Lenovo, Dell, Fujitsu, Asus,Toshiba', NULL, NULL, 1, 0, 0, 1, NULL),
(32, 24, 'Serveurs HP, Cisco, Dell, IBM', NULL, NULL, 1, 0, 0, 1, NULL),
(33, 24, 'Imprimantes HP, Ricoh, Kyocera, Cano', NULL, NULL, 1, 0, 0, 1, NULL),
(34, 24, 'Eléments actifs Cisco, Juniper, Mikrotic', NULL, NULL, 1, 0, 0, 1, NULL),
(35, 24, 'Firewall Appliance Dell,Sonic,WALL', NULL, NULL, 1, 0, 0, 1, NULL),
(36, 24, 'Software Microsoft, Linux,VMWare, Kaspersky', NULL, NULL, 1, 0, 0, 1, NULL),
(37, 24, 'Stockage sauvegarde Mozy', NULL, NULL, 1, 0, 0, 1, NULL),
(38, 24, 'Téléphonie Keyyo, 3CX, CISCO, GRAND STREAM', NULL, NULL, 1, 0, 0, 1, NULL),
(39, 24, 'Consommables Toutes marques', NULL, NULL, 1, 0, 0, 1, NULL),
(40, 25, 'Architecture et solutions consolidées de stockage de données, NAS, SAN (FC, iSCSI, FCIP, iFCP, FCoE)', NULL, NULL, 1, 0, 0, 1, NULL),
(41, 25, 'Solutions de protection de données à base des produits: Symantec, EMC, HP.', NULL, NULL, 1, 0, 0, 1, NULL),
(42, 25, 'Système de réplication distante de données.', NULL, NULL, 1, 0, 0, 1, NULL),
(43, 25, 'Plan de Reprise d’Activés en cas de Sinistre (PRAS, Virtualisation, Cloud)', NULL, NULL, 1, 0, 0, 1, NULL),
(44, 26, 'Réseaux LAN, WAN et MPLS', NULL, NULL, 1, 0, 0, 1, NULL),
(45, 26, 'Solutions de sécurité logique et matérielle', NULL, NULL, 1, 0, 0, 1, NULL),
(46, 26, 'Solutions d’administration', NULL, NULL, 1, 0, 0, 1, NULL),
(47, 26, 'VoIPet la ToIP', NULL, NULL, 1, 0, 0, 1, NULL),
(48, 26, 'Infrastructures SAN et NAS', NULL, NULL, 1, 0, 0, 1, NULL),
(49, 26, 'Serveurs Windows ou Linux', NULL, NULL, 1, 0, 0, 1, NULL),
(50, 26, 'Solutions de sécurité électronique', NULL, NULL, 1, 0, 0, 1, NULL),
(51, 26, 'Solutions de virtualisation et le cloud computing', NULL, NULL, 1, 0, 0, 1, NULL),
(52, 29, 'Microsft Outlook', NULL, NULL, 1, 0, 0, 1, NULL),
(53, 29, 'Microsoft exchange', NULL, NULL, 1, 0, 0, 1, NULL),
(54, 29, 'Microsft sharepoint', NULL, NULL, 1, 0, 0, 1, NULL),
(55, 31, '<strong>Prototypage et développement: </strong>A partir de votre cahier des charges, nos équipes de développeurs en ingéniérieapplicative effectuent le prototypageet le développement de votre applicationselon un processus itératif.', NULL, NULL, 1, 0, 0, 1, NULL),
(56, 31, '<strong>Intégration</strong>: Une fois votre application développée, nos équipes se chargent de son intégration dans votre système d’information, afin de garantir l’interopérabilité entre les applications existantes, la cohérence de vos données et leur ma', NULL, NULL, 1, 0, 0, 1, NULL),
(57, 31, '<strong>La maintenance applicative</strong>: Lorsque le projet d’ingénierie applicative est terminé, nous en effectuons pour vous lamaintenance de votre applicationau quotidien.', NULL, NULL, 1, 0, 0, 1, NULL),
(58, 33, 'CCNA Certification Fast Track Program', NULL, NULL, 1, 800000, 0, 1, '05 jours'),
(59, 33, 'Mettre en œuvre les réseaux Cisco IP commutés', NULL, NULL, 1, 750000, 0, 1, '05 jours'),
(60, 33, 'Mettre en œuvre les Switches CataLyst 6500 Series', NULL, NULL, 1, 800000, 0, 1, '05 jours'),
(61, 33, 'Configurer MPLS sur les routeurs Cisco', NULL, NULL, 1, 750000, 0, 1, '05 jours'),
(62, 33, 'Mettre en œuvre une Infrastructure Cisco MultiCast', NULL, NULL, 1, 800000, 0, 1, '05 jours'),
(63, 33, 'Cisco IPV6 concepts, design et déploiement', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(64, 33, 'Designing Cisco Network Service Architectures', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(65, 34, 'Mettre en œuvre la sécurité des réseaux IOS Cisco', NULL, NULL, 1, 800000, 0, 1, '05 jours'),
(66, 34, 'Mettre en œuvre les solutions Cisco Secure Access', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(67, 34, 'Mettre en œuvre les solutions Cisco pour sécuriser son réseau', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(68, 34, 'Gérer les menaces avec Cisco Threat Control Systems', NULL, NULL, 1, 800000, 0, 1, '05 jours'),
(69, 34, 'Mettre en œuvre la sécurité avec Cisco ASA', NULL, NULL, 1, 750000, 0, 1, '05 jours'),
(70, 35, 'Sauvegarde et Restauration', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(71, 35, 'Interroger les bases de données avec le langage SQL', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(72, 35, 'Administrateur base de données Oracle 11G', NULL, NULL, 1, 850000, 0, 1, '03 jours'),
(73, 36, 'Administration système Red Hat I', NULL, NULL, 1, 950000, 0, 1, '05 jours'),
(74, 36, 'Mettre en œuvre le service d’identité KeyStone sur open strack (Administration de Red Hat Open Strack CL210)', NULL, NULL, 1, 950000, 0, 1, '05 jours'),
(75, 37, 'Office 365 : gestion des identités et des services', NULL, NULL, 1, 600000, 0, 1, '05 jours'),
(76, 37, 'Concevoir une infrastructure Office 365', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(77, 37, 'Virtualisation de serveurs avec Hyper-V et System Center', NULL, NULL, 1, 950000, 0, 1, '05 jours'),
(78, 37, 'Virtualiser les bureaux et applications d’entreprise Microsoft', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(79, 38, 'Configurer et gérer un environnement de messagerie Exchange 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(80, 38, 'Fonctionnalités avancées de la messagerie d’Exchange Server 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(81, 38, 'Implémentation et planification de Lync Server 2016', NULL, NULL, 1, 1100000, 0, 1, '05 jours'),
(82, 39, 'Installer et Administrer une base de données SQL Server', NULL, NULL, 1, 1100000, 0, 1, '05 jours'),
(83, 40, 'Conception et gestion d’un espace collaboratif Sharepoint 2016', NULL, NULL, 1, 650000, 0, 1, '03 jours'),
(84, 40, 'Mise en œuvre des fonctionnalités avancées de SharePoint Server 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(85, 41, 'Installation et configuration de Windows Server 2012 R2 / 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(86, 41, 'Administrer Microsoft Windows Server 2012 R2 / 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(87, 41, 'Services réseaux avec Windows Server 2012 et 2012 R2  /  2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(88, 41, 'Stockage et Haute-Disponibilité avec Windows Server 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(89, 42, 'Office 365 : gestion des identités et des services', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(90, 42, 'Virtualisation de serveurs avec Hyper-V et System Center', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(91, 42, 'Virtualiser les bureaux et applications d’entreprise Microsoft', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(92, 42, 'Configurer et déployer un Cloud Privé avec System Center 2012', NULL, NULL, 1, 600000, 0, 1, '05 jours'),
(93, 43, 'Configurer et gérer un environnement de messagerie Exchange 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(94, 43, 'Fonctionnalités avancées de la messagerie d’Exchange Server 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(95, 43, 'Implémentation et planification de Lync Server 2016', NULL, NULL, 1, 1100000, 0, 1, '05 jours'),
(96, 44, 'Concevoir des solutions en Business Intelligence avec SQL Server', NULL, NULL, 1, 0, 0, 1, NULL),
(97, 45, 'Conception et gestion d’un espace collaboratif Sharepoint 2016', NULL, NULL, 1, 650000, 0, 1, '03 jours'),
(98, 45, 'Mise en œuvre des fonctionnalités avancées de SharePoint Server 2016', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(99, 46, 'Installation et configuration de Windows Server 2012 R2 / 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(100, 46, 'Installation et configuration de Windows Server 2012 R2 / 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(101, 46, 'Services réseaux avec Windows Server 2012 et 2012 R2  /  2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(102, 46, 'Stockage et Haute-Disponibilité avec Windows Server 2016', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(103, 47, 'Préparation à la certification CISSP', NULL, NULL, 1, 800000, 0, 1, '06 jours'),
(104, 47, 'Préparation à la certification CISA (Information Security Auditor)', NULL, NULL, 1, 700000, 0, 1, '06 jours'),
(105, 47, 'Computer Hacking Forensic Investigator (CHFI)', NULL, NULL, 1, 700000, 0, 1, '10 jours'),
(106, 47, 'Préparation à la certification CCNA Security', NULL, NULL, 1, 450000, 0, 1, '05 jours'),
(107, 4, 'Manager : Comment préparer la Transformation Digitale de votre  entreprise', NULL, NULL, 1, 250000, 0, 1, '01 jour'),
(108, 4, 'Réussir un projet de transformation digitale dans un service public', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(109, 4, 'Une équipe de vente à l’heure du digital', NULL, NULL, 1, 450000, 0, 1, '03 jours'),
(110, 4, 'Comment utiliser le Big Data pour optimiser la prise de décision', NULL, NULL, 1, 450000, 0, 1, '03 jours'),
(111, 4, 'Gestion du changement dans la transformation digitale', NULL, NULL, 1, 350000, 0, 1, '03 jours'),
(112, 4, 'Intégration du digital dans les processus de gestion des ressources humaines (réussir la digitalisation de la fonction RH)', NULL, NULL, 1, 300000, 0, 1, '02 jours'),
(113, 4, 'Intégration du digital dans le métier d’assistance de direction et axes d’orientation de la carrière', NULL, NULL, 1, 450000, 0, 1, '03 jours'),
(114, 3, 'Marketing digital : fondamentaux, processus et outils de base', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(115, 3, 'Optimiser l’expérience client grâce au digital', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(116, 3, 'Développer ses ventes à l’aide du digital', NULL, NULL, 1, 350000, 0, 1, '03 jours'),
(117, 3, 'Spécialisation sur le content marketing', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(118, 3, 'Design des sites web', NULL, NULL, 1, 550000, 0, 1, '05 jours'),
(119, 50, 'Préparation à la certification Agile Project Management PMI-ACP', NULL, NULL, 1, 1000000, 0, 1, '05 jours'),
(120, 50, 'Ingénierie logicielle Agile (Certification PSD)', NULL, NULL, 1, 1300000, 0, 1, '06 jours'),
(121, 50, 'Formation Agile Professional SCRUM Master', NULL, NULL, 1, 1500000, 0, 1, '06 jours'),
(122, 51, 'La gestion des projets informatiques', NULL, NULL, 1, 850000, 0, 1, '05 jours'),
(123, 51, 'Préparation à l’examen PMP – Project Management Professional', NULL, NULL, 1, 850000, 0, 1, '06 jours'),
(124, 51, 'La communication et le leadership pour le chef de projet ', NULL, NULL, 1, 800000, 0, 1, '06 jours'),
(125, 52, 'PRINCE2 Foundation', NULL, NULL, 1, 1000000, 0, 1, '06 jours'),
(126, 52, 'PRINCE2 Practitioner Upgrade', NULL, NULL, 1, 1200000, 0, 1, '07 jours'),
(127, 53, 'Cobit Foundation et la gouvernance des SI', NULL, NULL, 1, 650000, 0, 1, '03 jours'),
(128, 53, 'Les tableaux de bord de la performance informatique', NULL, NULL, 1, 650000, 0, 1, '03 jours'),
(129, 54, 'ITIL Foundation 2011', NULL, NULL, 1, 700000, 0, 1, '04 jours'),
(130, 54, 'ITIL® Service Lifecycle : Continual Service Improvement (LCSI)', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(131, 54, 'ITIL® Service Lifecycle : Service Operation (LSO)', NULL, NULL, 1, 750000, 0, 1, '04 jours'),
(132, 54, 'ITIL® Service Lifecycle : Service Strategy (LSS)', NULL, NULL, 1, 750000, 0, 1, '04 jours'),
(133, 54, 'ITIL® Service Lifecycle : Service Transition (LST)', NULL, NULL, 1, 800000, 0, 1, '04 jours'),
(134, 54, 'ITIL® v3 Service Expert : la gestion du cycle de vie', NULL, NULL, 1, 500000, 0, 1, '04 jours'),
(135, 55, 'ISO 27002 : 2013 Foundation - Sécurité des SI', NULL, NULL, 1, 900000, 0, 1, '05 jours'),
(136, 55, 'ISO 27005 Risk Manager', NULL, NULL, 1, 1100000, 0, 1, '05 jours'),
(137, 7, 'Gestion de crise', NULL, NULL, 1, 500000, 0, 1, '02 jours'),
(138, 7, 'Sécurité des infrastructures', NULL, NULL, 1, 500000, 0, 1, '02 jours'),
(139, 7, 'Conception des stratégies et politique de sécurité', NULL, NULL, 1, 500000, 0, 1, '02 jours'),
(140, 7, 'Sécurité physique', NULL, NULL, 1, 600000, 0, 1, '03 jours'),
(141, 7, 'Sécurité du mail et du courriel', NULL, NULL, 1, 500000, 0, 1, '02 jours'),
(142, 7, 'Récupération physique des données', NULL, NULL, 1, 1000000, 0, 1, '05 jours'),
(143, 7, 'Audit et test de pénétration', NULL, NULL, 1, 1000000, 0, 1, '05 jours'),
(144, 7, 'Recherche et détection de Malware', NULL, NULL, 1, 950000, 0, 1, '05 jours'),
(145, 7, 'Investigation numérique', NULL, NULL, 1, 1500000, 0, 1, '10 jours'),
(146, 14, 'Big Data : Les essentiels', NULL, NULL, 1, 650000, 0, 1, '02 jours'),
(147, 14, 'Approche et réussite d’un projet de virtualisation', NULL, NULL, 1, 800000, 0, 1, '04 jours'),
(148, 56, 'Solution e-learning', 'Offre adaptée au contexte de votre organisation', '<p>\n<h4 style=''color : #1FA7EA ''>Qu’est-ce que c’est ?</h4> \n<strong>L’e-learning </strong>est l''utilisation des nouvelles technologies multimédias de l''Internet pour améliorer la qualité de l''apprentissage en facilitant d''une part l''accès à des ressources et à des services, d''autre part les échanges et la collaboration à distance. \n</p>\n\n<br>\n<h4 style=''color:#1FA7EA ''>Les raisons pour choisir le e-learning</h4> \n<ul class="check-circle" style=''line-height: 1em;''>\n	<li>Réduction des coûts de formation</li>\n	<li>Gain de temps : suppression des déplacements, de la présence physique du formateur</li>\n	<li>Souplesse et flexibilité de la formule : formation à la carte, modulable, individualisée</li>\n	<li>Efficacité : définition des objectifs, évaluation de la progression et validation des connaissances</li>\n	<li>Possibilité de réutilisation des programmes</li>\n	<li>Mutualisation des infrastructures et des savoirs</li>\n	<li>Population cible plus étendue</li>\n	<li>Apprentissage plus rapide, plus facile, interactivité</li>\n	<li>Standardisation des savoirs dans l’entreprise</li>\n	<li>Création d’une culture d’entreprise, Création d’une dynamique d’équipe</li>\n	<li>Hausse de la compétence des collaborateurs qui trouvent exactement</li>\n</ul>\n\n<br>\n<h4 style=''color :#1FA7EA''>Objectifs </h4> \n<ul class="check-circle">\n	<li>Concevoir et conduire la mise en place de projets de e-formation</li>\n	<li>Acquérir une méthodologie de conduite de projet en ingénierie de formation</li>\n	<li>Elaborer des programmes de formation modulaires adaptés aux besoins</li>\n	<li>Utiliser les potentialités des technologiques multimédia pour créer des ressources pédagogiques</li>\n	<li>Développer les compétences demandées par les nouvelles situations de formation</li>\n	<li>Créer et animer une communauté d’apprentissage</li>\n	<li>Formaliser un cahier des charges et en assurer la maîtrise d’ouvrage</li>\n	<li>Expérimenter un environnement de formation</li>\n</ul>\n\n<br><br>\n<h4 style=''color :#1FA7EA ''> PANESS, tout une équipe d’experts à votre écoute : </h4>\n<ul class="check-circle">\n	<li>Experts dans le digital</li>\n	<li>Ingénieurs pédagogiques</li> \n	<li>Rédacteurs professionnels</li>\n</ul>\n\n</br>\n<h4 style=''color :#1FA7EA ''> Notre Offre</h4>\n<ul class="check-circle">\n	<li>Conception des cahiers de charge</li>\n	<li>Intégration et paramétrage des plateformes e-learning</li>\n	<li>Création de modules e-Learning sur mesure</li>\n	<li>Retransmission différée de vos évènements présentiels et création d’applications pour former et informer vos collaborateurs, clients, fournisseurs</li> \n	<li>Transfert des compétences aux utilisateurs et aux administrateurs de vos plates formes</li>\n</ul>\n', 1, 0, 0, 1, '0'),
(149, 15, 'SAP SuccessFactors ', 'solutions cloud pour la gestion des ressources humaines', '<h4>Un SIRH modulaire, intégré, 100% cloud, qui couvre tous les processus RH</h4>\n<p>Avec sa couverture fonctionnelle très étendue, la suite cloud RH SuccessFactors offre des solutions puissantes, centralisées et simples d’utilisation pour tous les processus RH : recrutement et intégration, définition des objectifs, gestion de la performance, de la rémunération, de la formation, succession, gestion administrative RH (core RH), gestion des talents et indicateurs RH complets, libre-service pour les salariés.</p>\n \n<h4>Une solution complète, leader mondial des logiciels de gestion du capital humain</h4>\n<p>SAP SuccessFactors répond aux besoins de toutes les entreprises, quelles que soient leur taille, leur activité et leur nationalité. Avec plus de 6 700 entreprises clientes et plus de 120 millions d’utilisateurs dans le monde, les solutions SAP SuccessFactors sont unanimement reconnues et plébiscitées par les analystes du marché. Ces solutions capitalisent les bonnes pratiques fonctionnelles éprouvées sur le terrain par l’ensemble de la base installée clients, pour faciliter la démarche projet et gagner un temps précieux sur la mise en œuvre.</p>\n \n<h4>Pourquoi choisir une solution RH cloud ?</h4>\n<p>Les solutions SaaS (Software as a Service) de SuccessFactors reposent sur une architecture sécurisée, innovante et très évolutive. L’expertise et l’expérience 100% cloud de PANESS permettent d’accélérer le déploiement et les résultats. Les utilisateurs bénéficient d’une innovation continue, pour un coût total d’acquisition et de possession très inférieur à celui de la plupart des autres solutions.</p>\n \n<strong>Vous pouvez ainsi atteindre l’objectif de connecter 100% de vos collaborateurs à votre SIRH.</strong>\n', 1, 0, 0, 1, NULL),
(150, 56, 'DOKEOS LMS', 'Une plateforme de formation personnalisable pour former, évaluer et certifier les compétences de vos employés ou apprenants.', 'Dokeos est une plateforme de e-learning open source. Elle est employée par une communauté mondiale d''utilisateurs et de développeurs. Créée par le fondateur de Claroline, Dokeos a évolué vers une solution qui s''adapte mieux aux entreprises et propose des outils issus des nouvelles technologies.\n\nLes formations sont organisées de manière à ce que l''apprenant soit le plus autonome possible avec un parcours pédagogique clair et des exercices interactifs. Les autres plateformes d''e-learning exigent le suivi d''un formateur et/ou d''un animateur et proposent, par conséquent, des informations détaillées sur les apprenants : elles sont davantage tournées vers les organismes de formation. Les nouvelles technologies sont quant à elles apportées par des outils de création de cartes heuristiques, de vidéoconférence, de podcasts, de "Serious Game" ou par le support des tablettes tactiles.\nLes fonctionnalités proposées par Dokeos sont bien résumées sur ce schéma.\n\nEnfin, cette plateforme est personnalisable, avec un environnement flexible, sur mesure. Sa prise en main est rapide et très intuitive. L''installation de Dokeos est aisée. Sa gestion est sobre, via une interface Web, et ses outils sont intuitifs.', 1, 0, 0, 1, NULL),
(151, 56, '360Learning', ' plateforme de Collaborative Learning', '<h4>360Learning, une solution e-learning innovante et collaborative\n</h4>\nEn 3 années, 360Learning est devenu le LMS de l’ère digitale permettant aux entreprises de créer, diffuser et suivre simplement des formations digitales, présentielles, ou blended de type MOOC ou SPOC. 360Learning développe une plateforme à la pointe de la pédagogie digitale, construite autour des interactions entre apprenants et formateurs, pour intensifier la transmission des savoirs, au sein de l’entreprise et en dehors, avec ses partenaires, clients et prospects.\n', 1, 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(3) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` longtext,
  `type` varchar(255) NOT NULL,
  `chiffre` int(4) DEFAULT NULL,
  `date_reference` date DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  `site_web` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `reference`
--

INSERT INTO `reference` (`id`, `id_entreprise`, `nom`, `logo`, `description`, `type`, `chiffre`, `date_reference`, `online`, `site_web`) VALUES
(1, 1, NULL, 'img/client1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(2, 1, NULL, 'img/client2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(3, 1, NULL, 'img/client3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(4, 1, NULL, 'img/client4.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(5, 1, NULL, 'img/client5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(6, 1, NULL, 'img/client6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(7, 1, NULL, 'img/client7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(8, 1, NULL, 'img/client8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Client', NULL, NULL, 1, NULL),
(9, 0, 'SAP SuccessFactors', 'img/partner/sap_partner.png', 'PANESS INFORMATIQUE, est votre partenaire privilégié pour tous les sujets liés aux solutions SAP SuccessFactors : acquisition et mise en place de la suite logicielle complète ou d’une sélection de modules, déploiement international, renouvellement de votre contrat de licences, évolution de votre SIRH actuel grâce à l’intégration de modules complémentaires, accompagnement au changement, support mondial, conseil en SIRH et décryptage des releases.', 'Partenaire', NULL, NULL, 1, 'https://www.sap.com/france/products/human-resources-hcm/about-successfactors.html'),
(10, 0, 'DOKEOS', 'img/partner/dokeos_partner.png', 'DOKEOS, expert en solutions e-learning sur mesure depuis 15 ans DOKEOS, créateur de solutions e-learning, accompagne les entreprises, opérateurs de #formation et multinationales dans leurs projets de formation en ligne. Parnetaire DOKEOS, PANESS vous accompagne dans l’élaboration de solutions de formation et d’évaluation sur mesure.  Dans notre offre de services, nous nous adaptons aux nouveaux besoins et changements d’usages des entreprises: communautés de pratique, apprentissage informel, réseaux sociaux d’entreprises, mobilité et délocalisation croissante des personnels.', 'Partenaire', NULL, NULL, 1, 'https://www.dokeos.com/fr/'),
(11, 0, 'NUTRAMIX', 'img/partner/nutanix_partner.png', 'L’hyperconvergence permet de faciliter la modernisation de votre Datacenter en offrant une agilité plus forte, tout en gardant le contrôle et la gestion de son infrastructure. Nutanix a été le pionnier du marché HCI. Grace à notre partenariat, Nous facilitons plus que jamais la conception, la construction et la gestion de l''informatique des data centers. ', 'Partenaire', NULL, NULL, 1, 'https://www.nutanix.com/fr'),
(12, 0, 'Hewlett-Packard', 'img/partner/hp_partner.png', 'PANESS s''appuie sur son partenaire HP pour vous fournir les meilleurs solutions innovantes en matiere d''acquisition des Servers, desktop, laptops et tablettes.', 'Partenaire', NULL, NULL, 1, 'https://www8.hp.com/fr/'),
(13, 0, 'LONOVO', 'img/partner/lonovo_partner.png', 'Lenovo innove en permanence pour rester l''un des leaders de l''ère PC+. Actuellement premier fabricant de PC au monde, Lenovo est également leader sur le marché des smartphones et des tablettes, et s''attache à devenir l''un des premiers acteurs mondiaux du secteur des technologies dans son ensemble.', 'Partenaire', NULL, NULL, 1, 'https://www.lenovo.com/fr/fr/pc/'),
(14, 0, '360Learning', 'img/partner/360_learning_partner.png', 'Cette plateforme permet de créer des formations digitales sur le web et sur mobile à l’aide d’un outil auteur intégré. elle a été développé afin de pouvoir diffuser le savoir de manière fun et interactive et contrer l''inefficacité avérée du e-learning traditionnel', 'Partenaire', NULL, NULL, 1, 'https://360learning.com/fr/elearning/'),
(15, 0, 'NobiSoft', 'img/partner7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Partenaire', NULL, NULL, 0, NULL),
(16, 0, 'Sage', 'img/partner8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Partenaire', NULL, NULL, 0, NULL),
(17, 0, 'Clients', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Chiffre', 500, NULL, 1, NULL),
(18, 0, 'Projets', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Chiffre', 600, NULL, 1, NULL),
(19, 1, 'Collaborateurs', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Chiffre', 150, NULL, 1, NULL),
(20, 1, 'Ans', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'Chiffre', 20, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `r_prestation_icone`
--

CREATE TABLE IF NOT EXISTS `r_prestation_icone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_icone` int(11) DEFAULT NULL,
  `id_prestation` int(11) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `r_prestation_icone`
--

INSERT INTO `r_prestation_icone` (`id`, `id_icone`, `id_prestation`, `online`) VALUES
(1, 1, 16, 1),
(2, 2, 17, 1),
(3, 3, 18, 1),
(4, 4, 19, 1);

-- --------------------------------------------------------

--
-- Structure de la table `r_produit_couleur`
--

CREATE TABLE IF NOT EXISTS `r_produit_couleur` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_couleur` int(4) NOT NULL,
  `id_produit` int(4) NOT NULL,
  `online` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `r_produit_couleur`
--

INSERT INTO `r_produit_couleur` (`id`, `id_couleur`, `id_produit`, `online`) VALUES
(1, 1, 1, 1),
(2, 9, 1, 1),
(3, 3, 2, 1),
(4, 8, 2, 1),
(5, 9, 2, 1),
(6, 10, 3, 1),
(7, 7, 3, 1),
(8, 5, 3, 1),
(9, 2, 3, 1),
(10, 9, 6, 1),
(11, 7, 6, 1),
(12, 4, 6, 1),
(13, 10, 7, 1),
(14, 1, 7, 1),
(15, 2, 7, 1),
(16, 8, 8, 1),
(17, 6, 8, 1),
(18, 5, 8, 1),
(19, 3, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `r_produit_prestation_icone`
--

CREATE TABLE IF NOT EXISTS `r_produit_prestation_icone` (
  `id` int(11) NOT NULL,
  `id_icone` int(11) NOT NULL,
  `id_produit_prestation` int(11) NOT NULL,
  `online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `r_produit_taille`
--

CREATE TABLE IF NOT EXISTS `r_produit_taille` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_taille` int(4) NOT NULL,
  `id_produit` int(4) NOT NULL,
  `online` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `r_produit_taille`
--

INSERT INTO `r_produit_taille` (`id`, `id_taille`, `id_produit`, `online`) VALUES
(1, 1, 1, 1),
(2, 3, 1, 1),
(3, 4, 1, 1),
(4, 2, 2, 1),
(5, 3, 2, 1),
(6, 5, 3, 1),
(7, 1, 6, 1),
(8, 3, 6, 1),
(9, 5, 6, 1),
(10, 6, 6, 1),
(11, 1, 7, 1),
(12, 2, 7, 1),
(13, 3, 7, 1),
(14, 4, 7, 1),
(15, 5, 7, 1),
(16, 1, 8, 1),
(17, 2, 8, 1),
(18, 3, 8, 1),
(19, 4, 8, 1),
(20, 5, 9, 1),
(21, 4, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE IF NOT EXISTS `taille` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `numero` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `theme_blog`
--

CREATE TABLE IF NOT EXISTS `theme_blog` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_parent` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `theme_blog`
--

INSERT INTO `theme_blog` (`id`, `id_parent`, `titre`, `resume`, `online`) VALUES
(1, 0, 'Partenariat', '', 1),
(2, 0, 'Life Style', '', 1),
(3, 0, 'My Events', '', 1),
(4, 0, 'Travel', '', 1),
(5, 0, 'Technology', '', 1),
(6, 0, 'Education', '', 1),
(7, 0, 'Uncategorized', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `montant` int(5) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date_trans` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_prestation`
--

CREATE TABLE IF NOT EXISTS `type_prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_prestation`
--

INSERT INTO `type_prestation` (`id`, `titre`, `code`, `online`) VALUES
(1, 'Formation', 'Formation', 1),
(2, 'Solution', 'Solution', 1),
(3, 'Service', 'Service', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
