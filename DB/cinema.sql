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
	(2, 'Sangoku', '', 'Homme', '1974-01-30', 'Kid sangoku.jpg'),
	(3, 'Broly', '', 'Homme', '1979-04-04', 'Dragonball Z - Broly.jpg'),
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
	(33, 'Michelle', 'Pfeiffer', 'Femme', '1958-04-29', 'undefined.webp');

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
  `biographie` longtext,
  `path_img_realisateur` longtext,
  PRIMARY KEY (`id_realisateur`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.realisateur : ~15 rows (environ)
INSERT INTO `realisateur` (`id_realisateur`, `prenom`, `nom`, `sexe`, `birthdate`, `biographie`, `path_img_realisateur`) VALUES
	(1, 'Akira', 'Toriyama', 'Homme', '1955-04-05', 'Akira Toriyama.. Son œuvre la plus célèbre, Dragon Ball, connaît un très grand succès mondial. En 2007, les Japonais le classent troisième « meilleur manga de tous les temps » à l\'occasion du dixième anniversaire du Japan Media Arts Festival, derrière Slam Dunk et JoJo\'s Bizarre Adventure1.', 'Akira Toriyama.jpg'),
	(2, 'Christopher', 'Nolan', 'Homme', '1970-07-30', NULL, 'Alain Chabat .jpg'),
	(3, 'J.K', 'Rowling', 'Femme', '1965-07-31', NULL, 'J.K Rowling.webp'),
	(4, 'Juan', 'Solanas', 'Homme', '1966-11-04', NULL, 'Juan Solanas.webp'),
	(5, 'Robert', 'Zemeckis', 'Homme', '1952-05-14', NULL, 'Robert Zemeckis.jpg'),
	(6, 'James', 'Cameron', 'Homme', '1954-08-16', NULL, 'James Cameron.webp'),
	(7, 'Alain', 'Chabat', 'Homme', '1958-11-24', NULL, 'Alain Chabat .jpg'),
	(8, 'Espen', 'Sandberg', 'Homme', '1971-06-17', NULL, 'Espen Sandberg.webp'),
	(9, 'David', 'Fincher', 'Homme', '1962-08-28', NULL, 'David Fincher.jpg'),
	(10, 'Brad', 'Bird', 'Homme', '1957-11-24', NULL, 'Brad Bird.jpg'),
	(11, 'Chris', 'Columbus', 'Homme', '1958-11-10', NULL, 'Chris Columbus.webp'),
	(12, 'Rob', 'Minkoff', 'Homme', '1962-08-11', NULL, 'Rob Minkoff .jpg'),
	(13, 'Darrell', 'Rooney', 'Homme', '1959-06-14', NULL, 'Darrell Rooney.jpeg'),
	(14, 'Fritz', 'Lang', 'Homme', '1890-12-05', NULL, 'Fritz Lang.webp'),
	(15, 'Brian', 'De Palma', 'Homme', '1940-11-11', NULL, 'Brian De Palma.jpg');

-- Listage de la structure de table cinema_mvc. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `description` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_mvc.role : ~34 rows (environ)
INSERT INTO `role` (`id_role`, `role_name`, `description`) VALUES
	(1, 'Sangoku', 'Son Goku,  anciennement orthographié Sangoku et Son Gokû), de son nom de naissance Kakarot (Kakarotto), est un personnage de fiction japonais créé par Akira Toriyama et le principal héros du manga Dragon Ball. Il apparaît pour la première fois le 20 novembre 1984 dans le Weekly Shonen Jump. Le personnage s\'inspire de Sun Wukong, en raison de son histoire d\'origine très similaire.'),
	(2, 'Patrick Bateman', NULL),
	(3, 'Broly', 'Broly est un personnage créé par Shigeyasu Yamauchi. Il apparaît dans quatre films qui lui sont consacrés : Dragon Ball Z : Broly le super guerrier, Dragon Ball Z : Rivaux dangereux, Dragon Ball Z : Attaque Super Warrior ! et Dragon Ball Super: Broly.'),
	(4, 'M. Brown', NULL),
	(5, 'Joseph Cooper', 'Au début, il était très dédaigneux à propos de la fixation de Murph sur un "fantôme" dans sa chambre. Finalement, il a été influencé par des événements étranges autour de sa maison. Y compris un ensemble de coordonnées qui lui ont été données en binaire, ce qui a conduit au nouveau siège de la NASA.'),
	(6, 'Harry Potter', 'Au début de la série, Harry Potter est décrit comme assez frêle et chétif, à cause de sa malnutrition chez les Dursley. Il est assez petit pour son âge, avec des genoux noueux3. À quinze ans, il est décrit comme étant pâle et légèrement maladif, comme une personne ayant « beaucoup grandi en peu de temps », et son apparence est négligée en dehors des périodes scolaires4. Il a les mêmes cheveux noirs en bataille que son père5,3 et les yeux vert émeraude et en forme d\'amande de sa mère6. Il porte des lunettes rondes3 à monture noire et une fine cicatrice en forme d\'éclair sur le front, souvent cachée par ses mèches.'),
	(7, 'Ron Weasley', 'Ronald Bilius Weasley[16] dit Ron[1] est le sixième fils d\'Arthur et Molly Weasley. Il entre à Poudlard en 1991 dans la maison Gryffondor. Il devient ami avec Harry Potter et Hermione Granger et ils forment un trio inséparable. Ensemble, ils relèvent de nombreux défis, notamment en protégeant la Pierre philosophale de Quirinus Quirrell, en formant l\'armée de Dumbledore et en combattant dans de nombreuses batailles comme la bataille du Département des mystères, la bataille de la tour d\'astronomie, et la bataille des sept Potter. Ron est également devenu préfet de Gryffondor et gardien de l\'équipe de Quidditch de Gryffondor pendant sa scolarité. Il a arrêté ses études pour accompagner Harry et Hermione dans la chasse aux Horcruxes et combat lors de la bataille de Poudlard.'),
	(8, 'Hermione Granger', 'Hermione Jean Granger amie proche de Harry Potter et de Ron Weasley, Hermione fait figure de droiture et d\'esprit tout au long de l\'histoire. Née de parents moldus, elle est particulièrement douée pour la magie et intéressée par le monde magique et les connaissances qui l\'entourent. Elle se montre d\'un grand secours auprès de ses camarades de Poudlard et fonde l\'Armée de Dumbledore avec Harry et Ron en cinquième année afin de contrer leur nouveau professeur de défense contre les forces du mal, Dolores Ombrage, et s\'entraîner à se défendre. Hermione et Ron aident ensuite Harry à trouver et à détruire tous les horcruxes de Voldemort, pour permettre à Harry de le vaincre.'),
	(9, 'Adam', 'Adam et Eden vivent dans un univers dans lequel deux planètes vivent l\'une en dessous de l\'autre avec des centres de gravité opposés, où toute matière d\'un monde obéit à la gravité de celui-ci. Eden vit dans le monde d\'en haut, prospère et riche, et Adam vit dans le monde d\'en-bas, monde pauvre. Lorsqu\'ils sont petits, Adam et Eden prennent l\'habitude de se retrouver sur la montagne de la sagesse où les deux mondes se touchent presque. Adolescents, ils sont amoureux mais il est interdit de communiquer entre les deux mondes et la police les surprend lorsqu\'ils sont ensemble. Alors qu\'Adam aide Eden à retourner sur son monde, la police lui tire dessus et il lâche Eden qui tombe et se frappe la tête. À la suite de cet accident, Eden devient amnésique et Adam ne peut plus revenir à la montagne de la sagesse. Dix ans plus tard, Adam voit Eden à la télévision et tente l\'impossible en défiant les lois de la gravité.'),
	(10, 'Eden', 'Adam et Eden vivent dans un univers dans lequel deux planètes vivent l\'une en dessous de l\'autre avec des centres de gravité opposés, où toute matière d\'un monde obéit à la gravité de celui-ci. Eden vit dans le monde d\'en haut, prospère et riche, et Adam vit dans le monde d\'en-bas, monde pauvre. Lorsqu\'ils sont petits, Adam et Eden prennent l\'habitude de se retrouver sur la montagne de la sagesse où les deux mondes se touchent presque. Adolescents, ils sont amoureux mais il est interdit de communiquer entre les deux mondes et la police les surprend lorsqu\'ils sont ensemble. Alors qu\'Adam aide Eden à retourner sur son monde, la police lui tire dessus et il lâche Eden qui tombe et se frappe la tête. À la suite de cet accident, Eden devient amnésique et Adam ne peut plus revenir à la montagne de la sagesse. Dix ans plus tard, Adam voit Eden à la télévision et tente l\'impossible en défiant les lois de la gravité.'),
	(11, 'Chuck Noland', 'Chuck Noland est un analyste de systèmes et un cadre de FedEx qui parcourt le monde pour résoudre des problèmes de productivité. Il vit avec sa compagne, Kelly Frears, à Memphis, dans le Tennessee.'),
	(12, 'Jake Sully', 'Jake Sully est un ancien Marine paraplégique. Il a l’opportunité de se rendre sur la lointaine Pandora, pour remplacer son frère décédé dans le cadre du programme Avatar. S’il arrive sur la planète sans la connaître, il se rapproche vite du clan Na\'vi Omaticaya, notamment de Neytiri avec qui il va apprendre à voir la nature d’un autre œil, ce qui va l’amener à devoir choisir un camps, entre son espèce dévastatrice et ses nouveaux protecteurs, et devoir assumer les conséquences de ses choix et de ses actes.'),
	(13, 'Neytiri', 'Neytiri Dis\'kahan Mo\'at\'itey (connue seulement sous le nom de Neytiri) est une Na\'vi, princesse du clan des Omaticayas. Elle est la fille d\'Eytukan et de Mo\'at. Elle sera la future tsahik de la tribu, et son conjoint Jake Sully, deviendra Olo\'eyktan (leader).'),
	(14, 'Astérix', 'Apparence. Astérix est un petit personnage blond à moustache et avec un gros nez. Il porte un gilet noir, de braies rouges et de chaussures. Il a aussi une épée courte, un glaive et une petite gourde qui contient de la potion magique.'),
	(15, 'Obélix', 'Les auteurs d’Astérix René Goscinny et Albert Uderzo ont de nombreuses fois collaboré avant la création de cette série. En 1958, ils créent notamment le personnage Oumpah-Pah, un Amérindien vivant en Nouvelle-France et allié des Français. La série Oumpah-Pah contient tous les ingrédients de ce qui sera plus tard la série Astérix le Gaulois : le duo comique avec le personnage d’Oumpah-Pah et son ami le chevalier français Hubert de la Pâte Feuilletée ressemble au duo Astérix et Obélix1 ; mais ce qui rapproche surtout Obélix d’Oumpah-Pah, outre sa force surhumaine (une force naturelle sans l’aide de potion) est son imposant physique 2.'),
	(16, 'Jamel Debbouze', 'Cléopâtre, la reine d’Égypte, décide, pour défier l\'Empereur romain Jules César, de construire en trois mois un palais somptueux en plein désert. Si elle y parvient, celui-ci devra concéder publiquement que le peuple égyptien est le plus grand de tous les peuples. Pour ce faire, Cléopâtre fait appel à Numérobis, un architecte d\'avant-garde plein d\'énergie. S\'il réussit, elle le couvrira d\'or. S\'il échoue, elle le jettera aux crocodiles.'),
	(17, 'Jack Sparrow', 'Jack Sparrow est le seigneur pirate de la mer des Caraïbes. Il apprécie la liberté que lui apporte sa vie de boucanier, buvant du rhum et séduisant des femmes tout en cherchant des trésors surnaturels. Il a recours à de nombreuses reprises à la négociation et à la trahison, préférant les pourparlers aux armes pour survivre. Dans le premier film de la série, le personnage cherche à récupérer son navire, le Black Pearl, des mains de son second, le capitaine Hector Barbossa (Geoffrey Rush). Dans les suites, Sparrow cherche plutôt à échapper à la dette qui le lie à Davy Jones, à combattre la Compagnie des Indes orientales ou à affronter d\'anciens ennemis qui veulent se venger, tels que Salazar.'),
	(18, 'William Turner III', 'William « Will » Turner est un forgeron devenu pirate. Il est le fils de Bill Turner l’époux d’Elizabeth Swann et le père d\'Henry Turner.'),
	(19, 'Elizabeth Swann', 'Elizabeth Swann, épouse Turner, est la fille du gouverneur Weatherby Swann, devenue pirate au cours de son adolescence. Au cours de la guerre contre la piraterie, elle est désignée seigneur des pirates et est élue roi du tribunal de la confrérie.'),
	(20, 'Tyler Durden', 'Tyler a décrit son monde idéal comme un paradis arcadien, des humains vivant librement au milieu de ruines urbaines post-apocalyptiques. Certains critiques prétendent que Tyler Durden était un hypocrite, prêchant la liberté tout en commandant son propre culte personnel.'),
	(21, 'Le narrateur', 'Le narrateur est un technicien de rappel en usine de voitures défectueuses pour une grande marque. Trentenaire célibataire, désillusionné par la vie et anhédonique, il souffre d\'insomnie chronique et cherche un moyen de s\'évader de son existence monotone. Refusant de l\'assister par médication, son médecin lui suggère de participer à des groupes de parole centrés sur divers troubles et maladies, de façon à relativiser son état de souffrance. Le narrateur rejoint donc un groupe de victimes du cancer des testicules, et s\'aperçoit que se faire passer pour une victime lui permet de se sentir en vie et de soigner son insomnie. Il y prend goût et décide d\'intégrer d\'autres groupes d\'entraide mais remarque bientôt qu\'une femme, Marla Singer, participe comme lui à tous les groupes. Incommodé par la présence d\'un autre imposteur, il négocie avec elle pour qu\'ils se répartissent les différentes séances hebdomadaires.'),
	(22, 'Marla Singer', 'Trop effrayée et perdue pour savoir quelle direction prendre dans la vie, elle préfère ne plus rien faire (hormis y mettre un terme en absorbant une bouteille de Xanax…). Dénuée de confiance en elle, Marla se décrit comme une personne inquiète de se voir vieillir dans cette vie qu\'elle ne ressent pas.'),
	(23, 'Alfredo Linguini', 'Alfredo Linguini-Gusteau, plus connu simplement en tant qu\'Alfredo Linguini (ou tout simplement Linguini), est un apprenti cuisinier devenu patron et serveur de restaurant. Il est le protagoniste central dans le film d\'animation à succès de Pixar Animation Studios, Ratatouille (2007). Un personnage culte, Linguini est également apparu dans les nombreux produits dérivés de ses studios comme ses jeux-vidéos. Il a été interprété dans la version française par l\'acteur et chanteur Thierry Ragueneau, dans la version québécoise par l\'acteur Philippe Martin, et enfin dans la version originale par l\'acteur et animateur Lou Romano, un collaborateur de Pixar connu pour avoir prêté sa voix à plusieurs personnages dans les films sur lesquels il a travaillé, notamment Plein-Pot dans Cars : Quatre Roues (2006).'),
	(24, 'Rémy', 'Rémy est un personnage de fiction, un rat d\'égout apparaissant dans le film Ratatouille. Il est également le héros des jeux vidéo dérivés du film, comme Ratatouille ou Ratatouille : Cuisine en délire.'),
	(25, 'Andrew Martin', 'Gérald Martin a acheté pour sa famille un robot de type NDR à la société US Robots, qui possède le monopole dans ce domaine. Le robot est vite baptisé Andrew et sert de valet, de maître d\'hôtel et de femme de chambre. Il remplit correctement ses fonctions tout en divertissant les deux filles de M. Martin, jusqu\'au jour où il offre à « la petite Mademoiselle » un pendentif qu\'il a taillé dans le bois.'),
	(26, 'Amanda Martin', 'À ceci près que l\'« Andrew » (Amanda entend mal le mot "androïde") en question ne sera pas aussi simple que le modèle classique. Doté d\'un esprit d\'analyse modifié par accident, le robot se montre capable de créativité (notamment en sculptant de petits animaux en bois sans que personne lui apprenne). Il va se donner des buts, des objectifs à atteindre et va, au fil de ses apprentissages et de ses émotions, apprendre la vie.'),
	(27, 'Simba', 'Simba est un personnage de fiction apparu pour la première fois dans le long métrage d\'animation Le Roi lion. Le personnage apparaît dans les suites et réadaptations : Le Roi lion 2 : L\'Honneur de la tribu, Le Roi lion 3 : Hakuna Matata et Le Roi lion (2019).'),
	(28, 'Mufasa', 'Mufasa incarne l\'instinct paternel chez Disney, mais est également le symbole de la force et de la férocité propres au lion. Il est donc l\'archétype du statut royal que le lion occupe métaphoriquement parmi les animaux. Père reconnu de Simba (héritier du trône), il est en rivalité avec son frère Scar. Ce dernier l\'assassinera afin de prendre sa place en tant que roi en faisant fuir Simba qu\'il convainc d\'être responsable de la mort de son père et qu\'il tente d\'assassiner à l\'aide des hyènes.'),
	(29, 'Scar', 'Scar est un personnage de fiction apparu pour la première fois dans le long métrage d\'animation Le Roi lion (1994). Ce lion est le frère cadet de Mufasa, écarté du trône en raison du droit d\'aînesse. Il meurt tué et dévoré par les hyènes après les avoir traitées d\'ennemies.'),
	(30, 'Zira', 'Zira est un personnage de fiction apparu pour la première fois dans le long-métrage d\'animation Le Roi lion 2 : L\'Honneur de la Tribu. Cette lionne est la veuve de Scar et est l\'antagoniste du film.'),
	(31, 'Maria', 'Maria (Brigitte Helm), une femme de la ville basse, essaie de promouvoir l\'entente entre les classes, et emmène clandestinement des enfants d\'ouvriers visiter la ville haute. '),
	(32, 'Rotwang', 'L’hybride Rotwang (Rudolf Klein-Rogge), met au point un androïde à l’apparence féminine, lequel sera chargé d\'exhorter les ouvriers à se rebeller contre le maître de la cité'),
	(33, 'Tony Montana', 'Antonio « Tony » Montana, dit Scarface, est un héros cinématographique et vidéoludique. Il est le personnage principal des deux films Scarface (surnom qui signifie en anglais « le Balafré »), le premier Scarface de Howard Hawks (1932), le second, Scarface de Brian De Palma, sorti en 1983, ainsi que du jeu vidéo Scarface : The World is Yours (2006).'),
	(34, 'Elvira Hancock', 'Elvira Hancock est un personnage fictif du film policier américain Scarface de 1983, interprétée par Michelle Pfeiffer. Cela s\'est avéré être son rôle décisif. Elle est la maîtresse de Frank Lopez (Robert Loggia) et après sa mort, devient l\'épouse de Tony Montana (Al Pacino).');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
