EXPLICACION DEL BACKEND:
El proyecto esta puesto para poderse usar en una base de datos MYSQL en este caso deberemos tener instalado XAMP para ejecutar APACHE y MYSQL cuando tengamos esto crearemos una nueva base de datos llamada restaurante.
Ahora en nuestro proyecto Backend aremos un "composer install" para instalar todas las dependencias de nuestro proyecto.
Una vez instalada todas nuestras dependencias y vincular la base de datos en nuestro .env deberemos usar el "php artisan migrate" en la terminal, este comando ara que se cree las tablas para nuestra base de datos.
Una vez creadas lo unico que deberemos es insertar datos importantes antes de hacer uso de nuestras APIS deberemos insertar 3 roles en la tabla roles( id 1 Cliente, id 2 Admin, id 3 SuperAdmin ) ademas de crear un servicio en este caso con el costo de 100 tambien deberemos crear un tarjeta ficticia con su cvv y su fecha de expiracion aqui estaran los comandos correspondientes.
-------------ROLES---------------------------------
INSERT INTO roles (role_name) VALUES ('cliente');
INSERT INTO roles (role_name) VALUES ('admin');
INSERT INTO roles (role_name) VALUES ('superadmin');
-------------TARJETA-------------------------------
INSERT INTO tarjeta_creditos( numero_tarjeta, fecha_expiracion, cvc, saldo)
VALUES ('1234567812345678', '2025-12-31', '123', 5000.00);

Ya con esto podremos darle uso tranquilamente a nuestra Backend
