/*
Created		06/11/2017
Modified		17/11/2017
Project
Model
Company
Author
Version
Database		mySQL 5
*/



Create table usuarios (
	idUsuario Int NOT NULL AUTO_INCREMENT,
	idPregunta Int NOT NULL,
	nombreUsuario Varchar(35) NOT NULL,
	pass Varchar(25) NOT NULL,
	correo Varchar(40) NOT NULL,
	respSeguridad Varchar(40),
	idTipoUsuario Int NOT NULL,
 Primary Key (idUsuario)) ENGINE = MyISAM;

Create table productos (
	idProducto Int NOT NULL AUTO_INCREMENT,
	idCategoria Int NOT NULL,
	nombreProducto Varchar(35) NOT NULL,
	descripcion Varchar(100) NOT NULL,
	imagen Varchar(20) NOT NULL,
	precio Float(5,2) NOT NULL,
	cantidad Int NOT NULL,
	talla Varchar (10) NOT NULL,
 Primary Key (idProducto)) ENGINE = MyISAM;

Create table categoria (
	idCategoria Int NOT NULL AUTO_INCREMENT,
	nombreCategoria Char(50) NOT NULL,
 Primary Key (idCategoria)) ENGINE = MyISAM;

-----volcado de datos para categoria----

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Playeras'),
(2, 'Camisas'),
(3, 'Pantalones'),
(4, 'Zapatos'),
(5, 'Sueter/Chamarra');

Create table tarjeta (
	idTarjeta Int NOT NULL AUTO_INCREMENT,
	numeroTarjeta Int NOT NULL,
	fechaVencimiento Varchar(5) NOT NULL,
	codigoSeguridad Int NOT NULL,
	idUsuario Int NOT NULL,
 Primary Key (idTarjeta)) ENGINE = MyISAM;

Create table direcciones (
	idDireccion Int NOT NULL AUTO_INCREMENT,
	idUsuario Int NOT NULL,
	nombreDireccion Varchar(200) NOT NULL,
 Primary Key (idDireccion)) ENGINE = MyISAM;

Create table compra (
	idCompra Int NOT NULL AUTO_INCREMENT,
	importe Float(5,2) NOT NULL,
	fechaCompra Date NOT NULL,
	idUsuario Int NOT NULL,
 Primary Key (idCompra)) ENGINE = MyISAM;

------Tabla detalleCompra-------

Create table detalleCompra (
	idProducto Int NOT NULL,
	idCompra Int NOT NULL,
	cantidad Int NOT NULL,
 Primary Key (idProducto,idCompra)) ENGINE = MyISAM;

------Tabla preguntaSeguridad-------

Create table preguntaSeguridad (
	idPregunta Int NOT NULL AUTO_INCREMENT,
	pregunta Varchar(100) NOT NULL,
 Primary Key (idPregunta)) ENGINE = MyISAM;

------Volcado de datos para preguntaSeguridad------

INSERT INTO `preguntaSeguridad` (`idPregunta`, `pregunta`) VALUES
(1, '¿Cual es el nombre de tu mascota?'),
(2, '¿Donde se conocieron tus padres?'),
(3, '¿Cual es el titulo de tu libro favorito?')

------Tabla tipoUsuario-----

Create table tipoUsuario (
	idTipoUsuario Int NOT NULL AUTO_INCREMENT,
	usuarioTipo Varchar(20) NOT NULL,
 Primary Key (idTipoUsuario)) ENGINE = MyISAM;

------Volcado de datos para tipoUsuario------

 INSERT INTO `tipoUsuario` (`idTipoUsuario`, `usuarioTipo`) VALUES
 (1, 'Administrador'),
 (2, 'Usuario normal')

 ------Tabla Historial------

Create table historial (
	idHistorial Int NOT NULL AUTO_INCREMENT,
	cantidad Int NOT NULL,
	nombreProducto Varchar(50) NOT NULL,
	fechaCompra Date NOT NULL,
	importe Float (5,2) NOT NULL,
Primary Key (idHistorial)) ENGINE=MyISAM;

Alter table tarjeta add Foreign Key (idUsuario) references usuarios (idUsuario) on delete  restrict on update  restrict;
Alter table direcciones add Foreign Key (idUsuario) references usuarios (idUsuario) on delete  restrict on update  restrict;
Alter table compra add Foreign Key (idUsuario) references usuarios (idUsuario) on delete  restrict on update  restrict;
Alter table detalleCompra add Foreign Key (idProducto) references productos (idProducto) on delete  restrict on update  restrict;
Alter table productos add Foreign Key (idCategoria) references categoria (idCategoria) on delete  restrict on update  restrict;
Alter table detalleCompra add Foreign Key (idCompra) references compra (idCompra) on delete  restrict on update  restrict;
Alter table usuarios add Foreign Key (idPregunta) references preguntaSeguridad (idPregunta) on delete  restrict on update  restrict;
Alter table usuarios add Foreign Key (idTipoUsuario) references tipoUsuario (idTipoUsuario) on delete  restrict on update  restrict;
