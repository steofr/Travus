-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.31 - MySQL Community Server - GPL
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


-- Listage de la structure de la base pour travusdb
CREATE DATABASE IF NOT EXISTS `travusdb` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `travusdb`;

-- Listage de la structure de table travusdb. alfa_romeo
CREATE TABLE IF NOT EXISTS `alfa_romeo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.alfa_romeo : ~6 rows (environ)
INSERT INTO `alfa_romeo` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try_kkk', 'gerg(-yè-juè-', '638f25c613265.jpg', '2022-12-06 20:34:02'),
	(2, 'macouille', 'rghtrghtrhy-', '638f1b4139289.jpg', '2022-12-06 20:35:11'),
	(3, 'try2', 'gtrhuè_iè_i', '638df046d39a3.jpg', '2022-12-06 20:36:52'),
	(4, 'p7', 'trhyu-è-jui_', '638dd752b94d7.jpg', '2022-12-06 20:42:24'),
	(5, 'p7', 'ma bite', '638dd752b94d7.jpg', '2022-12-06 20:43:49'),
	(6, 'try_kkk', 'hthy(-uè', '638f25c613265.jpg', '2022-12-06 22:12:20');

-- Listage de la structure de table travusdb. aston_martin
CREATE TABLE IF NOT EXISTS `aston_martin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.aston_martin : ~2 rows (environ)
INSERT INTO `aston_martin` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'p7', 'ergt-hyè-ju_', '638dd752b94d7.jpg', '2022-12-06 21:28:23'),
	(2, 'try_kkk', 'rtyuuè-uè-u', '638f25c613265.jpg', '2022-12-06 22:10:12');

-- Listage de la structure de table travusdb. audi
CREATE TABLE IF NOT EXISTS `audi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.audi : ~2 rows (environ)
INSERT INTO `audi` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'huè-ui', '638f2ef7e39b8.jpg', '2022-12-06 21:32:38'),
	(2, 'try_kkk', 'ghtrhyè-uè-', '638f25c613265.jpg', '2022-12-06 22:12:39');

-- Listage de la structure de table travusdb. bmw
CREATE TABLE IF NOT EXISTS `bmw` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.bmw : ~2 rows (environ)
INSERT INTO `bmw` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'yuiiii_i', '638f2ef7e39b8.jpg', '2022-12-06 21:39:46'),
	(2, 'try_kkk', 'htrhy(-y', '638f25c613265.jpg', '2022-12-06 22:13:11');

-- Listage de la structure de table travusdb. bugatti
CREATE TABLE IF NOT EXISTS `bugatti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.bugatti : ~2 rows (environ)
INSERT INTO `bugatti` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'htyhyu-', '638f2ef7e39b8.jpg', '2022-12-06 21:43:54'),
	(2, 'try_kkk', 'tyuè-uè-', '638f25c613265.jpg', '2022-12-06 22:11:32'),
	(3, 'try_kkk', 'trhyu-u', '638f25c613265.jpg', '2022-12-07 14:43:25');

-- Listage de la structure de table travusdb. dacia
CREATE TABLE IF NOT EXISTS `dacia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.dacia : ~2 rows (environ)
INSERT INTO `dacia` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'rhtyhyu-èj-', '638f2ef7e39b8.jpg', '2022-12-06 21:46:38'),
	(2, 'try_kkk', 'dfgtrytryt', '638f25c613265.jpg', '2022-12-06 22:14:35');

-- Listage de la structure de table travusdb. ferrari
CREATE TABLE IF NOT EXISTS `ferrari` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.ferrari : ~2 rows (environ)
INSERT INTO `ferrari` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'gfbtrh', '638f2ef7e39b8.jpg', '2022-12-06 21:49:04'),
	(2, 'try_kkk', 'rty(-y(-y-(èy', '638f25c613265.jpg', '2022-12-06 22:11:47');

-- Listage de la structure de table travusdb. fiat
CREATE TABLE IF NOT EXISTS `fiat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.fiat : ~2 rows (environ)
INSERT INTO `fiat` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'dfgtrhè-uè_i', '638f2ef7e39b8.jpg', '2022-12-06 21:50:49'),
	(2, 'try_kkk', 'gfrhtry(-yu', '638f25c613265.jpg', '2022-12-06 22:13:22');

