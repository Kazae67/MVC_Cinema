-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cinema_mvc
CREATE DATABASE IF NOT EXISTS `cinema_mvc` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cinema_mvc`;

-- Listage de la structure de table cinema_mvc. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nom` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `path_img_acteur` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_acteur`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.acteur : ~33 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `prenom`, `nom`, `sexe`, `birthdate`, `path_img_acteur`) VALUES
	(1, 'Matthew', 'McConaughey', 'Homme', '1961-05-06', 'Matthew_McConaughey_2019_(48648344772).jpg'),
	(2, 'Sangoku', '', 'Homme', '1974-01-30', 'Kid_sangoku.jpg'),
	(3, 'Broly', '', 'Homme', '1979-04-04', '539168-dragon-ball-director-peliculas-quiere-que-broly-vuelva.webp'),
	(4, 'Daniel ', 'Radcliffe', 'Homme', '1980-07-31', 'DanielRadcliffe.jpg'),
	(5, 'Mackenzie', 'Foy', 'Femme', '2000-11-10', 'image-w856.webp'),
	(6, 'Rubert', 'Grint', 'Homme', '1988-08-24', 'Rupert-Grint-cette-seule-condition-pour-qu-il-revienne-dans-Harry-Potter.jpg'),
	(7, 'Emma', 'Watson', 'Femme', '1990-04-15', '226001-1.webp'),
	(8, 'Kirsten', 'Dunst', 'Femme', '1982-04-30', 'Kirsten-Dunst-actrice-incontournable.jpg'),
	(9, 'Jim', 'Sturgess', 'Homme', '1978-05-16', '432749.webp'),
	(10, 'Tom', 'Hanks', 'Homme', '1956-07-09', 'Tom_Hanks_TIFF_2019.jpg'),
	(11, 'Sam', 'Worthington', 'Homme', '1976-08-02', '437598-1.webp'),
	(12, 'Zoe', 'Saldana', 'Femme', '1978-06-19', 'Avatar_The_Way_of_Water_Tokyo_Press_Conference_Zoe_Saldaña_(52563431865)_(cropped2).jpg'),
	(13, 'Christian', 'Clavier', 'Homme', '1952-05-06', 'cc1_550_550.jpg'),
	(14, 'Gérard', 'Depardieu', 'Homme', '1948-12-27', 'image-w856 (1).webp'),
	(15, 'Jamel', 'Debbouze', 'Homme', '1975-06-18', '3960806.jpg'),
	(16, 'Johny', 'Depp', 'Homme', '1963-06-09', 'picture.jpg'),
	(17, 'Orlando', 'Bloom', 'Homme', '1977-01-13', '5143715-orlando-bloom-aout-2019-560x315-2.webp'),
	(18, 'Keira', 'Knightley', 'Femme', '1985-03-26', 'Keira-fear1.jpg'),
	(19, 'Brad', 'Pitt', 'Homme', '1963-12-18', '1374948.webp'),
	(20, 'Edward', 'Norton', 'Homme', '1969-08-18', 'Ed_Norton_Shankbone_Metropolitan_Opera_2009.jpg'),
	(21, 'Helena', 'Bonham Carter', 'Femme', '1966-05-26', 'image-w856 (2).webp'),
	(22, 'Lou', 'Romano', 'Homme', '1972-04-15', '304111.webp'),
	(23, 'Patton', 'Oswalt', 'Homme', '1969-01-27', 'ljQvjbPmcIAl205Lb2Mu4CW8WO7.jpg'),
	(24, 'Robin', 'Williams', 'Homme', '1951-07-21', 'robin-williams.jpeg'),
	(25, 'Embeth', 'Davidtz', 'Femme', '1965-08-11', 'MV5BMTcyNTUyOTU5OV5BMl5BanBnXkFtZTcwMjE5MjQ1Nw@@._V1_FMjpg_UX1000_.jpg'),
	(26, 'Matthew', 'Broderick', 'Homme', '1962-03-21', '640px-Matthew_Broderick_2012.jpg'),
	(27, 'James', 'Earl Jones', 'Homme', '1931-01-17', 'James_Earl_Jones_(8516667383).jpg'),
	(28, 'Jeremy', 'Irons', 'Homme', '1948-11-19', 'MV5BMTY5Mzg2NDY5OV5BMl5BanBnXkFtZTcwMDQwNzA0Mg@@._V1_FMjpg_UX1000_.jpg'),
	(29, 'Suzane', 'Pleshette', 'Femme', '1937-01-31', 'suzanne-pleshette_u-l-pjtyib0.jpg'),
	(30, 'Brigitte', 'Heim', 'Femme', '1906-03-17', 'a7mwxoeF34BCxmteoHQSB1ENth0.jpg'),
	(31, 'Rudolf', 'Klein-rogge', 'Man', '1927-02-17', 'Mabuse_gip.jpg'),
	(32, 'Al', 'Pacino', 'Man', '1974-05-05', '365823.webp'),
	(33, 'Elvira', 'Hancock', 'Femme', '1958-04-29', 'undefined.webp');

-- Listage de la structure de table cinema_mvc. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `film_id` int DEFAULT NULL,
  `acteur_id` int DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  KEY `FK3_casting_role` (`role_id`),
  KEY `FK1_casting_movie` (`film_id`) USING BTREE,
  KEY `FK2_casting_actor` (`acteur_id`) USING BTREE,
  CONSTRAINT `FK1_casting_movie` FOREIGN KEY (`film_id`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK2_casting_actor` FOREIGN KEY (`acteur_id`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK3_casting_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.casting : ~44 rows (environ)
INSERT INTO `casting` (`film_id`, `acteur_id`, `role_id`) VALUES
	(1, 2, 1),
	(2, 1, 5),
	(3, 4, 6),
	(1, 3, 3),
	(3, 6, 7),
	(4, 4, 6),
	(3, 7, 8),
	(4, 6, 7),
	(4, 7, 8),
	(5, 4, 6),
	(5, 6, 7),
	(5, 7, 8),
	(6, 4, 6),
	(6, 6, 7),
	(6, 7, 8),
	(8, 9, 9),
	(8, 8, 10),
	(9, 10, 11),
	(10, 11, 12),
	(10, 12, 13),
	(11, 13, 14),
	(11, 14, 15),
	(11, 15, 16),
	(12, 16, 17),
	(12, 17, 18),
	(12, 18, 19),
	(13, 19, 20),
	(13, 20, 21),
	(13, 21, 22),
	(14, 22, 23),
	(14, 23, 24),
	(15, 24, 25),
	(15, 25, 26),
	(16, 26, 27),
	(16, 27, 28),
	(16, 28, 29),
	(17, 26, 27),
	(17, 27, 15),
	(17, 28, 29),
	(17, 29, 30),
	(18, 30, 31),
	(18, 31, 32),
	(19, 32, 33),
	(19, 33, 34);

-- Listage de la structure de table cinema_mvc. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date_sortie` year DEFAULT NULL,
  `duree` int DEFAULT NULL,
  `synopsis` longtext,
  `genre_id` int DEFAULT NULL,
  `realisateur_id` int DEFAULT NULL,
  `note` int DEFAULT NULL,
  `path_img_film` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_film`) USING BTREE,
  KEY `FK1_movie_genre` (`genre_id`),
  KEY `FK2_movie_director` (`realisateur_id`) USING BTREE,
  CONSTRAINT `FK1_movie_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id_genre`),
  CONSTRAINT `FK2_movie_director` FOREIGN KEY (`realisateur_id`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.film : ~18 rows (environ)
INSERT INTO `film` (`id_film`, `titre_film`, `date_sortie`, `duree`, `synopsis`, `genre_id`, `realisateur_id`, `note`, `path_img_film`) VALUES
	(1, 'Dragonball z : Broly Le super Guerrier', '1993', 152, 'Lorsque le puissant guerrier Saiyan, Broly, est réveillé, Goku et ses amis doivent affronter sa force dévastatrice pour sauver la Terre.', 1, 1, 4, 'Dragonballz.jpg'),
	(2, 'Interstellar', '2014', 169, 'Dans un futur où la Terre est menacée par une crise alimentaire, un groupe d\'explorateurs se lance dans un voyage interstellaire pour trouver une nouvelle planète habitable.', 3, 2, 2, 'Interstellar.jpg'),
	(3, 'Harry Potter', '2001', 152, 'Un jeune sorcier découvre qu\'il est le célèbre Harry Potter et entre dans le monde de la magie où il doit affronter le redoutable sorcier, Lord Voldemort.', 5, 3, 5, 'Harry_potter.jpg'),
	(4, 'Harry Potter II', '2002', 161, 'Harry Potter et ses amis enquêtent sur une série d\'attaques mystérieuses à Poudlard, découvrant l\'existence d\'une redoutable chambre des secrets et affrontant un dangereux monstre qui menace la vie de l\'école.', 5, 3, 5, 'Harry_potter_2.jpg'),
	(5, 'Harry Potter III', '2005', 144, 'Alors qu\'un dangereux criminel échappe à Azkaban, Harry Potter fait face à de nouveaux mystères et découvre le pouvoir du voyage dans le temps pour sauver ses proches et révéler des vérités sur son passé.', 5, 3, 4, 'Harry_potter_3.jpg'),
	(6, 'Harry Potter IV', '2005', 157, 'Lorsque Harry Potter participe au dangereux Tournoi des Trois Sorciers, il se retrouve confronté à des épreuves mortelles, des complots sombres et à la résurrection de Lord Voldemort.', 5, 3, 3, 'Harry_potter_4.jpg'),
	(8, 'Upside Down', '2012', 116, 'Dans un monde où deux planètes coexistent avec des gravités opposées, un homme défie les lois de la physique pour retrouver l\'amour de sa vie, malgré les obstacles et les dangers.', 3, 4, 5, 'Upside_down.jpg'),
	(9, 'Seul au monde', '2000', 143, 'Après le crash de son avion, un homme se retrouve isolé sur une île déserte, où il doit lutter pour sa survie et trouver un moyen de rentrer chez lui.', 4, 5, 1, 'Seul_au_monde.jpg'),
	(10, 'Avatar', '2009', 142, 'Parce que l\'atmosphère de Pandora est toxique, les humains ont créé des doubles d\'eux-mêmes, des avatars. Sous cette forme, Jake peut de nouveau marcher.', 5, 6, 5, 'Avatar.jpg'),
	(11, 'Astérix et Obélix', '2002', 107, 'Cléopâtre, la reine d\'Égypte, décide, pour défier l\'Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert.', 4, 7, 5, 'Asterix_et_obelix.jpg'),
	(12, 'Pirates des Caraïbes', '2003', 143, 'Dans la mer des Caraïbes, Jack Sparrow, voit sa vie idyllique basculer le jour où son ennemi, le perfide capitaine Barbossa, lui vole son bateau, le Black Pearl.', 4, 8, 5, 'Pirates_des_caraibes.jpg'),
	(13, 'Fight club', '1999', 139, 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d\'autres personnes seules qui connaissent la misère humaine.', 6, 9, 5, 'Fight_club.jpg'),
	(14, 'Ratatouille', '2007', 111, 'Rémy est un jeune rat qui rêve de devenir un grand chef français. Ni l\'opposition de sa famille, ni le fait d\'être un rongeur dans une profession qui les déteste ne le démotivent.', 7, 10, 4, 'Ratatouille.jpg'),
	(15, 'L\'homme bicentenaire', '1999', 132, 'En ce début de XXIe siecle, la robotique a fait d\'inportants progrès. La famille Martin peut ainsi faire ll\'acquisition d\'un robot domestique, le NDR-114.', 3, 11, 4, 'Homme_bicentenaire.jpg'),
	(16, 'Le Roi Lion', '1994', 87, 'Dans la savane d\'Afrique, Simba, un jeu lionceau, fils de Mufasa, découvre son futur royaume, la Terre des Lions sur lequel il régnera.', 7, 12, 5, 'Le_roi_lion.jpg'),
	(17, 'Le Roi lion 2', '1998', 81, 'Simba et Nala ont maintenant une fille, et rencontre un jeune lion nommé Kovu, ce qu\'elle ne sait pas, c\'est qu\'il est le fils de Zira une servantes de Scar.', 7, 13, 3, 'Le_roi_lion_2.jpg'),
	(18, 'Metropolis', '2001', 93, 'Metropolis est une mégapole dans uen société  dystopique divisée en une ville haute, où les travailleurs font fonctionner la ville et sont opprimés par la classe dirigeante.', 3, 14, 4, 'Metropolis.png'),
	(19, 'Scarface', '1983', 170, 'Tony Montana bénéficie d\'une amnistie du gouvernement cubain pour retourner en Floride, il élabore un plan pour élminer un caïd de la pègre.', 8, 15, 5, 'Scarface.jpg');

-- Listage de la structure de table cinema_mvc. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.genre : ~8 rows (environ)
INSERT INTO `genre` (`id_genre`, `genre_name`) VALUES
	(1, 'Anime'),
	(2, 'action'),
	(3, 'sci-fi'),
	(4, 'Aventure'),
	(5, 'Fantasy'),
	(6, 'Drame'),
	(7, 'Animation'),
	(8, 'Thriller');

-- Listage de la structure de table cinema_mvc. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  PRIMARY KEY (`id_realisateur`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.realisateur : ~15 rows (environ)
INSERT INTO `realisateur` (`id_realisateur`, `prenom`, `nom`, `sexe`, `birthdate`) VALUES
	(1, 'Akira', 'Toriyama', 'Man', '1955-04-05'),
	(2, 'Christopher', 'Nolan', 'Man', '1970-07-30'),
	(3, 'J.K', 'Rowling', 'Woman', '1965-07-31'),
	(4, 'Juan', 'Solanas', 'Man', '1966-11-04'),
	(5, 'Robert', 'Zemeckis', 'Man', '1952-05-14'),
	(6, 'James', 'Cameron', 'Man', '1954-08-16'),
	(7, 'Alain', 'Chabat', 'Man', '1958-11-24'),
	(8, 'Espen', 'Sandberg', 'Man', '1971-06-17'),
	(9, 'David', 'Fincher', 'Man', '1962-08-28'),
	(10, 'Brad', 'Bird', 'Man', '1957-11-24'),
	(11, 'Chris', 'Columbus', 'Man', '1958-11-10'),
	(12, 'Rob', 'Minkoff', 'Man', '1962-08-11'),
	(13, 'Darrell', 'Rooney', 'Man', '1959-06-14'),
	(14, 'Fritz', 'Lang', 'Man', '1890-12-05'),
	(15, 'Brian', 'De Palma', 'Man', '1940-11-11');

-- Listage de la structure de table cinema_mvc. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `description` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.role : ~34 rows (environ)
INSERT INTO `role` (`id_role`, `role_name`, `description`) VALUES
	(1, 'Super Sayan', 'test'),
	(2, 'Patrick Bateman', NULL),
	(3, 'Super Saiyan Legendaire', NULL),
	(4, 'M. Brown', NULL),
	(5, 'Joseph Cooper', NULL),
	(6, 'Harry Potter', NULL),
	(7, 'Ron Weasley', NULL),
	(8, 'Hermione Granger', NULL),
	(9, 'Adam', NULL),
	(10, 'Eden', NULL),
	(11, 'Chuck Noland', NULL),
	(12, 'Jake Sully', NULL),
	(13, 'Neytiri', NULL),
	(14, 'Astérix', NULL),
	(15, 'Obélix', NULL),
	(16, 'Jamel Debbouze', NULL),
	(17, 'Jack Sparrow', NULL),
	(18, 'William Turner III', NULL),
	(19, 'Elizabeth Swann', NULL),
	(20, 'Tyler Durden', NULL),
	(21, 'Le narrateur', NULL),
	(22, 'Marla Singer', NULL),
	(23, 'Alfredo Linguini', NULL),
	(24, 'Rémy', NULL),
	(25, 'Andrew Martin', NULL),
	(26, 'Amanda Martin', NULL),
	(27, 'Simba', NULL),
	(28, 'Mufasa', NULL),
	(29, 'Scar', NULL),
	(30, 'Zira', NULL),
	(31, 'Maria', NULL),
	(32, 'Rotwang', NULL),
	(33, 'Tony Montana', NULL),
	(34, 'Michelle Pfeiffer', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
