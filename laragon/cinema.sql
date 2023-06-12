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
  PRIMARY KEY (`id_acteur`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.acteur : ~33 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `prenom`, `nom`, `sexe`, `birthdate`) VALUES
	(1, 'Matthew', 'McConaughey', 'Man', '1961-05-06'),
	(2, 'Sangoku', '', 'Man', '1974-01-30'),
	(3, 'Broly', '', 'Man', '1979-04-04'),
	(4, 'Daniel ', 'Radcliffe', 'Man', '1980-07-31'),
	(5, 'Mackenzie', 'Foy', 'Woman', '2000-11-10'),
	(6, 'Rubert', 'Grint', 'Man', '1988-08-24'),
	(7, 'Emma', 'Watson', 'Woman', '1990-04-15'),
	(8, 'Kirsten', 'Dunst', 'Woman', '1982-04-30'),
	(9, 'Jim', 'Sturgess', 'Man', '1978-05-16'),
	(10, 'Tom', 'Hanks', 'Man', '1956-07-09'),
	(11, 'Sam', 'Worthington', 'Man', '1976-08-02'),
	(12, 'Zoe', 'Saldana', 'Woman', '1978-06-19'),
	(13, 'Christian', 'Clavier', 'Man', '1952-05-06'),
	(14, 'Gérard', 'Depardieu', 'Man', '1948-12-27'),
	(15, 'Jamel', 'Debbouze', 'Man', '1975-06-18'),
	(16, 'Johny', 'Depp', 'Man', '1963-06-09'),
	(17, 'Orlando', 'Bloom', 'Man', '1977-01-13'),
	(18, 'Keira', 'Knightley', 'Woman', '1985-03-26'),
	(19, 'Brad', 'Pitt', 'Man', '1963-12-18'),
	(20, 'Edward', 'Norton', 'Man', '1969-08-18'),
	(21, 'Helena', 'Bonham Carter', 'Woman', '1966-05-26'),
	(22, 'Lou', 'Romano', 'Man', '1972-04-15'),
	(23, 'Patton', 'Oswalt', 'Man', '1969-01-27'),
	(24, 'Robin', 'Williams', 'Man', '1951-07-21'),
	(25, 'Embeth', 'Davidtz', 'Woman', '1965-08-11'),
	(26, 'Matthew', 'Broderick', 'Man', '1962-03-21'),
	(27, 'James', 'Earl Jones', 'Man', '1931-01-17'),
	(28, 'Jeremy', 'Irons', 'Mans', '1948-11-19'),
	(29, 'Suzane', 'Pleshette', 'Woman', '1937-01-31'),
	(30, 'Brigitte', 'Heim', 'Woman', '1906-03-17'),
	(31, 'Rudolf', 'Klein-Rotwang', 'Man', '1927-02-17'),
	(32, 'Al', 'Pacino', 'Man', '1974-05-05'),
	(33, 'Elvira', 'Hancock', 'Woman', '1958-04-29');

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
  `url_img` longtext,
  `genre_id` int DEFAULT NULL,
  `realisateur_id` int DEFAULT NULL,
  `note` int DEFAULT NULL,
  PRIMARY KEY (`id_film`) USING BTREE,
  KEY `FK1_movie_genre` (`genre_id`),
  KEY `FK2_movie_director` (`realisateur_id`) USING BTREE,
  CONSTRAINT `FK1_movie_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id_genre`),
  CONSTRAINT `FK2_movie_director` FOREIGN KEY (`realisateur_id`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.film : ~18 rows (environ)
INSERT INTO `film` (`id_film`, `titre_film`, `date_sortie`, `duree`, `synopsis`, `url_img`, `genre_id`, `realisateur_id`, `note`) VALUES
	(1, 'Dragonball z : Broly Le super Guerrier', '1993', 152, 'Lorsque le puissant guerrier Saiyan, Broly, est réveillé, Goku et ses amis doivent affronter sa force dévastatrice pour sauver la Terre.', 'https://i0.wp.com/www.filmspourenfants.net/wp-content/uploads/2018/03/dragon-ball-z-broly-le-super-guerrier-a.jpg?fit=511%2C709&ssl=1', 1, 1, 4),
	(2, 'Interstellar', '2014', 169, 'Dans un futur où la Terre est menacée par une crise alimentaire, un groupe d\'explorateurs se lance dans un voyage interstellaire pour trouver une nouvelle planète habitable.', 'https://fr.web.img6.acsta.net/pictures/14/09/24/12/08/158828.jpg', 3, 2, 2),
	(3, 'Harry Potter', '2001', 152, 'Un jeune sorcier découvre qu\'il est le célèbre Harry Potter et entre dans le monde de la magie où il doit affronter le redoutable sorcier, Lord Voldemort.', 'https://imgsrc.cineserie.com/2001/12/1500437.jpg?ver=1', 5, 3, 5),
	(4, 'Harry Potter II', '2002', 161, 'Harry Potter et ses amis enquêtent sur une série d\'attaques mystérieuses à Poudlard, découvrant l\'existence d\'une redoutable chambre des secrets et affrontant un dangereux monstre qui menace la vie de l\'école.', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/9db3a9c332a6fccbba34702e7561eaf60c7da95e6e30672ea9c7392586ebaeaa._RI_TTW_.jpg', 5, 3, 5),
	(5, 'Harry Potter III', '2005', 144, 'Alors qu\'un dangereux criminel échappe à Azkaban, Harry Potter fait face à de nouveaux mystères et découvre le pouvoir du voyage dans le temps pour sauver ses proches et révéler des vérités sur son passé.', 'https://fr.web.img6.acsta.net/medias/nmedia/18/35/23/41/18378380.jpg', 5, 3, 4),
	(6, 'Harry Potter IV', '2005', 157, 'Lorsque Harry Potter participe au dangereux Tournoi des Trois Sorciers, il se retrouve confronté à des épreuves mortelles, des complots sombres et à la résurrection de Lord Voldemort.', 'https://i0.wp.com/www.filmspourenfants.net/wp-content/uploads/2018/04/harry-potter-et-la-coupe-de-feu-a.jpg?fit=555%2C786&ssl=1', 5, 3, 3),
	(8, 'Upside Down', '2012', 116, 'Dans un monde où deux planètes coexistent avec des gravités opposées, un homme défie les lois de la physique pour retrouver l\'amour de sa vie, malgré les obstacles et les dangers.', 'https://fr.web.img6.acsta.net/medias/nmedia/18/82/60/72/20471971.jpg', 3, 4, 5),
	(9, 'Seul au monde', '2000', 143, 'Après le crash de son avion, un homme se retrouve isolé sur une île déserte, où il doit lutter pour sa survie et trouver un moyen de rentrer chez lui.', 'https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/213/i8zkqbcolkz4beousqkhrcf9ssj-868.jpg', 4, 5, 1),
	(10, 'Avatar', '2009', 142, 'Parce que l\'atmosphère de Pandora est toxique, les humains ont créé des doubles d\'eux-mêmes, des avatars. Sous cette forme, Jake peut de nouveau marcher.', 'https://fr.web.img4.acsta.net/pictures/22/08/25/09/04/2146702.jpg', 5, 6, 5),
	(11, 'Astérix et Obélix', '2002', 107, 'Cléopâtre, la reine d\'Égypte, décide, pour défier l\'Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert.', 'https://fr.web.img3.acsta.net/medias/nmedia/00/02/39/29/aff_asterix.jpg', 4, 7, 5),
	(12, 'Pirates des Caraïbes', '2003', 143, 'Dans la mer des Caraïbes, Jack Sparrow, voit sa vie idyllique basculer le jour où son ennemi, le perfide capitaine Barbossa, lui vole son bateau, le Black Pearl.', 'https://fr.web.img4.acsta.net/medias/nmedia/18/35/07/46/affiche2.jpg', 4, 8, 5),
	(13, 'Fight club', '1999', 139, 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d\'autres personnes seules qui connaissent la misère humaine.', 'https://cdn.shopify.com/s/files/1/0502/6948/7263/products/Fight-Club-2e5937af_1200x1200.jpg?v=1607250072', 6, 9, 5),
	(14, 'Ratatouille', '2007', 111, 'Rémy est un jeune rat qui rêve de devenir un grand chef français. Ni l\'opposition de sa famille, ni le fait d\'être un rongeur dans une profession qui les déteste ne le démotivent.', 'https://www.ecranlarge.com/uploads/image/001/123/ifcwbdtpehqds3oqxbch3qayxyv-748.jpg', 7, 10, 4),
	(15, 'L\'homme bicentenaire', '1999', 132, 'En ce début de XXIe siecle, la robotique a fait d\'inportants progrès. La famille Martin peut ainsi faire ll\'acquisition d\'un robot domestique, le NDR-114.', 'https://fr.web.img6.acsta.net/pictures/14/08/14/12/44/126328.jpg', 3, 11, 4),
	(16, 'Le Roi Lion', '1994', 87, 'Dans la savane d\'Afrique, Simba, un jeu lionceau, fils de Mufasa, découvre son futur royaume, la Terre des Lions sur lequel il régnera.', 'https://fr.web.img3.acsta.net/pictures/22/09/20/12/10/2512840.jpg', 7, 12, 5),
	(17, 'Le Roi lion 2', '1998', 81, 'Simba et Nala ont maintenant une fille, et rencontre un jeune lion nommé Kovu, ce qu\'elle ne sait pas, c\'est qu\'il est le fils de Zira une servantes de Scar.', 'https://i0.wp.com/www.filmspourenfants.net/wp-content/uploads/2018/06/le-roi-lion-2-a.jpg?fit=555%2C833&ssl=1', 7, 13, 3),
	(18, 'Metropolis', '2001', 93, 'Metropolis est une mégapole dans uen société  dystopique divisée en une ville haute, où les travailleurs font fonctionner la ville et sont opprimés par la classe dirigeante.', 'https://fr.web.img2.acsta.net/medias/nmedia/00/02/40/93/affmetro.jpg', 3, 14, 4),
	(19, 'Scarface', '1983', 170, 'Tony Montana bénéficie d\'une amnistie du gouvernement cubain pour retourner en Floride, il élabore un plan pour élminer un caïd de la pègre.', 'https://images.affiches-et-posters.com//albums/3/6107/medium/poster-film-scarface-67625.jpg', 8, 15, 5);

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
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.role : ~34 rows (environ)
INSERT INTO `role` (`id_role`, `role_name`) VALUES
	(1, 'Super Sayan'),
	(2, 'Patrick Bateman'),
	(3, 'Super Saiyan Legendaire'),
	(4, 'M. Brown'),
	(5, 'Joseph Cooper'),
	(6, 'Harry Potter'),
	(7, 'Ron Weasley'),
	(8, 'Hermione Granger'),
	(9, 'Adam'),
	(10, 'Eden'),
	(11, 'Chuck Noland'),
	(12, 'Jake Sully'),
	(13, 'Neytiri'),
	(14, 'Astérix'),
	(15, 'Obélix'),
	(16, 'Jamel Debbouze'),
	(17, 'Jack Sparrow'),
	(18, 'William Turner III'),
	(19, 'Elizabeth Swann'),
	(20, 'Tyler Durden'),
	(21, 'Le narrateur'),
	(22, 'Marla Singer'),
	(23, 'Alfredo Linguini'),
	(24, 'Rémy'),
	(25, 'Andrew Martin'),
	(26, 'Amanda Martin'),
	(27, 'Simba'),
	(28, 'Mufasa'),
	(29, 'Scar'),
	(30, 'Zira'),
	(31, 'Maria'),
	(32, 'Rotwang'),
	(33, 'Tony Montana'),
	(34, 'Michelle Pfeiffer');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
