USE RECREOCAMPESTRE


SELECT * FROM Administrador
INSERT INTO Administrador VALUES ('admi@gmail.com', '123456')
INSERT INTO Administrador VALUES ('admi2@gmail.com', '1234')

/*-----------------------------------------*/
SELECT * FROM AdministradorReserva
TRUNCATE TABLE AdministradorReserva
INSERT INTO AdministradorReserva VALUES (1, 1)
INSERT INTO AdministradorReserva VALUES (1, 2)
INSERT INTO AdministradorReserva VALUES (1, 3)
INSERT INTO AdministradorReserva VALUES (1, 4)
INSERT INTO AdministradorReserva VALUES (2, 1)
INSERT INTO AdministradorReserva VALUES (2, 2)
INSERT INTO AdministradorReserva VALUES (2, 3)
INSERT INTO AdministradorReserva VALUES (2, 4)





/*-----------------------------------------*/

SELECT * FROM Cliente
INSERT INTO Cliente VALUES ('Max','Lopez','M', '948573645', '01/01/2001 00:00:00', 'maxlopez@gmail.com', '1234567', 'Av.San Martin 123')
INSERT INTO Cliente VALUES ('Jair','Zaga','M', '987263514', '09/03/1998 00:00:00', 'jairzaga@gmail.com', '123456789', 'Jr. La Libertad 321')
INSERT INTO Cliente VALUES ('Eduard','Crespo','M', '983372637', '05/03/1994 00:00:00', 'eduardcrespo@gmail.com', '12345', 'Av.Ricardo Palma 234')
INSERT INTO Cliente VALUES ('Anthony','Palomino','M', '918273642', '06/07/1996 00:00:00', 'anthonylobo@gmail.com', '123987', 'Jr. Urbina 321')

TRUNCATE TABLE Cliente


/*-----------------------------------------*/
SELECT * FROM CategoriaProducto
INSERT INTO CategoriaProducto VALUES ('Plato')
INSERT INTO CategoriaProducto VALUES ('Entrada')
INSERT INTO CategoriaProducto VALUES ('Bebida')

