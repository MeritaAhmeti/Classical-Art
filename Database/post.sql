CREATE DATABASE posts;
USE posts;

CREATE TABLE post(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(50) NOT NULL,
subjecti TEXT
message TEXT,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP);