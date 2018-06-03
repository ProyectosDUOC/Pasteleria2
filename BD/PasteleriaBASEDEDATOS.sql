DROP DATABASE IF EXISTS pasteleria;

CREATE Database pasteleria;

use pasteleria;



CREATE TABLE boleta (
    id_boleta         INTEGER NOT NULL PRIMARY KEY,
    total             INTEGER,
    id_empleado       INTEGER NOT NULL,
    id_forma_pago     INTEGER NOT NULL,
    id_sucursal       INTEGER NOT NULL,
    id_pedido_local   INTEGER
);

-- ALTER TABLE boleta ADD CONSTRAINT boleta_pk PRIMARY KEY ( id_boleta );

CREATE TABLE categoria (
    id_cate       INTEGER NOT NULL,
    nombre_cate   VARCHAR(40) NOT NULL,
    activo        INTEGER NOT NULL
);

ALTER TABLE categoria ADD CONSTRAINT categoria_pk PRIMARY KEY ( id_cate );

CREATE TABLE cliente (
    id_cliente         INTEGER NOT NULL PRIMARY KEY,
    rut_cliente        VARCHAR(30) NOT NULL,
    nombres            VARCHAR(60) NOT NULL,
    apellidos          VARCHAR(30) NOT NULL,
    fecha_nacimiento   DATE,
    id_comuna          INTEGER NOT NULL,
    telefono           INTEGER,
    correo             VARCHAR(50) NOT NULL,
    activo             INTEGER NOT NULL
);

-- ALTER TABLE cliente ADD CONSTRAINT cliente_pk PRIMARY KEY ( id_cliente );

CREATE TABLE compra_online (
    id_compra_online   INTEGER NOT NULL PRIMARY KEY,
    id_cliente         INTEGER NOT NULL,
    descuento          INTEGER,
    total              INTEGER,
    glosa              VARCHAR(300),
    id_forma_envio     INTEGER NOT NULL,
    id_forma_pago      INTEGER NOT NULL,
    id_sucursal        INTEGER NOT NULL
);

-- ALTER TABLE compra_online ADD CONSTRAINT compra_online_pk PRIMARY KEY ( id_compra_online );

CREATE TABLE comuna (
    id_comuna       INTEGER NOT NULL,
    nombre_comuna   VARCHAR(30)
);

ALTER TABLE comuna ADD CONSTRAINT comuna_pk PRIMARY KEY ( id_comuna );

CREATE TABLE control_cliente (
    id_control_c   INTEGER NOT NULL PRIMARY KEY,
    id_cliente     INTEGER NOT NULL,
    usuario        VARCHAR(30) NOT NULL,
    clave          VARCHAR(30) NOT NULL,
    activo         INTEGER NOT NULL
);

-- ALTER TABLE control_cliente ADD CONSTRAINT control_cliente_pk PRIMARY KEY ( id_control_c );

CREATE TABLE control_empleado (
    id_control_e   INTEGER NOT NULL PRIMARY KEY,
    usuario        VARCHAR(30) NOT NULL,
    clave          VARCHAR(30) NOT NULL,
    id_tipo        INTEGER NOT NULL,
    id_empleado    INTEGER NOT NULL,
    activo         INTEGER NOT NULL
);

-- ALTER TABLE control_empleado ADD CONSTRAINT control_empleado_pk PRIMARY KEY ( id_control_e );

CREATE TABLE detalle_boleta (
    id_detalle      INTEGER NOT NULL PRIMARY KEY,
    id_producto_p   INTEGER NOT NULL,
    id_boleta       INTEGER NOT NULL,
    precio          INTEGER,
    cant            INTEGER,
    total           INTEGER
);

-- ALTER TABLE detalle_boleta ADD CONSTRAINT detalle_boleta_pk PRIMARY KEY ( id_detalle );

CREATE TABLE detalle_compra_online (
    id_detalle_online   INTEGER NOT NULL PRIMARY KEY,
    id_compra_online    INTEGER NOT NULL,
    id_producto_p       INTEGER NOT NULL,
    precio              INTEGER,
    cant                INTEGER,
    total               INTEGER
);

-- ALTER TABLE detalle_compra_online ADD CONSTRAINT detalle_compra_online_pk PRIMARY KEY ( id_detalle_online );

