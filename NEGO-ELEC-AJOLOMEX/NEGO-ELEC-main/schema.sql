CREATE DATABASE IF NOT EXISTS ajolomex CHARACTER SET utf8mb4;
USE ajolomex;
CREATE TABLE usuarios(id INT AUTO_INCREMENT PRIMARY KEY,nombre VARCHAR(120) NOT NULL,email VARCHAR(160) NOT NULL UNIQUE,pass_hash VARCHAR(255) NOT NULL,rol ENUM('cliente','artesano','admin') NOT NULL DEFAULT 'cliente',creado DATETIME DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE artesanos(id INT AUTO_INCREMENT PRIMARY KEY,usuario_id INT NULL,nombre VARCHAR(120) NOT NULL,estado VARCHAR(80) NOT NULL,descripcion VARCHAR(255) DEFAULT 'Tienda de demostración de AJOLOMEX.',FOREIGN KEY(usuario_id) REFERENCES usuarios(id) ON DELETE SET NULL);
CREATE TABLE productos(id INT AUTO_INCREMENT PRIMARY KEY,artesano_id INT NOT NULL,categoria TINYINT NOT NULL,nombre VARCHAR(160) NOT NULL,descripcion TEXT,precio DECIMAL(10,2) NOT NULL,stock INT NOT NULL DEFAULT 0,icono VARCHAR(8) DEFAULT '🎁',activo TINYINT(1) DEFAULT 1,FOREIGN KEY(artesano_id) REFERENCES artesanos(id));
CREATE TABLE ordenes(id INT AUTO_INCREMENT PRIMARY KEY,folio VARCHAR(12) UNIQUE,usuario_id INT NOT NULL,subtotal DECIMAL(10,2),envio DECIMAL(10,2),total DECIMAL(10,2),estado ENUM('pendiente','pagado','en_preparacion','enviado','entregado') DEFAULT 'pendiente',envio_nombre VARCHAR(120),envio_tel VARCHAR(30),envio_dir VARCHAR(255),envio_ciudad VARCHAR(80),envio_cp VARCHAR(10),notas VARCHAR(255),stripe_session VARCHAR(120),stripe_pi VARCHAR(120),fecha DATETIME DEFAULT CURRENT_TIMESTAMP,FOREIGN KEY(usuario_id) REFERENCES usuarios(id));
CREATE TABLE detalles_orden(id INT AUTO_INCREMENT PRIMARY KEY,orden_id INT NOT NULL,producto_id INT NOT NULL,nombre VARCHAR(160),precio DECIMAL(10,2),cantidad INT,FOREIGN KEY(orden_id) REFERENCES ordenes(id) ON DELETE CASCADE);
CREATE TABLE mensajes(id INT AUTO_INCREMENT PRIMARY KEY,nombre VARCHAR(120),email VARCHAR(160),telefono VARCHAR(30),asunto VARCHAR(80),mensaje TEXT,fecha DATETIME DEFAULT CURRENT_TIMESTAMP);
INSERT INTO artesanos(nombre,estado) VALUES('Barro y Fuego','Puebla'),('Manos de Oaxaca','Oaxaca'),('Raíces de Chiapas','Chiapas'),('Taller Ajolote','Ciudad de México');
INSERT INTO productos(artesano_id,categoria,nombre,descripcion,precio,stock,icono) VALUES
(2,4,'Chocolate de mesa oaxaqueño','Chocolate molido en metate con canela.',180,20,'🍫'),(4,2,'Pulsera de cobre martillado','Cobre martillado a mano.',380,10,'💍'),
(3,4,'Café de altura de Chiapas 500 g','Café de altura tostado artesanalmente.',230,30,'☕'),(2,2,'Aretes de chaquira huichol','Chaquira tejida a mano.',320,12,'📿'),
(3,0,'Rebozo de telar de cintura','Tejido en telar de cintura.',980,6,'🧣'),(4,5,'Bálsamo de árnica','Bálsamo natural de árnica.',120,25,'🌿'),
(3,5,'Jabón artesanal de avena y miel','Jabón en frío con avena y miel.',85,40,'🧼'),(2,3,'Alebrije de ajolote','Madera de copal pintada a mano.',890,5,'🦎'),
(4,0,'Huipil bordado a mano','Bordado a mano.',1450,2,'👚'),(1,1,'Cazuela de barro mediana','Barro cocido a leña.',420,9,'🍲'),
(1,3,'Máscara de cartonería','Cartonería pintada a mano.',540,7,'🎭'),(1,1,'Taza de talavera','Talavera poblana.',260,15,'🏺');
