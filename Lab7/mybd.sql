-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2022 г., 21:22
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kor`
--

CREATE TABLE `kor` (
  `Login` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kor`
--

INSERT INTO `kor` (`Login`, `Password`, `Name`, `DateOfBirth`, `Sex`, `Country`, `Email`, `Note`) VALUES
('User', '12345', 'Name', '2001-01-03', 'Male', 'Ukraine', 'email@example.com', 'Something'),
('User123', '54321', 'Nazar', '1985-05-21', 'Male', 'Ukraine', 'user123@gmail.com', 'Hello'),
('Olya123', 'olya123', 'Olya', '2000-06-11', 'Female', 'Moldova', 'olvya.m@gmail.com', ':0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
