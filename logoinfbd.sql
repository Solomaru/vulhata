-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2018 г., 22:25
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `logoinfbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anketa`
--

CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `hepy_day` date DEFAULT NULL,
  `sfera_id` int(11) DEFAULT NULL,
  `staj_id` int(11) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `shool_id` int(11) DEFAULT NULL,
  `user_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anketa`
--

INSERT INTO `anketa` (`id`, `fio`, `tel`, `hepy_day`, `sfera_id`, `staj_id`, `job`, `shool_id`, `user_login`) VALUES
(5, 'Соломатин Вячеслав Александрович', '(926)557-71-07', '1986-08-06', 3, 2, 'Home edishen', 3, 'solomana'),
(7, 'Соломатин Вячеслав Александрович', '(926)557-71-07', '0000-00-00', 3, 2, '1111qqq', 3, 'soloma_na');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courses_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `courses_url`, `title`, `status`) VALUES
(1, 'zdorovesberegayushchie-tehnologii-profilaktiki-i-korrekcii-narusheniy-pismennoy-rechi', 'Здоровьесберегающие технологии профилактики и коррекции\r\nнарушений письменной речи у дошкольников и младших школьников,\r\nв том числе у детей с ОВЗ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `entrycours`
--

CREATE TABLE `entrycours` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `date_kurs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `entrycours`
--

INSERT INTO `entrycours` (`id`, `login`, `fio`, `tel`, `date_kurs_id`) VALUES
(10, 'soloma_na', 'Соломатин Вячеслав Александрович', '(926)557-71-07', 1),
(11, 'soloma_na', 'Соломатин Вячеслав Александрович', '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `obuchenie`
--

CREATE TABLE `obuchenie` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_ru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `obuchenie`
--

INSERT INTO `obuchenie` (`id`, `name`, `name_ru`) VALUES
(1, 'courses', 'Курсы'),
(2, 'seminarses', 'Семинары'),
(3, 'trening', 'Тренинг');

-- --------------------------------------------------------

--
-- Структура таблицы `sborgroup`
--

CREATE TABLE `sborgroup` (
  `id` int(11) NOT NULL,
  `data_name` varchar(255) NOT NULL,
  `data_courses` date NOT NULL,
  `obuc_id` int(11) NOT NULL,
  `uchitel_id` int(11) NOT NULL,
  `curses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sborgroup`
--

INSERT INTO `sborgroup` (`id`, `data_name`, `data_courses`, `obuc_id`, `uchitel_id`, `curses_id`) VALUES
(1, 'с 15 по 23 июня', '2018-06-23', 1, 20, 1),
(2, '4 июня 2018', '2018-06-04', 2, 22, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `semenar`
--

CREATE TABLE `semenar` (
  `id` int(11) NOT NULL,
  `titl_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `semenar`
--

INSERT INTO `semenar` (`id`, `titl_url`, `title`, `status`) VALUES
(1, 'tehnologiya-dinamicheskogo-modelirovaniya-v-obuchenii-gramote-detey-s-ovz-v-usloviyah-inklyuzivnoy-praktiki', 'ТЕХНОЛОГИЯ ДИНАМИЧЕСКОГО МОДЕЛИРОВАНИЯ В ОБУЧЕНИИ ГРАМОТЕ ДЕТЕЙ С ОВЗ В УСЛОВИЯХ ИНКЛЮЗИВНОЙ ПРАКТИКИ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sfera`
--

CREATE TABLE `sfera` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `runame` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sfera`
--

INSERT INTO `sfera` (`id`, `name`, `runame`) VALUES
(1, 'ostavit-pustim', 'Оставить пустым'),
(2, 'logoped', 'Логопед'),
(3, 'defektolog', 'Дефектолог'),
(4, 'pedagog-dou', 'Педагог Доу'),
(5, 'pedagog-sosh', 'Педагог СОШ'),
(6, 'prepodovatel-vuzov', 'Преподаватель ВУЗов'),
(7, 'student', 'Студент'),
(8, 'guverner', 'Гувернер'),
(9, 'roditel', 'Родитель'),
(10, 'psiholog', 'Психолог'),
(11, 'spec-zdravo', 'Cпециалист здравоохранения');

-- --------------------------------------------------------

--
-- Структура таблицы `staj`
--

CREATE TABLE `staj` (
  `id` int(11) NOT NULL,
  `name_staj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_prof` varchar(255) DEFAULT 'my.png',
  `aftoritet` int(5) NOT NULL DEFAULT '0',
  `sfera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_id`, `login`, `email`, `password`, `name`, `img_prof`, `aftoritet`, `sfera`) VALUES
(100, 0, 'Solomaru', 'solomaru@yandex.ru', '324ae8875b20f04ed8c63955a6acfee5', NULL, 'my.png', 5, 0),
(113, 0, 'solomana', 'soloma_na@mail.ru', '4067fec68ee0709539e762d41265cf32', 'Слава', 'my.png', 4, 1),
(123, 0, 'soloma_na', 'posholnahui@mail.ru', '4067fec68ee0709539e762d41265cf32', NULL, 'my.png', 0, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `entrycours`
--
ALTER TABLE `entrycours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `obuchenie`
--
ALTER TABLE `obuchenie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sborgroup`
--
ALTER TABLE `sborgroup`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `semenar`
--
ALTER TABLE `semenar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sfera`
--
ALTER TABLE `sfera`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `staj`
--
ALTER TABLE `staj`
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
-- AUTO_INCREMENT для таблицы `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `entrycours`
--
ALTER TABLE `entrycours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `obuchenie`
--
ALTER TABLE `obuchenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sborgroup`
--
ALTER TABLE `sborgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `semenar`
--
ALTER TABLE `semenar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sfera`
--
ALTER TABLE `sfera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `staj`
--
ALTER TABLE `staj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
