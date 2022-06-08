-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2022 г., 17:03
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
-- База данных: `subway`
--

-- --------------------------------------------------------

--
-- Структура таблицы `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `branches`
--

INSERT INTO `branches` (`branch_id`, `name`, `color`) VALUES
(1, 'Холодногірсько-Заводська', 'red'),
(2, 'Салтівська', 'blue'),
(3, 'Олексіївська', 'green');

-- --------------------------------------------------------

--
-- Структура таблицы `stations`
--

CREATE TABLE `stations` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(10) NOT NULL,
  `next` int(10) NOT NULL,
  `previous` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stations`
--

INSERT INTO `stations` (`id`, `name`, `branch_id`, `next`, `previous`) VALUES
(1, 'Холодна гора', 1, 2, 0),
(2, 'Південний вокзал', 1, 3, 1),
(3, 'Центральний ринок', 1, 4, 2),
(4, 'Площа Конституції', 1, 5, 3),
(5, 'Проспект Гагарина', 1, 6, 4),
(6, 'Спортивна', 1, 7, 5),
(7, 'Завод ім. Малишева', 1, 8, 6),
(8, 'Турбоатом', 1, 9, 7),
(9, 'Палац спорту', 1, 10, 8),
(10, 'Армійська', 1, 11, 9),
(11, 'Імені А. С. Масельського', 1, 12, 10),
(12, 'Тракторний завод', 1, 13, 11),
(13, 'Індустріальна', 1, 14, 12),
(14, 'Героїв Праці', 2, 15, 13),
(15, 'Студентська', 2, 16, 14),
(16, 'Академіка Павлова', 2, 17, 15),
(17, 'Академіка Барабашова', 2, 18, 16),
(18, 'Київська', 2, 19, 17),
(19, 'Пушкінська', 2, 20, 18),
(20, 'Університет', 2, 21, 19),
(21, 'Історичний музей', 2, 22, 20),
(22, 'Перемога', 3, 23, 21),
(23, 'Олексіївська', 3, 24, 22),
(24, '23 Серпня', 3, 25, 23),
(25, 'Ботанічний сад', 3, 26, 24),
(26, 'Наукова', 3, 27, 25),
(27, 'Держпром', 3, 28, 26),
(28, 'Архітектора Бекетова', 3, 29, 27),
(29, 'Захисників України', 3, 30, 28),
(30, 'Метробудівників', 3, 31, 29);

-- --------------------------------------------------------

--
-- Структура таблицы `transitions`
--

CREATE TABLE `transitions` (
  `first_station_id` int(10) NOT NULL,
  `second_station_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `transitions`
--

INSERT INTO `transitions` (`first_station_id`, `second_station_id`) VALUES
(21, 4),
(6, 30),
(20, 27),
(4, 21),
(27, 20),
(30, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Индексы таблицы `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Индексы таблицы `transitions`
--
ALTER TABLE `transitions`
  ADD KEY `first_station_id` (`first_station_id`),
  ADD KEY `second_station_id` (`second_station_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `stations`
--
ALTER TABLE `stations`
  ADD CONSTRAINT `stations_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`);

--
-- Ограничения внешнего ключа таблицы `transitions`
--
ALTER TABLE `transitions`
  ADD CONSTRAINT `transitions_ibfk_1` FOREIGN KEY (`first_station_id`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `transitions_ibfk_2` FOREIGN KEY (`second_station_id`) REFERENCES `stations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
