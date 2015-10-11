--Запросы написаны для вставки в консоль.

--1. Создать базу данных library.
create DATABASE library;
use library;


--2. Создать таблицу book. Таблица должна содержать следующие колонки:
--id - int, primary key, autoincrement,
--title - varchar, not null,
--created_at - datetime, not null
CREATE TABLE book (
id INT(10)PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(30) NOT NULL,
created_at DATETIME NOT NULL
);


--3. Создать таблицу author. Таблица должна содержать следующие колонки:
--id - int, primary key, autoincrement
--first_name - varchar, not null
--last_name - varchar, not null
CREATE TABLE autor (
id INT(10)PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(20) NOT NULL
);


--4. Создать таблицу book_author. Таблица должна содержать следующие колонки:
--id - int, primary key, autoincrement
--book_id - int, not null
--author_id - int, not null
CREATE TABLE book_autor (
id INT(10)PRIMARY KEY AUTO_INCREMENT,
book_id INT(15) NOT NULL,
autor_id INT(15) NOT NULL
);


--5. Добавить в таблицу book колонку is_published с типом boolean. Значение по-умолчанию - 0.
--Колонку необходимо разместить перед колонкой created_at.
ALTER TABLE `book`
ADD `is_published`
BOOLEAN NULL DEFAULT 0
AFTER `title`;


-- 6. Добавить в таблицу author колонку email, тип varchar, not null.
ALTER TABLE `autor` ADD `email` VARCHAR(30) NOT NULL;


--7. Добавить в таблицу author несколько записей (5 и более).
INSERT INTO `autor` (`id`, `first_name`, `last_name`, `email`)
VALUES (1,'Alex', 'Pushkin', 'apuh@mail.ru'),
(NULL,'Taras', 'Shevchenko', 'sheva@i.ua'),
(NULL,'Paulo', 'Koelio', 'pakol@gmail.com'),
(NULL,'Omar', 'Hayam', 'omarka@google.ps'),
(NULL,'Haruki', 'Murakami', 'hmarka@yahoo.jp');


--8. Добавить в таблицу book несколько записей (5 и более).
INSERT INTO `test` (`id`, `title`, `is_published`, `created_at`)
VALUES (1,'Dubrovsky', 1, now()),
(NULL,'Son', 1, now()),
(NULL,'Alchimik', 1, now()),
(NULL,'Rubayat', 1, now()),
(NULL,'1Q84', 1, now());


--9. Добавить в таблицу book_autor записи из таблиц book и author.
INSERT INTO `book_autor` (`id`, `autor_id`, `book_id`)
VALUES (1, 1, 1),(NULL, 2, 2),(NULL, 3, 3),(NULL, 4, 4),(NULL, 5, 5);

	

	--10. Создать запрос на обновление таблицы book, где нужно установить для колонки
--is_published значение 1 для тех записей, id которых попадает в диапазон 1, 3, 5.
UPDATE `books` SET `is_published` = 1 WHERE `id` IN(1,3,5);


--11. Создать запрос на обновление таблицы book, где нужно установить текущую дату
--(функция NOW()) для колонки created_at для записей, у которых is_published равен 1.
UPDATE `book` SET `created_at` = now() WHERE `book`.`is_published` = 1;


--12. Создать несколько запросов, где необходимо обновить таблицу author и
--установить для колонки email составное значение: fist_name _last_name@<любой_ящик>.
--Например, есть запись: Джек (first_name) Лондон (last_name).
--Значение для email должно быть jack_london@mail.ru.
UPDATE `autor` SET `email` = CONCAT (`first_name`,'_',`last_name`,'@the.end') WHERE `autor`.`id` <=5;
-- (Функция mysql> SELECT LCASE('QUADRATICALLY'); -> 'quadratically' возвращает строку str,
--в которой все символы переведены в нижний регистр, но не понял как её применить к колонке `email`.)

--или
UPDATE `autor` SET `email` = 'alex_pushkin@the.end' WHERE `autor`.`id` = 1;
UPDATE `autor` SET `email` = 'taras_shevchenko@the.end' WHERE `autor`.`id` = 2;
UPDATE `autor` SET `email` = 'paulo_koelio@be.live' WHERE `autor`.`id` = 3;
UPDATE `autor` SET `email` = 'omar_hayam@the.end' WHERE `autor`.`id` = 4;
UPDATE `autor` SET `email` = 'haruki_murakami@be.live' WHERE `autor`.`id` = 5;


--13. Создать запрос на выборку записей из таблицы book по колонкам title, created_at.
SELECT `title`, `created_at`
FROM `book`;
	

	--14. Создать запрос на выборку записей из таблицы author по колонкам first_name, last_name.
SELECT `first_name`, `last_name`
FROM `autor`;
	

	--15. Создать запрос на выборку записей из таблиц book_author, book, author.
--Запрос должен вывести на экран таблицу с колонками:
--title из таблицы book
--first_name из таблицы author
--last_name из таблицы author
--Таблица должна быть отсортирована по колонке title таблицы book.
--Написать запрос со слабой связкой (таблицы применением LEFT JOIN).
SELECT `title`, `first_name`, `last_name`
FROM `book`
LEFT JOIN `autor`
ON `book`.`id` = `autor`.`id`
ORDER BY `title` ASC;


--16. Создать запрос на выборку записей из таблиц book_author, book, author.
--Запрос должен вывести на экран таблицу с колонками:
--title из таблицы book
--first_name из таблицы author
--last_name из таблицы author
--Таблица должна быть отсортирована по колонке title таблицы book.
--Написать два запроса с жесткой связкой (таблицы в секции FROM и применением INNER JOIN).
SELECT `title`, `first_name`, `last_name`
FROM `book`, `autor`
WHERE `book`.`id` = `autor`.`id`
ORDER BY `title` ASC;

SELECT `title`, `first_name`, `last_name`
FROM `book`
INNER JOIN `autor`
ON `book`.`id` = `autor`.`id`
ORDER BY `title` DESC;


--17. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
--book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
--title из таблицы book
--first_name из таблицы author
--last_name из таблицы author
--Таблица должна удовлетворять следующим условиям:
--is_published равен 1
--значения в first_name должно быть только те, у которых имена начинаются на K
--(букву можно подставить любую, в зависимости от ваших записей в таблице).
--Таблица должна быть отсортирована по колонке title таблицы book.
SELECT `title`, `first_name`, `last_name`
FROM `book`
INNER JOIN `autor`
ON `book`.`id` = `autor`.`id` AND `book`.`is_published` = 1 AND `autor`.`first_name` LIKE 'A%'
ORDER BY `title`;


--18. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
--book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
-- title из таблицы book
--first_name из таблицы author
--last_name из таблицы author
--Таблица должна удовлетворять следующим условиям: is_published равен 1
-- условие, при котором в значениях email должна присутстовать фраза mail (фразу
--можно подставить любую, в зависимости от ваших записей в таблице).
--Например, есть имейлы: jack_london@mail.ru, charls_dikkens@gmail.com, artur_konan-doil@yandex.ru
--В выборке будет фраза %mail%. Тогда в результате должны попасть: jack_london@mail.ru, charls_dikkens@gmail.com
--Таблица должна быть отсортирована по колонке title таблицы book.
SELECT `title`, `first_name`, `last_name`
FROM `book`
INNER JOIN `autor`
ON `book`.`id` = `autor`.`id` AND `book`.`is_published` = 1 AND `autor`.`email` LIKE '%live%'
ORDER BY `title` ASC;