/*-----------------------------------------*/
SELECT * FROM Producto
TRUNCATE TABLE Producto
INSERT INTO Producto VALUES ('Pollada tradicional','Pollo frito a presion, mote, papa, porcion cremas','Polladatradicional.jpg', 19.00 , 1)
INSERT INTO Producto VALUES ('Pollada especial','Pollo frito a presion, choclo, papa pelada, lechuga, tomate, pepino, palta, aliño transparente, cremas','polladaespecial.jpg', 25.00 , 1)
INSERT INTO Producto VALUES ('Chicarron especial','Cerdo incluye costillas, papa pelada, choclo, cebolla, tomate, hierva buena, aliño transparente','chicarronespecial.jpg', 29.00 , 1)
INSERT INTO Producto VALUES ('Chicarron','Cerdo no incluye costilla, papa, mote, cebolla, tomate, hierva buena','chicharron.jpg', 23.00 , 1)
INSERT INTO Producto VALUES ('Chicharron de trucha','Filete de trucha 400 g, yuca frita, zarza criolla (lechuga, aji amarillo, cebolla, limon, especias nativas','chicharrontrucha.jpg', 25.00 , 1)
INSERT INTO Producto VALUES ('Trucha especial','Trucha 500 g, arroz, papa frita, lechuga, precocidos, pepino, tomate, palta','truchaespecial.jpg', 24.00 , 1)
INSERT INTO Producto VALUES ('Trucha a vapor','Trucha 500 g, papa cocida, arroz, lechuga, precocidos, pepino, tomate, palta, brocoli','truchavapor.jpg', 24.00 , 1)
INSERT INTO Producto VALUES ('Trucha a la parrilla','Trucha 500 g, papa cocida, choclo, lechuga, precocidos, pepino, tomate, palta','truchaparrilla.jpg', 25.00 , 1)
INSERT INTO Producto VALUES ('Cuy chactado','Cuy dorado, papa sancochada, mote, ensalada','chactado.jpg', 40.00 , 1)
INSERT INTO Producto VALUES ('Cuy especial','Cuy de 800 g a 1 kg, papa peada, choclo, aji de cilantro, col, arbeja, aliño transparente','cuyespecial.jpg', 43.00 , 1)
INSERT INTO Producto VALUES ('Cuy crocante','Cuy, papa pelada, choclo, aji de cilantro, ensalada de col, especias naturales','cuycrocante.jpg', 43.00 , 1)
INSERT INTO Producto VALUES ('Tallarin de casa con pollo','Tallarin de casa, pollo dorado, rocoto relleno, papa a la huancaina','tallarinpollo.jpg', 25.00 , 1)
INSERT INTO Producto VALUES ('Tallarin de casa con chicharron','Tallarin de casa, chicharron, rocoto relleno, papa a la huancaina','tallarinchicharron.jpg', 27.00 , 1)
INSERT INTO Producto VALUES ('Pechuga de pollo a la parrilla','Filete de pollo 300 g, papa frita, arroz, palta, lechuga, pepino, tomate, brocoli','pechugapollo.jpg', 25.00 , 1)
INSERT INTO Producto VALUES ('Lomo fino a la parrilla','Lomo fino 400 g, papa frita, lechuga, tomate, palta, pepino, albiño blanco','lomofino.jpg', 39.00 , 1)
INSERT INTO Producto VALUES ('Ccapchi de queso','Ccapchi de queso','ccapchi.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Causa rellena de pollo','Causa rellena de pollo','causarellena.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Palta rellena','Palta rellena','paltarellena.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Dieta de pollo','Dieta de pollo','dietapollo.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Chairo','Chairo','chairo.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Papa a la huancaina','Papa a la huancaina','papahuancaina.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Rocoto relleno','Rocoto relleno','rocotorelleno.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Choco con queso','Choco con queso','chocloqueso.jpg', 6.00 , 2)
INSERT INTO Producto VALUES ('Yuquitas doradas','Yuquitas doradas','yuquitasdoradas.jpg', 5.00 , 2)
INSERT INTO Producto VALUES ('Ensalada precocida','Ensalada precocida','ensaladaprecocida.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Ensalada de palta','Ensalada de palta','ensaladapalta.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Ensalada especial','Ensalada especial','ensaladaespecial.jpg', 10.00 , 2)
INSERT INTO Producto VALUES ('Porcion de arros','Porcion de arros','porcionarroz.jpg', 3.50 , 2)
INSERT INTO Producto VALUES ('Porcion de papas doradas','Porcion de papas doradas','papasdoradas.jpg', 3.50 , 2)
INSERT INTO Producto VALUES ('Porcion de choclo','Porcion de choclo','porcionchoclo.jpg', 2.50 , 2)
INSERT INTO Producto VALUES ('Gaseosa coca cola','2.25L','cocacola.jpg', 10.00 , 3)
INSERT INTO Producto VALUES ('Gaseosa inca cola','2.25L','incacola.jpg', 9.00 , 3)
INSERT INTO Producto VALUES ('Gaseosa big cola','2.25L','bigcola.jpg', 8.00 , 3)
INSERT INTO Producto VALUES ('Zumo de piña','1L','zumopiña.jpg', 10.00 , 3)
INSERT INTO Producto VALUES ('Zumo de sandilla','1L','zumosandilla.jpg', 10.00 , 3)
INSERT INTO Producto VALUES ('Zumo de manzana','1L','zumomanzana.jpg', 10.00 , 3)
INSERT INTO Producto VALUES ('Hidromiel oro dulce','1 botella','hidromielorodulce.jpg', 20.00 , 3)
INSERT INTO Producto VALUES ('Hidromiel santa rosa','1 botella','hidromielsantarosa.jpg', 20.00 , 3)
INSERT INTO Producto VALUES ('Hidromiel marquez de aranquez','1 botella','hidromielmarquez.jpg', 17.00 , 3)
INSERT INTO Producto VALUES ('Vino queirolo rose','1 botella','queirolorosa.jpg', 25.00 , 3)
INSERT INTO Producto VALUES ('Vino tabernero gran tinto','1 botella','tabernerotinto.jpg', 30.00 , 3)
INSERT INTO Producto VALUES ('Vino taberneroblanco','1 botella','taberneroblanco.jpg', 25.00 , 3)
INSERT INTO Producto VALUES ('Cerveza cristal','1 botella','cristal.jpg', 8.00 , 3)
INSERT INTO Producto VALUES ('Cerveza pilsen','1 botella','pilsen.jpg', 8.50 , 3)
INSERT INTO Producto VALUES ('Cerveza cusqueña dorada','1 botella','cuzqueña.jpg', 8.50 , 3)

