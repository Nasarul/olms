create database z_new_database;
use z_new_database;
CREATE TABLE video (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,
  description VARCHAR(800) NOT NULL,
  thumbnail VARCHAR(300) NOT NULL,
  video VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id`));