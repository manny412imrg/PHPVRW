/* 
1.- DISEñAR Y CREAR LA BASE DE DATOS DE UN CONSENCIONARIO
 */

CREATE DATABASE IF NOT EXISTS concesionario;

USE concesionario;

CREATE TABLE COCHES (
id                  int(10) auto_increment not null,
modelo              varchar(100) not null,
marca               varchar(50),
precio              int(255) not null,
stock               int(255) not null,
CONSTRAINT pk_coche PRIMARY KEY (id) 
)ENGINE = InnoDB;


CREATE TABLE GRUPOS(
id                  int(10) auto_increment not null,
nombre              varchar(100) not null,
ciudad              varchar(100) not null,


CONSTRAINT pk_grupo PRIMARY KEY(id)
)ENGINE = InnoDB;

CREATE TABLE VENDEDORES(
id                  int(10) auto_increment not null,
grupo_id            int(10) not null,
nombre              varchar(100) not null,
apellidos           varchar(150) not null,
cargo               varchar(50) not null,
fecha_alta          date not null,
sueldo              float(20,2) not null,
comision            float(10,2) not null,
jefe                varchar(100) not null,


CONSTRAINT pk_vendedor PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES GRUPOS(id)
)ENGINE = InnoDB;


CREATE TABLE CLIENTES(
id                  int(10) auto_increment not null,
vendedor_id         int(10) not null,
nombre              varchar(100) not null,
ciudad              varchar(100) not null,
gastado             int(255) not null,
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES VENDEDORES(id),
CONSTRAINT pk_cliente PRIMARY KEY(id)
)ENGINE = InnoDB;





CREATE TABLE ENCARGOS(
id                  int(10) auto_increment not null,
cliente_id          int(10) not null,
coche_id            int(10) not null,
cantidad            int(255) not null,
fecha               date not null,
CONSTRAINT pk_encargo PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES CLIENTES(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES COCHES(id)
)ENGINE = InnoDB;








#RELLENAR LA BASE DE DATOS CON INFORMACION - INSERT#

#COCHES
INSERT INTO COCHES VALUES(NULL, 'RENAULT CLIO', 'RENAULT', 12000, 13);
INSERT INTO COCHES VALUES(NULL, 'SEAT PANDA', 'SEAT', 15000, 6);
INSERT INTO COCHES VALUES(NULL, 'MERCEDES RANCHERA', 'MERCEDES BENZ', 8700, 21);
INSERT INTO COCHES VALUES(NULL, 'PORCHE CAYENE', 'PORCHE', 11000, 9);
INSERT INTO COCHES VALUES(NULL, 'NISSAN TERRANO', 'NISSAN', 8500, 25);
INSERT INTO COCHES VALUES(NULL, 'NISSAN AUTRALIA', 'NISSAN', 12000, 10);
INSERT INTO COCHES VALUES(NULL, 'DODGE GIABARA', 'DODGE', 11200, 7);
INSERT INTO COCHES VALUES(NULL, 'DODGE RATE', 'DODGE', 19000, 5);
INSERT INTO COCHES VALUES(NULL, 'AUDI DIA', 'AUDI', 27000, 5);
INSERT INTO COCHES VALUES(NULL, 'AUDI GAYA', 'AUDI', 12000, 10);
INSERT INTO COCHES VALUES(NULL, 'AUDI STAR', 'AUDI', 10000, 8 );
INSERT INTO COCHES VALUES(NULL, 'AUDI ELEC', 'AUDI', 22000, 5);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA ROCKET', 'TOYOTA', 14000, 17);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA A6', 'TOYOTA', 20000, 8);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA N51', 'TOYOTA', 27000, 3);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA SUBARU', 'TOYOTA', 14000, 6);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA ASSS', 'TOYOTA', 12000, 10);
INSERT INTO COCHES VALUES(NULL, 'TOYOTA R3', 'TOYOTA', 10000, 8);

#GRUPOS

INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES A', 'SANTA CRUZ');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES B', 'SANTA CRUZ');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES C', 'SANTA CRUZ');
INSERT INTO GRUPOS VALUES(NULL, 'DIRECTORES', 'SANTA CRUZ');
INSERT INTO GRUPOS VALUES(NULL, 'MECANICOS', 'SANTA CRUZ');

INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES A', 'TARIJA');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES B', 'TARIJA');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES C', 'TARIJA');
INSERT INTO GRUPOS VALUES(NULL, 'DIRECTORES', 'TARIJA');
INSERT INTO GRUPOS VALUES(NULL, 'MECANICOS', 'TARIJA');

INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES A', 'BENI');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES B', 'BENI');
INSERT INTO GRUPOS VALUES(NULL, 'VENDEDORES C', 'BENI');
INSERT INTO GRUPOS VALUES(NULL, 'DIRECTORES', 'BENI');
INSERT INTO GRUPOS VALUES(NULL, 'MECANICOS', 'BENI');

#VENDEDORES

INSERT INTO VENDEDORES VALUES(NULL, 1, 'DAVID', 'MATURANA', 'RESPONSABLE DE VENTAS', CURDATE(), 60000, 4, 'IVAN');
INSERT INTO VENDEDORES VALUES(NULL, 5, 'JUAN', 'QUINTANILLA', 'JEFE MECANICO', CURDATE(), 48000, 2, 'IVAN');
INSERT INTO VENDEDORES VALUES(NULL, 3, 'OLIVER', 'SALGUERO', 'VENDEDOR', CURDATE(), 18500, 0, 'IVAN');
INSERT INTO VENDEDORES VALUES(NULL, 2, 'JOSE', 'ROJAS', 'VENDEDOR', CURDATE(), 18000, 0, 'IVAN');
INSERT INTO VENDEDORES VALUES(NULL, 4, 'IVAN', 'ROMERO', 'DIRECTOR', CURDATE(), 120000, 10, 'IVAN');

#CLIENTES

INSERT INTO 

#ENCARGOS