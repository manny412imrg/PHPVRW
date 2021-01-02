/* 
-------- SUBCONSULTAS-------------
- SON CONSULTAS QUE SE EJECUTAN DENTRO DE OTRAS
- CONSISTE EN UTILIZAR LOS RESULTADOS DE LA SUBCONSULTA PARA OPERAR EN LA CONSULTA PRINCIPAL
-JUGANDO CON LAS CLAVES FORANEAS (CLAVES AJENAS)
 */
#sacame todos los usuarios cuando el id (que este recorriendo en estos momentos) exista en los usuarios_id que haya en la tabla de entrada#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas); 

SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas); 

#SACAR LOS USUARIOS QUE TENGAS ALGUNA ENTRADA QUE EN SU TITULO HABLE DE WOW#

SELECT nombre, apellido FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%WOW%');

#SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE#

SELECT titulo from entradas WHERE categoria_id IN (SELECT id from categorias WHERE nombre = 'ACCION');

#MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS#

SELECT * FROM categorias WHERE id IN
                    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 4);

#MOSTRA LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES#

SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=1);

#MOSTRAR EL NOMBRE DE EL USUARIO QUE TENGA MAS ENTRADAS#

SELECT CONCAT(nombre,' ', apellido) AS 'Usuario con mas entradas' FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#MOSTRAR LAS CATEGORIAS SIN ENTRADAS#

SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);