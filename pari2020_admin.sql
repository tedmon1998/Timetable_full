-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 01 2022 г., 13:31
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pari2020_admin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `60791_chet`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_chet`;
CREATE TABLE `60791_chet` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_chet`
--

INSERT INTO `60791_chet` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 73, 11, '09:40', '11:10', 'Элективные дисциплины по физической культуре и спорту', NULL, 'С', '', '', 1),
(2, 74, 12, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(3, 75, 13, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(4, 76, 14, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(5, 77, 15, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(6, 78, 16, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(7, 79, 21, '13:20', '14:50', 'Управление данными', NULL, 'У708 ', '', 'Заикин П.В.', 1),
(8, 80, 22, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(9, 81, 23, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(10, 82, 24, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(11, 83, 25, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(12, 84, 26, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(13, 85, 31, '15:00', '16:30', 'Основы Web-инжиниринга', NULL, 'У708 ', '', 'Заикин П.В.', 1),
(14, 86, 32, '15:00', '16:30', '—', NULL, '—', '', '—', 1),
(15, 87, 33, '15:00', '16:30', '—', NULL, '—', '', '—', 1),
(16, 88, 34, '15:00', '16:30', '—', NULL, '—', '', '—', 1),
(17, 89, 35, '15:00', '16:30', '—', NULL, '—', '', '—', 1),
(18, 90, 36, '15:00', '16:30', '—', NULL, '—', '', '—', 1),
(19, 91, 41, '16:40', '18:10', '—', NULL, '—', '', '—', 0),
(20, 92, 42, '16:40', '18:10', '—', NULL, '—', '', '—', 0),
(21, 93, 43, '16:40', '18:10', '—', NULL, '—', '', '—', 0),
(22, 94, 44, '16:40', '18:10', '—', NULL, '—', '', '—', 0),
(23, 95, 45, '16:40', '18:10', '—', NULL, '—', '', '—', 0),
(24, 96, 46, '16:40', '18:10', '—', NULL, '—', '', '—', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `60791_pon`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_pon`;
CREATE TABLE `60791_pon` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_pon`
--

INSERT INTO `60791_pon` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 1, 11, '09:40', '11:10', 'Элективные дисциплины по физической культуре и спорту', NULL, 'С', '', '', 1),
(2, 2, 12, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(3, 3, 13, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(4, 4, 14, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(5, 5, 15, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(6, 6, 16, '09:40', '11:10', '—', NULL, '—', '', '—', 1),
(7, 7, 21, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(8, 8, 22, '13:20', '14:50', 'Иностр. язык', NULL, 'У508 ', '', 'Пичуева А.В.', 3),
(9, 9, 23, '13:20', '14:50', 'Управление данными', NULL, 'А417а', '', ' Федоров Д.А.', 3),
(10, 10, 24, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(11, 11, 25, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(12, 12, 26, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(13, 13, 31, '15:00', '16:30', 'Дифференциальные уравнения', NULL, 'У504 ', '', 'Лысенкова С.А.', 4),
(14, 14, 32, '15:00', '16:30', 'Основы проектной деятельности', NULL, 'А417а', '', ' Федоров Д.А.', 4),
(15, 15, 33, '15:00', '16:30', '—', NULL, '—', '', '—', 4),
(16, 16, 34, '15:00', '16:30', '—', NULL, '—', '', '—', 4),
(17, 17, 35, '15:00', '16:30', '—', NULL, '—', '', '—', 4),
(18, 18, 36, '15:00', '16:30', '—', NULL, '—', '', '—', 4),
(19, 19, 41, '16:40', '18:10', 'Дифференциальные уравнения', NULL, 'У903Л', '', 'Лысенкова С.А.', 2),
(20, 20, 42, '16:40', '18:10', 'Основы проектной деятельности', NULL, 'А417а', '', ' Федоров Д.А.', 2),
(21, 21, 43, '16:40', '18:10', '—', NULL, '—', '', '—', 2),
(22, 22, 44, '16:40', '18:10', '—', NULL, '—', '', '—', 2),
(23, 23, 45, '16:40', '18:10', '—', NULL, '—', '', '—', 2),
(24, 24, 46, '16:40', '18:10', '—', NULL, '—', '', '—', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `60791_pyat`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_pyat`;
CREATE TABLE `60791_pyat` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_pyat`
--

INSERT INTO `60791_pyat` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 97, 11, '08:00', '09:30', 'Управление данными', NULL, 'А417а', '', ' Федоров Д.А.', 3),
(2, 98, 12, '08:00', '09:30', 'Матем. модели в экономике', NULL, 'У607 ', '', 'Шайторова И.А.', 3),
(3, 99, 13, '08:00', '09:30', 'Стат. методы и модели управления', NULL, 'У601 ', '', 'Назина Н.Б.', 3),
(4, 100, 14, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(5, 101, 15, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(6, 102, 16, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(7, 103, 21, '09:40', '11:10', 'Матем. модели в экономике', NULL, 'У607 ', '', 'Шайторова И.А.', 3),
(8, 104, 22, '09:40', '11:10', 'Управление данными', NULL, 'А417а', '', ' Федоров Д.А.', 3),
(9, 105, 23, '09:40', '11:10', 'Инфор. технологии', NULL, 'У601 ', '', 'Назина Н.Б.', 3),
(10, 106, 24, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(11, 107, 25, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(12, 108, 26, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(13, 109, 31, '11:20', '12:50', 'Основы проектной деятельности', NULL, 'А417а', '', ' Федоров Д.А.', 3),
(14, 110, 32, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(15, 111, 33, '11:20', '12:50', 'Матем. модели в экономике', NULL, 'У607 ', '', 'Шайторова И.А.', 3),
(16, 112, 34, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(17, 113, 35, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(18, 114, 36, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(19, 115, 41, '13:20', '14:50', 'Матем. модели в экономике', NULL, 'У607 ', '', 'Шайторова И.А.', 1),
(20, 116, 42, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(21, 117, 43, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(22, 118, 44, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(23, 119, 45, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(24, 120, 46, '13:20', '14:50', '—', NULL, '—', '', '—', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `60791_sred`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_sred`;
CREATE TABLE `60791_sred` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_sred`
--

INSERT INTO `60791_sred` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 49, 11, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(2, 50, 12, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(3, 51, 13, '08:00', '09:30', 'Основы Web-инжинир.', NULL, 'У607 ', '', 'Павлов С.И.', 3),
(4, 52, 14, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(5, 53, 15, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(6, 54, 16, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(7, 55, 21, '09:40', '11:10', 'Основы Web-инжинир.', NULL, 'У607 ', '', 'Павлов С.И.', 3),
(8, 56, 22, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(9, 57, 23, '09:40', '11:10', 'Иностр. язык', NULL, 'У508 ', '', 'Кузнецова С.В.', 3),
(10, 58, 24, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(11, 59, 25, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(12, 60, 26, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(13, 61, 31, '11:20', '12:50', 'Иностр. язык', NULL, 'А502 ', '', 'Чеснокова Н.Е.', 3),
(14, 62, 32, '11:20', '12:50', 'Основы Web-инжинир.', NULL, 'У607 ', '', 'Павлов С.И.', 3),
(15, 63, 33, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(16, 64, 34, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(17, 65, 35, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(18, 66, 36, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(19, 67, 41, '13:20', '14:50', 'Стат. методы и модели управления', NULL, 'У601 ', '', 'Назина Н.Б.', 1),
(20, 68, 42, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(21, 69, 43, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(22, 70, 44, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(23, 71, 45, '13:20', '14:50', '—', NULL, '—', '', '—', 1),
(24, 72, 46, '13:20', '14:50', '—', NULL, '—', '', '—', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `60791_sub`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_sub`;
CREATE TABLE `60791_sub` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_sub`
--

INSERT INTO `60791_sub` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 121, 11, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(2, 122, 12, '08:00', '09:30', 'Правоведение', NULL, 'А503 ', '', 'Владимирова Г.Е.', 4),
(3, 123, 13, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(4, 124, 14, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(5, 125, 15, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(6, 126, 16, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(7, 127, 21, '09:40', '11:10', 'Правоведение', NULL, 'А503 ', '', 'Владимирова Г.Е.', 4),
(8, 128, 22, '09:40', '11:10', 'Дифференциальные уравнения', NULL, 'А514 ', '', 'Лысенкова С.А.', 4),
(9, 129, 23, '09:40', '11:10', '—', NULL, '—', '', '—', 4),
(10, 130, 24, '09:40', '11:10', '—', NULL, '—', '', '—', 4),
(11, 131, 25, '09:40', '11:10', '—', NULL, '—', '', '—', 4),
(12, 132, 26, '09:40', '11:10', '—', NULL, '—', '', '—', 4),
(13, 133, 31, '11:20', '12:50', 'Правоведение', NULL, 'А636 ', '', 'Владимирова Г.Е.', 1),
(14, 134, 32, '11:20', '12:50', '—', NULL, '—', '', '—', 1),
(15, 135, 33, '11:20', '12:50', '—', NULL, '—', '', '—', 1),
(16, 136, 34, '11:20', '12:50', '—', NULL, '—', '', '—', 1),
(17, 137, 35, '11:20', '12:50', '—', NULL, '—', '', '—', 1),
(18, 138, 36, '11:20', '12:50', '—', NULL, '—', '', '—', 1),
(19, 139, 41, '13:20', '14:50', '—', NULL, '—', '', '—', 0),
(20, 140, 42, '13:20', '14:50', '—', NULL, '—', '', '—', 0),
(21, 141, 43, '13:20', '14:50', '—', NULL, '—', '', '—', 0),
(22, 142, 44, '13:20', '14:50', '—', NULL, '—', '', '—', 0),
(23, 143, 45, '13:20', '14:50', '—', NULL, '—', '', '—', 0),
(24, 144, 46, '13:20', '14:50', '—', NULL, '—', '', '—', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `60791_vtor`
--
-- Создание: Май 17 2021 г., 10:39
--

DROP TABLE IF EXISTS `60791_vtor`;
CREATE TABLE `60791_vtor` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `60791_vtor`
--

INSERT INTO `60791_vtor` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(1, 25, 11, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(2, 26, 12, '09:40', '11:10', 'Стат. ', NULL, 'У601 ', '', 'Назина Н.Б.', 3),
(3, 27, 13, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(4, 28, 14, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(5, 29, 15, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(6, 30, 16, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(7, 31, 21, '11:20', '12:50', 'Инфор. технологии', NULL, 'У607 ', '', 'Берестин Д.К.', 3),
(8, 32, 22, '11:20', '12:50', 'Инфор. тхнологии', NULL, 'У601 ', '', 'Назина Н.Б.', 3),
(9, 33, 23, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(10, 34, 24, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(11, 35, 25, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(12, 36, 26, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(13, 37, 31, '13:20', '14:50', 'Инфор. технологии', NULL, 'У708 ', '', 'Берестин Д.К.', 2),
(14, 38, 32, '13:20', '14:50', 'Стат. методы и модели управления', NULL, 'У708 ', '', 'Назина Н.Б.', 2),
(15, 39, 33, '13:20', '14:50', '—', NULL, '—', '', '—', 2),
(16, 40, 34, '13:20', '14:50', '—', NULL, '—', '', '—', 2),
(17, 41, 35, '13:20', '14:50', '—', NULL, '—', '', '—', 2),
(18, 42, 36, '13:20', '14:50', '—', NULL, '—', '', '—', 2),
(19, 43, 41, '15:00', '16:30', '—', NULL, '—', '', '—', 0),
(20, 44, 42, '15:00', '16:30', '—', NULL, '—', '', '—', 0),
(21, 45, 43, '15:00', '16:30', '—', NULL, '—', '', '—', 0),
(22, 46, 44, '15:00', '16:30', '—', NULL, '—', '', '—', 0),
(23, 47, 45, '15:00', '16:30', '—', NULL, '—', '', '—', 0),
(24, 48, 46, '15:00', '16:30', '—', NULL, '—', '', '—', 0);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `all_days`
-- (См. Ниже фактическое представление)
--
DROP VIEW IF EXISTS `all_days`;
CREATE TABLE `all_days` (
`id` int(11)
,`№` int(11)
,`n_k` mediumtext
,`k_n` mediumtext
,`n_p` mediumtext
,`d_z` varchar(50)
,`aud` varchar(100)
,`prepod` varchar(50)
,`divisions` int(11)
);

-- --------------------------------------------------------

--
-- Структура таблицы `chet`
--
-- Создание: Фев 12 2021 г., 11:50
--

DROP TABLE IF EXISTS `chet`;
CREATE TABLE `chet` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` varchar(50) DEFAULT NULL,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chet`
--

INSERT INTO `chet` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(49, 73, 11, '10:10', '11:40', 'Физкультура', NULL, 'С', '', '—', 1),
(50, 74, 12, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(51, 75, 13, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(52, 76, 14, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(53, 77, 15, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(54, 78, 16, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(55, 79, 21, '13:20', '14:50', 'Упр. данными', NULL, 'У708', 'https://moodle.surgu.ru/course/view.php?id=3854', 'Заикин П.В.', 1),
(56, 80, 22, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(57, 81, 23, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(58, 82, 24, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(59, 83, 25, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(60, 84, 26, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(61, 85, 31, '15:00', '16:30', 'Упр. данными', NULL, 'У708', 'https://moodle.surgu.ru/course/view.php?id=3854', 'Заикин П.В.', 1),
(62, 86, 32, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(63, 87, 33, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(64, 88, 34, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(65, 89, 35, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(66, 90, 36, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(67, 91, 41, '16:40', '18:10', '—', NULL, '—', '', '—', 2),
(68, 92, 42, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(69, 93, 43, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(70, 94, 44, '16:40', '18:10', 'Дифференциаль. ур.', NULL, 'А514', 'https://moodle.surgu.ru/course/view.php?id=3790', 'Лысенкова С.А.', 2),
(71, 95, 45, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(72, 96, 46, '—', '—', NULL, NULL, NULL, '', NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `DZ`
--
-- Создание: Авг 19 2020 г., 13:19
--

DROP TABLE IF EXISTS `DZ`;
CREATE TABLE `DZ` (
  `id` int(11) NOT NULL,
  `predmet` varchar(50) DEFAULT NULL,
  `dz` varchar(77) DEFAULT NULL,
  `dtimes` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DZ`
--

INSERT INTO `DZ` (`id`, `predmet`, `dz`, `dtimes`) VALUES
(1, 'Алгебра и геометрия', 'test', '2019-10-07 13:38:05');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--
-- Создание: Сен 08 2020 г., 08:12
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `key_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` text,
  `data` date DEFAULT NULL,
  `phone` text,
  `account` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `information`
--

INSERT INTO `information` (`key_id`, `id`, `name`, `data`, `phone`, `account`) VALUES
(4, 2, 'Гук Татьяна', '2001-01-25', '4!+51l7A7(x+9~9~9@2n009u61m))2J4tF0?4-qP8J49gh6h530S>434-17F3Xx`8T39n', NULL),
(5, 3, 'Иванова Евгения	', '2000-05-22', '4d<_+?q5U177R+%K9.h9g9{1/0)bn026$[1[9bOI40m0g;8r4@2{6>uS52A0Cc45411fBE3Q8O1;V9<', NULL),
(8, 4, 'Кацур Сергей', '2001-01-26', '4@$+JG5rw1/7>Rb7jq+m\"9F99l0%h004H61\"4*4D0M7aj?8}41N65uS3Yb0=45d4Ab193M?8_5>y9%', NULL),
(10, 6, 'Кузьмин Виталий', '2001-08-22', '4X+J5}1Z7(7)?+j99}}9S[2<q~0.W0~2y61y7?40N68H4T0$)6V5.w5y0:434W173869!', NULL),
(11, 7, 'Лапин Михаил', '2000-10-26', '4rG+s51_7`7}%+:9K9$]x9u[5H0kV02KT6f_1n74~tb0V08/t4F96.5^5Z0YF45t4r1-138f3Wkw9]', NULL),
(13, 19, 'Львов Рустам', '2001-09-27', '4+G5I1_77+99|99,X0\"06uh6V1640Y8%84r6c6e5vQ4Q0x4E7(4v1dw9p3uw86gSl9h', NULL),
(14, 5, 'Кириченко Антон', '1999-03-03', '4!+E5HA1c77*+u|09jU9:0sx00y(0$6bG10{I4ZG008>4^\"0A]I6Q5=0W;0*bK44413}3^89lI9<', NULL),
(15, 9, 'Милевич Марина', '2000-12-06', '4Rv+p5>1G7<7i_+9c992@00)C2=H]6K[V1X640$584SI2j65-1l0a4@0F41vU2%3YUU8g8{Es9n', NULL),
(16, 10, 'Петренко Анастасия', '2001-04-30', '4+5ME1jm77+N9L9|P950\0^0)61a540j/28k40Cv6R57l04,5M4143l#8P<09', NULL),
(17, 11, 'Петренко Даниил', '2001-06-02', '4+5Yf1lN7Jm7k+&9l#99E8X0[0P2_f6d114@0*4ko84#3<65F@6r0{4%74_10m3k889Pp', NULL),
(18, 12, 'Сарапулова Валерия', '2001-07-30', '4nk+51V7w7f+(9^=}991*[0D02h6n1o.440G3v-(8A4#665fW7as04nT24o16!38[0n~9BqG', NULL),
(19, 13, 'Сергеев Константин', '2001-10-30', '4g+51hF@7Z7!{+99[9B0M0Qm0Oy8T61W84U098!U4:8650<0*4Ps1k4M1W1I3~8|l1mBm9x]', NULL),
(20, 14, 'Синявский Фёдор', '2001-06-03', '4+P>5;I1N[7s7c+C9vG99B00_@0jQ0613%4<0|9ks8416M5:.0<;049W4WM1C83/8Ol5tl9k', NULL),
(21, 15, 'Сланина Александр', '2001-01-25', '4O+o51\"C77/+Pz!99xo9lx5Q0yj006j15c4t0}U0-8i4765M30D4141y4J3I8E6A9Av', NULL),
(22, 16, 'Стёпка Никита', '2001-06-28', '4+Pd5fEy1U77+)u%99Ay`920l02r6{\"1F(4k40)0v8*4965T5D0v4H*F6q41B73V8c7|9*O', NULL),
(25, 18, 'Хисматов Эльмир', '2001-09-18', '4s+GW5kr1L7#7K+Wd9fp9ckl9X3J00261O`{4O4A0YF3u84E|7oTF65b4z*?0A4G64D12}3(8I5Co9o', NULL),
(29, 17, 'Тунян Эдмон', '1998-12-15', '4-_+q5oM1~7_)P7!G+R99Q9.U3xE0dG;02Ov61B4za4d02G8,4N6@65#40d{4*64y1:4u&389=g9)M', NULL);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `plyus`
-- (См. Ниже фактическое представление)
--
DROP VIEW IF EXISTS `plyus`;
CREATE TABLE `plyus` (
`id` int(11)
,`name` text
,`data` timestamp
,`status` varchar(50)
);

-- --------------------------------------------------------

--
-- Структура таблицы `pon`
--
-- Создание: Фев 12 2021 г., 11:49
--

DROP TABLE IF EXISTS `pon`;
CREATE TABLE `pon` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pon`
--

INSERT INTO `pon` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(2, 1, 11, '10:10', '11:40', 'test1', NULL, '—', '', '—', 5),
(3, 2, 12, '10:10', '11:40', 'test 2', NULL, '—', '', '—', 5),
(4, 3, 13, '—', '—', NULL, NULL, NULL, '', NULL, 5),
(5, 4, 14, '—', '—', NULL, NULL, NULL, '', NULL, 5),
(6, 5, 15, '10:10', '11:40', 'test 3', NULL, '—', '', '—', 5),
(7, 6, 16, '—', '—', NULL, NULL, NULL, '', NULL, 5),
(8, 7, 21, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(9, 8, 22, '13:20', '14:50', 'Английский язык', NULL, 'У508', 'https://moodle.surgu.ru/mod/forum/view.php?id=73883', 'Пичуева А.В.', 3),
(10, 9, 23, '13:20', '14:50', 'Управление данными', NULL, 'А417а', 'https://moodle.surgu.ru/course/view.php?id=3854', 'Федоров Д.А.', 3),
(11, 10, 24, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(12, 11, 25, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(13, 12, 26, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(14, 13, 31, '15:00', '16:30', 'Проектная деятельность', NULL, 'А417а', '', 'Федоров Д.А.', 4),
(15, 14, 32, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(16, 15, 33, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(17, 16, 34, '15:00', '16:30', 'Проектная деятельность', NULL, 'А417а', '', 'Федоров Д.А.', 4),
(18, 17, 35, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(19, 18, 36, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(20, 19, 41, '16:40', '18:10', 'Проектная деятельность', NULL, 'У708', '', 'Федоров Д.А.', 2),
(21, 20, 42, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(22, 21, 43, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(23, 22, 44, '16:40', '18:10', '—', NULL, '—', '', '—', 2),
(24, 23, 45, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(25, 24, 46, '—', '—', NULL, NULL, NULL, '', NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `presence`
--
-- Создание: Авг 22 2020 г., 12:22
--

DROP TABLE IF EXISTS `presence`;
CREATE TABLE `presence` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `pyat`
--
-- Создание: Фев 12 2021 г., 11:50
--

DROP TABLE IF EXISTS `pyat`;
CREATE TABLE `pyat` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` varchar(50) DEFAULT NULL,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(100) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pyat`
--

INSERT INTO `pyat` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(17, 97, 11, '08:00', '09:30', 'Упр. данными', NULL, 'А417а', 'https://moodle.surgu.ru/course/view.php?id=3854', 'Павлов С.И.', 3),
(18, 98, 12, '08:00', '09:30', 'Мат. модели в экономике', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=359', 'Шайторова И.А.', 3),
(19, 99, 13, '08:00', '09:30', 'Стат. методы и модели упр.', NULL, 'У601', 'https://moodle.surgu.ru/course/view.php?id=360', 'Назина Н.Б.', 3),
(20, 100, 14, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(21, 101, 15, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(22, 102, 16, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(23, 103, 21, '09:40', '11:10', 'Мат. модели в экономике', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=359', 'Шайторова И.А.', 3),
(24, 104, 22, '09:40', '11:10', 'Упр. данными', NULL, 'А417а', 'https://moodle.surgu.ru/course/view.php?id=3854', 'Федоров Д.А.', 3),
(25, 105, 23, '09:40', '11:10', 'Инфор. технологии', NULL, 'У601', '', 'Назина Н.Б.', 3),
(26, 106, 24, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(27, 107, 25, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(28, 108, 26, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(29, 109, 31, '11:20', '12:50', 'Проектная деятельность', NULL, 'А417а', '', 'Федоров Д.А.', 3),
(30, 110, 32, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(31, 111, 33, '11:20', '12:50', 'Мат. модели в экономике', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=359', 'Шайторова И.А.', 3),
(32, 112, 34, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(33, 113, 35, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(34, 114, 36, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(35, 115, 41, '13:20', '14:50', 'Стат. методы и модели упр.', NULL, 'У506', 'https://moodle.surgu.ru/course/view.php?id=360', 'Назина Н.Б.', 2),
(36, 116, 42, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(37, 117, 43, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(38, 118, 44, '13:20', '14:50', 'Мат. модели в экономике', NULL, 'У506', 'https://moodle.surgu.ru/course/view.php?id=359', 'Шайторова И.А.', 2),
(39, 119, 45, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(40, 120, 46, '—', '—', NULL, NULL, NULL, '', NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `security`
--
-- Создание: Май 07 2021 г., 14:20
--

DROP TABLE IF EXISTS `security`;
CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `security`
--

INSERT INTO `security` (`id`, `login`, `password`, `level`) VALUES
(4, '60791_teg', '$2y$10$ShELIgD4MBYPFA9w/rtaA.YY/BbiiKPDW1O0oj8iZtjN/XJ3i0vwK', 3),
(5, '60791_xez', '$2y$10$IL39cC5MTXQGX7x3NxEvjez2MRBKApZIIeytKz7yvsoRqtzY9haym', 1),
(6, '60791_sas', '$2y$10$YlhjU1zKZlD.whpy2XO7Pe3afyJMBc6u2T3gBbhiqTO8EcxNTU4Ca', 3),
(7, '60791_lrr', '$2y$10$gAIjY74bq1IHdHNTk0PA4uRfFNGoh5lwQf4Jrh.ytxiNQxoCvimWK', 1),
(8, '60791_ttt', '$2y$10$n0HkoK7G2Gt1euOZOo9E8.Eo1U0kzPSZZgKBHULmJ5Ap.dODdko7O', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sred`
--
-- Создание: Фев 12 2021 г., 11:51
--

DROP TABLE IF EXISTS `sred`;
CREATE TABLE `sred` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` text,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(50) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sred`
--

INSERT INTO `sred` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(17, 49, 11, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(18, 50, 12, '08:00', '09:30', '—', NULL, '—', '', '—', 3),
(19, 51, 13, '08:00', '09:30', 'Web - инжиниринг', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=362', 'Павлов С.И.', 3),
(20, 52, 14, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(21, 53, 15, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(22, 54, 16, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(23, 55, 21, '09:40', '11:10', 'Web - инжиниринг', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=362', 'Павлов С.И.', 3),
(24, 56, 22, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(25, 57, 23, '09:40', '11:10', 'Английский язык', NULL, 'У508', 'https://moodle.surgu.ru/mod/forum/view.php?id=92397', 'Кузнецова С.В.', 3),
(26, 58, 24, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(27, 59, 25, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(28, 60, 26, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(29, 61, 31, '11:20', '12:50', 'Английский язык', NULL, 'А502', '', 'Чеснокова Н.Е.', 3),
(30, 62, 32, '11:20', '12:50', 'Web - инжиниринг', NULL, 'У607', 'https://moodle.surgu.ru/course/view.php?id=362', 'Павлов С.И.', 3),
(31, 63, 33, '11:20', '12:50', '—', NULL, '—', '', '—', 3),
(32, 64, 34, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(33, 65, 35, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(34, 66, 36, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(35, 67, 41, '13:20', '14:50', 'Стат. методы и модели упр.', NULL, 'У601', 'https://moodle.surgu.ru/course/view.php?id=360', 'Назина Н.Б.', 3),
(36, 68, 42, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(37, 69, 43, '13:20', '14:50', '—', NULL, '—', '', '—', 3),
(38, 70, 44, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(39, 71, 45, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(40, 72, 46, '—', '—', NULL, NULL, NULL, '', NULL, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `status_update`
--
-- Создание: Авг 29 2020 г., 12:11
--

DROP TABLE IF EXISTS `status_update`;
CREATE TABLE `status_update` (
  `id` int(11) NOT NULL,
  `status` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status_update`
--

INSERT INTO `status_update` (`id`, `status`) VALUES
(1, 25);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--
-- Создание: Май 09 2021 г., 17:35
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `login` varchar(50) NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `patronymic` text NOT NULL,
  `group` text NOT NULL,
  `division_2` int(11) NOT NULL,
  `division_3` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`login`, `surname`, `name`, `patronymic`, `group`, `division_2`, `division_3`, `email`) VALUES
('60791_lrr', 'Lvov', 'Rustam', 'Ruslanovich', '60791', 1, 1, 'lvov.rustam@yandex.ru'),
('60791_sas', 'Slanina', 'Aleksandr', 'Sergeevich', '60791', 2, 3, 'sasha_slanin@mail.ru'),
('60791_teg', 'Tunyan', 'Edmon', 'Garnikovich', '60791', 2, 2, 'edmon.tunyan.2015@mail.ru'),
('60791_ttt', 'Test', 'Testov', 'Testovich', '60791', 2, 2, 'test@mail.ru'),
('60791_xez', 'Xismatov', 'Elmir', 'Zinnurovich', '60791', 2, 3, 'mr.est228@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `sub`
--
-- Создание: Фев 12 2021 г., 11:51
--

DROP TABLE IF EXISTS `sub`;
CREATE TABLE `sub` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` varchar(80) DEFAULT NULL,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(80) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub`
--

INSERT INTO `sub` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(17, 121, 11, '08:00', '09:30', '—', NULL, '—', '', '—', 4),
(18, 122, 12, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(19, 123, 13, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(20, 124, 14, '08:00', '09:30', 'Правоведение', NULL, 'А503', 'https://moodle.surgu.ru/course/view.php?id=3165', 'Владимирова Г.Е.', 4),
(21, 125, 15, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(22, 126, 16, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(23, 127, 21, '09:40', '11:10', 'Правоведение', NULL, 'А503', 'https://moodle.surgu.ru/course/view.php?id=3165', 'Владимирова Г.Е.', 4),
(24, 128, 22, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(25, 129, 23, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(26, 130, 24, '09:40', '11:10', 'Дифференциаль. ур.', NULL, 'А514', 'https://moodle.surgu.ru/course/view.php?id=3790', 'Лысенкова С.А.', 4),
(27, 131, 25, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(28, 132, 26, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(29, 133, 31, '11:20', '12:50', 'Правоведение', NULL, 'А636', 'https://moodle.surgu.ru/course/view.php?id=3165', 'Владимирова Г.Е.', 1),
(30, 134, 32, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(31, 135, 33, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(32, 136, 34, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(33, 137, 35, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(34, 138, 36, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(35, 139, 41, '13:20', '14:50', 'Дифференциаль. ур.', NULL, 'У704', 'https://moodle.surgu.ru/course/view.php?id=3790', 'Лысенкова С.А.', 4),
(36, 140, 42, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(37, 141, 43, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(38, 142, 44, '13:20', '14:50', '—', NULL, '—', '', '—', 4),
(39, 143, 45, '—', '—', NULL, NULL, NULL, '', NULL, 4),
(40, 144, 46, '—', '—', NULL, NULL, NULL, '', NULL, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `vtor`
--
-- Создание: Фев 12 2021 г., 11:51
--

DROP TABLE IF EXISTS `vtor`;
CREATE TABLE `vtor` (
  `id_key` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `№` int(11) NOT NULL,
  `n_k` text,
  `k_n` text,
  `n_p` varchar(80) DEFAULT NULL,
  `d_z` varchar(50) DEFAULT NULL,
  `aud` varchar(80) DEFAULT NULL,
  `url` varchar(80) NOT NULL,
  `prepod` varchar(50) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vtor`
--

INSERT INTO `vtor` (`id_key`, `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
(17, 25, 11, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(18, 26, 12, '09:40', '11:10', 'Стат. методы и модели упр.', NULL, 'У601', 'https://moodle.surgu.ru/course/view.php?id=360', 'Назина Н.Б.', 3),
(19, 27, 13, '09:40', '11:10', '—', NULL, '—', '', '—', 3),
(20, 28, 14, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(21, 29, 15, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(22, 30, 16, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(23, 31, 21, '11:20', '12:50', 'Информ. технологии', NULL, 'У607', '', 'Берестин Д.К.', 3),
(24, 32, 22, '11:20', '12:50', 'Информ. технологии', NULL, 'У601', 'https://moodle.surgu.ru/course/view.php?id=3802', 'Назина Н.Б.', 3),
(25, 33, 23, '11:20', '12:50', '—', NULL, '—', '—', '—', 3),
(26, 34, 24, '—', '—', NULL, NULL, NULL, '', NULL, 3),
(27, 35, 25, '11:20', '12:50', '—', NULL, '—', '—', '—', 3),
(28, 36, 26, '11:20', '12:50', '—', NULL, '—', '—', '—', 3),
(29, 37, 31, '13:20', '14:50', '—', NULL, '—', '', '—', 2),
(30, 38, 32, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(31, 39, 33, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(32, 40, 34, '13:20', '14:50', 'Информ. технологии', NULL, 'У708', 'https://moodle.surgu.ru/course/view.php?id=3802', 'Берестин Д.К.', 2),
(33, 41, 35, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(34, 42, 36, '—', '—', NULL, NULL, NULL, '', NULL, 2),
(35, 43, 41, '—', '—', '—', NULL, '—', '', '—', 1),
(36, 44, 42, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(37, 45, 43, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(38, 46, 44, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(39, 47, 45, '—', '—', NULL, NULL, NULL, '', NULL, 1),
(40, 48, 46, '—', '—', NULL, NULL, NULL, '', NULL, 1);

-- --------------------------------------------------------

--
-- Структура для представления `all_days`
--
DROP TABLE IF EXISTS `all_days`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pari2020_admin`@`localhost` SQL SECURITY DEFINER VIEW `all_days`  AS SELECT `pon`.`id` AS `id`, `pon`.`№` AS `№`, `pon`.`n_k` AS `n_k`, `pon`.`k_n` AS `k_n`, `pon`.`n_p` AS `n_p`, `pon`.`d_z` AS `d_z`, `pon`.`aud` AS `aud`, `pon`.`prepod` AS `prepod`, `pon`.`divisions` AS `divisions` FROM `pon` WHERE 1 ;

-- --------------------------------------------------------

--
-- Структура для представления `plyus`
--
DROP TABLE IF EXISTS `plyus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pari2020_admin`@`localhost` SQL SECURITY DEFINER VIEW `plyus`  AS SELECT `p`.`id` AS `id`, `i`.`name` AS `name`, `p`.`data` AS `data`, `p`.`status` AS `status` FROM (`presence` `p` join `information` `i` on((`i`.`id` = `p`.`id`))) WHERE (`p`.`status` = '+') ORDER BY `p`.`id` ASC ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `60791_chet`
--
ALTER TABLE `60791_chet`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `60791_pon`
--
ALTER TABLE `60791_pon`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `60791_pyat`
--
ALTER TABLE `60791_pyat`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `60791_sred`
--
ALTER TABLE `60791_sred`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `60791_sub`
--
ALTER TABLE `60791_sub`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `60791_vtor`
--
ALTER TABLE `60791_vtor`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `chet`
--
ALTER TABLE `chet`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`key_id`);

--
-- Индексы таблицы `pon`
--
ALTER TABLE `pon`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pyat`
--
ALTER TABLE `pyat`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `sred`
--
ALTER TABLE `sred`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `status_update`
--
ALTER TABLE `status_update`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `email` (`email`(50));

--
-- Индексы таблицы `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `vtor`
--
ALTER TABLE `vtor`
  ADD PRIMARY KEY (`id_key`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `60791_chet`
--
ALTER TABLE `60791_chet`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `60791_pon`
--
ALTER TABLE `60791_pon`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `60791_pyat`
--
ALTER TABLE `60791_pyat`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `60791_sred`
--
ALTER TABLE `60791_sred`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `60791_sub`
--
ALTER TABLE `60791_sub`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `60791_vtor`
--
ALTER TABLE `60791_vtor`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `chet`
--
ALTER TABLE `chet`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `information`
--
ALTER TABLE `information`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `pon`
--
ALTER TABLE `pon`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `presence`
--
ALTER TABLE `presence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pyat`
--
ALTER TABLE `pyat`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sred`
--
ALTER TABLE `sred`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `status_update`
--
ALTER TABLE `status_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sub`
--
ALTER TABLE `sub`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `vtor`
--
ALTER TABLE `vtor`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`login`) REFERENCES `security` (`login`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
