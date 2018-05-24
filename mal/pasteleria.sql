DROP TABLE IF EXISTS pasteleria;
CREATE DATABASE pasteleria;
USE pasteleria;

CREATE TABLE producto(
                     id_producto    INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                     nombre_producto     VARCHAR(30),
                     tamano            VARCHAR(50),
                     imagen          VARCHAR(50),
                     id_categoria    VARCHAR(10),
                     id_precio           INT
                    );              