CREATE TABLE detalle_pedido_local (
    id_detalle_local   INTEGER NOT NULL PRIMARY KEY, 
    id_pedido_local    INTEGER NOT NULL,
    id_producto_p      INTEGER NOT NULL,
    precio             INTEGER,
    cant               INTEGER,
    total              INTEGER
);

-- ALTER TABLE detalle_pedido_local ADD CONSTRAINT detalle_pedido_local_pk PRIMARY KEY ( id_detalle_local );

CREATE TABLE direccion_cliente (
    id_direccion   INTEGER NOT NULL PRIMARY KEY,
    id_cliente     INTEGER NOT NULL,
    nombres        VARCHAR(30),
    apellidos      VARCHAR(30),
    informacion    VARCHAR(100),
    zip            VARCHAR(30),
    id_comuna      INTEGER NOT NULL,
    direccion      VARCHAR(100),
    telefono       VARCHAR(10),
    celular        VARCHAR(10)
);

-- ALTER TABLE direccion_cliente ADD CONSTRAINT direccion_cliente_pk PRIMARY KEY ( id_direccion );


CREATE TABLE empleado (
    id_empleado         INTEGER NOT NULL PRIMARY KEY,
    rut_empleado        VARCHAR(30) NOT NULL,
    nombres             VARCHAR(60) NOT NULL,
    apellidos           VARCHAR(30) NOT NULL,
    fecha_nacimiento    DATE,
    telefono            INTEGER,
    id_comuna           INTEGER NOT NULL,
    correo              VARCHAR(50) NOT NULL,
    activo              INTEGER NOT NULL
);


-- ALTER TABLE empleado ADD CONSTRAINT empleado_pk PRIMARY KEY ( id_empleado );

CREATE TABLE forma_envio (
    id_forma_envio   INTEGER NOT NULL,
    nombre_envio     VARCHAR(30) NOT NULL
);

ALTER TABLE forma_envio ADD CONSTRAINT forma_envio_pk PRIMARY KEY ( id_forma_envio );

CREATE TABLE forma_pago (
    id_forma_pago   INTEGER NOT NULL,
    nombre_pago     VARCHAR(30) NOT NULL
);

ALTER TABLE forma_pago ADD CONSTRAINT forma_pago_pk PRIMARY KEY ( id_forma_pago );

CREATE TABLE pedido_local (
    id_pedido_local   INTEGER NOT NULL PRIMARY KEY,
    id_cliente        INTEGER NOT NULL,
    glosa             VARCHAR(300),
    descuento         INTEGER,
    total             INTEGER,
    fecha_termino     DATE,
    fecha_inscrita    DATE,
    id_forma_envio    INTEGER NOT NULL,
    id_sucursal       INTEGER NOT NULL
);

-- ALTER TABLE pedido_local ADD CONSTRAINT pedido_local_pk PRIMARY KEY ( id_pedido_local );

CREATE TABLE producto (
    id_producto       INTEGER NOT NULL PRIMARY KEY,
    cod_producto      INTEGER NOT NULL,
    nombre_producto   VARCHAR(50) NOT NULL,
    imagen            VARCHAR(60),
    tamano            VARCHAR(60),
    activo            INTEGER NOT NULL,
    id_cate           VARCHAR (60) NOT NULL
);

-- ALTER TABLE producto ADD CONSTRAINT producto_pk PRIMARY KEY ( id_producto );

CREATE TABLE producto_precio (
    id_producto_p   INTEGER NOT NULL PRIMARY KEY,
    id_producto     INTEGER NOT NULL,
    descripcion     VARCHAR(40) NOT NULL,
    precioproducto_precio          INTEGER NOT NULL
);

-- ALTER TABLE producto_precio ADD CONSTRAINT producto_precio_pk PRIMARY KEY ( id_producto_p );

CREATE TABLE sucursal (
    id_sucursal       INTEGER NOT NULL,
    nombre_sucursal   VARCHAR(30)
);

ALTER TABLE sucursal ADD CONSTRAINT sucursal_pk PRIMARY KEY ( id_sucursal );

CREATE TABLE tipo_usuario (
    id_tipo       INTEGER NOT NULL,
    nombre_tipo   VARCHAR(30) NOT NULL
);

ALTER TABLE tipo_usuario ADD CONSTRAINT tipo_usuario_pk PRIMARY KEY ( id_tipo );

ALTER TABLE boleta
    ADD CONSTRAINT bo_pago_fk FOREIGN KEY ( id_forma_pago )
        REFERENCES forma_pago ( id_forma_pago );

