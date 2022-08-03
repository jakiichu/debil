-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 03 2022 г., 12:54
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `voetorg_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Форма полиции'),
(2, 'Военная форма'),
(3, 'Форма охраны'),
(4, 'ГИБДД (ДПС)'),
(5, 'Юстиция');

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`) VALUES
(1, 'БТК Групп'),
(2, 'Завод Труд');

-- --------------------------------------------------------

--
-- Структура таблицы `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `material`
--

INSERT INTO `material` (`id`, `name`) VALUES
(1, 'хлопок/смесовые с хлопком'),
(2, 'полиэстер/смесовые с полиэстером');

-- --------------------------------------------------------

--
-- Структура таблицы `poduct`
--

CREATE TABLE `poduct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `text` text NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `season_id` int(11) NOT NULL DEFAULT 1,
  `material_id` int(11) NOT NULL DEFAULT 1,
  `manufacturer_id` int(11) NOT NULL DEFAULT 1 COMMENT 'производитель'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `poduct`
--

INSERT INTO `poduct` (`id`, `name`, `file`, `price`, `text`, `category_id`, `date`, `season_id`, `material_id`, `manufacturer_id`) VALUES
(1, 'Брюки габардин полиции мужские', '/img/bruli_gabardin_mujskie_1_arsenal.webp', 1640, 'Брюки полиции представлены у нас в тёмно-синем цвете. Крой классический, фасон прямой. Застёгиваются на пуговицу и молнию. На брюках есть два боковых врезных кармана без застёжки, петли-держатели под ремень. По бокам штанин вшит красный кант. Сзади имеется карман на пуговице. Брюки универсальны и подходят под любую рубашку. \r\n\r\nБрюки пошиты из ткани габардина, имеющего в составе полиэстр, что делает их носкими и долговечными в использовании. Ткань не садится, не деформируется (не вытягивается на коленях), не появляются катышки. Уровень прочности такой ткани довольно высок по сравнению с другими материалами, благодаря этому брюки устойчивы к различным механическим воздействиям. При этом используется тонкая ткань, что позволяет использовать брюки в теплое время года. В использовании и уходе брюки очень удобные: их можно стирать в стиральной машине, но лучше использовать мягкие режимы стирки.\r\n\r\nГабардин – это специально созданное переплетение нитей (наклоненные рубчики по диагонали), которое наделяет ткань особой прочностью. ', 1, '2022-07-29', 1, 1, 1),
(2, 'asd', '/img/bruli_gabardin_mujskie_1_arsenal.webp', 123, 'dfghb', 1, '2022-07-29', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id`, `name`) VALUES
(1, 'демисезон'),
(2, 'зима');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL DEFAULT 1,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `surname`, `patronymic`, `date`, `role_id`, `password`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', '2022-07-29', 1, '7815696ecbf1c96e6894b779456d330e'),
(2, 'asda', 'asd', 'asd', 'asd', '2022-07-29', 1, '7815696ecbf1c96e6894b779456d330e'),
(3, 'asdaa', 'asd', 'asd', 'asd', '2022-07-29', 1, '7815696ecbf1c96e6894b779456d330e'),
(4, 'asdaaa', 'asd', 'asd', 'asd', '2022-07-29', 1, '7815696ecbf1c96e6894b779456d330e'),
(5, 'asdaaaa', 'asd', 'asd', 'asd', '2022-07-29', 1, '7815696ecbf1c96e6894b779456d330e'),
(6, 'admin', 'asd', 'asd', 'asd', '2022-07-29', 2, '21232f297a57a5a743894a0e4a801fc3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `poduct`
--
ALTER TABLE `poduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `season_id` (`season_id`),
  ADD KEY `material_id` (`material_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `poduct`
--
ALTER TABLE `poduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
