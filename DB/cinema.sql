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
  `acteur_url_img` longtext,
  PRIMARY KEY (`id_acteur`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.acteur : ~33 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `prenom`, `nom`, `sexe`, `birthdate`, `acteur_url_img`) VALUES
	(1, 'Matthew', 'McConaughey', 'Homme', '1961-05-06', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Matthew_McConaughey_2019_%2848648344772%29.jpg/1200px-Matthew_McConaughey_2019_%2848648344772%29.jpg'),
	(2, 'Sangoku', '', 'Homme', '1974-01-30', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPgQm_u8NvoVoxndV1ITN5EuCFG6gJBMv_Fg&usqp=CAU'),
	(3, 'Broly', '', 'Homme', '1979-04-04', 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2015/11/539168-dragon-ball-director-peliculas-quiere-que-broly-vuelva.jpg?tf=3840x'),
	(4, 'Daniel ', 'Radcliffe', 'Homme', '1980-07-31', 'data:image/jpeg;base64,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'),
	(5, 'Mackenzie', 'Foy', 'Femme', '2000-11-10', 'https://images.mubicdn.net/images/cast_member/405734/cache-292298-1513691591/image-w856.jpg?size=800x'),
	(6, 'Rubert', 'Grint', 'Homme', '1988-08-24', 'https://resize.elle.fr/article/var/plain_site/storage/images/loisirs/cinema/news/rupert-grint-cette-seule-condition-pour-qu-il-revienne-dans-harry-potter-3921183/94710559-1-fre-FR/Rupert-Grint-cette-seule-condition-pour-qu-il-revienne-dans-Harry-Potter.jpg'),
	(7, 'Emma', 'Watson', 'Femme', '1990-04-15', 'https://imgsrc.cineserie.com/1990/04/226001-1.jpg?ver=1'),
	(8, 'Kirsten', 'Dunst', 'Femme', '1982-04-30', 'https://resize.elle.fr/article/var/plain_site/storage/images/people/style/trajectoire-mode/kirsten-dunst-actrice-incontournable/18825344-1-fre-FR/Kirsten-Dunst-actrice-incontournable.jpg'),
	(9, 'Jim', 'Sturgess', 'Homme', '1978-05-16', 'https://fr.web.img5.acsta.net/pictures/16/03/14/14/33/432749.jpg'),
	(10, 'Tom', 'Hanks', 'Homme', '1956-07-09', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Tom_Hanks_TIFF_2019.jpg'),
	(11, 'Sam', 'Worthington', 'Homme', '1976-08-02', 'https://imgsrc.cineserie.com/2023/01/437598-1.jpg?ver=1'),
	(12, 'Zoe', 'Saldana', 'Femme', '1978-06-19', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Avatar_The_Way_of_Water_Tokyo_Press_Conference_Zoe_Salda%C3%B1a_%2852563431865%29_%28cropped2%29.jpg/800px-Avatar_The_Way_of_Water_Tokyo_Press_Conference_Zoe_Salda%C3%B1a_%2852563431865%29_%28cropped2%29.jpg'),
	(13, 'Christian', 'Clavier', 'Homme', '1952-05-06', 'https://photo.astalents.net/media/m/832/83213/cc1_550_550.jpg'),
	(14, 'Gérard', 'Depardieu', 'Homme', '1948-12-27', 'https://images.mubicdn.net/images/cast_member/5415/cache-1884-1582917445/image-w856.jpg?size=800x'),
	(15, 'Jamel', 'Debbouze', 'Homme', '1975-06-18', 'https://fr.web.img5.acsta.net/pictures/20/12/21/16/44/3960806.jpg'),
	(16, 'Johny', 'Depp', 'Homme', '1963-06-09', 'https://www.gala.fr/imgre/fit/https.3A.2F.2Fwww.2Egala.2Efr.2Fimgre.2Ffit.2Fhttps.2E3A.2E2F.2E2Fi.2E2Epmdstatic.2E2Enet.2E2Fgal.2E2F2023.2E2F05.2E2F19.2E2Ff1dfa2a1-8e68-4a54-bf4f-5fafdd6ab0e3.2E2Ejpeg.2F1120x1534.2Fquality.2F80.2Fthumbnail.2Ejpg/480x657/quality/80/picture.jpg'),
	(17, 'Orlando', 'Bloom', 'Homme', '1977-01-13', 'https://static1.purepeople.com/people/5/29/5/@/5143715-orlando-bloom-aout-2019-560x315-2.jpg'),
	(18, 'Keira', 'Knightley', 'Femme', '1985-03-26', 'https://i.ndtvimg.com/mt/movies/2014-04/Keira-fear1.jpg'),
	(19, 'Brad', 'Pitt', 'Homme', '1963-12-18', 'https://fr.web.img2.acsta.net/pictures/20/02/10/10/37/1374948.jpg'),
	(20, 'Edward', 'Norton', 'Homme', '1969-08-18', 'https://upload.wikimedia.org/wikipedia/commons/3/35/Ed_Norton_Shankbone_Metropolitan_Opera_2009.jpg'),
	(21, 'Helena', 'Bonham Carter', 'Femme', '1966-05-26', 'https://images.mubicdn.net/images/cast_member/10212/cache-2371-1627288994/image-w856.jpg?size=800x'),
	(22, 'Lou', 'Romano', 'Homme', '1972-04-15', 'https://imgsrc.cineserie.com/1972/04/304111.jpg?ver=1'),
	(23, 'Patton', 'Oswalt', 'Homme', '1969-01-27', 'https://image.tmdb.org/t/p/w500/ljQvjbPmcIAl205Lb2Mu4CW8WO7.jpg'),
	(24, 'Robin', 'Williams', 'Homme', '1951-07-21', 'https://www.gala.fr/imgre/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F06.2F30.2F0319db87-79d4-473e-926a-4f1eb291bb76.2Ejpeg/620x430/quality/80/robin-williams.jpeg'),
	(25, 'Embeth', 'Davidtz', 'Femme', '1965-08-11', 'https://m.media-amazon.com/images/M/MV5BMTcyNTUyOTU5OV5BMl5BanBnXkFtZTcwMjE5MjQ1Nw@@._V1_FMjpg_UX1000_.jpg'),
	(26, 'Matthew', 'Broderick', 'Homme', '1962-03-21', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Matthew_Broderick_2012.jpg/640px-Matthew_Broderick_2012.jpg'),
	(27, 'James', 'Earl Jones', 'Homme', '1931-01-17', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/James_Earl_Jones_%288516667383%29.jpg/800px-James_Earl_Jones_%288516667383%29.jpg'),
	(28, 'Jeremy', 'Irons', 'Homme', '1948-11-19', 'https://m.media-amazon.com/images/M/MV5BMTY5Mzg2NDY5OV5BMl5BanBnXkFtZTcwMDQwNzA0Mg@@._V1_FMjpg_UX1000_.jpg'),
	(29, 'Suzane', 'Pleshette', 'Femme', '1937-01-31', 'https://imgc.artprintimages.com/img/print/suzanne-pleshette_u-l-pjtyib0.jpg'),
	(30, 'Brigitte', 'Heim', 'Femme', '1906-03-17', 'https://image.tmdb.org/t/p/w500/a7mwxoeF34BCxmteoHQSB1ENth0.jpg'),
	(31, 'Rudolf', 'Klein-rogge', 'Man', '1927-02-17', 'https://upload.wikimedia.org/wikipedia/it/8/84/Mabuse_gip.jpg'),
	(32, 'Al', 'Pacino', 'Man', '1974-05-05', 'https://imgsrc.cineserie.com/2023/03/365823.jpg?ver=1'),
	(33, 'Elvira', 'Hancock', 'Femme', '1958-04-29', 'https://media.vogue.fr/photos/5eb2c464d2efb0a42c0b4cb7/1:1/pass/undefined');

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

-- Listage des données de la table cinema_mvc.casting : ~18 rows (environ)
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
  `film_url_img` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
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
INSERT INTO `film` (`id_film`, `titre_film`, `date_sortie`, `duree`, `synopsis`, `film_url_img`, `genre_id`, `realisateur_id`, `note`) VALUES
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

-- Listage des données de la table cinema_mvc.genre : ~5 rows (environ)
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

-- Listage des données de la table cinema_mvc.realisateur : ~0 rows (environ)
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

-- Listage des données de la table cinema_mvc.role : ~11 rows (environ)
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
