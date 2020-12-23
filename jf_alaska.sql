-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 déc. 2020 à 18:34
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jf_alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `create_date`, `comment`, `post_id`) VALUES
(1, 'Gustave LABAVE', '2020-12-16 22:33:57', 'Voici un commentaire', 1),
(2, 'Frédéric ATOMIC', '2020-12-16 23:47:43', 'ICI un autre commentaire !', 1),
(3, 'Olivier Timbré', '2020-12-17 16:48:40', 'Un commentaire ajouté directement avec le formulaire.', 1),
(4, 'Norbert DENFER', '2020-12-21 20:15:52', 'Bien construit ce chapitre 2 !', 2);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `create_date`, `title`, `content`) VALUES
(1, '2020-12-08 23:26:17', 'Chapitre 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet.\r\n\r\nVivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis.\r\n\r\nAliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet.\r\n\r\nNulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet.\r\n\r\nCras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna. '),
(2, '2020-12-08 23:26:17', 'Chapitre 2', 'Chapitre 2\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet.\r\n\r\nVivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis.\r\n\r\nAliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet.\r\n\r\nNulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet.\r\n\r\nCras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna. ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `roles` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `create_date`, `image`, `roles`) VALUES
(1, 'Jean Forteroche', 'salwan@free.fr', '$2y$10$Q1XraZJDeFZ7oMRWaJ9FcOHRAil/xJAL40nwbDWHe15qH1NDMPBEq', '2020-12-22 04:42:49', '', '[\"ROLE_ADMIN\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
