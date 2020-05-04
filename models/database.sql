CREATE DATABASE belsay;

CREATE TABLE usuarios(
    id                  int(11) auto_increment,
    usuario             varchar(255),
    password            varchar(255),

    constraint pk_usuarios primary key(id)

)ENGINNE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE clientes(

    id                  int(11) auto_increment,
    email               varchar(255),
    password            varchar(255),
    nombre              varchar(255),
    apellidos           varchar(255),
    telefono            varchar(255),
    direccion           varchar(255),

    constraint pk_clientes primary key(id)

)ENGINNE=INNODB DEFAULT CHARSET=utf8;

