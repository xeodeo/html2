CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

Create table t_usuario(
    id_usuairo int(11) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    rol VARCHAR(255) NOT NULL,
    password VARCHAR(255),
    imagen VARCHAR(255),
    CONSTRAINT pk_usuario PRIMARY KEY(id_usuairo),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO t_usuario VALUES(NULL, 'admin','admin','admin@admin.com','admin','1234','imagen')