DROP DATABASE belsay;
CREATE DATABASE belsay;
USE belsay;
CREATE TABLE horario(
    id                  int(11) auto_increment,
    dia                 varchar(255),
    tiempo              varchar(255),
    horario             varchar(255),

    constraint pk_horario primary key(id)

)ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO horario(dia, horario, tiempo) VALUES ('LUNES', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('MARTES', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('MIERCOLES', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('JUEVES', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('VIERNES', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('SABADO', 'CERADO', 'MEDIO DIA');
INSERT INTO horario(dia, horario, tiempo) VALUES ('DOMINGO', '13:00 A 16:00', 'MEDIO DIA');

INSERT INTO horario(dia, horario, tiempo) VALUES ('LUNES', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('MARTES', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('MIERCOLES', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('JUEVES', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('VIERNES', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('SABADO', '20:00 A 24:00', 'NOCHE');
INSERT INTO horario(dia, horario, tiempo) VALUES ('DOMINGO', 'CERRADO', 'NOCHE');

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

