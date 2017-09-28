CREATE DATABASE IF NOT EXISTS ejemplo DEFAULT CHARACTER SET = 'utf8' DEFAULT COLLATE 'utf8_general_ci';
USE ejemplo;

CREATE TABLE usuarios (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre TEXT,
	correo TEXT,
	contrasena TEXT,
	created_at DATETIME,
	PRIMARY KEY (id)
)