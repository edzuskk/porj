CREATE DATABASE blog1;

USE blog1;

CREATE TABLE posts (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200)

);

INSERT INTO posts
(content)
VALUES
("pirmais ieraksts"),
("otrais ieraksts");

SELECT * FROM posts;

