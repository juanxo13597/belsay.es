DROP DATABASE belsay;
CREATE DATABASE belsay;
USE belsay;

CREATE TABLE familias(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),

    constraint pk_familias primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO familias(nombre, imagen) VALUES 
('Pizzas', 'assets/img/carta/pizza.png'),
('Chapatas', 'assets/img/carta/chapata.jpg'),
('Roscas', 'assets/img/carta/rosca.jpg'),
('Paninis', 'assets/img/carta/panini.jpg'),
('Hot Dogs', 'assets/img/carta/hotdog.jpg'),
('Bocatas', 'assets/img/carta/bocata.png'),
('Ensaladas', 'assets/img/carta/ensalada.jpg'),
('Patatas', 'assets/img/carta/patata.jpg'),
('Postres', 'assets/img/carta/postre.jpg'),
('Sandwichs', 'assets/img/carta/sandwich.png'),
('Hamburguesas', 'assets/img/carta/hamburguesa.png'),
('Bebidas', 'assets/img/carta/bebida.jpg');

CREATE TABLE productos(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),
    precio1             varchar(255),
    precio2             varchar(255),
    precio3             varchar(255),
    ingredientes        varchar(255),
    familia_id          int(11),

    constraint pk_productos primary key(id),
    constraint fg_productos_familias foreign key(familia_id) references familias(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO productos(nombre, precio1, precio2, precio3, ingredientes, familia_id) VALUES 
('Milanesa', '5.80', '8.20', '9.00', 'Tomate, orégano, mozzarella y york', 1),
('Romana', '8.80', '12.10', '13.80', 'Tomate, orégano, mozzarella, aceitunas, alcachofa, champiñon y york', 1);

CREATE TABLE horario(
    id                  int(11) auto_increment,
    dia                 varchar(255),
    tiempo              varchar(255),
    horario             varchar(255),

    constraint pk_horario primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO horario(dia, horario, tiempo) VALUES 
('LUNES', 'CERADO', 'MEDIO DIA'),
('MARTES', 'CERADO', 'MEDIO DIA'),
('MIERCOLES', 'CERADO', 'MEDIO DIA'),
('JUEVES', 'CERADO', 'MEDIO DIA'),
('VIERNES', 'CERADO', 'MEDIO DIA'),
('SABADO', 'CERADO', 'MEDIO DIA'),
('DOMINGO', '13:00 A 16:00', 'MEDIO DIA'),

('LUNES', '20:00 A 24:00', 'NOCHE'),
('MARTES', '20:00 A 24:00', 'NOCHE'),
('MIERCOLES', '20:00 A 24:00', 'NOCHE'),
('JUEVES', '20:00 A 24:00', 'NOCHE'),
('VIERNES', '20:00 A 24:00', 'NOCHE'),
('SABADO', '20:00 A 24:00', 'NOCHE'),
('DOMINGO', 'CERRADO', 'NOCHE');

CREATE TABLE usuarios(
    id                  int(11) auto_increment,
    usuario             varchar(255),
    password            varchar(255),

    constraint pk_usuarios primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE clientes(

    id                  int(11) auto_increment,
    email               varchar(255),
    password            varchar(255),
    nombre              varchar(255),
    apellidos           varchar(255),
    telefono            varchar(255),
    direccion           varchar(255),

    constraint pk_clientes primary key(id),
    constraint uniq_clientes unique(email)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

