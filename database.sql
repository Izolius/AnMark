-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.37 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных Anmark.ru
CREATE DATABASE IF NOT EXISTS `Anmark.ru` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Anmark.ru`;

-- Дамп структуры для таблица Anmark.ru.Friends
CREATE TABLE IF NOT EXISTS `Friends` (
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Friends: ~0 rows (приблизительно)
DELETE FROM `Friends`;
/*!40000 ALTER TABLE `Friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `Friends` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Users
CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `photo_50` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Users: ~5 rows (приблизительно)
DELETE FROM `Users`;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` (`id`, `first_name`, `last_name`, `photo_50`, `email`, `password`) VALUES
	(1, 'Anton', 'Andreev', '0_50.jpg', 'andreev-09@yandex.ru', 'qwerty'),
	(2, 'Misha', 'Karachyov', '1_50.jpg', 'somemail@yandex.ru', 'qwerty'),
	(3, 'asdfasdf', 'sdfasdfasdf', NULL, 'andreev-10@yandex.ru', 'qwerty'),
	(4, 'qwerqwer', 'qwerqwer', NULL, 'somemail2@yandex.ru', 'qwerty'),
	(5, 'Masha', 'Lubavina', NULL, 'masha.lubavina@yandex.ru', 'qwerty');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
