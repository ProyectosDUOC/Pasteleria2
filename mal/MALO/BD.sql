DROP TABLE IF EXISTS pasteleria;
CREATE DATABASE pasteleria;
USE pasteleria;

CREATE TABLE cliente(idCliente          INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                     rut                VARCHAR(30),
                     nombres            VARCHAR(50),
                     apellidos          VARCHAR(50),
                     fechaNacimiento    VARCHAR(10),
                     telefono           INT,
                     correo             VARCHAR(50),
                     comuna             VARCHAR(30),
                     activo             INT
                    );              