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
DROP DATABASE IF EXISTS `Anmark.ru`;
CREATE DATABASE IF NOT EXISTS `Anmark.ru` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Anmark.ru`;

-- Дамп структуры для таблица Anmark.ru.Friends
DROP TABLE IF EXISTS `Friends`;
CREATE TABLE IF NOT EXISTS `Friends` (
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Friends: ~2 rows (приблизительно)
DELETE FROM `Friends`;
/*!40000 ALTER TABLE `Friends` DISABLE KEYS */;
INSERT INTO `Friends` (`user_id`, `friend_id`) VALUES
	(2, 5),
	(5, 1),
	(5, 2);
/*!40000 ALTER TABLE `Friends` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Posts
DROP TABLE IF EXISTS `Posts`;
CREATE TABLE IF NOT EXISTS `Posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Posts: ~0 rows (приблизительно)
DELETE FROM `Posts`;
/*!40000 ALTER TABLE `Posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `Posts` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Users
DROP TABLE IF EXISTS `Users`;
CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `photo_50` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registration` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Users: ~7 rows (приблизительно)
DELETE FROM `Users`;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` (`id`, `first_name`, `last_name`, `photo_50`, `email`, `password`, `registration`) VALUES
	(1, 'Anton', 'Andreev', '0_50.jpg', 'andreev-09@yandex.ru', 'qwerty', NULL),
	(2, 'Misha', 'Karachyov', '1_50.jpg', 'somemail@yandex.ru', 'qwerty', NULL),
	(3, 'asdfasdf', 'sdfasdfasdf', NULL, 'andreev-10@yandex.ru', 'qwerty', NULL),
	(4, 'qwerqwer', 'qwerqwer', NULL, 'somemail2@yandex.ru', 'qwerty', NULL),
	(5, 'Masha', 'Lubavina', NULL, 'masha.lubavina@yandex.ru', 'qwerty', NULL),
	(6, 'qwerty', 'qwerty', NULL, 'qwerty@yandex.ru', 'qwerty', NULL),
	(7, 'Мария', 'Васильевна', NULL, 'maria@yandex.ru', 'qazwsx', NULL),
	(8, 'qwerty', 'qwerty', NULL, 'qwerty123@yandex.ru', 'qwerty', '0000-00-00 00:00:00'),
	(10, 'qwerty', 'qwerty', NULL, 'qwerty12345@yandex.ru', 'qwerty', '2017-11-07 10:09:27');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
