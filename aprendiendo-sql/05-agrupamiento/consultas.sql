#consulta de agrupamiento#

SELECT COUNT(titulo) as 'NRO DE ENTRADAS',categoria_id FROM entradas GROUP by categoria_id;

#CONDICION DENTRO DE CONSULTA DE AGRUPAMIENTO#

SELECT COUNT(titulo) as 'NRO DE ENTRADAS',categoria_id FROM entradas GROUP by categoria_id HAVING COUNT(titulo) >= 4;

/*
*** funciones de agrupamientos ***
AVG         CONDICION QUE PERMITE SACAR LA MEDIA
COUNT       CONTAR EL NRO DE ELEMENTOS
MAX         VALOR MAXIMO
MIN         VALOR MINIMO
SUM         SUMAR EL CONTENIDO DEL GRUPO
*/

SELECT AVG(id) AS 'medias id' FROM entradas;

SELECT MAX(id) AS 'usuario maximo id', titulo FROM entradas;

SELECT MIN(id) AS 'usuario maximo id' FROM entradas;