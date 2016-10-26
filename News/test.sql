CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anounce` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fulltext` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `news` (`id`, `title`, `anounce`, `fulltext`, `author`, `date_create`)
VALUES
	(1, 'Название', 'Краткое содержание. Много букв.', 'Полный текст. Очень много букв', 'Маша Неизвестная', '2016-10-26'),
	(2, 'Какая-то новость', 'Тестовый анонс', 'Здесь что-то написано', 'Без автора', '2015-01-01'),
	(3, 'Невнятная новость', 'Невнятный анонс', 'Кошки живут в подвале', 'Катя Белая', '2016-06-06');



