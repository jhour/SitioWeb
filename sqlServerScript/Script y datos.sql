USE MASTER;
DROP DATABASE IF EXISTS INFORVISUR;
CREATE DATABASE INFORVISUR;
USE INFORVISUR;

CREATE TABLE Administrador(
idAdministrador INT IDENTITY (1,1) PRIMARY KEY,
correo VARCHAR(35) NOT NULL,
contraseña VARCHAR(35) NOT NULL
);

CREATE TABLE Usuario(
idUsuario INT IDENTITY (1,1) PRIMARY KEY,
nombre VARCHAR(45) NOT NULL,
apellido VARCHAR(45) NOT NULL,
dni CHAR(8) NOT NULL,
genero CHAR(1) NOT NULL,
telefono VARCHAR(15) NOT NULL,
correo VARCHAR(35) NOT NULL,
contraseña VARCHAR(35) NOT NULL,
);


CREATE TABLE EstadoEquipo(
idEstadoEquipo INT IDENTITY (1,1) PRIMARY KEY,
tipoEstado VARCHAR(45) NOT NULL
);

CREATE TABLE TipoEquipo(
idTipoEquipo INT IDENTITY (1,1) PRIMARY KEY,
nombreTipoEquipo VARCHAR(45) NOT NULL
);


CREATE TABLE Servicio(
idServicio INT IDENTITY (1,1) PRIMARY KEY,
tipoServicio VARCHAR(45) NOT NULL
);

CREATE TABLE Viabilidad(
idViabilidad INT IDENTITY (1,1) PRIMARY KEY,
respuesta CHAR(2) NOT NULL,
comentario VARCHAR (65) NOT NULL
);

CREATE TABLE EstadoPago(
idEstadoPago INT IDENTITY (1,1) PRIMARY KEY,
descripcion	VARCHAR(35) NOT NULL
);

CREATE TABLE Hora(
idHora INT IDENTITY (1,1) PRIMARY KEY,
descripcionHora VARCHAR(6) NOT NULL
);

CREATE TABLE Cita(
idCita INT IDENTITY (1,1) PRIMARY KEY,
fecha DATE NOT NULL,
medidaPulgadas VARCHAR(6),
marca VARCHAR(35),
modelo VARCHAR (35),
descripcionProblema VARCHAR(100),
importe SMALLMONEY NOT NULL,
estadoCita BIT NOT NULL,

idUsuario INT NOT NULL,
idServicio INT NOT NULL,
idTipoEquipo INT NOT NULL,
idViabilidad INT NOT NULL,
idEstadoPago INT NOT NULL,
idHora INT NOT NULL,
FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
FOREIGN KEY (idServicio) REFERENCES Servicio(idServicio),
FOREIGN KEY (idTipoEquipo) REFERENCES TipoEquipo(idTipoEquipo),
FOREIGN KEY (idViabilidad) REFERENCES Viabilidad(idViabilidad),
FOREIGN KEY (idEstadoPago) REFERENCES EstadoPago(idEstadoPago),
FOREIGN KEY (idHora) REFERENCES Hora(idHora)
);

CREATE TABLE ReservaEquipo(
idReservaEquipo INT IDENTITY (1,1) PRIMARY KEY,
medidaPulgadas VARCHAR(6),
marca VARCHAR(35),
modelo VARCHAR (35),
descripcionProblema VARCHAR(100),
importe SMALLMONEY NOT NULL,
estadoReserva BIT NOT NULL,

idUsuario INT NOT NULL,
idEstadoEquipo INT NOT NULL,
idServicio INT NOT NULL,
idTipoEquipo INT NOT NULL,
FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
FOREIGN KEY (idEstadoEquipo) REFERENCES EstadoEquipo(idEstadoEquipo),
FOREIGN KEY (idServicio) REFERENCES Servicio(idServicio),
FOREIGN KEY (idTipoEquipo) REFERENCES TipoEquipo(idTipoEquipo)
);

USE INFORVISUR;

INSERT INTO Administrador VALUES ('admi1@gmail.com', '1233'),
								 ('admi2@gmail.com', '543');

INSERT INTO Usuario VALUES ('Carlos', 'López Quispe', '77625342', 'M', '987637262', 'carlos@gmail.com', '123'),
							('Max', 'Zaga Paredes', '76273645', 'M', '982736455', 'max@gmail.com', '321'),
							('Gabriela', 'Crespo Palomino', '77263556', 'F', '987263542', 'gabriela@gmail.com', '345');

INSERT INTO EstadoEquipo VALUES ('En espera'),
								('En reparación y/o mantenimiento'),
								('Equipo finalizado'),
								('Entregado');

INSERT INTO TipoEquipo VALUES ('Computadora'),
							   ('Laptop'),
							   ('Impresora'),
							   ('Memoria externa'),
							   ('Parlantes'),
							   ('Mouse'),
							   ('Teclado'),
							   ('Componentes');


INSERT INTO Servicio VALUES ('Mantenimiento'),
							('Revisión general'),
							('Cambio de tinta'),
							('Cambio de componente'),
							('Chequeo de drivers');


INSERT INTO Viabilidad VALUES ('SI', 'PROCEDA CON EL PAGO'),
							  ('NO', 'SU NECESIDAD NO PUEDE SER SOLUCIONADA');

INSERT INTO EstadoPago VALUES ('Pendiente'),
							  ('Pagada'),
							  ('No procede pago');

INSERT INTO Hora VALUES ('07:00'),
						('08:00'),
						('09:00'),
						('10:00'),
						('11:00'),
						('12:00'),
						('13:00'),
						('14:00'),
						('15:00'),
						('16:00'),
						('17:00'),
						('18:00'),
						('19:00'),
						('20:00');

INSERT INTO Cita VALUES ('2022/12/27', '', 'Epson', 'L3001', 'No imprime color negro', 5, 1, 1, 1, 2, 1, 2, 1),
						('2022/12/28', '24" ', 'Samsung', 'XWEFS', 'No prende pantalla', 0, 1, 1, 2, 1, 2, 3, 2);

INSERT INTO ReservaEquipo VALUES ('', 'Canon', 'D827', 'Tubos atorados', 45, 1, 2, 3, 3, 2),
								 ('72" ', 'Xiaomi', 'Ultra', 'No recibe wifi', 120, 1, 3, 2, 2, 1);
