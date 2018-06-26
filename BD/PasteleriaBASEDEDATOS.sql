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
    precio          INTEGER NOT NULL
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
INSERT INTO tipo_usuario VALUES(4,'DESPACHO');

INSERT INTO forma_pago VALUES(0,'');
INSERT INTO forma_pago VALUES(1,'EFECTIVO');
INSERT INTO forma_pago VALUES(2,'TARJETA');

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

INSERT INTO empleado VALUES(1,'11','Benjamin','Mora','2018-06-30',9999,1,'benja@gmail.com',1);
INSERT INTO control_empleado VALUES(1,'benjamin','benjamin',1,1,1);

INSERT INTO empleado VALUES(2,'12','Sebastian','orrego','2018-06-30',9999,3,'Seba@gmail.com',1);
INSERT INTO control_empleado VALUES(2,'sebastian','sebastian',2,2,1);

INSERT INTO empleado VALUES(3,'13','Patricia','Campos','2018-06-30',9999,3,'pati@gmail.com',1);
INSERT INTO control_empleado VALUES(3,'patricia','patricia',3,3,1);

INSERT INTO empleado VALUES(4,'14','Rodrigito','Aranguiz','2018-06-30',9999,3,'rori_69@brazzers.cl',1);
INSERT INTO control_empleado VALUES(4,'rodrigo','rodrigo',4,4,1);

INSERT INTO categoria VALUES(1,'Tortas',1);
INSERT INTO categoria VALUES(2,'Masas',1);
INSERT INTO categoria VALUES(3,'Galletas',1);
INSERT INTO categoria VALUES(4,'Cocteleria',1);
INSERT INTO categoria VALUES(5,'Dulceria',1);
INSERT INTO categoria VALUES(6,'Bebestible',1);

INSERT INTO producto VALUES(1,'100','Torta de castaña','Tortas/tor_castano.jpg','',1,1);
INSERT INTO producto VALUES(2,'101','Kuchen de mermelada de frutilla','Tortas/tor_kuchen_quesillo.jpg','',1,1);
INSERT INTO producto VALUES(3,'102','Torta de Chocolate','Tortas/tor_mazapan_chocolate.jpg','',1,1);
INSERT INTO producto VALUES(4,'103','Torta Mil Hoja','Tortas/tor_mil_hojas.jpg','',1,1);
INSERT INTO producto VALUES(5,'104','Torta de panqueque Frambuesa','Tortas/tor_panqueque.jpg','',1,1);
INSERT INTO producto VALUES(6,'105','Torta tres leche','Tortas/tor_tres_leches.jpg','',1,1);

INSERT INTO producto_precio VALUES (1,1,'20 PP / $25.000',25000);
INSERT INTO producto_precio VALUES (2,2,'20 PP / $15.000',15000);
INSERT INTO producto_precio VALUES (3,3,'20 PP / $20.000',20000);
INSERT INTO producto_precio VALUES (4,3,'30 PP / $25.000',25000);
INSERT INTO producto_precio VALUES (5,3,'50 PP / $35.000',35000);
INSERT INTO producto_precio VALUES (6,4,'20 PP / $25.000',25000);
INSERT INTO producto_precio VALUES (7,4,'30 PP / $29.000',29000);
INSERT INTO producto_precio VALUES (8,4,'50 PP / $37.000',37000);
INSERT INTO producto_precio VALUES (9,5,'20 PP / $25.000',25000);
INSERT INTO producto_precio VALUES (10,5,'30 PP / $29.000',29000);
INSERT INTO producto_precio VALUES (11,5,'50 PP / $37.000',37000);
INSERT INTO producto_precio VALUES (12,6,'20 PP / $15.000',15000);
INSERT INTO producto_precio VALUES (13,6,'30 PP / $25.000',25000);
INSERT INTO producto_precio VALUES (14,6,'50 PP / $35.000',35000);

INSERT INTO producto VALUES(7,'200','Chaparrita','Masas/chaparrita.jpg','',1,2);
INSERT INTO producto VALUES(8,'201','Pascualina','Masas/pascualina.jpg','',1,2);
INSERT INTO producto VALUES(9,'203','Empanada de mill hoja','Masas/hoja.jpg','',1,2);
INSERT INTO producto VALUES(10,'204','Empanada de pollo','Masas/pollo_empanada.jpg','',1,2);
INSERT INTO producto VALUES(11,'205','Empanada de pino','Masas/pino.jpg','',1,2);
INSERT INTO producto VALUES(12,'206','Pizza','Masas/pizza.jpg','',1,2);