-- Listage de la structure de table travusdb. ford
CREATE TABLE IF NOT EXISTS `ford` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.ford : ~2 rows (environ)
INSERT INTO `ford` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', '(yuè-uè-u', '638f2ef7e39b8.jpg', '2022-12-06 21:53:37'),
	(2, 'try_kkk', 'dfgtrgtrghtrh', '638f25c613265.jpg', '2022-12-06 22:13:57');

-- Listage de la structure de table travusdb. maserati
CREATE TABLE IF NOT EXISTS `maserati` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.maserati : ~2 rows (environ)
INSERT INTO `maserati` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'gtrhuè-', '638f2ef7e39b8.jpg', '2022-12-06 21:56:54'),
	(2, 'try_kkk', 'trhyuè--', '638f25c613265.jpg', '2022-12-06 22:12:08');

-- Listage de la structure de table travusdb. mazda
CREATE TABLE IF NOT EXISTS `mazda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.mazda : ~2 rows (environ)
INSERT INTO `mazda` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'trhtrh(-', '638f2ef7e39b8.jpg', '2022-12-06 21:59:13'),
	(2, 'try_kkk', 'thtrhy', '638f25c613265.jpg', '2022-12-06 22:13:35');

-- Listage de la structure de table travusdb. nissan
CREATE TABLE IF NOT EXISTS `nissan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.nissan : ~2 rows (environ)
INSERT INTO `nissan` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'rh(-uè-uè_iè_iè_', '638f2ef7e39b8.jpg', '2022-12-06 22:01:17'),
	(2, 'try_kkk', 'rthtryh-', '638f25c613265.jpg', '2022-12-06 22:13:48');

-- Listage de la structure de table travusdb. peugeot
CREATE TABLE IF NOT EXISTS `peugeot` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.peugeot : ~2 rows (environ)
INSERT INTO `peugeot` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'hnjjyu-uèjè-', '638f2ef7e39b8.jpg', '2022-12-06 22:03:57'),
	(2, 'try_kkk', 'trghtrghtrh', '638f25c613265.jpg', '2022-12-06 22:14:09');

-- Listage de la structure de table travusdb. renault
CREATE TABLE IF NOT EXISTS `renault` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.renault : ~2 rows (environ)
INSERT INTO `renault` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'htyuè-uiè_i', '638f2ef7e39b8.jpg', '2022-12-06 22:06:05'),
	(2, 'try_kkk', 'dfgtrgytryr', '638f25c613265.jpg', '2022-12-06 22:14:22');

