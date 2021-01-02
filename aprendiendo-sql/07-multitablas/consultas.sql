/* 

CONSULTA MULTITABLA:

SON CONSULTAS QUE SIRVEN PARA CONSULTAR VARIAS TABLAS EN UNA SOLA SENTENCIA

 */

#MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL USUARIO, EL NOMBRE DEL AUTOR, EL NOMBRE DE LA CATEGORIA#

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'categoría' FROM entradas e, usuarios u,categorias c WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#MOSTRAR EL NOMBRE DE LA CATEGORIA Y AL LADO CUANTAS ENTRADAS TIENEN#

SELECT c.nombre, COUNT(e.id) as 'ID C' FROM categorias c, entradas e WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

#MOSTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN#

SELECT COUNT(titulo) AS 'Numero de entradas', u.email FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

#INNER JOIN (Los mismos ejercicios) LEFT JOIN#

SELECT e.id, e.titulo, u.nombre AS 'Autor' FROM entradas e INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;

SELECT c.nombre, COUNT(e.id) as 'ID C' FROM categorias c LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY categoria_id;

SELECT c.nombre, COUNT(e.id) as 'ID C' FROM entradas e RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY categoria_id;