-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.30 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных FCNC
CREATE DATABASE IF NOT EXISTS `FCNC` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `FCNC`;

-- Дамп структуры для таблица FCNC.Заказы
CREATE TABLE IF NOT EXISTS `Заказы` (
  `ZID` int NOT NULL AUTO_INCREMENT,
  `KPID` int NOT NULL,
  `KNID` int NOT NULL,
  `Количество` int NOT NULL,
  `KPVID` int NOT NULL,
  `Дата` datetime NOT NULL,
  PRIMARY KEY (`ZID`),
  KEY `KPID` (`KPID`),
  KEY `KNID` (`KNID`),
  KEY `KPVID` (`KPVID`),
  CONSTRAINT `FKNID` FOREIGN KEY (`KNID`) REFERENCES `Наличие` (`NID`),
  CONSTRAINT `FKPID` FOREIGN KEY (`KPID`) REFERENCES `Пользователи` (`PID`),
  CONSTRAINT `FKPVID` FOREIGN KEY (`KPVID`) REFERENCES `Пункты_выдачи` (`PVID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Заказы: ~13 rows (приблизительно)

-- Дамп структуры базы данных FCNC
CREATE DATABASE IF NOT EXISTS `FCNC` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `FCNC`;

-- Дамп структуры для таблица FCNC.Наличие
CREATE TABLE IF NOT EXISTS `Наличие` (
  `NID` int NOT NULL AUTO_INCREMENT,
  `KTID` int NOT NULL,
  `KSID` int NOT NULL,
  `Количество` int NOT NULL,
  PRIMARY KEY (`NID`),
  KEY `KTID` (`KTID`),
  KEY `KSID` (`KSID`),
  CONSTRAINT `FKSID` FOREIGN KEY (`KSID`) REFERENCES `Склады` (`SID`),
  CONSTRAINT `FKTID` FOREIGN KEY (`KTID`) REFERENCES `Товары` (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Наличие: ~11 rows (приблизительно)
INSERT INTO `Наличие` (NID,KTID,KSID,`Количество`) VALUES
(1, 1, 1, 123),
(2, 2, 2, 65),
(3, 3, 3, 34),
(4, 4, 3, 76),
(5, 5, 2, 87),
(6, 6, 1, 153),
(7, 7, 1, 13),
(8, 8, 2, 15),
(9, 9, 3, 51),
(10, 9, 2, 78),
(11, 10, 1, 45);
-- Дамп структуры базы данных FCNC
CREATE DATABASE IF NOT EXISTS `FCNC` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `FCNC`;

-- Дамп структуры для таблица FCNC.Пользователи
CREATE TABLE IF NOT EXISTS `Пользователи` (
  `PID` int NOT NULL AUTO_INCREMENT,
  `Имя` varchar(40) NOT NULL,
  `Почта` varchar(40) NOT NULL,
  `Пароль` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `Почта` (`Почта`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Пользователи: ~4 rows (приблизительно)

-- Дамп структуры базы данных FCNC
CREATE DATABASE IF NOT EXISTS `FCNC` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `FCNC`;

-- Дамп структуры для таблица FCNC.Пункты_выдачи
CREATE TABLE IF NOT EXISTS `Пункты_выдачи` (
  `PVID` int NOT NULL AUTO_INCREMENT,
  `Название` varchar(60) DEFAULT NULL,
  `Адрес` varchar(200) NOT NULL,
  PRIMARY KEY (`PVID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Пункты_выдачи: ~5 rows (приблизительно)
INSERT INTO `Пункты_выдачи` (PVID,`Название`,`Адрес`) VALUES
(1, 'FCNC в ТЦ «ГУМ»', 'площадь Карла Маркса, 1'),
(2, 'FCNC в ТЦ Golden Field', 'улица Бориса Богаткова, 210/1'),
(3, 'FCNC в ТРЦ «Галерея»', 'улица Гоголя, 13'),
(4, 'FCNC в БЦ "Время"', 'улица Кирова, 48'),
(5, 'FCNC в ТЦ "КАЛИНА ЦЕНТР"', 'улица Дуси Ковальчук, 179/4');
-- Дамп структуры базы данных FCNC
CREATE DATABASE IF NOT EXISTS `FCNC` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `FCNC`;

-- Дамп структуры для таблица FCNC.Склады
CREATE TABLE IF NOT EXISTS `Склады` (
  `SID` int NOT NULL AUTO_INCREMENT,
  `Название` varchar(60) DEFAULT NULL,
  `Адрес` varchar(200) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Склады: ~3 rows (приблизительно)
INSERT INTO `Склады` (`SID`, `Название`, `Адрес`) VALUES
	(1, 'Складской комплекс КРЭС', 'улица Пасечная, 11/1к4'),
	(2, 'Сибирский Грузовой Терминал', 'улица Петухова, 35/2'),
	(3, 'Комус, склад', 'улица Станционная, 60/1к5');

-- Дамп структуры для таблица FCNC.Товары
CREATE TABLE IF NOT EXISTS `Товары` (
  `TID` int NOT NULL AUTO_INCREMENT,
  `Название` varchar(100) NOT NULL,
  `Цена` float NOT NULL,
  `Описание` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Рецептурный` tinyint(1) NOT NULL,
  `Картинка` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы FCNC.Товары: ~10 rows (приблизительно)
INSERT INTO `Товары` (`TID`, `Название`, `Цена`, `Описание`, `Рецептурный`, `Картинка`) VALUES
	(1, 'рифапаринуксин', 2590, 'Действующее вещество: Дилтиазем. Дозировка: 90 мг. Форма выпуска: таблетки пролонгированного действия, покрытые пленочной оболочкой. Количество в упаковке: 20 шт.', 0, 'img/goods/rifaparinuksin.png'),
	(2, 'лирика', 201, 'Действующее вещество: Прегабалин. Дозировка: 25 мг. Форма выпуска: капсулы. Количество в упаковке: 14 шт.', 1, 'img/goods/lirica.png'),
	(3, 'дифлюкан', 527, 'Действующее вещество: Флуконазол. Дозировка: 150 мг. Форма выпуска: капсулы. Количество в упаковке: 4 шт.', 0, 'img/goods/diflucan.png'),
	(4, 'зитромакс', 1990, 'Действующее вещество: Азитромицина дигидрат. Дозировка: 500 мг. Форма выпуска: таблетки. Количество в упаковке: 3 шт.', 0, 'img/goods/zitromax.png'),
	(5, 'виагра', 2920, 'Действующее вещество: Силденафил. Дозировка: 100 мг. Форма выпуска: таблетки, покрытые пленочной оболочкой. Количество в упаковке: 4 шт.', 1, 'img/goods/viagra.png'),
	(6, 'целебрекс', 1251, 'Действующее вещество: Целекоксиб. Дозировка: 200 мг. Форма выпуска: капсулы. Количество в упаковке: 30 шт.', 1, 'img/goods/celebrecs.png'),
	(7, 'сермион', 685, 'Действующее вещество: Ницерголин. Дозировка: 10 мг. Форма выпуска: таблетки, покрытые оболочкой. Количество в упаковке: 50 шт.', 1, 'img/goods/sermion.png'),
	(8, 'достинекс', 764, 'Действующее вещество: Каберголин. Дозировка: 0.5 мг. Форма выпуска: таблетки. Количество в упаковке: 2 шт.', 1, 'img/goods/dostinexs.png'),
	(9, 'чампикс', 1332, 'Действующее вещество: Варениклин. Дозировка: 1 мг. Форма выпуска: таблетки, покрытые пленочной оболочкой. Количество в упаковке: 28 шт.', 1, 'img/goods/champics.png'),
	(10, 'липитор', 1660, 'Действующее вещество: Аторвастатин. Дозировка: 40 мг. Форма выпуска: таблетки. Количество в упаковке: 20 шт.', 0, 'img/goods/lipitor.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
