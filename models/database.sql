DROP DATABASE belsay;
CREATE DATABASE belsay;
USE belsay;

CREATE TABLE familias_local(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),

    constraint pk_familias primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE familias_domicilio(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),

    constraint pk_familias primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

-- familias local
INSERT INTO familias_local(nombre, imagen) VALUES 
('Pizzas', 'assets/img/carta/pizza.png'),
('Chapatas', 'assets/img/carta/chapata.jpg'),
('Paninis', 'assets/img/carta/panini.jpg'),
('Hot Dogs', 'assets/img/carta/hotdog.jpg'),
('Bocatas', 'assets/img/carta/bocata.png'),
('Ensaladas', 'assets/img/carta/ensalada.jpg'),
('Patatas', 'assets/img/carta/patata.jpg'),
('Sandwichs', 'assets/img/carta/sandwich.png'),
('Hamburguesas', 'assets/img/carta/hamburguesa.png'),
('Bebidas', 'assets/img/carta/bebida.jpg');

-- familias domicilio
INSERT INTO familias_domicilio(nombre, imagen) VALUES 
('Pizzas', 'assets/img/carta/pizza.png'),
('Chapatas', 'assets/img/carta/chapata.jpg'),
('Paninis', 'assets/img/carta/panini.jpg'),
('Hot Dogs', 'assets/img/carta/hotdog.jpg'),
('Bocatas', 'assets/img/carta/bocata.png'),
('Ensaladas', 'assets/img/carta/ensalada.jpg'),
('Patatas', 'assets/img/carta/patata.jpg'),
('Sandwichs', 'assets/img/carta/sandwich.png'),
('Hamburguesas', 'assets/img/carta/hamburguesa.png'),
('Bebidas', 'assets/img/carta/bebida.jpg');

