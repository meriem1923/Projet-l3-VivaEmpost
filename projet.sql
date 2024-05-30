-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mai 2024 à 21:17
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `employeur`
--

CREATE TABLE `employeur` (
  `Id_emp` int(10) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Prenom` varchar(20) DEFAULT NULL,
  `Date_naissance` date DEFAULT NULL,
  `Langue_metrise` text DEFAULT NULL,
  `addresse` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Num_telp` int(20) DEFAULT NULL,
  `Diplome` text DEFAULT NULL,
  `Sexe` varchar(10) DEFAULT NULL,
  `Taille` float DEFAULT NULL,
  `Situation_fam` text DEFAULT NULL,
  `nous_contacter` text NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `employeur`
--

INSERT INTO `employeur` (`Id_emp`, `Nom`, `Prenom`, `Date_naissance`, `Langue_metrise`, `addresse`, `Email`, `Num_telp`, `Diplome`, `Sexe`, `Taille`, `Situation_fam`, `nous_contacter`, `image`, `user`, `password`) VALUES
(414, 'Merzouk', 'Rachid', '1980-10-15', 'Arabe, Français', 'Boulevard du 1er Novembre, Annaba', 'rachid.merzouk@gmail.com', 697005365, 'CAP en Boucherie', 'Homme', 1.8, 'Divorcé', 'Avec plus de 10 ans d\'expérience comme boucher, je maîtrise parfaitement les techniques de découpe et de préparation des viandes. J\'attache une grande importance à l\'hygiène et à la qualité des produits. Je suis à l\'écoute des clients pour répondre au mieux à leurs attentes.', 'images/pi2.jpg', 'rachid1980', '1980'),
(413, 'Bouzid', 'Samira', '1993-07-22', 'Arabe, Anglais', ' Avenue de la Révolution, Annaba', 'samira.bouzid@gmail.com', 797005365, 'BTS en Commerce', 'Femme ', 1.65, 'Célibataire', 'Motivée et dynamique, je possède une solide expérience en vente et en merchandising. J\'aime travailler en équipe et aider les clients à trouver ce dont ils ont besoin. Mon objectif est de développer mes compétences en commerce de détail et de contribuer au succès du supermarché.', 'images/femme.jpg', 'samira1993', '1993'),
(412, 'Benamar', 'Ahmed', '1992-04-15', 'Arabe, Français', 'Rue Didouche Mourad, Annaba', 'ahmed.benamar@gmail.com', 797475665, 'Baccalauréat', 'Homme', 1.79, 'Célibataire', 'Je suis passionné par la gestion et le service à la clientèle. Avec plus de 5 ans d\'expérience dans le secteur de la grande distribution, je m\'efforce d\'apporter un service de qualité et de contribuer efficacement à la performance de l\'équipe. Mes compétences en gestion et mon sens de l\'organisation me permettent de gérer les opérations quotidiennes avec efficacité.', 'images/pi2.jpg', 'ahmed1992', '1992'),
(411, 'Douget', 'Assala', '2001-03-26', 'English , Français ', 'Valmascort', 'assala2004@gmail.com', 687925545, 'Master 2 Comptabilite et finance', 'Femme ', 1.68, 'Célibataire', 'Douget Assala', 'images/femme.jpg', 'assala2001', '1234'),
(415, 'Hachemi', 'Leila', '1990-01-30', 'Arabe, Français', 'Cité Auzas, Annaba', 'leila.hachemi@gmail.com', 687944545, 'Licence en Informatique', 'Femme ', 1.65, 'Célibataire', 'Je suis spécialisée dans la gestion des systèmes informatiques et l\'assistance technique. J\'ai une expérience significative en gestion de base de données et en maintenance de matériel informatique. Je suis rigoureuse et méthodique, ce qui me permet de résoudre rapidement les problèmes techniques.', 'images/femme.jpg', 'leila1990', '1990'),
(416, 'Saadi', 'Yasmine', '1995-05-05', 'Arabe, Anglais', 'Rue des Frères Aissiou, Annaba', 'yasmine.saadi@gmail.com', 775060330, 'Bac+2 en Marketing', 'Femme ', 1.65, 'Célibataire', 'Je suis passionnée par le marketing et la communication. J\'ai une expérience de deux ans en tant que responsable marketing dans le secteur de la grande distribution. Je suis créative et j\'aime développer des stratégies pour attirer et fidéliser les clients. Mon objectif est de contribuer à augmenter la visibilité et les ventes du supermarché.', 'images/femme.jpg', 'yasmine1995', '1995'),
(417, 'Boukhalfa', 'Ali', '1988-11-20', 'Arabe, Français', 'Rue de la Liberté, Annaba', 'ali.boukhalfa@gmail.com', 794909887, 'Licence en Logistique', 'Homme', 1.77, 'Marié', 'Je possède une solide expérience en gestion logistique, avec une expertise en gestion des stocks et optimisation des flux. Mon but est de garantir une disponibilité constante des produits et de réduire les coûts de stockage. Je suis très organisé et je travaille bien sous pression.', 'images/pi2.jpg', 'ali1988', '1988'),
(418, 'Bessaoud', 'Nadia', '1987-12-11', 'Arabe, Français', 'Avenue de l\'Indépendance, Annaba', 'nadia.bessaoud@gmail.com', 775260660, ' BTS en Comptabilité', 'Femme ', 1.73, 'Mariée', 'Comptable expérimentée, je suis minutieuse et j\'ai un grand sens des responsabilités. J\'ai travaillé dans plusieurs entreprises et j\'ai une solide connaissance des procédures comptables et fiscales. Je souhaite mettre mes compétences au service du supermarché pour assurer une gestion financière rigoureuse et fiable.', 'images/femme.jpg', 'nadia1987', '1987'),
(419, 'Lounis', 'Khaled', '1983-08-09', 'Arabe, Français', 'Rue Ibn Khaldoun, Annaba', 'khaled.lounis@gmail.com', 675060330, 'CAP en Électricité', 'Homme', 1.79, 'Marié', 'Électricien qualifié avec plus de 8 ans d\'expérience, je suis spécialisé dans la maintenance et l\'installation de systèmes électriques. J\'ai travaillé sur de nombreux projets commerciaux et résidentiels, et je suis capable de diagnostiquer et de réparer rapidement les problèmes électriques.', 'images/pi2.jpg', 'khaled1983', '1983'),
(420, 'Hamza', 'Khaled', '1994-04-17', 'Arabe, Français,Anglais', 'Cité des 200 Logements, Annaba', 'reda.hamza@gmail.com', 675060926, 'Bac+3 en Commerce International', 'Homme', 1.88, 'Célibataire', 'Passionné par le commerce international, j\'ai une expérience significative en gestion des importations et des exportations. J\'aime travailler dans un environnement dynamique et relever de nouveaux défis. Mon objectif est de contribuer à l\'expansion du supermarché sur le marché international.', 'images/pi2.jpg', 'Reda1994', '1994'),
(421, 'Messaoudi', 'Souad', '1991-01-28', 'Arabe, Français', 'Rue de l\'Emir Abdelkader, Annaba', 'souad.messaoudi@gmail.com', 697846365, 'Licence en Psychologie', 'Femme ', 1.72, 'Célibataire', 'Je suis psychologue diplômée, avec une passion pour l\'accompagnement et le soutien des personnes. Mon expérience dans le domaine du recrutement et des ressources humaines me permet de comprendre les besoins des employés et de contribuer à un environnement de travail positif et productif.', 'images/femme.jpg', 'souad1991', '1991');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_ent` int(30) NOT NULL,
  `Nom_ent` varchar(30) DEFAULT NULL,
  `Service_ent` varchar(20) DEFAULT NULL,
  `L'adresse` text DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Num_telphone` text NOT NULL,
  `user_ent` varchar(30) DEFAULT NULL,
  `password_ent` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id_ent`, `Nom_ent`, `Service_ent`, `L'adresse`, `Email`, `Num_telphone`, `user_ent`, `password_ent`) VALUES
(64, 'viva', 'supermarche', 'annaba', 'contact@vivamall.dz', '0667571883', '1465', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Sallaire` varchar(10) NOT NULL,
  `Heure` varchar(20) NOT NULL,
  `Competence` text NOT NULL,
  `Diplome` text NOT NULL,
  `experience` text NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `Taille` varchar(15) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Type_contrat` text NOT NULL,
  `Date` date NOT NULL,
  `Categories` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `Titre`, `Description`, `Sallaire`, `Heure`, `Competence`, `Diplome`, `experience`, `Sexe`, `Taille`, `Age`, `Type_contrat`, `Date`, `Categories`) VALUES
(234, 'Agent Sécurité ', 'L\'agent de sécurité assure la surveillance du magasin, la prévention des vols et la sécurité des clients et du personnel. Il/elle doit être capable d\'intervenir en cas de conflit ou d\'incident.', '35,000 DZD', '8h/jour', 'Vigilance, maîtrise des techniques de sécurité, capacité à gérer les conflits', 'Certificat de formation en sécurité\n', '1 ans dans le domaine de la sécurité', 'Homme', 'Minimum 1.75m', '25', ' CDI', '2024-05-07', 'Technique'),
(236, 'Caissier', 'En tant que caissier, vous serez responsable de la gestion des transactions financières, de l\'accueil des clients et de la fourniture d\'un excellent service client. Une expérience antérieure en tant que caissier est un plus.', '30,000 DZD', '8h/jour', 'Gestion de caisse, service client, rapidité et précision', 'Licence ', ' 1 an dans un poste similaire', 'Indifférent', 'Indifféren', '22', 'CDI', '2024-05-27', 'Administrative'),
(237, 'Responsable de rayon', 'Vous serez responsable de la gestion d\'un rayon, de l\'organisation des produits, de la gestion des stocks et de l\'animation de l\'équipe. Une bonne connaissance du secteur de la grande distribution est requise.', '45,000 DZD', '8h/jour', ' Gestion d\'équipe, organisation, gestion des stocks', 'Licence en gestion ou commerce', '3 ans dans un poste similaire', 'Indifférent', 'Indifféren', '25', 'CDI', '2024-05-22', 'Administrative'),
(238, 'Agent de rayon', ' En tant qu\'équipier polyvalent, vous effectuerez diverses tâches telles que la mise en rayon, l\'étiquetage des produits, et l\'aide à la caisse. Ce poste est idéal pour ceux qui débutent dans la grande distribution.', '25,000 DZD', '8h/jour', ' Flexibilité, service client, capacité à travailler sous pression', 'BAC', 'Pas d\'expérience requise', 'Indifférent', 'Indifféren', '18', 'CDD', '2024-05-19', 'Technique'),
(239, 'Boucher', ' Le boucher est responsable de la découpe et de la préparation des viandes, de leur présentation en rayon et du conseil à la clientèle. Il/elle doit assurer le respect des normes d’hygiène et de sécurité.', ' 45,000 DZ', '8h/jour', 'Maîtrise des techniques de découpe, connaissance des règles d’hygiène', 'CAP Boucherie', '2 ans en boucherie', 'Indifférent', 'Indifférent', '25-60 ans', 'CDI', '2024-05-11', 'Technique'),
(240, 'Réceptionniste', 'La réceptionniste est chargée d’accueillir les clients, de répondre à leurs demandes et de gérer les appels téléphoniques. Elle doit être capable de fournir des informations précises et de diriger les clients vers les services appropriés.', '30,000 DZD', '8h/jour', 'Sens de l’accueil, maîtrise des outils informatiques, organisation', 'BAC', '1 an dans un poste similaire', 'Femme ', ' Minimum 1.65m', '22-40ans', 'CDD', '2024-05-13', 'Administrative'),
(241, 'Technicien de Maintenance', ' Le technicien de maintenance assure l’entretien et la réparation des équipements du supermarché. Il/elle doit être capable de diagnostiquer et de résoudre rapidement les problèmes techniques pour garantir le bon fonctionnement des installations.', '38,000 DZD', '8h/jour', ' Connaissances en électricité, plomberie, maintenance des équipements', 'Bac+2 en maintenance industrielle', '3 ans en maintenance', 'Homme', 'Minimum 1.75m', '25-65 ans', 'CDI', '2024-05-01', 'Technique'),
(242, 'Chef de Rayon Électronique', 'Le chef de rayon électronique gère l’approvisionnement, la mise en rayon et la promotion des produits électroniques. Il/elle est responsable de l’équipe du rayon et de la satisfaction des clients, en veillant à atteindre les objectifs de vente.', '40,000 DZD', '8h/jour', 'Connaissance des produits électroniques, gestion d’équipe, sens commercial', ' BAC+2 en commerce ou électronique', '3 ans dans un poste similaire', 'Indifférent', 'Indifférent', '25-50 ans', 'CDI', '2024-05-10', 'Administrative'),
(243, 'Responsable des Achats', 'Le responsable des achats gère les relations avec les fournisseurs, négocie les contrats et assure l\'approvisionnement du supermarché en produits de qualité. Il/elle doit optimiser les coûts tout en garantissant la disponibilité des produits.\r\n', '50,000 DZD', '8h/jour', 'Négociation, gestion des fournisseurs, compétences analytiques', 'Bac+3 en gestion ou commerce', '4 ans en gestion des achats', 'Indifférent', 'Indifférent', '30-65 ans', 'CDI', '2024-05-18', 'Administrative');

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `post` varchar(30) NOT NULL,
  `Id_emp` int(20) NOT NULL,
  `etat` varchar(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `Sexe` varchar(10) NOT NULL,
  `Diplome` text NOT NULL,
  `Date_naissance` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `postuler`
--

INSERT INTO `postuler` (`post`, `Id_emp`, `etat`, `user`, `Sexe`, `Diplome`, `Date_naissance`) VALUES
('Preparateur_commande', 409, 'Accepter', 'khalil23', '', '0', '0000-00-00'),
('Responsable_Technique', 409, 'Archive', 'khalil23', '', '0', '0000-00-00'),
('Preparateur_commande', 409, 'Accepter', 'khalil23', '', '0', '0000-00-00'),
('Manager_rayon_fruits_lÃ©gumes', 409, 'en attente', 'khalil23', '', '0', '0000-00-00'),
('Responsable_Technique', 409, 'en attente', 'khalil23', 'homme', '0', '0000-00-00'),
('Responsable_Technique', 409, 'en attente', 'khalil23', 'homme', '0', '0000-00-00'),
('Responsable_Technique', 409, 'en attente', 'khalil23', 'homme', 'comptabilitÃ© ', '2024-05-08'),
('Responsable_Technique', 409, 'en attente', 'khalil23', 'homme', 'comptabilitÃ© ', '2024-05-08'),
('Responsable_dâ€™Exploitation ', 373, '', '4529', 'homme', '', '1967-03-21'),
('Comptable', 409, 'en attente', 'khalil23', 'homme', 'comptabilitÃ© ', '2024-05-08'),
('Comptable', 409, 'en attente', 'khalil23', 'homme', 'comptabilitÃ© ', '2024-05-08'),
('Responsable_Technique', 409, 'en attente', 'khalil23', 'homme', 'comptabilitÃ© ', '2024-05-08'),
('Responsable_Technique', 373, 'en attente', '4529', 'homme', '', '1967-03-21'),
('Employe_commercial', 260, 'Accepter', '25631', 'femme', 'informatique', '2003-01-02'),
('Responsable_Technique', 260, 'en attente', '25631', 'femme', 'informatique', '2003-01-02'),
('Responsable_Technique', 260, 'en attente', '25631', 'femme', 'informatique', '2003-01-02'),
('Responsable_Technique', 260, 'en attente', '25631', 'femme', 'informatique', '2003-01-02'),
('Boucher ', 260, 'Accepter', '25631', 'femme', 'informatique', '2003-01-02'),
('Boucher ', 260, 'Accepter', '25631', 'femme', 'informatique', '2003-01-02'),
('Manager', 260, 'en attente', '25631', 'femme', 'informatique', '2003-01-02'),
('Manager', 410, 'Archive', '2004', 'Homme', 'Licence Gestion', '2000-09-11'),
('Caissier', 414, 'Accepter', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Caissier', 414, 'Accepter', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
(' Boucher', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent Sécurité ', 414, 'en attente', 'rachid1980', 'Homme', 'CAP en Boucherie', '1980-10-15'),
('Agent de rayon', 421, 'en attente', 'souad1991', 'Femme ', 'Licence en Psychologie', '1991-01-28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employeur`
--
ALTER TABLE `employeur`
  ADD PRIMARY KEY (`Id_emp`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_ent`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD KEY `id_post` (`post`) USING BTREE,
  ADD KEY `Id_emp` (`Id_emp`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employeur`
--
ALTER TABLE `employeur`
  MODIFY `Id_emp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_ent` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