/*-----------------------------------------*/
SELECT * FROM Servicio
INSERT INTO Servicio VALUES ('Boda','Puede reservar su fecha especial para hacer los preparativos adecuados y así tenga la mejor celebración de su día tan especial.','boda.jpg', 400.00)
INSERT INTO Servicio VALUES ('Cumpleaño','Puede reservar su fecha especial para hacer los preparativos adecuados y así tenga la mejor celebración de su día tan especial. ','cumpleaño.jpg', 300.00)
INSERT INTO Servicio VALUES ('Reunión Corporativa','Puede reservar su fecha especial para hacer los preparativos adecuados y así tenga la mejor celebración de su día tan especial.','reunion.jpg', 100.00)
INSERT INTO Servicio VALUES ('Delivery','Llevamos su producto a su hogar.','delivery.jpg', 2.00)


/*-----------------------------------------*/
SELECT * FROM DetalleReserva
TRUNCATE TABLE DetalleReserva
INSERT INTO DetalleReserva VALUES (3, 87.00 , 1, 3)
INSERT INTO DetalleReserva VALUES (2, 86.00 , 1, 10)
INSERT INTO DetalleReserva VALUES (6, 60.00 , 1, 17)
INSERT INTO DetalleReserva VALUES (10, 35.00 , 1, 29)
INSERT INTO DetalleReserva VALUES (1, 25.00 , 1, 40)
INSERT INTO DetalleReserva VALUES (2, 8.50 , 1, 45)
INSERT INTO DetalleReserva VALUES (1, 24.00 , 2, 6)
INSERT INTO DetalleReserva VALUES (1, 10.00 , 2, 18)
INSERT INTO DetalleReserva VALUES (1, 10.00 , 2, 31)
INSERT INTO DetalleReserva VALUES (1, 19.00 , 3, 1)
INSERT INTO DetalleReserva VALUES (1, 10.00 , 3, 25)
INSERT INTO DetalleReserva VALUES (1, 10.00 , 3, 36)
INSERT INTO DetalleReserva VALUES (3, 87.00 , 4, 3)
INSERT INTO DetalleReserva VALUES (2, 86.00 , 4, 10)
INSERT INTO DetalleReserva VALUES (6, 60.00 , 4, 17)
INSERT INTO DetalleReserva VALUES (10,35.00 , 4, 29)
INSERT INTO DetalleReserva VALUES (1, 25.00 , 4, 40)
INSERT INTO DetalleReserva VALUES (2, 8.50 , 4, 45)

/*-----------------------------------------*/
SELECT * FROM Reserva
TRUNCATE TABLE Reserva
INSERT INTO Reserva VALUES ('08/07/2022 00:00:00', 301.50, 701.50, 'false', '09:00:00','13:00:00', 1, 1)
INSERT INTO Reserva VALUES ('10/07/2022 00:00:00', 44.00, 46.00, 'false', '00:00:00','00:00:00', 1, 4)
INSERT INTO Reserva VALUES ('11/07/2022 00:00:00', 39.00, 41.00, 'false', '00:00:00','00:00:00', 2, 4)
INSERT INTO Reserva VALUES ('12/07/2022 00:00:00', 301.50, 601.50, 'false', '10:00:00','12:00:00', 3, 2)