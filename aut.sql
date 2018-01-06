-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 06 2018 г., 17:55
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aut`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mnenie` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `login`, `mnenie`) VALUES
(1, NULL, 'Ваше мнение очень важно для нас d'),
(2, NULL, 'купи слона'),
(3, 'hero', 'Ваше мнение очень важно для нас вв'),
(4, 'hero', 'Ваше мнение очень важно для нас вв'),
(5, 'hero', 'Ваше мнение очень важно для нас '),
(6, 'hero', ''),
(7, 'hero', ''),
(8, 'hero', 'Ваше мнение очень важно для нас '),
(9, 'hero', 'Ваше мнение очень важно для нас '),
(10, 'hero', 'Ваше мнение очень важно для нас ыва');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'hero', 'teaguru@bk.ru', '$2y$10$ei.NE04P4IeLdcPZ6S1K5egbnjtYDjmnPSuRfetHMFqJ6a625ky9e'),
(2, NULL, NULL, '$2y$10$M6fYDA1Vn0bZtWBDFtjwf.5xQ9uw5hZ2SsVbfK1Oi07F4Ub/GUjXu'),
(3, NULL, NULL, '$2y$10$R1bNmo3SsD.9YsxW6UfryupLJG1Ita1ZPNH8FNMmXtRaqi/wgL50O'),
(4, NULL, NULL, '$2y$10$3ySwy.pT1a7bOyM9VIG0s.NBDdntEr84ugdSBfvZYE6mOk/9AQhmO'),
(5, 'hero2', 'hdfh@nf.ri', '$2y$10$8LVNDRvWUeF2jsnjS5GdEuIBTiUS69cTnheJD/8KNOgDTExMk6P3S'),
(6, 'hero22', 'dh@hf.ru', '$2y$10$qSPM4o5SuFuz3x6sf76nvev2NyCVmqEqA3i2lOAw1LkuFFgoGL4YW'),
(7, NULL, NULL, '$2y$10$QQTclY.7khOOXyw5UYByA.K4gC2BaMH8/dY.dXWiGpNQVEVp5qkfm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
