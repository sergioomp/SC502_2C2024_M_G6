CREATE DATABASE ecoeats
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE ecoeats;

CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    usuario VARCHAR(100),
    correo VARCHAR(100) UNIQUE,
    password VARCHAR UNIQUE(15),
    tipoUsuario INT,
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Restaurantes (
    id_restaurante INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    nombre_restaurante VARCHAR(100),
    direccion VARCHAR(200),
    telefono VARCHAR(15),
    email VARCHAR(100),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Patrocinadores (
    id_patrocinador INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    empresa VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    direccion VARCHAR(200),
    contacto_principal VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Sobrantes (
    id_sobrante INT PRIMARY KEY AUTO_INCREMENT,
    id_restaurante INT,
    descripcion TEXT,
    cantidad INT,
    fecha_creacion DATE,
    estado ENUM('activo', 'seleccionado', 'retirado'),
    FOREIGN KEY (id_restaurante) REFERENCES Restaurantes(id_restaurante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Alertas (
    id_alerta INT PRIMARY KEY AUTO_INCREMENT,
    id_sobrante INT,
    id_beneficiario INT,
    fecha_seleccion DATE,
    fecha_retiro DATE,
    estado ENUM('pendiente', 'completado', 'cancelado'),
    FOREIGN KEY (id_sobrante) REFERENCES Sobrantes(id_sobrante),
    FOREIGN KEY (id_beneficiario) REFERENCES Usuario(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Cupones (
    idCupon INT PRIMARY KEY AUTO_INCREMENT,
    id_Sobrante INT,
    nombreSobrante VARCHAR(100),
    FOREIGN KEY (id_Sobrante) REFERENCES Sobrantes(id_sobrante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE Voluntarios (
    id_voluntario INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    transporte VARCHAR(100),
    identificador VARCHAR(100),
    canton VARCHAR(100),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
