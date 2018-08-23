-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 23 2018 г., 12:10
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
(35, '1', '2', '111', '222'),
(36, '1', '8', '111', '222'),
(37, '1', '3', '111', '222'),
(38, '1', '6', '111', '222'),
(39, '7', '5', '111', '222');

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
(55, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '1', '111', '222', '35'),
(56, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼!', '1', '111', '222', '35'),
(57, 'Ð’ÑÐµ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð½Ð¾, ÑÐ¿Ð°ÑÐ¸Ð±Ð¾!', '2', '111', '222', '35'),
(58, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '1', '111', '222', '36'),
(59, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '1', '111', '222', '37'),
(60, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼???', '1', '111', '222', '37'),
(61, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼???', '1', '111', '222', '36'),
(62, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼???', '1', '111', '222', '36'),
(63, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '1', '111', '222', '38'),
(64, 'Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾, Ð²ÑÐµ Ð½Ð¾Ñ€Ð¼!!!', '6', '111', '222', '38'),
(65, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼???', '1', '111', '222', '35'),
(66, 'ÐžÑ‚Ð»Ð¸Ñ‡Ð½Ð¾', '1', '111', '222', '38'),
(67, 'ÐšÑ€ÑƒÑ‚Ð¾!!', '1', '111', '222', '38'),
(68, 'ÐšÐ°Ðº Ñƒ Ñ‚ÐµÐ±Ñ???', '6', '111', '222', '38'),
(69, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼!', '1', '111', '222', '38'),
(70, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚! ÐšÐ°Ðº Ð´ÐµÐ»Ð°?', '7', '111', '222', '39'),
(71, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼!', '5', '111', '222', '39'),
(72, 'Ð¢Ñ‹ ÐºÐ°Ðº?', '7', '111', '222', '39'),
(73, 'Ð’ÑÐµ Ð½Ð¾Ñ€Ð¼!', '5', '111', '222', '39'),
(74, 'Some message', '7', '111', '222', '39');

-- --------------------------------------------------------

--
-- Структура таблицы `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `user_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `userinfo`
--

INSERT INTO `userinfo` (`id`, `user_id`, `first_name`, `last_name`, `age`, `country`, `city`, `gender`, `education`, `about`, `user_picture`) VALUES
(1, 1, 'Alex', 'Doe', '30', 'Russia', 'Volgograd', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'alex.jpg'),
(2, 2, 'Rasmus', 'Lerdorf', '50', 'USA', 'New-York', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'rasmus.jpg'),
(3, 3, 'Lora', 'J.Mitchel', '40', 'England', 'London', 'Women', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'lora.jpg'),
(4, 4, 'David', 'Sclar', '40', 'USA', 'New York', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'david.jpg'),
(5, 5, 'Rebeca', 'Demarest', '45', 'USA', 'New York', 'Women', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'rebecca.jpg'),
(6, 6, 'David', 'Futato', '42', 'USA', 'New York', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'futato.jpg'),
(7, 7, 'Kim', 'Cofer', '50', 'USA', 'New York', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'kim.jpg'),
(8, 8, 'Charles', 'Rumeliotis', '55', 'USA', 'New York', 'Male', 'High', '    \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'charles.jpg');

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
(7, 'USER_7', '12345', 'user7@gmail.com'),
(8, 'USER_8', '12345', 'user8@gmail.com');

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
-- Индексы таблицы `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `conversation_reply`
--
ALTER TABLE `conversation_reply`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
