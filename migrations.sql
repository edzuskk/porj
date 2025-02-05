CREATE DATABASE blog;

USE blog;

CREATE TABLE posts (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200),
);

INSERT INTO posts
(content)
VALUES
("pirmais ieraksts"),
("otrais ieraksts");

INSERT INTO categories
(category_name)
VALUES
("pirmais ieraksts"),
("otrais ieraksts"); -- neies

SELECT posts.*, categories.category_name FROM posts
LEFT JOIN categories
ON posts.category_id = categories.id
WHERE posts.id = 1; --ari neies plbm

SELECT * FROM posts;

