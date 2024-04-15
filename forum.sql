-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 avr. 2024 à 02:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `id_auteur` varchar(255) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `id_auteur`, `pseudo_auteur`, `id_question`, `contenu`) VALUES
(1, '2', 'kscode', 3, 'Merci bonjour bro,<br />\r\nje vais bien et toi?'),
(2, '2', 'kscode', 1, 'bizar ta question...');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `id_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(1, 'gwazr', 'hezar', 'eahrz', 5, 'bonjour', '01/04/24'),
(3, 'Salutation', 'bonjour gar,<br />\r\ncomment tu vas?', 'bonjour gar,<br />\r\ncomment tu vas?<br />\r\nj&#039;espere bien. juste pour te saluer.', 2, 'kscode', '05/04/24'),
(4, 'Github', 'Utilisation de github', 'comment faire pour publier un projet sur gitub?', 2, 'kscode', '14/04/24'),
(5, 'Imagephp', 'uploader image', 'Salut la team, je voudrais avoir le code pour uploader une image en php.<br />\r\nMerci pour votre reponse!', 6, 'Appolo', '14/04/24');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `nom`, `prenom`, `mdp`) VALUES
(1, 'jeanpierre', 'pierre', 'jean', '$2y$10$hfZd2tPHDcLUsoyMPp2CMOL7X1nvyhqay13B.6gvaI5x3KwXtlTsm'),
(2, 'kscode', 'ks', 'sk', '$2y$10$323yHKe0mx4Lg3KCN5AVR.5RxG7M6gVT3nXxpGx3PlYgmKApnbzhK'),
(3, 'zk', 'ziak', 'ziakg', '$2y$10$AdGZq4YrZSsrg9uPxm/zX.ufApixxsiSc55UKCEdXOI.6YJOTgAIW'),
(4, 'fea', 'feas', 'fa', '$2y$10$9p5nkxy/.T/gQwroes20T.sGsEuhd.H.kbVEp5UumYTqMVRLwVFw2'),
(5, 'bonjour', 'jour', 'soir', '$2y$10$mAuxSHPmcgPSaYo3sWiJxukoJBfRQ6NN/pWr.xPl.rufE9s9/vMHa'),
(6, 'Appolo', 'Jr', 'Ap', '$2y$10$vNmMgM1YNn77gjoBLJaCuOvNIhweYqfuIsLRZlZ9n2Va3.l3GwhQi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
