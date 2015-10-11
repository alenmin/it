create DATABASE site;
use site;

CREATE TABLE users (
id INT(10)PRIMARY KEY AUTO_INCREMENT NOT NULL,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(20) NOT NULL,
email VARCHAR(20) DEFAULT NULL,
phone VARCHAR(15) DEFAULT NULL,
password VARCHAR(50) NOT NULL,
created_at DATETIME NOT NULL
);

UPDATE `book` SET `is_published` = '0' WHERE `book`.`id` = 1;



