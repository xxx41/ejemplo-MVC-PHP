CREATE DATABASE IF NOT EXISTS LINKSDB;

USE LINKSDB;

CREATE TABLE IF NOT EXISTS LINKS (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    TITULO VARCHAR(50),
    LINK VARCHAR(100)
);

INSERT INTO LINKS (TITULO, LINK) VALUES
	('Google','https://www.google.es'),
    ('Twitter','https://twitter.com'),
    ('Stackoverflow','https://es.stackoverflow.com');