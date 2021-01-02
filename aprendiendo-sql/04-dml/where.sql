# consulta con una condicion#

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*

OPERADORES DE COMPARACION

igual           =
distinto        !=
menor que       <
mayor que       >
menor o igual   <=
mayor o igual   >=
entre           between A and B
En              in
es nulo         is null
no nulo         is not null
como            like
no es como      not like


OPERADORES LOGICOS
O       OR
Y       AND
NO      NOT

COMODINES
cualquier cantidad de caracteres:       %
un caracter desconocido:                _

*/
#ejemplos#

#mostrar nombre y apellidos de todos los usuarios registrados en 2019

SELECT nombre, apellido from usuarios WHERE YEAR(fecha) = 2019;

#MOSTRAR TODOS LOS USUARIOS QUE NO SE HAN REGISTRADO EN 2019

SELECT nombre, apellido from usuarios WHERE YEAR(fecha) != 2019 OR isnull(fecha);

#MOSTRAR LOS REGISTROS DE LA TABLA QUE TODOS LOS USUARIOS QUE CONTENGAN LA LETRA A EN EL APELLIDO Y SU CONTRASEñA SEA 1234#

SELECT email FROM usuarios WHERE apellido LIKE '%a%' and password = '1234';

#SACAR TODOS LOS REGISTROS DE LA TABLA USUARIO CUYOS AñOS SEAN PAR#

SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

#SACAR TODOS LOS REGISTROS DE LA TABLA USUARIOS CUYO NOMBRE TENGA MAS DE 5 LETRAS Y ADEMAS QUE SE HAYAN REGISTRADO ANTES DEL 2020 y mostrar el nombre en mayuscula#

SELECT UPPER(nombre), apellido FROM usuarios WHERE (LENGTH(nombre) > 5 AND YEAR(fecha) < 2020);

#ORDENAR LOS REGISTROS#

SELECT UPPER(nombre), apellido FROM usuarios ORDER BY fecha DESC;
SELECT UPPER(nombre), apellido FROM usuarios ORDER BY fecha ASC;

SELECT UPPER(nombre), apellido FROM usuarios LIMIT 2;
SELECT UPPER(nombre), apellido FROM usuarios LIMIT 0,4;