INSERT INTO producto_precio VALUES (15,7,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (16,8,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (17,9,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (18,10,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (19,11,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (20,12,'1 unidad / $1.000',1000);

INSERT INTO producto VALUES(13,'300','Galletas de castaño','Galletas/castano_250.jpg','',1,3);
INSERT INTO producto VALUES(14,'301','Cocadas','Galletas/cocadas.jpg','',1,3);
INSERT INTO producto VALUES(15,'303','Galletas danesas','Galletas/danesa.jpg','',1,3);
INSERT INTO producto VALUES(16,'304','Lenguas Finas','Galletas/galletas_finas.jpg','',1,3);
INSERT INTO producto VALUES(17,'305','Mini brownie','Galletas/mini_brownie.jpg','',1,3);
INSERT INTO producto VALUES(18,'306','Mini Muffin','Galletas/mini_muffin.jpg','',1,3);

INSERT INTO producto_precio VALUES (21,13,'1 unidad / $500',500);
INSERT INTO producto_precio VALUES (22,14,'1 unidad / $300',300);
INSERT INTO producto_precio VALUES (23,15,'1 unidad / $600',600);
INSERT INTO producto_precio VALUES (24,16,'1 unidad / $140',140);
INSERT INTO producto_precio VALUES (25,17,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (26,18,'1 unidad / $700',700);

INSERT INTO producto VALUES(19,'400','Canape especial','Cocteleria/canape_especial_36_unidades.jpg','',1,4);
INSERT INTO producto VALUES(20,'401','Canape Fino','Cocteleria/canape_fino_34_unidades.jpg','',1,4);
INSERT INTO producto VALUES(21,'403','Empanaditas','Cocteleria/empanaditas_12_unidades.jpg','',1,4);
INSERT INTO producto VALUES(22,'404','Mini miga','Cocteleria/mini_miga_32_unidades.jpg','',1,4);
INSERT INTO producto VALUES(23,'405','Pizzas para coctel','Cocteleria/pizza_coctel_15_unidades.jpg','',1,4);
INSERT INTO producto VALUES(24,'406','Tapaditos','Cocteleria/tapadito_copihue_16_unidades.jpg','',1,4);

INSERT INTO producto_precio VALUES (27,19,'26 unidades / $8.000',8000);
INSERT INTO producto_precio VALUES (28,20,'34 unidades / $10.000',10000);
INSERT INTO producto_precio VALUES (29,21,'12 unidades / $7.000',7000);
INSERT INTO producto_precio VALUES (30,22,'32 unidad / $9.000',9000);
INSERT INTO producto_precio VALUES (31,23,'15 unidades / $6.000',6000);
INSERT INTO producto_precio VALUES (32,24,'16 unidades / $12.000',12000);

INSERT INTO producto VALUES(25,'500','Queque Marihuana','Dulceria/aranda_.jpg','',1,5);
INSERT INTO producto VALUES(26,'501','Berlin','Dulceria/berlin.jpg','',1,5);
INSERT INTO producto VALUES(27,'503','Brownie','Dulceria/brownie.jpg','',1,5);
INSERT INTO producto VALUES(28,'504','Rosquilla de Canela','Dulceria/canela_rosquilla_caja_.jpg','',1,5);
INSERT INTO producto VALUES(29,'505','Cubierto de manjar','Dulceria/canolo.jpg','',1,5);
INSERT INTO producto VALUES(30,'506','Chilenito','Dulceria/cocado.jpg','',1,5);
INSERT INTO producto VALUES(31,'507','Delicias','Dulceria/delicia.jpg','',1,5);
INSERT INTO producto VALUES(32,'508','Donuts','Dulceria/donuts.jpg','',1,5);
INSERT INTO producto VALUES(33,'509','Media luna','Dulceria/media.jpg','',1,5);
INSERT INTO producto VALUES(34,'510','Medocino','Dulceria/mendocino.jpg','',1,5);
INSERT INTO producto VALUES(35,'511','Negrito','Dulceria/negrito.jpg','',1,5);
INSERT INTO producto VALUES(36,'512','Pan de Miel','Dulceria/pan_de_miel.jpg','',1,5);
INSERT INTO producto VALUES(37,'513','Dulce de Rollo','Dulceria/rollo.jpg','',1,5);


INSERT INTO producto_precio VALUES (33,25,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (34,26,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (35,27,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (36,28,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (37,29,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (38,30,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (39,31,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (40,32,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (41,33,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (42,34,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (43,35,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (44,36,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (45,37,'1 unidad / $1.000',1000);



INSERT INTO producto VALUES(38,'600','Coca-Cola Lata','Bebestibles/coca.png','',1,6);
INSERT INTO producto VALUES(39,'601','Fanta Lata','Bebestibles/fanta.jpg','',1,6);
INSERT INTO producto VALUES(40,'603','Pepsi Lata','Bebestibles/pepsi.jpg','',1,6);
INSERT INTO producto VALUES(41,'604','Sprite','Bebestibles/sprite.jpg','',1,6);
INSERT INTO producto VALUES(42,'605','RedBull','Bebestibles/redbull.jpg','',1,6);
INSERT INTO producto VALUES(43,'606','Monster','Bebestibles/m1.jpg','',1,6);
INSERT INTO producto VALUES(44,'607','Monster Normal','Bebestible/m1.jpg','',1,6);

INSERT INTO producto_precio VALUES (46,38,'1 unidad / $1.500',1500);
INSERT INTO producto_precio VALUES (47,39,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (48,40,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (49,41,'1 unidad / $1.000',1000);
INSERT INTO producto_precio VALUES (50,42,'1 unidad / $2.000',2000);
INSERT INTO producto_precio VALUES (51,43,'1 unidad / $3.000',3000);
INSERT INTO producto_precio VALUES (52,44,'1 unidad / $1.000',1000);