-- Listage de la structure de table travusdb. tit
CREATE TABLE IF NOT EXISTS `tit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `MDP` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT 'classic',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.tit : ~29 rows (environ)
INSERT INTO `tit` (`id`, `nom`, `prenom`, `mail`, `pseudo`, `MDP`, `avatar`, `user_type`) VALUES
	(2, 'grt-huyjtjh', 'mmmmmmmmmmm', 'jhg@djdohd.com', 'matouchou', '$2y$10$UWjbNYst5wzRIl6MWeOHqOyxWz.ucEbBqdI9PmH5Ejm0AFwT8wUy.', '638da9aba0507.jpg', 'classic'),
	(3, 'zfrzefg', 'ergtertgr', 'dino@afci.com', 'p19', '$2y$10$I3lzpz3vqkc9FZAZLN2r.uZ4rVKQ/PQar/cQIWLgW/96Kde1.oBOO', '638db8981d716.jpg', 'Admin'),
	(5, 'fgregeg', 'ertgretgreg', 'reina.adriano@outlook.fr', 'mat', '$2y$10$5m889ZfmtRidJbbO8YgwuOVaKGjOOuQfHLGZLTdYnWBs89AK2pSZG', '638dd2b424597.jpg', 'classic'),
	(7, 'tghrtshrh', 'tyhrtyhrthyrt', 'jhg@djdohd.com', 'p10', '$2y$10$KE.XIWQjM8k7DI4EWAHEOebX2lCBdVe1hksWgSEsXdVfRNnM4XMVG', '638dd336ce70d.jpg', 'Admin'),
	(8, 'bfgbhfgtbhf', 'fghfrtghtfgh', 'dino@afci.com', 'drfg', '$2y$10$TdyUsQTb./QzXEUjgKxm2uwng2eu0FQcH71ymXV3jxwk0QqL.49YW', '638dd389241ef.jpg', 'classic'),
	(9, 'bfgbhfgtbhf', 'fghfrtghtfgh', 'dino@afci.com', 'drfg', '$2y$10$O0yVI.rF/1pGnWqsXCcubOYWBHFxyeBZicYEZ0j0CC9rbBOel1R0G', '638dd663a59ca.jpg', 'classic'),
	(13, 'rgthy', 'rthrt', 'reina.adriano@outlook.fr', 'try1', '$2y$10$DrKHVpZzB8/pxcEV5Uq.kOjTwsNblYSRxQ6ZrgPOpqadwbizeJQvW', '638def2c477ff.jpg', 'classic'),
	(14, 'ergtrhy', 'rthrthyrthy', 'b.omega.dev@gmail.com', 'try2', '$2y$10$w5PFBcUe73I3WUJY68wJmed3xInwDYNrMIrdL7moA4x718EFJLOui', '638df046d39a3.jpg', 'classic'),
	(15, 'ergtrhy', 'rthrthyrthy', 'b.omega.dev@gmail.com', 'try2', '$2y$10$7azbzuW.8pEcOoYljx4S9e9aczE7qxNHj5S1/PWWNqeQIx7ddcOfS', '638df0fdb8f74.jpg', 'classic'),
	(16, 'ergtrhy', 'rthrthyrthy', 'b.omega.dev@gmail.com', 'try2', '$2y$10$GcTVAnanJUgXYKqCdpFe7O17pkNUsk9muSOzSR/hv4KtvegQaWaEm', '638df85030c79.jpg', 'classic'),
	(17, 'fhuy', 'rtyhrtyr', 'dino@afci.com', 'p5', '$2y$10$cEzr/x9Fsl0dsmUbDRuMVOMHBq7/wu/5KYvMxu98IN8l/MQhIAmVe', '638e0329dfb94.jpg', 'classic'),
	(18, 'rt(yhrt-yh', 'finito', 'reina.adriano@outlook.fr', 'p7', '$2y$10$LV1O0zoaMAh4HoYnlMhUa.lSlvcXevEAVGsULcXRhTN8xpTugG3jy', '638e03bb92545.jpg', 'classic'),
	(19, 'eterter', 'ertrete', 'dino@afci.com', 'matouchou', '$2y$10$12cuReXtVzEy8JSstMnml.gTKwx6MKUw7tgiAzSqc1kRZHR/k4y0y', '638e084a8d4b6.jpg', 'classic'),
	(20, 'k,ojnio', 'jojio', 'jhg@djdohd.com', 'p7', '$2y$10$XeTYl8qZ8kjVs61YtX8sEepDCPhTFvrpWCjPVcsXekuWkmZcHKopq', '638e09c022c44.jpg', 'classic'),
	(21, 'gfhh', 'rthy', '123@456.com', 'macouille', '$2y$10$vDuogE35exrIXrAuwHLk3e05Y1syEfXQnsVzqaz.sucr2JnULji9O', '638f1b4139289.jpg', 'classic'),
	(23, 'gtrghtr', 'rtghtrh', '123@xys.com', 'lastluck', '$2y$10$rrSnxC7gMdbdaUGbr7RetujAqAAe66Qbi6Yl1kkpkygptO2KgUydu', '638f2930e7ba1.jpg', 'classic'),
	(24, 'zefzerf', 'rtertert', '123@xys.com', 'rgfer', '$2y$10$TlF3nNWC4pix5CroyN6Mee/ub74/KbzxYEMj6crWULrUECfttseSW', '638f2b7e23576.jpg', 'classic'),
	(26, 'ergferge', 'egtr', '123@xys.com', 'ger', '$2y$10$nC6/IaMeJ9JJTrfZyGua..WaFoWbjifdH6AKNd9a25KfPHTmOdOme', '638f2de400e16.jpg', 'classic'),
	(27, 'ghtrghtr', 'rthtrhtr', 'trytry@tjt.gg', 'tjutru', '$2y$10$DGtyD/33G88lDVjABlaVIuZPM4uGJ6YCcK.JMdZqKQRkE.No5bTrW', '638f2eb7a5fe1.jpg', 'classic'),
	(28, 'dfgfb', 'gtrgtr', 'gen.frer@hh.hh', 'try', '$2y$10$CGvHEbbfv9P8IMBs0JNhH.3iOcE9WkiwAB2ouftWuxxitOPAOq6s6', '638f2ef7e39b8.jpg', 'classic'),
	(29, 'uè', '-y(-y', 'kkkk.hhh@jjj.mm', 'bgfrhtrhtr', '$2y$10$wtdmMn1tbyqh5QIY2UBgzO/loSKovPA5sm9fjkuKtfzFJy0yoQh1K', '638f2f2ea8cf4.jpg', 'classic'),
	(30, 'rthtrhtr', 'rthtrhr', 'rtyr.jjj@ll.oo', '5555', '$2y$10$5.Ot5jQUieOQssLnF3IkYuffDpWLSkck8i9lwif6QTWfg8H/cK18e', '638f2f91d9bd0.jpg', 'classic'),
	(31, 'dfvgfrg', 'ferfe', 'joergfer.fer@hh.ff', '4444', '$2y$10$ZZ4cBCY/jGmubCzzpRua4OwNxyIQucZ/SlHxCghNfObSMU04x2BMW', '638f3342954b3.jpg', 'classic'),
	(33, 'efgerg', 'ergr', '123@xys.com', '444', '$2y$10$RLMMOpuaRtwKlhd23T/3rOX7fS0g1KGJVT48x1ysXy6fFrCv1tQqO', '638f33a486610.jpg', 'classic'),
	(37, 'zefzef', 'fzeze', '8888.666@33.11', 'winwin', '$2y$10$JMm48.IdzlI34oBnjZ.iW.5Luz5xtgf6sppGa1DacUYfLGlrvhdv6', '6395563dde7ff.jpg', 'Admin'),
	(38, 'tyuu-', 'yu(-y(-y(-y', 'rterter@gdf.gh', 'new_user_created_bu_admin', '$2y$10$kvgdBioh8JYm85WedC33jeUsZiCEP2peHvce1QIeSTrWGyZpURZr6', '63955703e77e0.jpg', 'classic'),
	(39, 'gigi', 'lagaule', 'gege.latrick@goal.com', 'gglatrick', '$2y$10$2ZyJGovkwmujYYUB2nDfnOBrZffc.P5373tew0Ei6uqxeY65jwcgy', '639557e4e35f6.jpg', 'Admin'),
	(40, 'gtrgrtg', 'egerg', '123@xys.com', '777', '$2y$10$F3bfYrXAcBAlZFsOtZIcyOd/e.Xw/lhXBvMIE0z3YV5mAnJ6Mwn.G', '639580d433e08.jpg', 'Admin');

-- Listage de la structure de table travusdb. vw
CREATE TABLE IF NOT EXISTS `vw` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(88) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `avatar` varchar(155) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table travusdb.vw : ~2 rows (environ)
INSERT INTO `vw` (`id`, `pseudo`, `comment`, `avatar`, `date`) VALUES
	(1, 'try', 'rhè-uè-u-u', '638f2ef7e39b8.jpg', '2022-12-06 22:08:19'),
	(2, 'try_kkk', 'huè-uiè_', '638f25c613265.jpg', '2022-12-06 22:12:50');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
