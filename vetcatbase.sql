-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2025 г., 06:32
-- Версия сервера: 10.8.4-MariaDB-log
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vetcatbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anylyzes`
--

CREATE TABLE `anylyzes` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `passport_id` int(11) NOT NULL,
  `t_p` float NOT NULL,
  `alb` float NOT NULL,
  `bil_bin_pr` float NOT NULL,
  `bil_bin_t` float NOT NULL,
  `urea` float NOT NULL,
  `creat_nin` float NOT NULL,
  `glucose` float NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `diseases_id` int(11) NOT NULL,
  `additions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_request` date NOT NULL,
  `date_of_recovery` date DEFAULT NULL,
  `vet_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id`, `diseases_id`, `additions`, `treatment`, `date_of_request`, `date_of_recovery`, `vet_id`, `pet_id`, `owner_id`) VALUES
(2, 8, 'Метаболический синдром, нарушение углеводно-липидного и белкового обмена', 'Ингибиторы ангиотензинпревращающего фермента, сартаны и агонисты имидазолиновых рецепторов.', '2025-02-09', '2025-04-17', 13, 1, 1),
(3, 12, 'Вывих плечевого сустава', 'на вторые сутки ­- прикладывают согревающие компрессы; на третьи — выполняют легкий массаж, продолжают согревающие обертывания и накладывают аппликации из парафина; на четвертые и дальше — начинают втирать наружные препараты с троксевазином', '2024-11-10', '2024-12-15', 2, 2, 1),
(4, 3, 'Острый первичный', 'Коррекция рациона. Назначаются готовые корма или составляется индивидуальная диета;\r\n\r\nПротиворвотные препараты;\r\n\r\nАнтациды местного действия. Они же “обволакивающие”, для снятия раздражения со стенки желудка и изменения кислотности желудка. Некоторые из препаратов содержат анестетики, тем самым облегчая симптомы боли в желудке;\r\n\r\nГастропротекторы. Блокаторы H-2 гистаминовых рецепторов или ингибиторы протонной помпы. Для уменьшения секреции желудочного сока;', '2022-05-03', '2022-06-09', 14, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `breeds`
--

CREATE TABLE `breeds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `vid_id`) VALUES
(1, 'Мейн-кун', 2),
(2, 'Британская', 2),
(3, 'Шотландская вислоухая', 2),
(4, 'Бенгальская', 2),
(5, 'Калифорнийский', 8),
(6, 'Бабочка', 8),
(7, 'Рекс', 8),
(8, 'Серебристый', 8),
(9, 'Рекс', 3),
(10, 'Дабл-рекс', 3),
(11, 'Бесхвостая', 3),
(12, 'Бесшерстная', 3),
(13, 'Абиссинская', 10),
(14, 'Американская', 10),
(15, 'Болдуин', 10),
(16, 'Коронет', 10),
(17, 'Капуцин', 7),
(18, 'Макака', 7),
(19, 'Мартышка', 7),
(20, 'Лори', 7),
(21, 'Корелла', 5),
(22, 'Волнистый', 5),
(23, 'Какаду', 5),
(24, 'Жако', 5),
(25, 'Померанский шпиц', 1),
(26, 'Бигль', 1),
(27, 'Сиба-ину', 1),
(28, 'Джек-рассел терьер', 1),
(29, 'Доберман', 1),
(30, 'Лабрадор ретривер', 1),
(31, 'Джексона', 9),
(32, 'Пустынный', 9),
(33, 'Лаборда', 9),
(34, 'Гребешковый', 9),
(35, 'Обыкновенный', 4),
(36, 'Джунгарский', 4),
(37, 'Сирийский', 4),
(38, 'Кэмпбелл', 4),
(39, 'Альбинос', 6),
(40, 'Розово-белая', 6),
(41, 'Агути', 6),
(42, 'Туманная', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `diseases`
--

INSERT INTO `diseases` (`id`, `name`) VALUES
(1, 'Кетоз'),
(2, 'Авитаминоз'),
(3, 'Гастрит'),
(4, 'Нефрит'),
(5, 'Цистит'),
(6, 'Эндометрит'),
(7, 'Миокардит'),
(8, 'Перикардит'),
(9, 'Дерматит'),
(10, 'Экзема'),
(11, 'Перелом'),
(12, 'Вывих'),
(13, 'Бешенство'),
(14, 'Блютанг '),
(15, 'Лептоспироз'),
(16, 'Сибирская язва');

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `petcategory`
--

CREATE TABLE `petcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `petcategory`
--

INSERT INTO `petcategory` (`id`, `name`) VALUES
(1, 'Собака'),
(2, 'Кошка'),
(3, 'Крыса'),
(4, 'Хомяк'),
(5, 'Попугай'),
(6, 'Шиншилла'),
(7, 'Обезьяна'),
(8, 'Кролик'),
(9, 'Хамелеон'),
(10, 'Морская свинка');

-- --------------------------------------------------------

--
-- Структура таблицы `pet_passport`
--

CREATE TABLE `pet_passport` (
  `id` int(11) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `data_of_birth` date NOT NULL,
  `breed_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pet_passport`
--

INSERT INTO `pet_passport` (`id`, `appointment_date`, `data_of_birth`, `breed_id`, `color`, `gender`, `photo`, `owner_id`, `category_id`, `name`) VALUES
(1, '2025-05-21 10:04:03', '2022-05-12', 29, 'Белый', 'Мужской', 'cat_2.jpg', 1, 1, 'Ганжубарсик'),
(2, '2025-05-21 10:04:03', '2017-05-10', 25, 'Черный', 'Женский', 'cat1.png', 1, 1, 'Халед Кашмири'),
(3, '2025-05-21 10:05:31', '2021-05-02', 19, 'Коричневый', 'Мужской', 'cat2.png', 1, 7, 'Мухаммад Сумбуль');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `name`) VALUES
(1, 'Травматолог'),
(2, 'Врач-хирург'),
(3, 'Ортопед'),
(4, 'Онкохирург'),
(5, 'Врач-терапевт'),
(6, 'Нефролог'),
(7, 'Врач-дерматолог'),
(8, 'Врач-кардиолог'),
(9, 'Врач-герпетолог'),
(10, 'Врач-онколог'),
(11, 'Врач-эндокринолог');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `category_id`) VALUES
(1, 'ЭКГ', '1200', 1),
(2, 'УЗИ', '1300', 1),
(3, 'Рентген', '900', 1),
(4, 'Анализы лабораторная диагностика', '1600', 1),
(5, 'Операции на глаза', '2400', 2),
(6, 'Безопасный наркоз', '800', 2),
(7, 'Пластическая хирургия', '3600', 2),
(8, 'Лечение переломов', '2100', 3),
(9, 'Операция при разрыве ПКС', '3400', 3),
(10, 'Лечение дископатии у собак', '4200', 3),
(11, 'Чистка зубов', '1300', 4),
(12, 'Удаление зубов', '3100', 4),
(13, 'Риноскопия', '3000', 5),
(14, 'Отоскопия', '2100', 5),
(15, 'Гастроскопия', '1000', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `servicecategory`
--

CREATE TABLE `servicecategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servicecategory`
--

INSERT INTO `servicecategory` (`id`, `name`) VALUES
(1, 'Диагностика'),
(2, 'Хирургия'),
(3, 'Травмотология'),
(4, 'Стоматология'),
(5, 'Эндоскопия');

-- --------------------------------------------------------

--
-- Структура таблицы `service_request`
--

CREATE TABLE `service_request` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `application_date` datetime NOT NULL,
  `passport_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service_request`
--

INSERT INTO `service_request` (`id`, `service_id`, `application_date`, `passport_id`, `owner_id`) VALUES
(1, 5, '2022-05-13 12:09:31', 3, 1),
(2, 12, '2025-05-21 10:09:31', 2, 1),
(3, 7, '2025-01-21 12:10:00', 1, 1),
(4, 5, '2023-05-05 12:10:00', 3, 1),
(62, 10, '2025-05-01 00:00:00', 3, 1),
(63, 10, '2025-05-01 00:00:00', 3, 1),
(64, 10, '2025-05-01 00:00:00', 3, 1),
(65, 10, '2025-05-01 00:00:00', 3, 1),
(66, 9, '2025-05-09 00:00:00', 1, 1),
(67, 10, '2025-05-08 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `service_vet`
--

CREATE TABLE `service_vet` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `vet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service_vet`
--

INSERT INTO `service_vet` (`id`, `service_id`, `vet_id`) VALUES
(18, 1, 1),
(14, 1, 12),
(11, 2, 16),
(16, 3, 10),
(1, 4, 15),
(2, 5, 7),
(19, 5, 12),
(6, 6, 9),
(20, 6, 11),
(5, 7, 13),
(9, 8, 6),
(17, 8, 9),
(10, 8, 17),
(3, 9, 2),
(8, 10, 8),
(13, 11, 1),
(12, 12, 1),
(15, 13, 11),
(4, 14, 4),
(7, 15, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `second_name`, `last_name`, `email`, `number`, `admin`) VALUES
(1, 'mclovin', '12345', 'Иван', 'Иванов', 'Иванович', 'ivanivanov@ivan.com', '71234567890', 0),
(2, 'admin', '12345', 'Иван', 'Иванов', 'Иванович', 'admin@admin.ru', '709787654321', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `vets`
--

CREATE TABLE `vets` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vets`
--

INSERT INTO `vets` (`id`, `first_name`, `second_name`, `last_name`, `post_id`, `image`) VALUES
(1, 'Варвара', 'Иванова', 'Семёновна', 6, 'vet_3.png'),
(2, 'Александр ', 'Ильин', 'Денисович', 4, 'vet_2.png'),
(3, 'Ксения ', 'Воробьева', 'Ильинична', 3, 'vet_3.png'),
(4, 'Андрей ', 'Морозов ', 'Никитич', 3, 'vet_2.png'),
(5, 'Вероника ', 'Ермакова ', 'Михайловна', 7, 'vet_3.png'),
(6, 'Максим ', 'Поздняков ', 'Маркович', 8, 'vet_2.png'),
(7, 'Алиса ', 'Дубровина ', 'Максимовна', 8, 'vet_3.png'),
(8, 'Макар ', 'Бабушкин ', 'Андреевич', 9, 'vet_2.png'),
(9, 'Кирилл ', 'Агапов ', 'Даниилович', 10, 'vet_2.png'),
(10, 'Ярослав ', 'Киселев ', 'Дмитриевич', 5, 'vet_2.png'),
(11, 'Элина ', 'Сорокина ', 'Семёновна', 2, 'vet_3.png'),
(12, 'Иван ', 'Соболев ', 'Александрович', 11, 'vet_2.png'),
(13, 'Кристина ', 'Муратова ', 'Никитична', 11, 'vet_3.png'),
(14, 'Леон ', 'Синицын ', 'Антонович', 1, 'vet_2.png'),
(15, 'Амелия ', 'Николаева ', 'Ярославовна', 1, 'vet_3.png'),
(16, 'Никита ', 'Костин ', 'Максимович', 3, 'vet_2.png'),
(17, 'Мария ', 'Муравьева ', 'Константиновна', 2, 'vet_3.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anylyzes`
--
ALTER TABLE `anylyzes`
  ADD KEY `appointment_id` (`appointment_id`,`passport_id`),
  ADD KEY `passport_id` (`passport_id`);

--
-- Индексы таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diseases_id` (`diseases_id`,`vet_id`),
  ADD KEY `vet_id` (`vet_id`),
  ADD KEY `pet_id` (`pet_id`,`owner_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Индексы таблицы `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vid_id` (`vid_id`);

--
-- Индексы таблицы `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_id` (`appointment_id`,`owner_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Индексы таблицы `petcategory`
--
ALTER TABLE `petcategory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pet_passport`
--
ALTER TABLE `pet_passport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breed_id` (`breed_id`,`owner_id`,`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `servicecategory`
--
ALTER TABLE `servicecategory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`,`passport_id`,`owner_id`),
  ADD KEY `passport_id` (`passport_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Индексы таблицы `service_vet`
--
ALTER TABLE `service_vet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`,`vet_id`),
  ADD KEY `vet_id` (`vet_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `petcategory`
--
ALTER TABLE `petcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `pet_passport`
--
ALTER TABLE `pet_passport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `servicecategory`
--
ALTER TABLE `servicecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `service_vet`
--
ALTER TABLE `service_vet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vets`
--
ALTER TABLE `vets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `anylyzes`
--
ALTER TABLE `anylyzes`
  ADD CONSTRAINT `anylyzes_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anylyzes_ibfk_2` FOREIGN KEY (`passport_id`) REFERENCES `pet_passport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`vet_id`) REFERENCES `vets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`diseases_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`pet_id`) REFERENCES `pet_passport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `breeds`
--
ALTER TABLE `breeds`
  ADD CONSTRAINT `breeds_ibfk_1` FOREIGN KEY (`vid_id`) REFERENCES `petcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD CONSTRAINT `otziv_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `otziv_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `otziv_ibfk_3` FOREIGN KEY (`pet_id`) REFERENCES `pet_passport` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `pet_passport`
--
ALTER TABLE `pet_passport`
  ADD CONSTRAINT `pet_passport_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `petcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_passport_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_passport_ibfk_4` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `servicecategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_request`
--
ALTER TABLE `service_request`
  ADD CONSTRAINT `service_request_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_request_ibfk_2` FOREIGN KEY (`passport_id`) REFERENCES `pet_passport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_request_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_vet`
--
ALTER TABLE `service_vet`
  ADD CONSTRAINT `service_vet_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_vet_ibfk_2` FOREIGN KEY (`vet_id`) REFERENCES `vets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vets`
--
ALTER TABLE `vets`
  ADD CONSTRAINT `vets_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
