-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2024 г., 10:52
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `21vek`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `article` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `name`, `price`, `article`, `image`, `email`) VALUES
(1, 'Телевизор Blaupunkt 55UW5000T', '1 299,00', '8.341.889', 'https://cdn21vek.by/img/galleries/8341/889/preview_b/55uw5000t_blaupunkt_6479a2fc28d25.jpeg', NULL),
(2, 'Телевизор Blaupunkt 55UW5000T', '1 299,00', '8.341.889', 'https://cdn21vek.by/img/galleries/8341/889/preview_b/55uw5000t_blaupunkt_6479a2fc28d25.jpeg', NULL),
(3, 'Телевизор Blaupunkt 55UW5000T', '1 299,00', '8.341.889', 'https://cdn21vek.by/img/galleries/8341/889/preview_b/55uw5000t_blaupunkt_6479a2fc28d25.jpeg', NULL),
(4, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(5, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(6, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(7, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(8, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(9, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(10, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(11, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(12, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(13, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(14, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(15, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(16, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(17, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(18, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(19, 'Отпариватель Kitfort KT-972', '90,91', '6.234.234', 'https://cdn21vek.by/img/galleries/6234/234/preview_b/kt972_kitfort_5f9a828a5cc4c.jpeg', NULL),
(20, 'Телевизор Xiaomi TV Q2 50 L50M7-Q2RU / ELA5063GL', '1 699,00', '8.375.177', 'https://cdn21vek.by/img/galleries/8375/177/preview_b/tvq250l50m7q2ruela5063gl_xiaomi_65799b0b6bcce.jpeg', NULL),
(21, 'Телевизор Blaupunkt 55UW5000T', '1 299,00', '8.341.889', 'https://cdn21vek.by/img/galleries/8341/889/preview_b/55uw5000t_blaupunkt_6479a2fc28d25.jpeg', 'fskngfkd@mail.ri');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
