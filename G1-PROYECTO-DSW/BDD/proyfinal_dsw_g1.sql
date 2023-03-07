/*==============================================================*/
/* DROPS                                                        */
/*==============================================================*/
DROP TABLE Lista_Favoritos;
DROP TABLE Proforma;
DROP TABLE Review;
DROP TABLE Cliente;
DROP TABLE Producto;
DROP TABLE Emprendimiento;
DROP TABLE Subcategoria;
DROP TABLE Categoria;

/*==============================================================*/
/* TABLAS                                                       */
/*==============================================================*/

CREATE TABLE Categoria(
    ID_Categoria INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Descripcion VARCHAR(250) NOT NULL
)ENGINE=INNODB;


CREATE TABLE Subcategoria(
    ID_Subcategoria INT AUTO_INCREMENT PRIMARY KEY,
    ID_Categoria INT NOT NULL,
    Nombre VARCHAR(30) NOT NULL,
    Descripcion VARCHAR(250) NOT NULL,

 CONSTRAINT fk_ID_Categoria FOREIGN KEY (ID_Categoria)
        REFERENCES Categoria(ID_Categoria)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
)ENGINE=INNODB;


CREATE TABLE Emprendimiento(
    ID_Emprendimiento INT AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar(30) not null,
    Usuario varchar(30) not null,
    Email varchar(50) not null,
    Celular varchar(20) not null,
    Contrasena varchar(500) not null,
    Departamento varchar(20) not null,
    Direccion varchar(70) not null,
    Logo varchar(500) not null,
    Fecha_Creacion date not null,
    URL_WEB varchar(500) ,
    URL_Facebook varchar(500) ,
    URL_Instagram varchar(500) ,
    URL_Otros varchar(500) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


CREATE TABLE Producto(
    ID_Producto INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Precio NUMERIC(6) NOT NULL,
    Descripcion VARCHAR(500) NOT NULL,
    ID_Categoria INT NOT NULL,
    ID_Subcategoria INT NOT NULL,
    Descuento NUMERIC(1),
    Fecha DATE NOT NULL,
    ID_Emprendimiento INT NOT NULL,
    Disponibilidad TINYINT(1) NOT NULL,
    Foto_Secundaria1 VARCHAR(500) NOT NULL,
    Foto_Secundaria2 VARCHAR(500) NOT NULL,
    Foto_Secundaria3 VARCHAR(500) NOT NULL,
    
    CONSTRAINT pk_ID_Categoria2 FOREIGN KEY (ID_Categoria)
        REFERENCES Categoria(ID_Categoria)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    CONSTRAINT pk_ID_Subcategoria2 FOREIGN KEY (ID_Subcategoria)
        REFERENCES Subcategoria(ID_Subcategoria)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT,
    CONSTRAINT pk_ID_Emprendimiento FOREIGN KEY (ID_Emprendimiento)
        REFERENCES Emprendimiento(ID_Emprendimiento)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
)ENGINE=INNODB;

CREATE TABLE Cliente(
    ID_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombres varchar(20) not null,
    Apellidos varchar(20) not null,
    Email varchar(40) not null,
    Celular varchar(9) not null,
    Contraseña varchar(500) not null,
    Departamento varchar(20) not null,
    Usuario varchar(20) not null,
    DNI varchar(100) not null,
    Fecha_Creacion date not null,
    Foto_Perfil varchar(100) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE Lista_Favoritos(
ID_Lista_Favoritos INT AUTO_INCREMENT PRIMARY KEY,
ID_Cliente INT NOT NULL,
ID_Producto INT NOT NULL,
Fecha DATE ,

CONSTRAINT pk_ID_Cliente2 FOREIGN KEY (ID_Cliente)
REFERENCES Cliente(ID_Cliente)
ON DELETE RESTRICT
ON UPDATE RESTRICT,

CONSTRAINT pk_ID_Producto2 FOREIGN KEY (ID_Producto)
REFERENCES Producto(ID_Producto)
ON DELETE CASCADE
ON UPDATE RESTRICT
)ENGINE=INNODB;

CREATE TABLE Proforma(
ID_Proforma INT AUTO_INCREMENT PRIMARY KEY,
ID_Cliente INT NOT NULL,
ID_Producto INT NOT NULL,
Cantidad INT NOT NULL,
Fecha DATE NOT NULL,

CONSTRAINT pk_ID_Cliente3 FOREIGN KEY (ID_Cliente)
REFERENCES Cliente(ID_Cliente)
ON DELETE RESTRICT
ON UPDATE RESTRICT,

CONSTRAINT pk_ID_Producto3 FOREIGN KEY (ID_Producto)
REFERENCES Producto(ID_Producto)
ON DELETE CASCADE
ON UPDATE RESTRICT
)ENGINE=INNODB;

CREATE TABLE Review(
ID_Review INT AUTO_INCREMENT PRIMARY KEY,
ID_Cliente INT NOT NULL,
ID_Producto INT NOT NULL,
Estado INT NOT NULL, /*0=pendiente, 1=compro*/
Comentario VARCHAR(200) ,
Fecha DATE ,

CONSTRAINT pk_ID_Cliente4 FOREIGN KEY (ID_Cliente)
REFERENCES Cliente(ID_Cliente)
ON DELETE RESTRICT
ON UPDATE RESTRICT,

CONSTRAINT pk_ID_Producto4 FOREIGN KEY (ID_Producto)
REFERENCES Producto(ID_Producto)
ON UPDATE RESTRICT
ON DELETE CASCADE
)ENGINE=INNODB;







/*==============================================================*/
/* INSERTS                                                      */
/*==============================================================*/

/*===============================*/
/* INSERTS - CATEGORIA           */
/*===============================*/

INSERT INTO categoria  (ID_Categoria, Nombre, Descripcion) VALUES (1, 'Hogar y Decoración', 'En esta categoría se encuentran hogar desde mantas, alfombras, utensilios, entre otros; por otro lado en decoración lo que son juguetes hasta manualidades en general.');

INSERT INTO categoria  (ID_Categoria, Nombre, Descripcion) VALUES (2, 'Bebidas', 'En esta categoría se encuentra bebidas alcohólicas artesanales como vino o pisco entre otros como el cafe.');

INSERT INTO categoria (ID_Categoria, Nombre, Descripcion) VALUES (3, 'Alimentos', 'En esta categoría se encuentran productos comestibles naturales y procesados; por ejemplo verduras, frutas, bebidas, lácteos, carnes, alimentos orgánico, cacao y derivados, café, etc.');

INSERT INTO categoria (ID_Categoria, Nombre, Descripcion) VALUES (4, 'Moda y Accesorios', 'Esta categoría engloba prendas de vestir, ropa interior, sombreros, pulseras, joyería, souvenirs, etc. Todo ello elaborado de manera artesanal.');

/*===============================*/
/* INSERTS - SUBCATEGORIA        */
/*===============================*/

INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (1, 1,'Utensilios de cocina','Cubiertos, tazas, entre otros utensilios.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (2, 1,'Decoración','Pinturas, cuadros, entre otros.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (3, 1,'Joyería','Pulseras, anillos, collares, entre otros. ');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (4, 1,'Jardinería','Herramientas de jardineria y productos florales.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (5, 2,'Piscos','Variedad de Piscos en sabor y añejado.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (6, 2,'Vinos','Variedad de Vinos en sabor y añejamiento.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (7, 2,'Cafes','Café de todo tipo de textura, sabor y precio.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (8, 2,'Infusiones','Tés naturales y de todo tipo.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (9, 3,'Quesos ','Diferentes tipos de queso y precios.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (10, 3,'Yogurts','Yogurts naturales.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (11, 3,'Chocolates','Chocolate con mayor porcentaje de cacao.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (12, 3,'Verduras','Verduras de temporada y naturales.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (13, 3,'Frutas','Frutas de temporada y naturales.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (14, 3,'Alimentos orgánicos','alimentos complementarios naturales');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (15, 3,'Snacks','Cereales para cualquier tipo de ocasión.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (16, 4,'Carteras, bolsos y accesorios','Mayormente de cuero, de todo precio.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (17, 4,'Textil decorativo','Cojines, Alfombras y todo tipo de decoración en casa.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (18, 4,'Cómputo y de Escritorio','Accesorios para laptops, mouse, etc.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (19, 4,'Complementos','Accesorios para lentes, etc.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (20, 4,'Gorros y sombreros','Gorros y sombreros de temporada.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (21, 4,'Calzados','Zapatos, sandalias, zapatillas, entre otros.');
INSERT INTO Subcategoria (ID_Subcategoria, ID_Categoria, Nombre, Descripcion) VALUES (22, 4,'Bufandas y pashminas','Pashminas para cualquier tipo de ocasión y temporada.');


/*===============================*/
/* INSERTS - EMPRENDIMIENTO      */
/*===============================*/

/*===============================*/
/* con el id incorporado al value*/
/*===============================*/

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (1,'Pisco Brujas de Cayango','Pisbca','ventas1@brujasdecayango.com','919446170','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Ica','La casa del Barman y otras Tiendas Especializadas','logo_1.png','2013/05/01','https://brujasdecayango.com/','https://www.facebook.com/brujasdecayango','https://www.instagram.com/brujasdecayango/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (2,'Floralp','Florp','jduarte@floralpperu.com','944243242','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Pasco','Barrio Nueva Florida s/n','logo_2.png','1997/02/15','http://www.floralpperu.com/ct/ct','https://www.facebook.com/floralperu/','','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (3,'Sophie Ottanêr','Sophio','contact@ottanercorp.com','991880729','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Lima','logo_3.png','2017/10/09','https://www.sophieottaner.com/','https://www.facebook.com/SophieOttaner/','https://www.instagram.com/sophieottaner/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (4,'Killafibers','Killafib','admi.killafibers@gmail.com','930586470','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Tienda Vernácula. Sede Jockey Plaza.','logo_4.png','2019/11/12','https://killafibers.com/','https://www.facebook.com/killafibers','https://www.instagram.com/killafibers/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (5,'Cafe Compadre','Cafecom','pepe@compadre.pe','972551763','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Calle 30, n 205, San Borja, Lima Perú (Solo punto de recojo)','logo_5.png','2012/05/17','https://compadre.pe/','https://www.facebook.com/cafecompadre/','','https://compadre.pe/?source=EconomiaVerde');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (6,'La Clotilde','Laclot','info@laclotilde.pe','(511)958962183','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Lima','logo_6.png','2017/12/19','','https://www.facebook.com/laclotilde.pe','https://www.instagram.com/laclotilde.pe/','https://www.linkedin.com/company/la-clotilde/?originalSubdomain=pe');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (7,'Valle y Pampa Perú','Vainf','info@valleypampa.com','(01)7110691','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Ica','Carretera Panamericana Sur Km 245, Humay, Pisco','logo_7.png','2019/10/08','http://www.valleypampa.com/es/home.html','https://www.facebook.com/valleypampa/','','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (8,'Majnu','Maana','anabelenfernun@gmail.com','968800520','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Loreto','Sede Lima','logo_8.png','2019/08/10','','https://www.facebook.com/MajnuPeru','https://www.instagram.com/majnu_peru/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (9,'Bolsos Ecológicos del Perú','Booven','ventas@bolsoseco.com','994048717','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Lima','logo_9.png','2018/06/14','https://www.bolsoseco.com/','','','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (10,'Bella Aborigen','Behol','hola@bellaaborigen.com','993271937','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Ayacucho','Sede Rambla San Borja, Lima','logo_10.png','2015/06/17','www.bellaaborigen.com','https://www.facebook.com/bellaaborigen','https://www.instagram.com/bella_aborigen/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (11,'Candor Joyería','Cahol','hola@candor.pe','995802863','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Lima','logo_11.png','2018/06/17','https://www.candor.pe/','https://www.facebook.com/candorjoyeria/','https://www.instagram.com/candorjoyeria/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (12,'Curaca Amazonian Art','Curacaart','curacaamazonianart@gmail.com','950231139','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Loreto','Requena 180, Iquitos 16002','logo_12.png','2020/12/05','https://www.etsy.com/es/shop/CuracaAmazonianArt','https://www.facebook.com/profile.php?id=100064552727739','https://www.instagram.com/curaca_amazonian_art/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (13,'Bayas Peruanas','Bayaper','bayasperuanas@gmail.com','970947621','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Huanuco','Huandobamba 10420 Huando Bamba, Peru','logo_13.png','2018/02/21','','https://www.facebook.com/bayasperuanas/?ref=settings&_rdc=1&_rdr','https://www.instagram.com/bayasperuanas/','');	

INSERT INTO Emprendimiento (ID_Emprendimiento, Nombre, Usuario, Email, Celular, Contrasena, Departamento, Direccion, Logo, Fecha_Creacion, URL_WEB, URL_Facebook, URL_Instagram, URL_Otros) VALUES (14,'Wasi Organics','Wasior','info@wasiorganics.com','5117131748','$2y$10$kD8kbcyXoAegJTW0cS1A8Odq9/chuQOEprgjb/FatkdEXIeKmk8tC','Lima','Los Tapiceros 179, Ate 15023','logo_14.png','2020/08/18','https://www.wasiorganics.com/','https://www.facebook.com/WasiOrganics/','https://www.instagram.com/wasi_organics/','');	

/*===============================*/
/* INSERTS - PRODUCTO            */
/*===============================*/

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cartera Dianella 3',320,'Cartera que combina Fieltro (40% lana de Alpaca y 60% lana de Ovino) con asas de cuero vacuno.',4,16,0,'2021/03/26',3,1,'Foto_Secundaria1_1.png','Foto_Secundaria2_1.png','Foto_Secundaria3_1.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cojín Uña de Gato',520,'Cojín realizado con fieltro de 40% de fibra Alpaca y 60% de fibra de Ovino. ',4,17,0,'2021/08/27',3,1,'Foto_Secundaria1_2.png','Foto_Secundaria2_2.png','Foto_Secundaria3_2.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Porta laptop',440,'Parte posterior en 100% cuero vacuno.',4,18,0,'2021/07/15',3,1,'Foto_Secundaria1_3.png','Foto_Secundaria2_3.png','Foto_Secundaria3_3.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Alfombra Ayni',310,'Alfombras tejidas a mano, a base de lana de oveja y alpaca, teñida con tintes naturales desde Cusco Perú.',1,17,0,'2021/10/01',4,1,'Foto_Secundaria1_4.png','Foto_Secundaria2_4.png','Foto_Secundaria3_4.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Funda de Cojín Floresta Inti',42,'Decora tu hogar con una pieza que trasciende técnicas andinas y teñidos naturales. Todas las piezas son únicas y exclusivas para exhibirlas en tu sala o dormitorio.',1,17,0,'2022/01/02',4,1,'Foto_Secundaria1_5.png','Foto_Secundaria2_5.png','Foto_Secundaria3_5.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Porta lentes Ray 06',85,'Portalentes 100% cuero vacuno, con interiores en fina tela de color rojo y diseño exclusivo Sophie Ottanêr. Este producto tiene compartimento para billetes pero no tiene monedero ni porta documentos.',4,19,0,'2021/03/16',3,1,'Foto_Secundaria1_6.png','Foto_Secundaria2_6.png','Foto_Secundaria3_6.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('MousePad Antar 010',45,'Mousepad de fieltro 25% fibra de alpaca y 75% lana de ovino',4,18,0,'2022/02/14',3,1,'Foto_Secundaria1_7.png','Foto_Secundaria2_7.png','Foto_Secundaria3_7.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Sombrero Aspen 04 - Burdeos',180,'Sombrero de fieltro hecho a mano. Composición: 100% lana de ovino',4,20,0,'2021/07/18',3,1,'Foto_Secundaria1_8.png','Foto_Secundaria2_8.png','Foto_Secundaria3_8.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Porta tablet Kander 01',175,'Porta tablet que combina Fieltro, 40% lana de alpaca y 60% lana de ovino, con accesorio de cuero vacuno. Diseño original Sophie Ottanêr.',4,18,0,'2021/07/15',3,1,'Foto_Secundaria1_9.png','Foto_Secundaria2_9.png','Foto_Secundaria3_9.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Pisco Achotado 6 cepas',50,'En las tierras cálidas de Ocucaje - Ica, al pie del enigmático “Cerro Las Brujas” en Cayango, con uvas seleccionadas de nuestro propio viñedo, es producido y elaborado nuestro Pisco Acholado, con 6 cepas, Quebranta, Mollar, Torontel, Italia, Moscatel y Albilla para Rolando Ancevalle H.RUC 10107104343, en la Bodega “Mi Viejo” de Don Daniel Acevedo Pérez',2,5,0,'2022/01/29',1,1,'Foto_Secundaria1_10.png','Foto_Secundaria2_10.png','Foto_Secundaria3_10.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Pisco Puro Torontel',45,'Este Pisco aromático es elaborado de uvas seleccionadas Torontel de nuestros propios viñedos, en la Bodega “Mi Viejo” de Don Daniel Acevedo Pérez.',2,5,0,'2021/11/17',1,1,'Foto_Secundaria1_11.png','Foto_Secundaria2_11.png','Foto_Secundaria3_11.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Pisco Mosto verde Torontel',45,'Este Pisco aromático es elaborado de uvas seleccionadas Italia de nuestros propios viñedos, en la Bodega “Mi Viejo” de Don Daniel Acevedo Pérez.',2,5,0,'2021/11/18',1,1,'Foto_Secundaria1_12.png','Foto_Secundaria2_12.png','Foto_Secundaria3_12.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Vino Borgoña',60,'Vino elaborado con uvas Borgoña, más conocido como Concord. De color intenso, finos aromas a frutas, limpio y brillante, muy agradable a la boca.',2,6,0,'2021/06/26',1,1,'Foto_Secundaria1_13.png','Foto_Secundaria2_13.png','Foto_Secundaria3_13.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Vino Tinto',60,'Vino elaborado con uvas Quebranta. De color rojo intenso, aromas a frutas rojas, muy sutil, con sabor a miel, ligeramente cítrico.',2,6,0,'2021/07/15',1,1,'Foto_Secundaria1_14.png','Foto_Secundaria2_14.png','Foto_Secundaria3_14.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Vino Rosé',60,'Vino elaborado con uvas Quebranta y Torontel. De color rojo fresa, finos aromas a frutas, ligeramente dulce, suave y equilibrado, muy agradable a la boca.',2,6,0,'2021/07/24',1,1,'Foto_Secundaria1_15.png','Foto_Secundaria2_15.png','Foto_Secundaria3_15.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Sombrero Yllami',85,'Lleva un accesorio único para tu siguiente aventura. Sombrero a base de paño de oveja, ligero y Perfecto para cualquier clima.',4,20,0,'2021/03/01',4,1,'Foto_Secundaria1_16.png','Foto_Secundaria2_16.png','Foto_Secundaria3_16.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cinta de Sombrero Samin',10,'Cambia todo el estilo tu sombrero llevando estas hermosas cintas, todas son tejidas a mano y la fibra es de alpaca peruana. Luche con orgullo el arte andino.',4,20,0,'2021/07/01',4,1,'Foto_Secundaria1_17.png','Foto_Secundaria2_17.png','Foto_Secundaria3_17.png');
	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Crossbody Yllariy Miluska',73,'Una hermosa colección realizada por la Familia Suclly de Cusco. Luce detalles 🇵🇪 hechos con amor en una pieza de arte textil.',4,16,0,'2021/05/26',4,1,'Foto_Secundaria1_18.png','Foto_Secundaria2_18.png','Foto_Secundaria3_18.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Crossbody Yllariy Rosalinda',73,'Una hermosa colección realizada por la Familia Suclly de Cusco. Luce detalles 🇵🇪 hechos con amor en una pieza de arte textil.',4,16,0,'2021/12/23',4,1,'Foto_Secundaria1_19.png','Foto_Secundaria2_19.png','Foto_Secundaria3_19.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Portalaptop Killa',110,'Porta laptop hecho con telares andinos tejidos a base de lana de oveja.',4,18,0,'2021/03/24',4,1,'Foto_Secundaria1_20.png','Foto_Secundaria2_20.png','Foto_Secundaria3_20.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Alfombra Inti',310,'Alfombras tejidas a mano, a base de lana de oveja y alpaca, teñida con tintes naturales desde Cusco Perú.',1,17,0,'2021/11/05',4,1,'Foto_Secundaria1_21.png','Foto_Secundaria2_21.png','Foto_Secundaria3_21.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cheedar 500g',30,'Queso madurado de pasta semidura de color naranja, y totalmente cerrada, elaborado con leche pasteurizada de vaca',3,9,0,'2022/01/10',2,1,'Foto_Secundaria1_22.png','Foto_Secundaria2_22.png','Foto_Secundaria3_22.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Parmesano Molde',45,'Queso maduro de pasta dura, elaborado con leche pasteurizada de vaca',3,9,0,'2021/08/09',2,1,'Foto_Secundaria1_23.png','Foto_Secundaria2_23.png','Foto_Secundaria3_23.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Camembert Molde',65,'Queso semimaduro que se caracteriza por el desarrollo de un hongo blanco comestible en su superficie',3,9,0,'2021/06/13',2,1,'Foto_Secundaria1_24.png','Foto_Secundaria2_24.png','Foto_Secundaria3_24.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Brie Extramaduro x 180g',90,'Queso semimaduro añejado que se caracteriza por el desarrollo de un hongo blanco comestible en su superficie',3,9,0,'2022/02/09',2,1,'Foto_Secundaria1_25.png','Foto_Secundaria2_25.png','Foto_Secundaria3_25.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Yogurt Gourmet Naranja del Dia x 500ml',50,'Elaborado con leche descremada pasteurizada de vaca, mezcla de frutos deshidratados, flores y hierbas aromáticas',3,10,0,'2021/07/30',2,1,'Foto_Secundaria1_26.png','Foto_Secundaria2_26.png','Foto_Secundaria3_26.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Yogurt Gourmet Felicidad con las Frutas del Bosque x 500ml',50,'Elaborado con leche descremada pasteurizada de vaca, mezcla de frutos deshidratados, flores y hierbas aromáticas',3,10,0,'2021/03/14',2,1,'Foto_Secundaria1_27.png','Foto_Secundaria2_27.png','Foto_Secundaria3_27.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Chocolate artesanal 85% cacao',25,'Un delicioso chocolate oscuro hecho a mano con un alto contenido de cacao, perfecto para los amantes del chocolate amargo.',3,11,0.28,'2022/10/06',5,1,'Foto_Secundaria1_28.png','Foto_Secundaria2_28.png','Foto_Secundaria3_28.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Barra de chocolate 50g',45054,'Una barra de chocolate del tamaño perfecto para disfrutar como un snack o para agregar a tus recetas de repostería favoritas.',3,11,0,'2022/10/09',5,1,'Foto_Secundaria1_29.png','Foto_Secundaria2_29.png','Foto_Secundaria3_29.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Prensa Francesa Bodum Java 350 ml Negra',110,'Una prensa francesa de alta calidad, ideal para preparar café fresco y aromático en casa.',1,1,0.1,'2021/10/04',5,1,'Foto_Secundaria1_30.png','Foto_Secundaria2_30.png','Foto_Secundaria3_30.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Taza Alegre',25,'Una taza alegre y colorida que alegrará tus mañanas con su diseño vibrante.',1,1,0,'2022/05/13',5,1,'Foto_Secundaria1_31.png','Foto_Secundaria2_31.png','Foto_Secundaria3_31.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Taza Abrazo',85,'Una taza con un mensaje cariñoso, perfecta para regalar a alguien especial o para disfrutar de una bebida reconfortante.',1,1,0,'2021/06/20',5,1,'Foto_Secundaria1_32.png','Foto_Secundaria2_32.png','Foto_Secundaria3_32.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolsa 250g Sabroso',30,'Un café de sabor suave y equilibrado, perfecto para disfrutar en cualquier momento del día.',2,7,0,'2020/12/01',5,1,'Foto_Secundaria1_33.png','Foto_Secundaria2_33.png','Foto_Secundaria3_33.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolsa 150g Fuerte',20,'Un café fuerte y robusto, ideal para aquellos que prefieren un sabor intenso y energizante.',2,7,0,'2023/01/21',5,1,'Foto_Secundaria1_34.png','Foto_Secundaria2_34.png','Foto_Secundaria3_34.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Dúo Fuerte',50,'Una combinación de dos variedades de café fuerte y robusto, perfecta para aquellos que buscan una experiencia de café aún más intensa.',2,7,0.1,'2022/06/30',5,1,'Foto_Secundaria1_35.png','Foto_Secundaria2_35.png','Foto_Secundaria3_35.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Catalina Infusión Energizante',46.5,'Infusión energizante. Composición: Base de té negro cusqueño, berries y mix floral. Medidas de Producto: Rinde aprox 25 tazas de infusión.',2,8,0,'2023/02/10',6,1,'Foto_Secundaria1_36.png','Foto_Secundaria2_36.png','Foto_Secundaria3_36.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Milagrosa Infusión Antioxidante',46.5,'Infusión antioxidante. Composición: Flor de jamaica, membrillo, perilla, maíz morado y mix de especies. Medidas de Producto: Rinde aprox 25 tazas de infusión.',2,8,0,'2022/01/17',6,1,'Foto_Secundaria1_37.png','Foto_Secundaria2_37.png','Foto_Secundaria3_37.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Niña Norteña Infusión Que Quema Grasa',46.5,'Infusión que aumenta la temperatura del cuerpo, acelarando el metabolismo. Quema grasa. Composición: Base de té verde cusqueño, cúrcuma y cítricos. Medidas de Producto: Rinde aprox 25 tazas de infusión.',2,8,0,'2021/07/28',6,1,'Foto_Secundaria1_38.png','Foto_Secundaria2_38.png','Foto_Secundaria3_38.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Monja Infusión Que Regula el Colesterol',46.5,'Infusión que regula el colesterol. Composición: Berries, mix cítrico y flor de jamaica. Medidas de Producto: Rinde aprox 25 tazas de infusión.',2,8,0,'2021/10/10',6,1,'Foto_Secundaria1_39.png','Foto_Secundaria2_39.png','Foto_Secundaria3_39.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Perezosa Detox Infusión antioxidante y diurética',46.5,'Infusión antioxidante y diuretica. Elimina toxinas y depura. Composición: Base de té verde cusqueño, flor de jamaica y manzanilla. Medidas de Producto: Rinde aprox 25 tazas de infusión. Cómo Preparar la Infusión: Se necesita una cucharita y media de infusión para preparar una taza. Agregar agua caliente.Dejar reposar de 7-10mins.',2,8,0,'2020/06/28',6,1,'Foto_Secundaria1_40.png','Foto_Secundaria2_40.png','Foto_Secundaria3_40.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Durmiente Infusión Para Descanso y Sueño Profundo',46.5,'Infusión para descanso y sueño profundo. Composición: Mix de flores,hierbas andinas y plantas medicinales. Medidas de Producto: Rinde aprox 25 tazas de infusión. Cómo Preparar la Infusión: Se necesita una cucharita y media de infusión para preparar una taza. Agregar agua caliente.Dejar reposar de 7-10mins.',2,8,0,'2022/04/29',6,1,'Foto_Secundaria1_41.png','Foto_Secundaria2_41.png','Foto_Secundaria3_41.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('La Ñusta Serrana Infusión Antiinflamatoria Alivia Cólicos y Mareos',46.5,'Infusión antiinflamatoria. Alivia colicos y mareos. Composición: Muña, canela y fresa. Medidas de Producto: Rinde aprox 25 tazas de infusión.',2,8,0,'2022/06/26',6,1,'Foto_Secundaria1_42.png','Foto_Secundaria2_42.png','Foto_Secundaria3_42.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Espárrago Verde',12,'Su valor nutricional superior y su excelente sabor hacen del espárrago una hortaliza muy apreciada por el consumidor. En particular, el espárrago peruano goza de una excelente reputación de calidad y consistencia, tanto en la fortaleza del producto como en la flexibilidad de su temporada.',3,12,0,'2020/11/24',7,0,'Foto_Secundaria1_43.png','Foto_Secundaria2_43.png','Foto_Secundaria3_43.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Granada',18,'Las granadas RubyQueen son cultivadas, seleccionadas y empacadas con extremo cuidado para garantizar que nuestros clientes reciban consistentemente un producto fresco, de óptima calidad y sostenible. Gracias a ello, RubyQueen ya cuenta con una sólida reputación en el mercado de frutas frescas.',3,13,0,'2021/10/28',7,0,'Foto_Secundaria1_44.png','Foto_Secundaria2_44.png','Foto_Secundaria3_44.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Arándanos',15,'El arándano está a la cabeza de la categoría de las Superfrutas, por ser la fruta con el mayor contenido de anitoxidantes, por lo que es muy apreciada por los consumidores. Existen gran cantidad de estudios que relacionan el consumo del arándano con menores incidencias o solución de gran número de problemas de salud.',3,13,0,'2022/12/19',7,0,'Foto_Secundaria1_45.png','Foto_Secundaria2_45.png','Foto_Secundaria3_45.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Sandalias Colección "Étnica" a colores',90,'Sandalias elaboradas totalmente a mano en fibra vegetal amazónica, teñido con tintes naturales. Súper cómodas con suela antideslizante y pequeño taco',4,21,0,'2023/01/22',8,1,'Foto_Secundaria1_46.png','Foto_Secundaria2_46.png','Foto_Secundaria3_46.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Ángeles de Amor modelo "Alas Caídas"',250,'Alas decorativas, tallado y pintado a mano en madera amazónica (balsa). Medida de ala=62x20cm. Medida del corazon=18x20cm',1,2,0.2,'2021/11/16',8,1,'Foto_Secundaria1_47.png','Foto_Secundaria2_47.png','Foto_Secundaria3_47.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cartera "IPANI"',190,'Cartera de mano confeccionado en fibra vegetal amazónica. Con asas de madera, forro con bolsillo y cierre en el interior. Teñido con tintes vegetales',4,16,0,'2022/03/31',8,1,'Foto_Secundaria1_48.png','Foto_Secundaria2_48.png','Foto_Secundaria3_48.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Aretes Colección "Selva"',50,'Aretes confeccionado totalmente a mano en fibra vegetal de chambira, teñido con tintes vegetales. Sujetadores en acero o madera. Súper livianos que te harán lucir naturalmente hermosa.',4,3,0,'2022/12/29',8,1,'Foto_Secundaria1_49.png','Foto_Secundaria2_49.png','Foto_Secundaria3_49.png');	


/*===============================*/


INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cuadros Animales Amazónicos',165,'Nuestra amazonia llena de color y esplendor plasmados en cuadros de 40x40cm. Trabajado en madera, texturado y pintado a mano. Un lindo detalle para decorar tú espacio ideal.',1,2,0,'2022/10/02',8,1,'Foto_Secundaria1_50.png','Foto_Secundaria2_50.png','Foto_Secundaria3_50.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cuadros Paisajes Amazónicos',190,'Hermosos cuadros pintados a mano en madera. Medida de 40x40 cm.',1,2,0,'2022/07/31',8,1,'Foto_Secundaria1_51.png','Foto_Secundaria2_51.png','Foto_Secundaria3_51.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cartera Colección "Flora" modelo Circular',170,'Cartera de la colección "Flora". Confeccionado totalmente a mano en fibra vegetal amazónica. Teñido con tintes naturales. Consta con forro y bolsillos con cierres en el interior. Asas de bambú. Forma circular. Medida de 30x30cm.',4,2,0,'2022/12/18',8,1,'Foto_Secundaria1_52.png','Foto_Secundaria2_52.png','Foto_Secundaria3_52.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolso Troquelado',55,'Material: Ekotex. ​32x40 cm. 7 Botellas se reciclaron para rehacer estos bolsos ecológicos',4,16,0,'2021/10/02',9,0,'Foto_Secundaria1_53.png','Foto_Secundaria2_53.png','Foto_Secundaria3_53.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolso 12 con Fuelle',59,'Material: Ekotex. Tamaño: 32 alto x 38 ancho x 5 base. Cantidad de botellas: 12 Botellas',4,16,0,'2022/10/12',9,0,'Foto_Secundaria1_54.png','Foto_Secundaria2_54.png','Foto_Secundaria3_54.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolso mochila 10',68,'Material: Ekotex. Tamaño: 38x35. Cantidad de botellas: 7 Botellas',4,16,0,'2020/07/02',9,0,'Foto_Secundaria1_55.png','Foto_Secundaria2_55.png','Foto_Secundaria3_55.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bolso de Luxe 16 con con fuelle',61,'Material: Ekotex. Tamaño: 38 x 38 x11. Cantidad de botellas: 16 Botellas.',4,16,0,'2021/06/28',9,0,'Foto_Secundaria1_56.png','Foto_Secundaria2_56.png','Foto_Secundaria3_56.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Eco Maceta',62,'Kit de pequeñas macetas',1,4,0,'2022/04/14',9,0,'Foto_Secundaria1_57.png','Foto_Secundaria2_57.png','Foto_Secundaria3_57.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Passport Cases',59,'Cream and navy blue pima cotton loom, handmade in Ayacucho',4,16,0,'2021/10/16',10,0,'Foto_Secundaria1_58.png','Foto_Secundaria2_58.png','Foto_Secundaria3_58.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Aretes Atrapasueño',29,'100% pima cotton/ stainless steel hook earring',4,3,0.25,'2022/07/12',10,1,'Foto_Secundaria1_59.png','Foto_Secundaria2_59.png','Foto_Secundaria3_59.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bucket Hat Yana',65,'100% Peruvian Cotton Textile fabric: drill. 100% Embroidered of Peruvian pima cotton. Embroidered by Stephanie from Ayacucho. Measures, 36cm diametro total x profundidad 8cm x Circunferencia de cabeza : medida 54cm ( talla S)',4,20,0.1,'2022/08/19',10,0,'Foto_Secundaria1_60.png','Foto_Secundaria2_60.png','Foto_Secundaria3_60.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Corazón bordado celeste, con pompón',17,'Light Blue Embroidery Hearts. 100% Handmade with peruvian love. Felt and wool decorative pendant',1,17,0,'2021/04/30',10,1,'Foto_Secundaria1_61.png','Foto_Secundaria2_61.png','Foto_Secundaria3_61.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bufanda Festival Coral',75,'Festival Pacay Scarf – Bufanda Festiva Pacay. Limited Edition. Material: fibras alpaca, algodón tanguis y pet reciclado',4,22,0.15,'2022/09/20',10,1,'Foto_Secundaria1_62.png','Foto_Secundaria2_62.png','Foto_Secundaria3_62.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Corona de laurel',39,'Diadema Aide – Handmade Embroidered Floral Headbans. 100% bordado por Aide en Ayacucho – Perú, en fibras de algodón pima. Punto de bordado ayacuchano: relleno y cadena',4,20,0.18,'2021/07/08',10,1,'Foto_Secundaria1_63.png','Foto_Secundaria2_63.png','Foto_Secundaria3_63.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('7Picos',160,'Dije de plata 925 con pita de algodón Pima y terminación de plata con doble tubo para regular largo.',1,3,0,'2021/06/28',11,1,'Foto_Secundaria1_64.png','Foto_Secundaria2_64.png','Foto_Secundaria3_64.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Asa Estribo',120,'Dije de plata 925.',1,3,0,'2021/06/17',11,1,'Foto_Secundaria1_65.png','Foto_Secundaria2_65.png','Foto_Secundaria3_65.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('3Picos',145,'Par de argollas de plata con 3 picos, 2,5cm de diámetro.',1,3,0,'2021/05/04',11,1,'Foto_Secundaria1_66.png','Foto_Secundaria2_66.png','Foto_Secundaria3_66.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('7Picos',130,'Prendedor de plata 925, 4,5cm de diámetro aprox.',1,3,0,'2021/11/11',11,1,'Foto_Secundaria1_67.png','Foto_Secundaria2_67.png','Foto_Secundaria3_67.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Almendra',205,'Cadena y dije de plata 925.',1,3,0,'2021/06/15',11,1,'Foto_Secundaria1_68.png','Foto_Secundaria2_68.png','Foto_Secundaria3_68.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Feather pendant necklace',768,'Pluma de Crax globulosa, mini escultura portátil, arte artesanal tallado en madera hecho a mano en palo cruz de la selva amazónica. Diseño exclusivo absolutamente único. Inspirado en Crax globulosa pájaro de la selva amazónica',4,2,0,'2021/04/11',12,1,'Foto_Secundaria1_69.png','Foto_Secundaria2_69.png','Foto_Secundaria3_69.png');

/*===============================*/

	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('owl pendant',614.4,'Collar con colgante de buho joyería de diseño peruano con propósito joyería de madera hecha en Perú.',1,2,0,'2021/11/14',12,1,'Foto_Secundaria1_70.png','Foto_Secundaria2_70.png','Foto_Secundaria3_70.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Amazonian tribal jewelry',768,'"Dama de las anacondas", es el primer colgante tallado a mano en madera de cumaceba.',1,2,0,'2021/12/08',12,1,'Foto_Secundaria1_71.png','Foto_Secundaria2_71.png','Foto_Secundaria3_71.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Tribal necklace ticuna ',768,'"Dama de las anacondas", es el primer colgante tallado a mano en madera de cumaceba. ',1,2,0,'2021/12/05',12,1,'Foto_Secundaria1_72.png','Foto_Secundaria2_72.png','Foto_Secundaria3_72.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Owl spirit guide symbol ',768,' Es un búho, inspirado en Pulsatrix perspicillata, el búho de la selva amazónica.',1,2,0,'2022/01/13',12,1,'Foto_Secundaria1_73.png','Foto_Secundaria2_73.png','Foto_Secundaria3_73.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bayas Frescas',11,'Frambuesa, zarzamora y aguaymantos orgánicos frescos.',3,13,0,'2021/12/06',13,0,'Foto_Secundaria1_74.png','Foto_Secundaria2_74.png','Foto_Secundaria3_74.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Bayas deshidratadas',13,'Aguaymanto orgánico y arándanos silvestres deshidratados.',3,13,0,'2022/01/06',13,0,'Foto_Secundaria1_75.png','Foto_Secundaria2_75.png','Foto_Secundaria3_75.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Chips de maíz morado organico (quinoa + sesame)',20,'Snack a base de quinoa y sesame.',3,14,0,'2022/01/26',14,0,'Foto_Secundaria1_76.png','Foto_Secundaria2_76.png','Foto_Secundaria3_76.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Chips de maíz morado organico (peruvian chili + andean spices)',20,'Snack a base de peruvian chili y andean spices.',3,14,0,'2022/01/17',14,0,'Foto_Secundaria1_77.png','Foto_Secundaria2_77.png','Foto_Secundaria3_77.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Q sticks organicos de quinua y garbanzo con finas hierbas',23,'Snack a base de hierbas.',3,14,0,'2021/12/31',14,0,'Foto_Secundaria1_78.png','Foto_Secundaria2_78.png','Foto_Secundaria3_78.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Q sticks organicos de quinua y garbanzo con mix de ajíes',23,'Snack a base de mix de ajies.',3,14,0,'2021/09/09',14,0,'Foto_Secundaria1_79.png','Foto_Secundaria2_79.png','Foto_Secundaria3_79.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Oganic rainforest honey (brazil nuts + cacao nibs)',24,'Miel con brazil nuts y cacao nibs.',3,14,0,'2021/07/20',14,0,'Foto_Secundaria1_80.png','Foto_Secundaria2_80.png','Foto_Secundaria3_80.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Oganic rainforest honey (cold pressed)',24,'Miel cold pressed y organico.',3,14,0,'2021/03/03',14,0,'Foto_Secundaria1_81.png','Foto_Secundaria2_81.png','Foto_Secundaria3_81.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Granola de berries organicas',25,'Granola a base de berries, quinua y miel.',3,14,0,'2021/06/16',14,0,'Foto_Secundaria1_82.png','Foto_Secundaria2_82.png','Foto_Secundaria3_82.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Granola organica(pecanas + pasas + quinua + miel)',25,'Granola a base de pecanas, pasas, quinua y miel',3,14,0,'2022/01/29',14,0,'Foto_Secundaria1_83.png','Foto_Secundaria2_83.png','Foto_Secundaria3_83.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Cereal cacao organico',31,'Cereal expandido de quinua, arroz y cacao',3,14,0,'2021/09/29',14,0,'Foto_Secundaria1_84.png','Foto_Secundaria2_84.png','Foto_Secundaria3_84.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES (' Cereal maca y yacon',32,'Cereal expandido de quinua, kiwicha, arroz y maca con miel de yacón',3,15,0,'2021/10/21',14,0,'Foto_Secundaria1_85.png','Foto_Secundaria2_85.png','Foto_Secundaria3_85.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Ceramio Calcita Blanca',145,'Dije con cuerpo de piedra Calcita Blanca y ‘asa estribo’ de plata 925. No incluye cadena ni pita.',1,2,0,'2021/03/04',11,1,'Foto_Secundaria1_86.png','Foto_Secundaria2_86.png','Foto_Secundaria3_86.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Asa Estribo',135,'Par de argollas de plata 925 de 2,5cm de diámetro.',1,3,0,'2021/11/18',11,1,'Foto_Secundaria1_87.png','Foto_Secundaria2_87.png','Foto_Secundaria3_87.png');
	
INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Vicus',135,'Plata 925. No incluye cadena ni pita.',1,3,0,'2021/03/24',11,1,'Foto_Secundaria1_88.png','Foto_Secundaria2_88.png','Foto_Secundaria3_88.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Mar',170,'Plata 925. No incluye cadena ni pita.',1,3,0,'2021/05/31',11,1,'Foto_Secundaria1_89.png','Foto_Secundaria2_89.png','Foto_Secundaria3_89.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Ceramio Crisocola',145,'Dije con cuerpo de piedra Crisocola y ‘asa estribo’ de plata 925. No incluye cadena ni pita.',1,2,0,'2021/07/04',11,1,'Foto_Secundaria1_90.png','Foto_Secundaria2_90.png','Foto_Secundaria3_90.png');	

INSERT INTO Producto (Nombre,Precio,Descripcion,ID_Categoria,ID_Subcategoria,Descuento,Fecha,ID_Emprendimiento,Disponibilidad,Foto_Secundaria1,Foto_Secundaria2,Foto_Secundaria3) VALUES ('Oganic peanut butter (all natural + no added sugar)',23,'Mantequilla de mani sin azucar ',3,14,0,'2021/08/19',14,0,'Foto_Secundaria1_91.png','Foto_Secundaria2_91.png','Foto_Secundaria3_91.png');	


/*===============================*/
/* INSERTS - CLIENTE             */
/*===============================*/

INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Joy','Ferron','jferron2@imdb.com','957845000','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Lima','JoFer','45863255','19/12/22','fotoPerfil_1.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Laura','Smith','lausmith7@ow.ly','987654321','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Trujillo','LaSmi','75395236','24/12/22','fotoPerfil_2.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Asher','Bau','abau1@google.nl','988765432','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Arequipa','AsBau','41226253','8/01/23','fotoPerfil_3.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Hurlee','Casas','hcasas6@virginia.edu','988876543','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Huancayo','HuCas','45495221','29/01/23','fotoPerfil_4.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Brant','Kima','bkima8@phpbb.com','988887654','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ica','BrKim','52366932','30/01/23','fotoPerfil_5.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Janek','Oliva','jjoliva9@webs.com','977854632','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Cuzco','JaOli','32566523','14/12/22','fotoPerfil_6.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Allyn','Colombier','acolombierb@wp.com','977784563','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ayacucho','AlCol','59632142','11/12/22','fotoPerfil_7.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Dun','Hurtado','dunnhurt5@google.com','977784653','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ica','DuHur','63258852','22/12/22','fotoPerfil_8.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Ceil','Ramos','ceceramos1@outlook.com','977778654','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Junin','CeRam','42589658','28/11/22','fotoPerfil_9.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Trace','Flores','tflores99@gmail.com','967865432','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','LaLibertad','TrFlo','35364412','26/01/23','fotoPerfil_10.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Rubi','Garcia','rubiggarcia@outlook.com','966783241','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Loreto','RuGar','45823568','25/02/23','fotoPerfil_11.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Leslie','Benitez','leslibenitz5@outlook.com','966632421','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','MadredeDios','LeBen','27025325','24/11/22','fotoPerfil_12.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Paty','Huaman','patyhh86@gmail.com','988866655','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Puno','PaHua','54869934','23/12/22','fotoPerfil_13.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Jeremy','Diaz','jeremyyd7@outlook.com','986324785','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','SanMartin','JeDia','65471291','5/02/23','fotoPerfil_14.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Brian','Torres','btorres4@columbia.com','988657456','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Tacna','BrTor','36954866','14/02/23','fotoPerfil_15.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Oly','Perez','olyyp3@gmail.com','988776652','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Tumbes','OlPer','49630563','27/11/22','fotoPerfil_16.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Tom','Espinoza','tespinozz99@outlook.com','965248899','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ucayali','ToEsp','54789823','23/01/23','fotoPerfil_17.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Rodrigo','Chavez','rodrichaz8@outlook.com','955658756','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ayacucho','RoCha','25632486','28/11/22','fotoPerfil_18.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Mily','Castillo','milcast78@gmail.com','955562458','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Ica','MiCas','54793214','9/12/22','fotoPerfil_19.jpg');
INSERT INTO Cliente (Nombres, Apellidos, Email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES ('Mada','Rojas','madarojs9@outlook.com','955553687','$2y$10$ch6mKpEibANm6aTWuwg/muOvD9W1I6zRNdkpcHkbq44jthCi0e0/.','Junin','MaRoj','56935695','16/01/23','fotoPerfil_20.jpg');

/*===============================*/
/* INSERTS - LISTA_FAVORITOS     */
/*===============================*/

/*RENZO*/
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (3,1, '2022/10/23');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (4,3, '2022/09/15');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (1,19, '2022/05/10');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (6,9, '2021/12/28');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (2,1, '2022/11/12');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (1,5, '2022/10/01');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (3,8, '2022/10/20');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (5,18, '2022/07/14');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (6,4, '2021/12/31');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (5,17, '2022/08/16');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (1,6, '2022/10/10');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (1,20, '2022/10/08');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (6,16, '2021/12/30');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (4,21, '2022/09/11');


/*IVAN*/
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (8, 28, '2022/12/24');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 28, '2023/02/20');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 29, '2023/02/08');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 30, '2023/02/24');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (10, 30, '2023/02/01');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (11, 31, '2023/02/13');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (12, 32, '2023/02/04');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (13, 33, '2023/02/12');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (14, 34, '2023/01/08');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (8, 35, '2023/02/09');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 36, '2023/02/07');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (10, 37, '2023/01/31');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (11, 38, '2023/01/16');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (12, 39, '2023/01/11');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (13, 40, '2023/02/02');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (14, 41, '2023/02/04');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (8, 42, '2023/02/20');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (13, 43,'2023/02/04');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (12, 44, '2023/01/03');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (10, 45, '2023/02/14');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (11, 46, '2023/02/09');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 47, '2022/12/20');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (14, 48, '2023/02/21');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (8, 49, '2023/02/20');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9, 50, '2023/02/14');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (9,58, '2022/12/31');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (10,59, '2023/01/08');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (11,60, '2023/01/15');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (12,61, '2023/01/22');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (13,62, '2023/01/29');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (14,63, '2023/01/26');


/*YAN*/
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (15, 64, '2022/12/24');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (20, 91, '2023/02/07');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (16, 77, '2023/02/12');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (17, 81, '2023/02/15');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (19, 82, '2023/02/01');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (18, 83, '2023/02/05');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (20, 84, '2023/01/05');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (20, 85, '2023/02/04');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (16, 86, '2023/02/07');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (17, 87, '2023/01/30');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (18, 78, '2023/01/21');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (15, 79, '2023/01/14');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (19, 90, '2023/02/23');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (15, 91, '2023/02/12');
INSERT INTO LISTA_FAVORITOS (ID_Cliente, ID_Producto, Fecha) VALUES (18, 72, '2023/02/13');


/*===============================*/
/* INSERTS - PROFORMA            */
/*===============================*/

/*DE MOMENTO SE QUEDA VACIO*/

/*===============================*/
/* INSERTS - REVIEW              */
/*===============================*/

/*RENZO*/
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (3,1,1, 'Me encanta la versatilidad y su tamaño durante mis salidas con mis amigas', '2022/10/25');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (4,3,1, 'Lo amo, no imagino salir a mi trabajo sin mi portalaptop llamativo', '2022/09/16');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (1,19,1, 'La gama de colores me recuerdan a mi tierra, por eso siempre lo uso y es hermoso', '2022/05/13');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (6,9,1, 'Muy simple, osea es comodo si, pero no le veo la chispa de lo llamativo y andino', '2021/12/30');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (2,1,1, 'No me termina de convencer, agradeceria si tuvieran otros colores mas', '2022/11/13');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (1,5,1, 'Quieren sentirse como en un lugar especial? Esta alfombra cambia por completo mis reuniones', '2022/10/02');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (3,8,1, '', '2022/10/21');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (5,18,1, 'La parte del cinturon es lo que no me termina de convencer, pero en general es bueno', '2022/07/16');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (6,4,1, 'Muy comodo, le da otro aire a mi sala y es del agrado a la familia', '2022/01/02');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (5,17,1, 'A mi hijito le gusta y en su danzas le queda fenomenal', '2022/08/19');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (1,24,1, 'Si es tu primera vez probando camembert, quiza sea raro al inicio, pero te gustara', '2022/10/12');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (1,20,1, 'Bonita la combinacion de colores y diseños, tiene muchos compartimentos y es duradero', '2022/10/10');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (6,26,1, 'Una joyita, junto a un jamon o salsa de aguacate, y sin duda un manjar de reyes', '2021/12/31');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (4,24,1, 'Un manjar de los dioses, indispensable en mis postres, super delicioso acompañado de pan', '2022/09/12');



/*IVAN*/
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (8, 28, 1, 'Lo mejor que probé en navidad, cambio mi vida', '2023/02/27');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (9, 29, 1, 'Delicioso, definitivamente lo volveré a comprar', '2023/02/20');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (10, 30, 1, 'Muy práctica y fácil de usar, excelente para un buen café', '2023/02/15');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (11, 31, 1, 'La taza más alegre que he tenido, me encanta', '2023/02/26');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (12, 32, 1, 'La taza más bonita que he comprado, me encanta su diseño', '2023/02/17');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (13, 33, 1, 'Excelente sabor, lo recomiendo ampliamente', '2023/02/25');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (14, 34, 1, 'Buen sabor, pero esperaba algo más fuerte', '2023/01/22');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (8, 35, 1, 'La combinación perfecta de sabores fuertes, me encantó', '2023/02/21');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (9, 36, 1, 'Me ayudó a mantenerme energizada todo el día, excelente infusión', '2023/02/19');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (10, 37, 1, 'Me ayudó a mantener mi piel radiante, definitivamente volveré a comprar', '2023/02/13');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (11, 38, 1, 'Me ayudó a quemar grasas, excelente infusión', '2023/01/28');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (12, 39, 1, 'Me ayudó a regular mi colesterol, excelente infusión', '2023/01/23');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (13, 40, 1, 'Me ayudó a desintoxicar mi cuerpo, excelente infusión', '2023/02/16');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (14, 41, 1, 'Me ayudó a dormir profundamente, excelente infusión', '2023/02/18');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (8, 42, 1, 'Me ayudó a aliviar mis cólicos, excelente infusión', '2023/02/24');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (13, 43, 1, 'Los mejores espárragos que he probado, muy frescos y sabrosos', '2023/02/25');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (12, 44, 1, 'La granada estaba en su punto justo de madurez, deliciosa', '2023/01/17');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (10, 45, 1, 'Los arándanos estaban muy frescos y jugosos, perfectos para mi smoothie', '2023/02/22');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (11, 46, 1, 'Las sandalias son hermosas y muy cómodas, quedan bien con cualquier outfit', '2023/02/21');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (9, 47, 1, 'Los ángeles de amor son hermosos, la calidad es excelente', '2023/01/06');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (14, 48, 1, 'La cartera es hermosa, tiene el tamaño perfecto para llevar lo necesario', '2023/02/23');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (8, 49, 1, 'Los aretes son preciosos, me encanta su diseño y calidad', '2023/02/24');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (13, 50, 1, 'El cuadro es hermoso, me encanta el detalle en la pintura', '2023/01/18');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (9, 58, 1, 'Excelente calidad, muy recomendado', '2023/01/10');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (10, 59, 1, 'Me encantaron, son hermosos y de muy buena calidad', '2023/01/15');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (11, 60, 1, 'Muy buen diseño y calidad, perfecto para el verano', '2023/01/20');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (12, 61, 1, 'Precioso y muy bien hecho, tal como se ve en la foto', '2023/01/25');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (13, 62, 1, 'Muy suave y calentita, me encanta', '2023/01/30');
INSERT INTO Review (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (14, 63, 1, 'La corona de laurel es preciosa y muy bien hecha', '2023/01/27');

/*YAN*/
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (15, 64, 1, 'Me encanto el diseño', '2022/12/25');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (20, 91, 1,  'Muy rico el sabor', '2023/02/09');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (6, 77, 1, 'El sabor es espectacular', '2023/02/13');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (17, 81, 1, 'Muy dulce a mi parecer', '2023/02/16');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (19, 82, 1,   'Excelente para mi desayuno', '2023/02/03');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (18, 83, 1,  'Perfecta combinación para mi ensalada de frutas', '2023/02/04');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (20, 84, 1,  'Sabor exquisito con mi leche en la mañana lo recomiendo', '2023/01/08');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (20, 85, 1,  'Siento el sabor de chocolate, está muy delicioso', '2023/02/09');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (16, 86, 1, 'Es muy elegante', '2023/02/09');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (17, 87, 1, 'Muy lindo el diseño', '2023/02/01');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha)VALUES (18, 78, 1,  'Excelente snack', '2023/01/24');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (15, 79, 1, 'Me encanta la textura', '2023/01/15');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (19, 90, 1, 'Muy significativo el diseño', '2023/02/24');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (15, 91, 1, 'Excelente el sabor, lo recomiendo', '2023/02/13');
INSERT INTO REVIEW (ID_Cliente, ID_Producto, Estado, Comentario, Fecha) VALUES (18, 72, 1, 'Me encanta el diseño', '2023/02/14');
