-- Active: 1763319882062@@127.0.0.1@3306@db_notas

-- Desde root creo usuario y db
-- Luego doy privilegios al usuario y refresco los privilegios

CREATE Table notas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    texto VARCHAR(250) NOT NULL

);

INSERT INTO notas(texto) VALUES ("nota");

use db_notas;
SELECT * from notas;


INSERT INTO notas(texto) VALUES ("Escribir"),("Estudiar"),("Jugar");

SELECT * FROM notas;
