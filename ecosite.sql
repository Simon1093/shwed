-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2019 г., 21:56
-- Версия сервера: 5.6.41
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
-- База данных: `ecosite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ingridiens`
--

DROP TABLE IF EXISTS `ingridiens`;
CREATE TABLE `ingridiens` (
  `id_ingredients` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_rus` varchar(256) NOT NULL,
  `descriotions` text NOT NULL,
  `positive_results` text NOT NULL,
  `negative_results` text NOT NULL,
  `level_profit` int(11) NOT NULL,
  `orign` varchar(255) NOT NULL,
  `synonims` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ingridiens`
--

INSERT INTO `ingridiens` (`id_ingredients`, `name_en`, `name_rus`, `descriotions`, `positive_results`, `negative_results`, `level_profit`, `orign`, `synonims`) VALUES
(1, 'Water, aqua', 'Вода', 'Основной компонент, растворитель.', 'Безопасен в использовании.\r\n', 'Безопасен в использовании.\r\n', 5, 'Натуральное', 'Aqua, Aqua nivalis, талая вода, снежная вода'),
(2, 'Coco-Glucoside', 'Коко-Глюкозид', 'Мягкий ПАВ, пенообразователь, кондиционер, эмульгатор.', 'Безопасен при использовании по назначению.\r\n', 'Безопасен при использовании по назначению.\r\n', 5, 'Натуральное', 'Кокогликозид'),
(3, 'Benzyl Alcohol', 'Бензиловый спирт', 'Является антисептиком и консервантом, в парфюмерном деле - в качестве ароматического вещества, при концентрации 5-10% в качестве солюбилизатора.\r\n', 'Является антисептиком и консервантом, в парфюмерном деле - в качестве ароматического вещества, при концентрации 5-10% в качестве солюбилизатора.\r\n', 'Возможна аллергическая реакция.\r\n', 4, 'Разные источники', ''),
(4, 'Chamomilla', 'Ромашка', 'Действительно для всех видов ромашки. В косметике используется в виде порошка (измельченная ромашка), экстракта, масла, гидролата и других форм. Успокаивающий, освежающий, увлажняющий компонент. Идеален для чувствительной кожи, антисептик, снимает раздражение. Ароматизатор. Тонизирующее, противовоспалительное, очищающее, защитное, разглаживающее, омолаживающее, осветляющее, укрепляющее для волос, придает блеск волосам.\r\n', '', 'Безопасен при использовании по назначению.\r\n', 5, 'Натуральное', 'Matricaria Recutita , Chamomilla Recutita, Matricaria Chamomilla, Ромашка аптечная, Chamaemelum Nobile , Ромашка римская, Anthemis Nobilis, Ormenis Multicaulis , Ромашка марокканская'),
(5, 'Lavandula', 'Лаванда', 'Действительно для всех видов лаванды (в том числе лавандина). Применяется в косметике в виде экстрактов, масел, гидролатов и других форм. Ароматизатор, маскирует запах, антисептик, заживляющее средство.\r\n', 'Безопасен при использовании по назначению.\r\n', '', 5, 'Натуральное', 'Lavandula officinalis , Лаванда обыкновенная , Лаванда лекарственная, , Lavandula Stoechas , Лаванда французская, Lavandula Hybrida , Лаванда гибридная, Lavandula Grosso , Лавандин Гроссо,, Lavandula Angustifolia , Лаванда узколистная, Lavandula Latifolia , Лаванда широколистная\r\n'),
(7, 'Aqua (родниковая вода)', 'Aqua (родниковая вода)', 'Aqua (родниковая вода)', 'Aqua (родниковая вода)', 'Aqua (родниковая вода)', 0, 'натуральное', 'Aqua (родниковая вода)'),
(8, 'matricaria chamomilla flower water (гидролат ромашки аптечной)', 'matricaria chamomilla flower water (гидролат ромашки аптечной)', 'matricaria chamomilla flower water (гидролат ромашки аптечной)', 'matricaria chamomilla flower water (гидролат ромашки аптечной)', 'matricaria chamomilla flower water (гидролат ромашки аптечной)', 5, 'нат', 'matricaria chamomilla flower water (гидролат ромашки аптечной)'),
(9, 'coco glucoside (из мякоти кокоса и глюкозы)', 'coco glucoside (из мякоти кокоса и глюкозы)', 'coco glucoside (из мякоти кокоса и глюкозы)', 'coco glucoside (из мякоти кокоса и глюкозы)', 'coco glucoside (из мякоти кокоса и глюкозы)', 4, 'натур', 'coco glucoside (из мякоти кокоса и глюкозы)');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `email`, `password`, `name`) VALUES
(1, 'my@naik.th', 'bn', 'катя'),
(2, 'my@naik.th', 'мывмыв', 'катя'),
(3, 'my@naik.th', 'мымв', 'мчсмчм'),
(4, 'my@naik.th', 'мымв', 'мчсмчм'),
(5, 'my@naik.th', 'павапв', 'мчсмчм'),
(6, 'my@naik.th', 'vsdvs', 'мчсмчм'),
(7, 'my1233@naik.th', 'fsdff', 'мчсмчм'),
(8, 'my1233@naik.th11', 'czcz', 'мчсмчм'),
(9, 'my1211133@naik.th11', 'dddd', 'мчсмчм'),
(10, 'my121112233@naik.th11', 'ee', 'мчсмчм'),
(11, 'my12d1112233@naik.th11', 'dcdc', 'мчсмчм'),
(12, 'my12d111s2233@naik.th11', 'ccc', 'мчсмчм'),
(13, 'my12d111ss2233@naik.th11', 'sss', 'мчсмчм'),
(14, 'my11112d111ss2233@naik.th11', 'FSD', 'мчсмчм'),
(15, 'my1111111111111@naik.th', 'cxc', 'scsc'),
(16, '123@mail.ru', '0000', 'катя'),
(17, 'rrr@rr.ry', '.md5(qwawdasd)', 'укаыа'),
(18, '111@11.11', '1111', '1111111'),
(19, '22@22.22', '.md5(222222)', '222'),
(20, '33@33.33', '', '333'),
(21, '44@44.4', '$2y$10$ozvAkmCHUukTk9G5qD65v.e61hxCvS3fjyikqkv7wPjMzOlyArnBq', '444'),
(22, '5@5.5', '$2y$10$tKLOZ/Otp2QBNngKz3jmIuNm4vXxvsHcTOiLV7FTtLyNszJS8PaK6', '5'),
(23, '6@6.6', '$2y$10$oH6SyaRr79MjXFREvjucce9D4V2uUubS1vEU1J8rkUhx5lxBAF5n.', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_rus` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `ingredients` text NOT NULL,
  `link_photo` varchar(255) NOT NULL,
  `categori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name_rus`, `vendor`, `descriptions`, `ingredients`, `link_photo`, `categori`) VALUES
(1, 'Мицеллярная вода Ромашка для снятия макияжа с лица', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://ecogolik.ru/upload/iblock/e92/levrana_mitsellyarnaya_voda_dlya_snyatiya_makiyazha_s_romashkoy.jpg', '1'),
(2, 'Регенерирующая сыворотка для лица \"reFRESH\"', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(3, 'Мицеллярная', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://ecogolik.ru/upload/iblock/e92/levrana_mitsellyarnaya_voda_dlya_snyatiya_makiyazha_s_romashkoy.jpg', '1'),
(4, 'Регенерирую', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(5, 'Регенерирующая сыворотка для лица \"reFRESH\"', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(6, 'Регенерирую', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(7, 'Мицеллярная', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://ecogolik.ru/upload/iblock/e92/levrana_mitsellyarnaya_voda_dlya_snyatiya_makiyazha_s_romashkoy.jpg', '1'),
(8, 'Регенерирующая сыворотка для лица \"reFRESH\"', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(9, 'Регенерирую', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(10, 'Регенерирующая сыворотка для лица \"reFRESH\"', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(11, 'Регенерирую', 'Levrana', 'Оказывает мгновенный эффект омоложения кожи. \r\nВидимый результат уже после первого применения. \r\nРегулярное использование разглаживает кожу, уменьшает рельефные последствия акне. \r\nПодходит для всех типов кожи. \r\nАктивные ингредиенты: \r\nМолочная кислота - это альфа-гидроксильная кислота, которая обеспечивает очень мягкий отшелушивающий эффект. Алоэ Вера и Календула - снижают признаки чувствительности и воспаления кожи, помогают уменьшить раздражение, связанное с использованием молочной кислоты. ', 'Calendula Officinalis flower water (гидролат календулы), aqua (вода родниковая), Aloe barbadensis (Алоэ Вера гель) leaf juice, Lactic acid (молочная кислота), Glicerin (глицерин растительный), Xantan (ксантановая камедь), Benzyl Alcohol (бензиловый спирт), Vitamin E (витамин Е), Lavandula Angustifolia Oil (эфирное масло лаванды), Hyaluronic acid (Гиалуроновая кислота), Citrus Limon oil (эфирное масло лимона), Laminaria japonica Aresh extract (экстракт ламинарии), Herba Violae tricolor. extract (экстракт фиалки), Equisetum arvense extract (экстракт хвоща), Melilotus officinalis extract (экстракт донника), Daucus sativus extract (экстракт моркови).', 'https://tolkotak.ru/image/cache/catalog/11-228x228.jpg', '2'),
(12, 'Мицеллярная вода Ромашка для снятия макияжа с лица', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://ecogolik.ru/upload/iblock/e92/levrana_mitsellyarnaya_voda_dlya_snyatiya_makiyazha_s_romashkoy.jpg', '1'),
(13, 'Мицеллярная', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://ecogolik.ru/upload/iblock/e92/levrana_mitsellyarnaya_voda_dlya_snyatiya_makiyazha_s_romashkoy.jpg', '1'),
(14, 'Мицеллярная', 'Levrana', 'Мицеллярная вода Ромашка для снятия макияжа с лица, век и губ.\r\n\r\nНаша мицеллярная вода абсолютно натуральная, создана на гидролате Ромашки.\r\n\r\nМягко и эффективно очищает и увлажняет кожу.\r\nПодходит для ежедневного применения, не щиплет кожу и глаза, сохраняет баланс гидро-липидной оболочки, и не требует смывания.\r\n\r\nОбъем: 200 мл.  Срок годности: 1 год.', 'Aqua (родниковая вода), matricaria chamomilla flower water (гидролат ромашки аптечной), coco glucoside (из мякоти кокоса и глюкозы), benzyl alcohol (бензиловый спирт), matricaria chamomilla oil (эфирное масло ромашки), lavandula angustifolia oil (эфирное масло лаванды), melaleuca alternifolia leaf oil (эфирное масло чайного дерева), SC-CO2 hypericum perforatum extract (экстракт зверобоя), SC-CO2 thymus serpyllum extract (экстракт чабреца), SC-CO2 tussilago farfara extract (экстракт мать-и-мачехи), SC-CO2 urtica dioica extract (экстракт крапивы), SC-CO2 betula pubescens extract (экстракт береза почки).', 'https://lev', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ingridiens`
--
ALTER TABLE `ingridiens`
  ADD PRIMARY KEY (`id_ingredients`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ingridiens`
--
ALTER TABLE `ingridiens`
  MODIFY `id_ingredients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
