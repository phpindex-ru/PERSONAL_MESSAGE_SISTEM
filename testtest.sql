-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2018 г., 14:40
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testtest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `conversation`
--

CREATE TABLE `conversation` (
  `c_id` int(11) NOT NULL,
  `user_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `conversation`
--

INSERT INTO `conversation` (`c_id`, `user_one`, `user_two`, `ip`, `thetime`) VALUES
(20, '4', '2', '111', '222'),
(21, '1', '2', '111', '222'),
(23, '3', '1', '111', '222'),
(24, '1', '5', '111', '222'),
(25, '1', '1', '111', '222'),
(26, '1', '4', '111', '222'),
(27, '6', '7', '111', '222'),
(28, '7', '1', '111', '222'),
(29, '6', '1', '111', '222');

-- --------------------------------------------------------

--
-- Структура таблицы `conversation_reply`
--

CREATE TABLE `conversation_reply` (
  `cr_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id_fk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_id_fk` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `conversation_reply`
--

INSERT INTO `conversation_reply` (`cr_id`, `reply`, `user_id_fk`, `ip`, `thetime`, `c_id_fk`) VALUES
(1, 'Test message', '1', '', '', '20'),
(2, 'Test message', '1', '', '', '20'),
(3, 'Test message', '1', '', '', '20'),
(4, 'Test message', '1', '', '', '21'),
(5, 'Test message', '1', '', '', '21'),
(6, 'Test message', '1', '', '', '21'),
(7, 'Test message', '1', '', '', '23'),
(8, 'Test message', '1', '', '', '23'),
(9, 'Test message', '1', '', '', '23'),
(10, 'qwss', '1', '111', '222', '25'),
(11, 'qwss', '1', '111', '222', '26'),
(12, 'qwss', '1', '111', '222', '23'),
(13, 'qwss', '1', '111', '222', '23'),
(14, 'qwss', '1', '111', '222', '23'),
(15, 'qwss', '1', '111', '222', '23'),
(16, '', '1', '111', '222', '23'),
(17, 'qwss', '1', '111', '222', '23'),
(18, 'qwss', '1', '111', '222', '23'),
(19, 'assdasdfzdfxf', '1', '111', '222', '26'),
(20, 'qwss', '1', '111', '222', '26'),
(21, 'fghgvhvbvbbnmbnm', '1', '111', '222', '24'),
(22, 'fghgvhvbvbbnmbnm', '1', '111', '222', '21'),
(23, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '6', '111', '222', '27'),
(24, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼!', '7', '111', '222', '27'),
(25, 'Some message', '6', '111', '222', '29');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'USER_1', '12345', 'user1@gmail.com'),
(2, 'USER_2', '12345', 'user2@gmail.com'),
(3, 'USER_3', '12345', 'user3@gmail.com'),
(4, 'USER_4', '12345', 'user4@gmail.com'),
(5, 'USER_5', '12345', 'user5@gmail.com'),
(6, 'USER_6', '12345', 'user6@gmail.com'),
(7, 'USER_7', '12345', 'user7@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`c_id`);

--
-- Индексы таблицы `conversation_reply`
--
ALTER TABLE `conversation_reply`
  ADD PRIMARY KEY (`cr_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `conversation_reply`
--
ALTER TABLE `conversation_reply`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
