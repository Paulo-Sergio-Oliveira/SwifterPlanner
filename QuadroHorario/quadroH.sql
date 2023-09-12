DROP DATABASE IF EXISTS quadroH;
CREATE DATABASE quadroH;
USE quadroH;

CREATE TABLE users
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE habits
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  time_ VARCHAR(5) NOT NULL,
  monday VARCHAR(255) NOT NULL,
  tuesday VARCHAR(255) NOT NULL,
  wednesday VARCHAR(255) NOT NULL,
  thursday VARCHAR(255) NOT NULL,
  friday VARCHAR(255) NOT NULL,
  saturday VARCHAR(255) NOT NULL,
  sunday VARCHAR(255) NOT NULL,
  id_user INT NOT NULL,
  CONSTRAINT fk_habUser FOREIGN KEY (id_user) REFERENCES users(id)
);