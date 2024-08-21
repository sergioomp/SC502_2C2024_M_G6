CREATE DATABASE ecoeats
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE ecoeats;


CREATE TABLE Voluntarios (
    id_voluntario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    transporte VARCHAR(100),
    identificador VARCHAR(100),
    canton VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;