ALTER TABLE boleta
    ADD CONSTRAINT bol_sucl_fk FOREIGN KEY ( id_sucursal )
        REFERENCES sucursal ( id_sucursal );

ALTER TABLE boleta
    ADD CONSTRAINT bole_emple_fk FOREIGN KEY ( id_empleado )
        REFERENCES empleado ( id_empleado );

ALTER TABLE cliente
    ADD CONSTRAINT cliente_comuna_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE control_cliente
    ADD CONSTRAINT cocl_clien_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE control_empleado
    ADD CONSTRAINT coem_empl_fk FOREIGN KEY ( id_empleado )
        REFERENCES empleado ( id_empleado );

ALTER TABLE control_empleado
    ADD CONSTRAINT conu_tius_fk FOREIGN KEY ( id_tipo )
        REFERENCES tipo_usuario ( id_tipo );

ALTER TABLE detalle_compra_online
    ADD CONSTRAINT de_compra_online_fk FOREIGN KEY ( id_compra_online )
        REFERENCES compra_online ( id_compra_online );

ALTER TABLE detalle_boleta
    ADD CONSTRAINT debo_bole_fk FOREIGN KEY ( id_boleta )
        REFERENCES boleta ( id_boleta );

ALTER TABLE detalle_boleta
    ADD CONSTRAINT debo_producto_precio_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE detalle_compra_online
    ADD CONSTRAINT depe_producto_precio_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE detalle_pedido_local
    ADD CONSTRAINT deta_local_pedi_local_fk FOREIGN KEY ( id_pedido_local )
        REFERENCES pedido_local ( id_pedido_local );

ALTER TABLE detalle_pedido_local
    ADD CONSTRAINT deta_prpr_fk FOREIGN KEY ( id_producto_p )
        REFERENCES producto_precio ( id_producto_p );

ALTER TABLE direccion_cliente
    ADD CONSTRAINT dire_clie_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE direccion_cliente
    ADD CONSTRAINT direccion_cliente_comuna_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE empleado
    ADD CONSTRAINT empl_comu_fk FOREIGN KEY ( id_comuna )
        REFERENCES comuna ( id_comuna );

ALTER TABLE compra_online
    ADD CONSTRAINT pedido_forma_fk FOREIGN KEY ( id_forma_envio )
        REFERENCES forma_envio ( id_forma_envio );

ALTER TABLE pedido_local
    ADD CONSTRAINT pelo_cliente_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE compra_online
    ADD CONSTRAINT pelo_cliente_fkv FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE pedido_local
    ADD CONSTRAINT pelo_forma_envio_fk FOREIGN KEY ( id_forma_envio )
        REFERENCES forma_envio ( id_forma_envio );

ALTER TABLE pedido_local
    ADD CONSTRAINT pelo_sucursal_fk FOREIGN KEY ( id_sucursal )
        REFERENCES sucursal ( id_sucursal );

ALTER TABLE compra_online
    ADD CONSTRAINT peon_forma_fk FOREIGN KEY ( id_forma_pago )
        REFERENCES forma_pago ( id_forma_pago );

ALTER TABLE compra_online
    ADD CONSTRAINT peon_sucursal_fk FOREIGN KEY ( id_sucursal )
        REFERENCES sucursal ( id_sucursal );

ALTER TABLE producto_precio
    ADD CONSTRAINT prod_prec_prod_fk FOREIGN KEY ( id_producto )
        REFERENCES producto ( id_producto );

ALTER TABLE producto
    ADD CONSTRAINT producto_categoria_fk FOREIGN KEY ( id_cate )
        REFERENCES categoria ( id_cate );

INSERT INTO tipo_usuario VALUES(1,'VENDEDOR');
INSERT INTO tipo_usuario VALUES(2,'CAJERO');
INSERT INTO tipo_usuario VALUES(3,'ADMINISTRADOR');

INSERT INTO forma_pago VALUES(1,'EFECTIVO');
INSERT INTO forma_pago VALUES(2,'BOLETA');

INSERT INTO forma_envio VALUES(1,'A DOMICILIO');
INSERT INTO forma_envio VALUES(2,'ENTREGA LOCAL');

INSERT INTO sucursal VALUES(1,'PASTELERIA DOÑA ROSA');


