CREATE TABLE rol (
  id_rol  INT PRIMARY KEY ,
  nombreRol varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Rol (`id_rol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'usuario'),
(3, 'Patrocinador'),
(4, 'Voluntario');

CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(100),
    telefono VARCHAR(100),
    direccion VARCHAR(150),
    correo VARCHAR(100) UNIQUE,
    password VARCHAR(15) UNIQUE,
    ruta_imagen VARCHAR(1024),
    FOREIGN KEY (id_rol) REFERENCES Rol(id_rol)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO usuario (id_rol,nombre, correo, telefono,ruta_imagen,password) VALUES 
(1,'Jean','jpicado@gmail.com','6005-6789', 'https://w7.pngwing.com/pngs/666/150/png-transparent-messi-world-cup-2023-thumbnail.png','12345');

CREATE TABLE Patrocinadores (
    id_patrocinador INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    empresa VARCHAR(100),
    telefono VARCHAR(15),
    email VARCHAR(100),
    direccion VARCHAR(200),
    contacto_principal VARCHAR(100),
    FOREIGN KEY (id_rol) REFERENCES Rol(id_rol)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Patrocinadores (id_rol, nombre, apellido, empresa, telefono, email, direccion, contacto_principal) 
VALUES 
(3, 'Juan', 'Pérez', 'KFC', '123456789', 'juan.perez@abc.com', 'Calle 123, Ciudad XYZ', 'Maria Gómez'),
(3, 'Laura', 'González', 'PIZZA HUT', '987654321', 'laura.gonzalez@xyz.com', 'Avenida 456, Ciudad ABC', 'Carlos Ruiz'),
(3, 'Miguel', 'Santos', 'MUSSI', '456789123', 'miguel.santos@def.com', 'Calle 789, Ciudad MNO', 'Luis Pérez'),
(3, 'Ana', 'Ramírez', 'PIZZA READY', '321654987', 'ana.ramirez@jkl.com', 'Avenida 987, Ciudad PQR', 'Josefa Díaz'),
(3, 'Carlos', 'Martínez', 'POLLO GRANJERO', '789123456', 'carlos.martinez@mno.com', 'Calle 321, Ciudad STU', 'Paula Fernández');

CREATE TABLE Sobrantes (
    id_sobrante INT PRIMARY KEY AUTO_INCREMENT,
    id_patrocinador INT,
    descripcion varchar(250),
    cantidad INT,
    fecha_creacion DATE,
    estado ENUM('activo', 'seleccionado', 'retirado'),
    ruta_imagen VARCHAR(1024),
    FOREIGN KEY (id_patrocinador) REFERENCES Patrocinadores(id_patrocinador)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Sobrantes (id_patrocinador, descripcion, cantidad, fecha_creacion, estado,ruta_imagen) 
VALUES 
(1, 'Chizza', 10, '2024-08-20', 'activo','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk1GZW4_7-qHVFvh7Z1DjnQ_GfCcmsFDUlfg&s'),
(2, 'Pizza de Jamon y Queso 14p', 5, '2024-08-20', 'seleccionado','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMWpoIqnJQmRQ53pXlzjTZjuIWJE22IkyLew&s'),
(3, 'Coca Cola 2,5', 15, '2024-08-19', 'activo','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-dkuWkpuBo5ZjaVuYHi-V6D5tzFCCF8ZkRg&s'),
(4, 'Pizza de Mortadela 12p', 3, '2024-08-18', 'retirado','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCTYot67xZF4PP_KGQEoWCxlq3Oi3m4FqIw&s'),
(5, 'Pociones de pollo con papas', 12, '2024-08-17', 'activo','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb5Ubm3sOE6a77Kek1lvuEztocLz6-q5Qt1A&s'),
(1, 'croissant', 12, '2024-08-18', 'activo', 'https://smartcdn.gprod.postmedia.digital/nationalpost/wp-content/uploads/2017/10/gettyimages-95380176.jpg'),
(2, 'queque', 3, '2024-08-19', 'retirado', 'https://th.bing.com/th/id/OIP.rF_gz9_ACYXs2_ceidpzPAHaE8?rs=1&pid=ImgDetMain'),
(3, 'empanadas', 12, '2024-08-20', 'seleccionado', 'https://th.bing.com/th/id/R.7f71a9e46e1db38fa5381efef593765b?rik=H2IpDB7asgPJdA&riu=http%3a%2f%2f3.bp.blogspot.com%2f-_E-R00MACWo%2fUJbp1MJW9KI%2fAAAAAAAAAKI%2fDaygI6PCchE%2fs1600%2f2012-11-03%2b21.45.35.jpg&ehk=%2fK6xiMp6wbygZYc1rXslWePwPuBKUB5hDskiOzB%2fnSU%3d&risl=&pid=ImgRaw&r=0'),
(4, 'pizza peperonni', 7, '2024-08-20', 'activo', 'https://th.bing.com/th/id/OIP.KQtJc3n01eVCkiB418ztUwHaFj?rs=1&pid=ImgDetMain'),
(5, 'torta chilena', 7, '2024-08-21', 'retirado', 'https://th.bing.com/th/id/R.da543b53615708bdb381dca042bcfab9?rik=SOJQ9HDP7OKntw&riu=http%3a%2f%2f2.bp.blogspot.com%2f_761SdDH151w%2fTF3JG23_vxI%2fAAAAAAAAAGI%2fhKcN74Eb7P4%2fs1600%2fIMG_8820.JPG&ehk=7udjgs5W2o79uGz2FU1TkLaefb2uiYzh8urCQ6Cm0es%3d&risl=&pid=ImgRaw&r=0'),
(1, 'donas', 4, '2024-08-21', 'seleccionado', 'https://th.bing.com/th/id/OIP.T8O1rZI2upALh_4__FBmQAHaFj?rs=1&pid=ImgDetMain'),
(2, 'pizza hawaina', 4, '2024-08-21', 'activo', 'https://th.bing.com/th/id/OIP.ojdQYSxuQZ8VXWaYy71iVwHaFi?rs=1&pid=ImgDetMain'),
(3, 'sandwich de atún', 2, '2024-08-21', 'retirado', 'https://assets.unileversolutions.com/recipes-v2/235143.jpg'),
(4, 'ensalada de frutas', 2, '2024-08-21', 'seleccionado', 'https://2.bp.blogspot.com/--aYkyJKs7Gw/VRcq8TnNx4I/AAAAAAAAN9I/kOUE1imyBJY/s1600/Versatile.jpg');

CREATE TABLE Alertas (
    id_alerta INT PRIMARY KEY AUTO_INCREMENT,
    id_sobrante INT,
    fecha_seleccion DATE,
    fecha_retiro DATE,
    estado ENUM('pendiente', 'completado', 'cancelado'),
    FOREIGN KEY (id_sobrante) REFERENCES Sobrantes(id_sobrante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Alertas (id_sobrante, fecha_seleccion, fecha_retiro, estado) 
VALUES 
(1, '2024-08-20', '2024-08-21', 'pendiente'),
(2, '2024-08-20', '2024-08-22', 'completado'),
(3, '2024-08-19', '2024-08-20', 'cancelado'),
(4, '2024-08-18', '2024-08-19', 'pendiente'),
(5, '2024-08-17', '2024-08-18', 'completado');

CREATE TABLE Cupones (
    idCupon INT PRIMARY KEY AUTO_INCREMENT,
    id_Sobrante INT,
    nombreSobrante VARCHAR(100),
    descuento VARCHAR(100),
    FOREIGN KEY (id_Sobrante) REFERENCES Sobrantes(id_sobrante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO Cupones (id_Sobrante, nombreSobrante,descuento) 
VALUES 
(1, 'Chizza','20%'),
(2, 'Pizza de Jamon y Queso','15%'),
(3, 'Coca Cola 2,5','25%'),
(4, 'Carne sobrante','11%'),
(5, 'Bebidas sobrantes','35%');

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

INSERT INTO Voluntarios (nombre, apellido, telefono, email, transporte, identificador, canton) 
VALUES 
( 'Andrea', 'López', '123456789', 'andrea.lopez@mail.com', 'Auto', 'ID001', 'San José'),
( 'Mario', 'Ramírez', '987654321', 'mario.ramirez@mail.com', 'Moto', 'ID002', 'Cartago'),
( 'Lucía', 'Fernández', '456789123', 'lucia.fernandez@mail.com', 'Bicicleta', 'ID003', 'Alajuela'),
( 'Jorge', 'García', '321654987', 'jorge.garcia@mail.com', 'Auto', 'ID004', 'Heredia'),
( 'Elena', 'Castro', '789123456', 'elena.castro@mail.com', 'Moto', 'ID005', 'Puntarenas');