-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 15 2024 г., 07:50
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gosha`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `name`, `number`, `time`) VALUES
(3, '212', '213414', '121212');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Холодные закуски и салаты'),
(2, 'Супы'),
(3, 'Паста'),
(4, 'Блюда на мангале'),
(5, 'Соусы и заправки'),
(6, 'Гарниры'),
(7, 'Десерты');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`) VALUES
(2, 'Григорий Сидоренко', 'Небольшой компанией посещали данный ресторан на улице ​Богдана Хмельницкого, вечер понравился, особенно удивил большой выбор необычных горячих супов.'),
(3, 'Василий', 'Небольшой компанией посещали данный ресторан на улице ​Богдана Хмельницкого, вечер понравился, особенно удивил большой выбор необычных горячих супов.'),
(4, 'Чингиз-Кок', 'Этот ресторан скоро будет моим. Слово кока!');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `time`, `category_id`, `tags`, `small_des`, `des`, `img`) VALUES
(1, 'Блины', '20 мин', 7, 'Блины, Десерт', 'Блины - традиционное русское блюдо, представляющее собой тонкие и ароматные лепёшки, приготовленные из расстойки на основе муки, яиц и молока. Идеально сочетаются с различными начинками, такими как сгущенное молоко, сливочное масло, варенье или мёд. Блины пользуются популярностью на завтраках или в качестве десерта.', 'Блины - это популярное и любимое блюдо в русской кухне, которое находит свое применение в самых разных ситуациях и праздниках. Изначально, блины приготовляются из расстойки на основе пшеничной муки, свежих куриных яиц и полножирного молока. Тесто должно иметь консистенцию, позволяющую тонким слоям распределяться равномерно на выпуклости сковороды.\n\nПоджаренные блины обладают ярко выраженным ароматом и легкой хрустящей корочкой. Заглянув внутрь, можно увидеть нежную структуру и непревзойденный вкус. Традиционно, блины подаются со множеством начинок и соусов, что придает им разнообразие вкусовых нюансов. Самые популярные начинки для блинов - сгущенное молоко, сливочное масло, варенье, свежие фрукты, сыр и многие другие.\n\nБлины можно приготовить как для завтрака, так и для обеда или ужина. Многие семьи имеют свои традиции по выпечке блинов на Масленицу или Пасху. Блюдо также является отличным десертом, которым можно угощать гостей на торжественных мероприятиях и праздниках. Вне зависимости от выбранного способа подачи, блины всегда доставляют настоящее наслаждение и радость своим гурманам.', '65cc36f05baf6.jpeg'),
(10, 'Селёдочный штрудель', '30 минут', 1, 'холодная закуска, русская кухня, селёдка, огурцы, яблоки', 'Свежий и вкусный русский салат, основой которого является маринованная селёдка, обернутая в тонкую лепёшку из блинного теста. Идеально для холодных закусок и праздничных столов.', 'Селёдочный штрудель - это утонченная и аппетитная закуска русской кухни. Для приготовления блюда потребуется маринованная селёдка, тонко нарезанные свежие огурцы и кисло-сладкие яблоки. Они аккуратно укладываются на тонкую лепёшку из блинного теста и скручиваются в рулет. Затем штрудель выпекается в духовке до золотистой корочки. Готовый штрудель охлаждается и подается в виде кусочков, украшенных свежей зеленью. Это изысканное блюдо станет отличным дополнением к другим холодным закускам и салатам, а его яркий вкус и оригинальный вид порадуют гостей.', '1.jpg'),
(11, 'Борщ', '1 час', 2, 'суп, русская кухня, свекла, капуста, мясо, сметана', 'Традиционный русский суп с ярким красным цветом, приготовленный на основе свеклы, капусты, мяса и специального сметанного соуса. Борщ славится своим насыщенным вкусом и питательными свойствами.', 'Борщ - традиционный русский суп с ярким красным цветом, приготовленный на основе свеклы, капусты, мяса и специального сметанного соуса. Для приготовления борща необходимо отварить мясо, нарезать овощи и добавить их в кипящий бульон. Суп должен провариться до готовности, пока овощи не станут мягкими. Готовый борщ подается горячим со сметаной и свежей зеленью. Это питательное и вкусное блюдо, оно является одним из символов русской кухни.', '2.jpg'),
(12, 'Лапша по-флотски', '40 минут', 3, 'паста, русская кухня, говядина, лук, морковь, специи', 'Классическое русское блюдо, состоящее из домашней лапши, говядины, лука, моркови и пряностей. Лапша по-флотски - это сытная и ароматная паста, которая приготовляется на мангале или в духовке.', 'Лапша по-флотски - это классическое русское блюдо, состоящее из домашней лапши, говядины, лука, моркови и пряностей. Для приготовления этого блюда необходимо приготовить лапшу, обжарить нарезанную говядину вместе с луком и морковью, затем соединить ингредиенты и прожарить до готовности. Лапша по-флотски получается сытной и ароматной, и часто приготовляется на мангале или в духовке.', '3.jpg'),
(13, 'Шашлык', '2-3 часа', 4, 'блюда на мангале, русская кухня, мясо, шампуры, маринад', 'Классическое русское блюдо, приготовленное из маринованного мяса, нанизанного на шампуры и жареного на мангале. Шашлык - это изысканное и ароматное блюдо, популярное на пикниках и праздниках.', 'Шашлык - это известное блюдо русской кухни, приготовленное из маринованного мяса, нанизанного на шампуры и жареного на мангале. Для приготовления шашлыка необходимо подготовить мясо, нарезать его на кусочки и мариновать в специальном соусе. Затем мясо нанизывается на шампуры и жарится на гриле до золотистой корочки. Готовый шашлык подается с соусом и свежей зеленью. Это праздничное блюдо пользуется популярностью на пикниках и семейных мероприятиях.', '4.jpg'),
(14, 'Ткаличи', '15 минут', 5, 'соусы, русская кухня, мясо, лук, сметана, горчица', 'Популярный русский соус, приготовленный на основе сметаны, лука, горчицы и других ингредиентов. Ткаличи отлично сочетается с мясными блюдами и добавляет им нежность и аромат.', 'Ткаличи - это популярный русский соус, приготовленный на основе сметаны, лука, горчицы и других ингредиентов. Этот соус служит отличным дополнением к мясным блюдам, придавая им нежность, аромат и насыщенный вкус. Ткаличи готовятся очень просто - необходимо смешать все ингредиенты, аккуратно перемешать и дать соусу настояться. Готовый Ткаличи готов к употреблению и может быть использован в качестве заправки для салатов и других блюд.', '6.jpg'),
(15, 'Гречка', '30 мин', 6, 'гарниры, русская кухня, гречка, масло', 'Популярный русский гарнир, приготовленный из отварной гречки с добавлением масла. Гречка является традиционным гарниром к многим мясным и овощным блюдам, и полезна для организма.', 'Гречка – это популярный русский гарнир, приготовленный из отварной гречки с добавлением масла. Гречка является традиционным гарниром к многим мясным и овощным блюдам. Гречка имеет особый аромат и своеобразный вкус, и также является очень полезной для организма, богата клетчаткой и микроэлементами. Приготовление гречки не занимает много времени - ее необходимо немного промыть, затем отварить в подсоленной воде до готовности. Готовую гречку можно подавать горячей или остудить для использования в салатах и других блюдах.', '5.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;