-- Crear la base de datos 'enmasa'
CREATE DATABASE IF NOT EXISTS enmasa;

-- Usar la base de datos 'enmasa'
USE enmasa;

-- Crear la tabla 'quique'
CREATE TABLE IF NOT EXISTS info (
    nombre VARCHAR(50),
    edad INT,
    musica VARCHAR(50),
    pelo VARCHAR(50)
);

-- Insertar datos en la tabla 'quique'
INSERT INTO info (nombre, edad, musica, pelo) VALUES ('quique', 22, 'r&b', 'castaño');
