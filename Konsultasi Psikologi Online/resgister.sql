CREATE DATABASE db_data; -- Buat database baru

USE db_data; -- Gunakan database yang baru dibuat

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);