INSERT INTO Comuna VALUES (1,'Santiago');
INSERT INTO Comuna VALUES (2,'Independecia');
INSERT INTO Comuna VALUES (3,'Conchalí');
INSERT INTO Comuna VALUES (4,'Huachuraba');
INSERT INTO Comuna VALUES (5,'Recoleta');
INSERT INTO Comuna VALUES (6,'Providencia');
INSERT INTO Comuna VALUES (7,'Vitacura');
INSERT INTO Comuna VALUES (8,'Lo Barnechea');
INSERT INTO Comuna VALUES (9,'Las Condes');
INSERT INTO Comuna VALUES (10,'Ñuñoa');
INSERT INTO Comuna VALUES (11,'La Reina');
INSERT INTO Comuna VALUES (12,'Macul');
INSERT INTO Comuna VALUES (13,'Peñalolén');
INSERT INTO Comuna VALUES (14,'La Florida');
INSERT INTO Comuna VALUES (15,'San Joaquín');
INSERT INTO Comuna VALUES (16,'La Granja');
INSERT INTO Comuna VALUES (17,'La Pintana');
INSERT INTO Comuna VALUES (18,'San Ramón');
INSERT INTO Comuna VALUES (19,'San Miguel');
INSERT INTO Comuna VALUES (20,'La Cisterna');
INSERT INTO Comuna VALUES (21,'El Bosque');
INSERT INTO Comuna VALUES (22,'Pedro Aguirre Cerda');
INSERT INTO Comuna VALUES (23,'Lo Espejo');
INSERT INTO Comuna VALUES (24,'Estacion Central');
INSERT INTO Comuna VALUES (25,'Cerrillos');
INSERT INTO Comuna VALUES (26,'Maipú');
INSERT INTO Comuna VALUES (27,'Quinta Normal');
INSERT INTO Comuna VALUES (28,'Lo Prado');
INSERT INTO Comuna VALUES (29,'Pudahuel');
INSERT INTO Comuna VALUES (30,'Cerro Navía');
INSERT INTO Comuna VALUES (31,'Renca');
INSERT INTO Comuna VALUES (32,'Quilicura');
INSERT INTO Comuna VALUES (33,'Colina');
INSERT INTO Comuna VALUES (34,'Lampa');
INSERT INTO Comuna VALUES (35,'Tiltil');
INSERT INTO Comuna VALUES (36,'Puente Alto');
INSERT INTO Comuna VALUES (37,'San Jose de Maipo');
INSERT INTO Comuna VALUES (38,'Pirque');
INSERT INTO Comuna VALUES (39,'San Bernardo');
INSERT INTO Comuna VALUES (40,'Buin');
INSERT INTO Comuna VALUES (41,'Paine');
INSERT INTO Comuna VALUES (42,'Calera de Tango');
INSERT INTO Comuna VALUES (43,'Melipilla');
INSERT INTO Comuna VALUES (44,'María Pinto');
INSERT INTO Comuna VALUES (45,'Curacaví');
INSERT INTO Comuna VALUES (46,'Alhué');
INSERT INTO Comuna VALUES (47,'San Pedro');
INSERT INTO Comuna VALUES (48,'Talagante');
INSERT INTO Comuna VALUES (49,'Peñaflor');
INSERT INTO Comuna VALUES (50,'Isla de Maipo');
INSERT INTO Comuna VALUES (51,'El Monte');
INSERT INTO Comuna VALUES (52,'Padre Hurtado');

INSERT INTO empleado(rut_empleado,nombres,apellidos,fecha_nacimiento,telefono,id_comuna,correo,activo) VALUES('11','Benjamin','Mora','2018-06-30',9999,1,'benja@gmail.com',1);
INSERT INTO control_empleado(usuario,clave,id_tipo,id_empleado,activo) VALUES('benjamin','benjamin',1,1,1);

INSERT INTO empleado(rut_empleado,nombres,apellidos,fecha_nacimiento,telefono,id_comuna,correo,activo) VALUES('12','Sebastian','orrego','2018-06-30',9999,3,'Seba@gmail.com',1);
INSERT INTO control_empleado(usuario,clave,id_tipo,id_empleado,activo) VALUES('sebastian','sebastian',3,2,1);

INSERT INTO empleado(rut_empleado,nombres,apellidos,fecha_nacimiento,telefono,id_comuna,correo,activo) VALUES('13','Patricia','Campos','2018-06-30',9999,3,'pati@gmail.com',1);
INSERT INTO control_empleado(usuario,clave,id_tipo,id_empleado,activo) VALUES('patricia','patricia',3,3,1);
