#MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA#

SELECT  email, nombre, apellido FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#

SELECT * FROM usuarios;

#OPERADORES ARITMETICOS#

SELECT email, (4*2+7-12) AS 'operacion' FROM usuarios;
SELECT id, email, (id+7) AS 'operacion' FROM usuarios ORDER BY id DESC;

#FUNCIONES MATEMATICAS#

SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;

#FUNCIONES CON CARACTERES#

SELECT nombre FROM usuarios;
SELECT fecha, curdate() FROM usuarios;
SELECT length(nombre) as 'numeros' FROM usuarios;
SELECT ifnull(apellido, 'esta vacio') as 'nombres' FROM usuarios;