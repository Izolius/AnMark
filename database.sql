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

-- Дамп структуры для таблица Anmark.ru.Attachments
CREATE TABLE IF NOT EXISTS `Attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Attachments: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `Attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `Attachments` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Friends
CREATE TABLE IF NOT EXISTS `Friends` (
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Friends: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `Friends` DISABLE KEYS */;
INSERT INTO `Friends` (`user_id`, `friend_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 5),
	(5, 1),
	(5, 2);
/*!40000 ALTER TABLE `Friends` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Posts
CREATE TABLE IF NOT EXISTS `Posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `author_id` int(10) unsigned DEFAULT NULL,
  `text` longtext NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `post_author_id` (`author_id`),
  CONSTRAINT `post_author_id` FOREIGN KEY (`author_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `post_user_id` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Posts: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `Posts` DISABLE KEYS */;
INSERT INTO `Posts` (`id`, `user_id`, `author_id`, `text`, `created`) VALUES
	(1, 1, 1, 'Auto-loading Models\r\nIf you find that you need a particular model globally throughout your application, you can tell CodeIgniter to auto-load it during system initialization. This is done by opening the application/config/autoload.php file and adding the model to the autoload array.\r\n\r\nConnecting to your Database\r\nWhen a model is loaded it does NOT connect automatically to your database. The following options for connecting are available to you:\r\n\r\nYou can connect using the standard database methods described here, either from within your Controller class or your Model class.\r\nYou can tell the model loading method to auto-connect by passing TRUE (boolean) via the third parameter, and connectivity settings, as defined in your database config file will be used:', '0000-00-00 00:00:00'),
	(2, 1, 1, 'Auto-<p>loading</p> Models\r\nIf you find that you need a particular model globally throughout your application, you can tell CodeIgniter to auto-load it during system initialization. This is done by opening the application/config/autoload.php file and adding the model to the autoload array.\r\n\r\nConnecting to your Database\r\nWhen a model is loaded it does NOT connect automatically to your database. The following options for connecting are available to you:\r\n\r\nYou can connect using the standard database methods described here, either from within your Controller class or your Model class.\r\nYou can tell the model loading method to auto-connect by passing TRUE (boolean) via the third parameter, and connectivity settings, as defined in your database config file will be used:', '0000-00-00 00:00:00'),
	(3, 2, 2, 'Test? Yeah, just test', '0000-00-00 00:00:00'),
	(4, 2, 2, 'de new test', '0000-00-00 00:00:00'),
	(5, 2, 5, 'test by friend', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `Posts` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Post_Attachments
CREATE TABLE IF NOT EXISTS `Post_Attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `attachment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='прикреплённые файлы к посту';

-- Дамп данных таблицы Anmark.ru.Post_Attachments: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `Post_Attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `Post_Attachments` ENABLE KEYS */;

-- Дамп структуры для таблица Anmark.ru.Users
CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `photo_50` varchar(50) DEFAULT NULL,
  `photo_200` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registration` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Anmark.ru.Users: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` (`id`, `first_name`, `last_name`, `photo_50`, `photo_200`, `email`, `password`, `registration`) VALUES
	(1, 'Anton', 'Andreev', '0_50.jpg', '0_200.jpg', 'andreev-09@yandex.ru', 'qwerty', NULL),
	(2, 'Misha', 'Karachyov', '1_50.jpg', '1_200.jpg', 'somemail@yandex.ru', 'qwerty', NULL),
	(3, 'asdfasdf', 'sdfasdfasdf', 'n_50.jpg', 'n_200.jpg', 'andreev-10@yandex.ru', 'qwerty', NULL),
	(4, 'qwerqwer', 'qwerqwer', 'n_50.jpg', 'n_200.jpg', 'somemail2@yandex.ru', 'qwerty', NULL),
	(5, 'Masha', 'Lubavina', 'n_50.jpg', 'n_200.jpg', 'masha.lubavina@yandex.ru', 'qwerty', NULL),
	(6, 'qwerty', 'qwerty', 'n_50.jpg', 'n_200.jpg', 'qwerty@yandex.ru', 'qwerty', NULL),
	(7, 'Мария', 'Васильевна', 'n_50.jpg', 'n_200.jpg', 'maria@yandex.ru', 'qazwsx', NULL),
	(8, 'qwerty', 'qwerty', 'n_50.jpg', 'n_200.jpg', 'qwerty123@yandex.ru', 'qwerty', '0000-00-00 00:00:00'),
	(10, 'qwerty', 'qwerty', 'n_50.jpg', 'n_200.jpg', 'qwerty12345@yandex.ru', 'qwerty', '2017-11-07 10:09:27');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
