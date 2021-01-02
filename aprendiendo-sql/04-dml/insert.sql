#Insertar nuevos registros#

INSERT INTO usuarios VALUE(null,'Nose','Lopez', 'lopez@gmail.com', 'password', '2019-02-05');
INSERT INTO usuarios VALUE(null,'Anton','Marines', 'martines@gmail.com', 'password', '2019-01-21');
INSERT INTO usuarios VALUE(null,'Victor','Paco', 'paco@gmail.com', 'password', '2019-02-11');

#Insertar filas solo con ciertas columnas#

INSERT INTO usuarios(email, password) VALUE('admin@gmail.com', 'admin');