CREATE TABLE productos_local(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),
    precio1             decimal(11,2),
    precio2             decimal(11,2),
    precio3             decimal(11,2),
    ingredientes        varchar(255),
    familia_id          int(11),

    constraint pk_productos_local primary key(id),
    constraint fg_productos_local_familias foreign key(familia_id) references familias_local(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE productos_domicilio(
    id                  int(11) auto_increment,
    nombre              varchar(255),
    imagen              varchar(255),
    precio1             decimal(11,2),
    precio2             decimal(11,2),
    precio3             decimal(11,2),
    ingredientes        varchar(255),
    familia_id          int(11),

    constraint pk_productos_domicilio primary key(id),
    constraint fg_productos_domicilio_familias foreign key(familia_id) references familias_domicilio(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

-- pizzas
INSERT INTO productos_local(nombre, precio1, precio2, precio3, ingredientes, familia_id) VALUES 
('Milanesa', 5.0, 7.1, 8.5, 'Tomate, orégano, mozzarella y york', 1),
('Veneciana', 7.0, 9.7, 11.7, 'Tomate, orégano mozzarella, salami, salchichas y york.', 1),
('Napolitana', 7.0, 9.7, 11.7, 'Tomate, orégano, mozzarella, jamón serrano, champiñón y beicon.', 1),
('Parmesana', 7.0, 9.7, 11.7, 'Tomate, orégano, mozzarella, mezcla mágica de quesos.', 1),
('Genovesa', 7.0, 9.7, 11.7, 'Tomate, orégano, mozzarella, gamba, anchoa y champiñón.', 1),
('Siciliana', 7.0, 9.7, 11.7, 'Tomate, orégano, mozzarella, champiñon, atún y york.', 1),
('Americana', 7.0, 9.7, 11.7, 'Salsa barbacoa, ternera, beicon y cebolla.', 1),
('Toscana', 7.0, 9.7, 11.7, 'Jamón, Atún y gambas.', 1),
('Romana', 8.0, 11.0, 13.3, 'Tomate, orégano, mozzarella, aceitunas, alcachofa, champiñón y york.', 1),
('Especialidad', 8.0, 11.0, 13.3, 'Tomate natural, roquefort, anchoa y ternera.', 1),
('Varonesa', 8.0,  11.0, 13.3, 'Champiñones, york, peperoni y extra de mozarella.', 1),
('Alessandriana', 8.0, 11.0, 13.3, 'Peperoni, pimiento verde, cebolla y beicon.', 1),
('Hawaiana', 7.0, 9.70, 11.7, 'Tomate, orégano, extra de mozzarella, piña y jamón.', 1),
('De la ria', 7.0, 9.7, 11.7, 'Mejillones, atún y gambas.', 1),
('Kebab', 8.0, 11.0, 13.3, 'Carne de pollo de kebab y salsa white.', 1),
('Piamonte', 6.0, 8.4, 10.1, 'Salsicha, beicon y salsa gaucha.', 1);

-- chapatas
INSERT INTO productos_local(nombre, precio2, precio3, ingredientes, familia_id) VALUES 
('Charra', 3.6, 5.95, 'Chapata base y york.', 2),
('Ranchera', 4.3, 6.95, 'Chapata base, champiñón y york.', 2),
('Tijuana', 4.3, 6.95, 'Chapata base, jamón serrano y atún.', 2),
('Maya', 5.0, 7.95, 'Chapata base, mezcla mágica de quesos.', 2),
('Mariachi', 5, 7.95, 'Chapata base, salmón, gambas y champiñón.', 2),
('Mexicana', 5, 7.95, 'Chapata base, beicon, atún y champiñón.', 2);

-- paninis
INSERT INTO productos_local(nombre, precio2, ingredientes, familia_id) VALUES 
('Atlántico', 1.95, 'Panini base y jamón york.', 3),
('Pacífico', 2.95, 'Panini base, alcachofa, champiñón y york.', 3),
('Índico', 2.95, 'Panini base, jamón serrano, champiñón y beicon', 3),
('Báltico', 2.95, 'Panini base, salami, salchichas y york.', 3),
('Mediterráneo', 2.95, 'Panini base, atún y champiñón.', 3),
('Cantábrico', 2.95, 'Panini base, gambas, anchoas y champiñón.', 3),
('Maya', 2.95, 'Panini base y mágica mezcla de quesos.', 3);

-- hot dog
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('Perrito caliente', 'Pan y salsicha.', 1.7, 4),
('Perrito bel', 'Queso, salsicha y beicon.', 2.1, 4),
('Perrito say', 'Tortilla francesa y salchica.', 2, 4),
('Perrito completo', 'Queso, salsicha, beicon y tortilla.', 2.3, 4),
('Especial hot dog', 'Salsicha, aros de cebolla, tomate y tortilla.', 2.5, 4),
('Perrito picantón', 'Salsicha, aros de cebolla y salsa brava.', 2.1, 4),
('Perrito sabroson', 'Salsicha, beicon, cebolla y salsa barbacoa.', 2.25, 4);

-- bocatas
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('Catalán', 'Jamón serrano, tomate y aceite.', 2.65, 5),
('Andaluz', 'Tortilla o lomo.', 2.65, 5),
('Aragonés', 'Jamón york y queso', 2.65, 5),
('Tortilla de patatas', 'Tortilla de patatas con beicon o pimiento morrón', 2.95, 5),
('Asturiano', 'Beicon y queso', 2.9, 5),
('Riojano', 'Lomo y queso fundido', 3.05, 5),
('Freed burguer', 'Hamburguesa frita con salsa barbacoa y cebolla.', 3, 5),
('Manchego', 'Anchoa, queso y pimiento.', 3.15, 5),
('Gallego', 'Atún, huevo, pimiento y mahonesa.', 3.15, 5),
('Levantino', 'Pechuga de pollo, lechuga, tomate y mahonesa.', 3.2, 5),
('Murciano', 'Lechuga, tomate, huevo, mahonesa, espárrago y queso fresco.', 3.3, 5),
('Frankfurt', 'Salsichas, lechuga, tomate y mahonesa', 3.2, 5),
('Marinero', 'Lechuga, tomate, atún, rabanitos de mar y mahonesa', 3.15, 5),
('Vasco', 'Lomo, beicon, salsa barbacoa y tomate natural', 3.15, 5),
('Castellano', 'Lomo, beicon y cebolla', 3.15, 5),
('Serranito', 'Lomo, jamón serrano y pimiento.', 3.15, 5),
('Sevillano', 'Salsa de salmorejo, jamón y huevo duro rallado', 3.15, 5),
('Caribeño', 'Palometa ahumada, roquefort o queso fresco.', 3.4, 5),
('Extremeño', 'Beicon, escalope de pollo y queso fundido', 3.4, 5),
('Sanluqueño', 'Gambas a la plancha en salsa ali-oli', 3.4, 5),
('Zamorano', 'Lomo mechado, cebolla frita y salsa al whisky', 3.4, 5),
('Segoviano', 'Lomo, jamón y salsa verde', 3.15, 5);


-- ensaladas
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('De la huerta', 'Lechuga, tomate y cebolla', 2.4, 6),
('Mixta', 'Lechuga, tomate, cebolla, huevo, atún, aceitunas y espárragos', 3.15, 6),
('Parisina', 'Lechuga, tomate, pollo, york, queso, zanahoria, huevo y salsa rosa o roquefort', 3.3, 6),
('Niçoise', 'Lechuga, tomate, atún, york, queso, espárrago, palmitos y salsa rosa o roquefort', 3.3, 6),
('Del mar', 'Lechuga, gambas, rabanitos de mar y salsa rosa', 3.3, 6),
('Tropical', 'Lechuga, tomate, gambas, brotes de soja, mazorquitas, piña, delicias de mar y salsa rosa', 3.3, 6),
('De pimientos', 'Pimientos rojos, rabanitos de mar, cebollita, mejillones, gambas y aceitunas verdes', 3.6, 6),
('Italiana', 'Pasta, jamón cocido, tomate, aceitunas, tortilla y queso', 3.6, 6),
('Burguesa', 'Lechuga, piña, queso fresco, jamón york y un suave toque de mahonesa', 3.6, 6),
('Cesar', 'Lechuga, york, pollo y picatostes con salsa cesar', 3.6, 6);

-- patatas
INSERT INTO productos_local(nombre, precio2, precio3, familia_id) VALUES
('Golden', 2.0, 0 , 7),
('Normales', 1.2, 1.4, 7),
('Con queso', 2.5, 0 , 7),
('Con queso, beicon y ternera', 3.2, 0, 7);

-- sanwichs
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('Inglés', 'Jamón york y queso', 1.75, 8),
('Irlandés', 'Lechuga, tomate, espárrago, huevo y mahonesa', 2.0, 8),
('Croque', 'Jamón york, bechamel y emmental', 2.9, 8),
('Holandés', 'Jamón york, queso, huevo y beicon', 2.25, 8),
('Español', 'Jamón serrano y tortilla', 2.2, 8),
('Francés', 'Jamón york, queso y tortilla', 2.25, 8),
('Italiano', 'Lechuga, tomate, queso fresco y emmental', 2.7, 8),
('Noruego', 'Atún, pimiento morrón y huevo duro', 2.7, 8),
('Alemán', 'Lechuga, tomate, atún, rabanitos de mar y salsa rosa', 2.7, 8),
('Especial belsay', 'Lechuga, tomate, atún, mahonesa, york, queso, beicon y huevo (dos pisos)', 3.5, 8),
('Portugues', 'Tomate, beicon y tiras de escalope de pollo', 2.9, 8),
('Belga', 'Palometa ahumada y salsa roquefort', 2.95, 8),
('Sueco', 'Lechuga, tomate, gambas a la plancha y salsa rosa', 2.85, 8),
('Polaco', 'Lomo a la plancha y salsa roquefort', 2.8, 8),
('Húngaro', 'Queso fresco, anchoas y pimiento morrón', 2.75, 8),
('Austríaco', 'Lechuga, tomate, atún, huevo duro, aros de cebolla fresca y un legero toque de aceite de oliva', 2.45, 8);

-- hamburguesas
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('Carolina', 'Carne, lechuga y tomate', 1.7, 9),
('Florida', 'Carne, queso, lechuga y tomate', 1.9, 9),
('Indiana', 'Carne, lechuga, tomate y huevo', 2.15, 9),
('Arizona', 'Carne, lechuga, tomate, queso, beicon y huevo', 2.6, 9),
('Montana', '2 carnes, lechuga, tomate, huevo, queso y beicon', 3.9, 9),
('Nevada', 'Pollo, lechuga y mahonesa', 2.6, 9),
('California', 'Carne, lechuga, tomate, cebolla y maíz', 1.9, 9),
('Tejana', 'Carne, lechuga, tomate, cebolla, beicon y salsa barbacoa', 2.3, 9),
('De buey', 'Queso cheddar, beicon y cebolla', 5.5, 9);

-- bebidas
INSERT INTO productos_local(nombre, ingredientes, precio2, familia_id) VALUES
('Coca-cola', 'Lata 33CL', 1.2, 10),
('Coca-Cola light', 'Lata 33CL', 1.2, 10),
('Coca-Cola zero', 'Lata 33CL', 1.2, 10),
('Coca-Cola sin cafeina', 'Lata 33CL', 1.2, 10),
('Fanta limón', 'Lata 33CL', 1.2, 10),
('Fanta naranja', 'Lata 33CL', 1.2, 10),
('Nestea', 'Lata 33CL', 1.2, 10),
('Sprite', 'Lata 33CL', 1.2, 10),
('Aquarius', 'Lata 33CL', 1.2, 10),
('Cerveza cruz campo', 'Lata 33CL', 1.2, 10),
('Cerveza cruz campo sin alcohol', 'Lata 33CL', 1.2, 10),

('Coca-cola', '1 litro', 1.7, 10),
('Coca-cola zero', '1 litro', 1.7, 10),
('Coca-cola light', '1 litro', 1.7, 10),
('Coca-cola sin cafeina', '1 litro', 1.7, 10),
('Fanta limón', '1 litro', 1.7, 10),
('Fanta naranja', '1 litro', 1.7, 10),
('Sprite', '1 litro', 1.7, 10),
('Cerveza cruz campo', '1 litro', 2, 10),

('Coca-cola', '2 litro', 2.2, 10),
('Coca-cola zero', '2 litro', 2.2, 10),
('Coca-cola light', '2 litro', 2.2, 10),
('Coca-cola sin cafeina', '2 litro', 2.2, 10),
('Fanta limón', '2 litro', 2.2, 10),
('Fanta naranja', '2 litro', 2.2, 10),
('Sprite', '2 litro', 2.2, 10),

('Zumo melocotón', null, 1.2, 10),
('Zumo piña', null, 1.2, 10),

('Tinto verano', null, 1, 10),
('Jarra cerveza', null, 3.5, 10),
('Jarra tinto verano', null, 3.5, 10),
('Vinos espumosos', null, 6.5, 10),
('Licores', null, 1.8, 10),
('Copas', null, 3, 10),
('Agua Mineral', 'Botella 50CL', 0.75, 10);


-- pizzas domicilio
INSERT INTO productos_domicilio(nombre, precio1, precio2, precio3, ingredientes, familia_id) VALUES 
('Milanesa', 5.8, 8.2, 9, 'Tomate, orégano, mozzarella y york', 1),
('Romana', 8.8, 12.1, 13.8, 'Tomate, orégano, mozzarella, aceitunas, alcachofa, champiñon y york.', 1),
('Veneciana', 7.8, 10.8, 12.2, 'Tomate, orégano mozzarella, salami, salchichas y york.', 1),
('Napolitana', 7.8, 10.8, 12.2, 'Tomate, orégano, mozzarella, jamón serrano, champiñón y beicon.', 1),
('Parmesana', 7.8, 10.8, 12.2, 'Tomate, orégano, mozzarella, mezcla mágica de quesos.', 1),
('Genovesa', 7.8, 10.8, 12.2, 'Tomate, orégano, mozzarella, gamba, anchoa y champiñón.', 1),
('Siciliana', 7.8, 10.8, 12.2, 'Tomate, orégano, mozzarella, champiñon, atún y york.', 1),
('Especialidad', 8.8, 12.1, 13.8, 'Tomate natural, roquefort, anchoa y ternera.', 1),
('Americana', 7.8, 10.8, 12.2, 'Salsa barbacoa, ternera, beicon y cebolla.', 1),
('Hawaiana', 7.8, 10.8, 12.2, 'Tomate, orégano, extra de mozzarella, piña y jamón.', 1),
('De la ria', 7.8, 10.8, 12.2, 'Mejillones, atún y gambas.', 1),
('Varonesa', 8.8,  12.1, 13.8, 'Champiñones, york, peperoni y extra de mozarella.', 1),
('Alessandriana', 8.8, 12.1, 13.8, 'Peperoni, pimiento verde, cebolla y beicon.', 1),
('Toscana', 7.8, 10.8, 12.2, 'Jamón, Atún y gambas.', 1),
('Kebab', 8.8, 12.1, 13.8, 'Carne de pollo de kebab y salsa white.', 1),
('Piamonte', 6.8, 9.5, 10.6, 'Salsicha, beicon y salsa gaucha.', 1);

-- chapatas domicilio
INSERT INTO productos_domicilio(nombre, precio2, precio3, ingredientes, familia_id) VALUES 
('Charra', 4.15, 7.5, 'Chapata base y york.', 2),
('Ranchera', 4.85, 8.5, 'Chapata base, champiñón y york.', 2),
('Tijuana', 4.85, 8.5, 'Chapata base, jamón serrano y atún.', 2),
('Maya', 5.55, 9.5, 'Chapata base, mezcla mágica de quesos.', 2),
('Mariachi', 5.55, 9.5, 'Chapata base, salmón, gambas y champiñón.', 2),
('Mexicana', 5.55, 9.5, 'Chapata base, beicon, atún y champiñón.', 2);

-- paninis domicilio
INSERT INTO productos_domicilio(nombre, precio2, ingredientes, familia_id) VALUES 
('Atlántico', 2.1, 'Panini base y jamón york.', 3),
('Pacífico', 3.1, 'Panini base, alcachofa, champiñón y york.', 3),
('Índico', 3.1, 'Panini base, jamón serrano, champiñón y beicon', 3),
('Báltico', 3.1, 'Panini base, salami, salchichas y york.', 3),
('Mediterráneo', 3.1, 'Panini base, atún y champiñón.', 3),
('Cantábrico', 3.1, 'Panini base, gambas, anchoas y champiñón.', 3),
('Maya', 3.1, 'Panini base y mágica mezcla de quesos.', 3);

-- hot dog domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('Perrito caliente', 'Pan y salsicha.', 1.85, 4),
('Perrito bel', 'Queso, salsicha y beicon.', 2.25, 4),
('Perrito say', 'Tortilla francesa y salchica.', 2.15, 4),
('Perrito completo', 'Queso, salsicha, beicon y tortilla.', 2.45, 4),
('Especial hot dog', 'Salsicha, aros de cebolla, tomate y tortilla.', 2.75, 4),
('Perrito picantón', 'Salsicha, aros de cebolla y salsa brava.', 2.25, 4),
('Perrito sabroson', 'Salsicha, beicon, cebolla y salsa barbacoa.', 2.4, 4);

-- bocatas domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('Manchego', 'Anchoa, queso y pimiento.', 3.4, 5),
('Gallego', 'Atún, huevo, pimiento y mahonesa.', 3.4, 5),
('Catalán', 'Jamón serrano, tomate y aceite.', 2.8, 5),
('Andaluz', 'Tortilla o lomo.', 2.8, 5),
('Serranito', 'Lomo, jamón serrano y pimiento.', 3.4, 5),
('Freed burguer', 'Hamburguesa frita con salsa barbacoa y cebolla.', 3.4, 5),
('Caribeño', 'Palometa ahumada, roquefort o queso fresco.', 3.65, 5),
('Levantino', 'Pechuga de pollo, lechuga, tomate y mahonesa.', 3.65, 5),
('Murciano', 'Lechuga, tomate, huevo, mahonesa, espárrago y queso fresco.', 3.55, 5),
('Frankfurt', 'Salsichas, lechuga, tomate y mahonesa', 3.45, 5),
('Tortilla de patatas', 'Tortilla de patatas con beicon o pimiento morrón', 3.15, 5),
('Extremeño', 'Beicon, escalope de pollo y queso fundido', 3.65, 5),
('Asturiano', 'Beicon y queso', 3.1, 5),
('Marinero', 'Lechuga, tomate, atún, rabanitos de mar y mahonesa', 3.4, 5),
('Vasco', 'Lomo, beicon, salsa barbacoa y tomate natural', 3.4, 5),
('Aragonés', 'Jamón york y queso', 2.8, 5),
('Riojano', 'Lomo y queso fundido', 3.4, 5),
('Castellano', 'Lomo, beicon y cebolla', 3.4, 5),
('Sanluqueño', 'Gambas a la plancha en salsa ali-oli', 3.65, 5),
('Sevillano', 'Salsa de salmorejo, jamón y huevo duro rallado', 3.4, 5),
('Zamorano', 'Lomo mechado, cebolla frita y salsa al whisky', 3.65, 5),
('Segoviano', 'Lomo, jamón y salsa verde', 3.4, 5);


-- ensaladas domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('De la huerta', 'Lechuga, tomate y cebolla', 2.6, 6),
('Mixta', 'Lechuga, tomate, cebolla, huevo, atún, aceitunas y espárragos', 2.6, 6),
('Parisina', 'Lechuga, tomate, pollo, york, queso, zanahoria, huevo y salsa rosa o roquefort', 3.45, 6),
('Niçoise', 'Lechuga, tomate, atún, york, queso, espárrago, palmitos y salsa rosa o roquefort', 3.7, 6),
('Tropical', 'Lechuga, tomate, gambas, brotes de soja, mazorquitas, piña, delicias de mar y salsa rosa', 3.7, 6),
('Del mar', 'Lechuga, gambas, rabanitos de mar y salsa rosa', 3.45, 6),
('De pimientos', 'Pimientos rojos, rabanitos de mar, cebollita, mejillones, gambas y aceitunas verdes', 3.6, 6),
('Italiana', 'Pasta, jamón cocido, tomate, aceitunas, tortilla y queso', 3.7, 6),
('Burguesa', 'Lechuga, piña, queso fresco, jamón york y un suave toque de mahonesa', 3.7, 6),
('Cesar', 'Lechuga, york, pollo y picatostes con salsa cesar', 3.7, 6);

-- patatas domicilio
INSERT INTO productos_domicilio(nombre, precio2, precio3, familia_id) VALUES
('Golden', 2.1, 0 , 7),
('Normales', 1.3, 1.6, 7);

-- sanwichs domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('Inglés', 'Jamón york y queso', 1.95, 8),
('Irlandés', 'Lechuga, tomate, espárrago, huevo y mahonesa', 2.6, 8),
('Croque', 'Jamón york, bechamel y emmental', 3.05, 8),
('Holandés', 'Jamón york, queso, huevo y beicon', 2.5, 8),
('Español', 'Jamón serrano y tortilla', 2.4, 8),
('Francés', 'Jamón york, queso y tortilla', 2.45, 8),
('Italiano', 'Lechuga, tomate, queso fresco y emmental', 2.8, 8),
('Noruego', 'Atún, pimiento morrón y huevo duro', 3, 8),
('Alemán', 'Lechuga, tomate, atún, rabanitos de mar y salsa rosa', 2.9, 8),
('Especial belsay', 'Lechuga, tomate, atún, mahonesa, york, queso, beicon y huevo (dos pisos)', 3.7, 8),
('Portugues', 'Tomate, beicon y tiras de escalope de pollo', 3.05, 8),
('Belga', 'Palometa ahumada y salsa roquefort', 3.1, 8),
('Sueco', 'Lechuga, tomate, gambas a la plancha y salsa rosa', 3, 8),
('Polaco', 'Lomo a la plancha y salsa roquefort', 2.95, 8),
('Húngaro', 'Queso fresco, anchoas y pimiento morrón', 2.9, 8),
('Austríaco', 'Lechuga, tomate, atún, huevo duro, aros de cebolla fresca y un legero toque de aceite de oliva', 2.6, 8);

-- hamburguesas domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('Carolina', 'Carne, lechuga y tomate', 1.9, 9),
('Florida', 'Carne, queso, lechuga y tomate', 2.1, 9),
('Indiana', 'Carne, lechuga, tomate y huevo', 2.3, 9),
('Arizona', 'Carne, lechuga, tomate, queso, beicon y huevo', 2.8, 9),
('Montana', '2 carnes, lechuga, tomate, huevo, queso y beicon', 3.1, 9),
('Nevada', 'Pollo, lechuga y mahonesa', 2.9, 9),
('California', 'Carne, lechuga, tomate, cebolla y maíz', 2.3, 9),
('Tejana', 'Carne, lechuga, tomate, cebolla, beicon y salsa barbacoa', 2.5, 9),
('De buey', 'Queso cheddar, beicon y cebolla', 5.5, 9);

-- bebidas domicilio
INSERT INTO productos_domicilio(nombre, ingredientes, precio2, familia_id) VALUES
('Coca-cola', 'Lata 33CL', 1.3, 10),
('Coca-Cola light', 'Lata 33CL', 1.3, 10),
('Coca-Cola zero', 'Lata 33CL', 1.3, 10),
('Coca-Cola sin cafeina', 'Lata 33CL', 1.3, 10),
('Coca-cola', '1 litro', 1.7, 10),
('Coca-cola', '2 litro', 2.2, 10),
('Coca-cola zero', '1 litro', 1.7, 10),
('Coca-cola zero', '2 litro', 2.2, 10),
('Coca-cola light', '1 litro', 1.7, 10),
('Coca-cola light', '2 litro', 2.2, 10),
('Coca-cola sin cafeina', '1 litro', 1.7, 10),
('Coca-cola sin cafeina', '2 litro', 2.2, 10),
('Fanta limón', 'Lata 33CL', 1.3, 10),
('Fanta limón', '1 litro', 1.7, 10),
('Fanta limón', '2 litro', 2.2, 10),
('Fanta naranja', 'Lata 33CL', 1.3, 10),
('Fanta naranja', '1 litro', 1.7, 10),
('Fanta naranja', '2 litro', 2.2, 10),
('Aquarius', 'Lata 33CL', 1.3, 10),
('Nestea', 'Lata 33CL', 1.3, 10),
('Sprite', 'Lata 33CL', 1.3, 10),
('Sprite', '1 litro', 1.7, 10),
('Sprite', '2 litro', 2.2, 10),
('Cerveza cruz campo', 'Lata 33CL', 1.3, 10),
('Cerveza cruz campo', '1 litro', 2, 10),
('Cerveza cruz campo sin alcohol', 'Lata 33CL', 1.3, 10),
('Zumo melocotón', null, 1.2, 10),
('Zumo piña', null, 1.2, 10),
('Agua', 'Botella 50CL', 0.9, 10);



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

INSERT INTO usuarios(usuario, password) VALUES('admin', 'admin');

CREATE TABLE clientes(

    id                  int(11) auto_increment,
    email               varchar(255),
    dni                 varchar(255),
    password            varchar(255),
    nombre              varchar(255),
    apellidos           varchar(255),
    telefono            varchar(255),
    calle               varchar(255),
    numero              varchar(255),
    localidad           varchar(255),
    fecha_registro      timestamp,

    constraint pk_clientes primary key(id),
    constraint uniq_clientes_email unique(email),
    constraint uniq_clientes_dni unique(dni)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE log_clientes(

    id                  int(11) auto_increment,
    cliente_id          int(11),
    email               varchar(255),
    fecha               timestamp,
    accion              varchar(255),
    ip                  varchar(255),

    constraint pk_log_clientes primary key(id),
    constraint fk_log_clientes_id foreign key(cliente_id) references clientes(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

