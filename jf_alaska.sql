-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 jan. 2021 à 02:59
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
  `flag` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `create_date`, `comment`, `post_id`, `flag`) VALUES
(1, 'Gustave LABAVE', '2020-12-16 22:33:57', '<p>Commentaire 1 &eacute;dit&eacute; 2</p>', 1, 0),
(2, 'Frédéric ATOMIC', '2020-12-16 23:47:43', 'Commentaire 2 !', 1, 0),
(3, 'Olivier Timbrée', '2020-12-17 16:48:40', '<p>Un commentaire ajout&eacute; directement avec le formulaire.</p>', 1, 0),
(30, 'Meussyeu Maddamme', '2021-01-19 15:49:47', 'C’est dire que nous ne pouvons appréhender le monde qu’à travers des éléments a priori.\r\n\r\nAinsi, l’espace et le temps sont-ils antérieurs à l’expérience : ce sont des formes a priori de la sensibilité, c’est-à-dire des structures intuitives issues du sujet et permettant d’ordonner les objets hors de nous et en nous.\r\n\r\nMais ce n’est pas tout et, à un deuxième niveau d’organisation, conceptuel cette fois-ci, les objets doivent être pensés, organisés intellectuellement par l’entendement, faculté reliant les sensations grâce à des catégories, ou concepts purs, instruments permettant d’unifier le sensible :', 3, 0),
(4, 'Norbert DENFER', '2020-12-21 20:15:52', '<p>Bien construit ce chapitre 2 ! &eacute;dit&eacute;</p>', 2, 0),
(5, 'Amélie Pissenlit', '2020-12-30 15:41:16', 'J\'aime ce chapitre 1', 1, 0),
(6, 'Pascal KiKal', '2020-12-30 18:00:12', 'Intéressant !', 2, 0),
(7, 'Henri An', '2020-12-30 18:03:05', 'Blabla', 2, 0),
(9, 'Char Laine', '2020-12-31 13:16:38', 'Je veux la suite !', 3, 0),
(32, 'Richard Gear', '2021-01-20 01:17:36', 'Very good book ! I love it !', 5, 0),
(34, 'Madame Doubtfire', '2021-01-20 22:04:46', '<p>Super</p>', 4, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `create_date`, `title`, `content`) VALUES
(1, '2020-12-08 23:26:17', 'Chapitre 1', '<p>Chapitre 1 &eacute;dit&eacute; v2 lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna.</p>'),
(2, '2020-12-08 23:26:17', 'Chapitre 2', '<p>Chapitre 2 &eacute;dit&eacute; 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna.</p>'),
(3, '2020-12-30 16:53:19', 'Chapitre 3', '<p>Chapitre 3 lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna.</p>'),
(4, '2020-12-30 16:56:28', 'Chapitre 4', '<p><strong>Chapitre 4 !! </strong>lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl.<span style=\"text-decoration: underline;\"> Nullam vitae iaculis urna.</span></p>'),
(5, '2020-12-30 16:57:37', 'Chapitre 5', '<p>Chapitre 5 lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna.</p>'),
(6, '2020-12-30 16:58:06', 'Chapitre 6', '<p>Chapitre 6 lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque ligula dui, a consequat massa feugiat malesuada. Suspendisse potenti. Integer volutpat vitae lacus a convallis. Etiam blandit est vel nisi blandit, quis pretium mi mollis. Nullam rutrum nisl a iaculis imperdiet. Nunc pretium leo magna, ut rutrum eros rutrum vitae. Integer finibus faucibus sem ut laoreet. Vivamus pharetra bibendum magna in congue. Nullam aliquam pellentesque diam, faucibus efficitur libero rutrum non. Aenean gravida faucibus orci vel pretium. Vestibulum id ante semper, scelerisque lectus sit amet, sodales nisi. In hac habitasse platea dictumst. Curabitur lacinia lorem a lacus mattis ornare. Duis non mauris et leo maximus iaculis. Aliquam sed tortor est. Pellentesque condimentum arcu at dolor placerat, eu rutrum dolor pretium. Donec et ipsum lorem. Donec aliquam, urna non convallis porttitor, nisl nibh interdum nulla, non malesuada augue nisi a elit. Integer eget facilisis est. Donec vehicula blandit dolor, vitae aliquam nulla cursus ut. Fusce sit amet velit pellentesque, fringilla urna in, lobortis ex. Quisque ornare sit amet sapien at ultricies. Phasellus vel placerat lectus. Duis accumsan accumsan ultrices. Curabitur ultrices feugiat lectus, sit amet interdum justo iaculis sit amet. Nam fermentum vitae nunc ut laoreet. Nulla auctor convallis augue id sollicitudin. Vestibulum a metus ut sem hendrerit suscipit. Proin a neque magna. In in sapien orci. Proin vitae sem diam. Quisque interdum non nibh vel sodales. Fusce euismod non ante non laoreet. Cras mi orci, finibus vitae lorem vitae, ornare viverra lacus. Fusce ac neque ullamcorper, lobortis ligula nec, molestie felis. Sed tincidunt lacus sed elementum pulvinar. Aenean fermentum tempus nisi, nec porttitor dui fermentum eu. Duis gravida nunc nisl, eu pulvinar lacus consectetur sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eu sem nisl. Nullam vitae iaculis urna.</p>'),
(7, '2020-12-31 18:38:57', 'Chapitre 7', '<h1 style=\"text-align: center;\"><em>En cours de r&eacute;daction....</em></h1>'),
(8, '2021-01-21 03:27:27', 'Chapitre 8', '<p>Chapitre 8.......</p>');

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
  `about` text NOT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `adress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `create_date`, `image`, `about`, `roles`, `twitter`, `facebook`, `phone`, `adress`) VALUES
(1, 'Jean Forteroche', 'jean.forteroche@emailfictif.com', '$2y$10$mp6N0Xn9PFvGS7sHsO3XAOStJPyyMwL8/Rbi1zrMVbJf2hgDeUGmO', '2020-12-22 04:42:49', '', '<p>ABOUT- V3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac sem rhoncus libero venenatis malesuada. Duis eget velit neque. Etiam vel aliquam nulla, quis rhoncus ipsum. Nulla at aliquet velit, eget pellentesque nisl. Donec facilisis massa a ligula ultricies, quis gravida lorem consectetur. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel scelerisque lectus. Phasellus justo augue, vulputate et consectetur eget, tincidunt ac nisl. Nunc semper cursus ligula, id placerat velit ullamcorper at. In metus purus, ornare at sagittis eu, rutrum ut mauris.</p>', 'ADMIN', 'https://fictiff.twitter.com/jeanforteroche', 'https://fictif.facebook.com/jeanforteroche', '0612345678', '6 rue fictive 7848956 Villefictive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
