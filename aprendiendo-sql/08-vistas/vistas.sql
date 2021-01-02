/* 
VISTAS
LAS PODEMOS DEFINIR COMO UNA CONSULTA ALMACENADA EN LA BASE DE DATOS QUE SE 
UTILIZACOMO UNA TABLA VIRTUAL Y NO ALMACENA DATOS SINO QUE UTILIZA ASOCIACIONES 
Y LOS DATOS DE LAS TABLAS ORIGINALES DE FORMA QUE SIEMPRE SE MANTIENE 
ACTUALIZADA
 */

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor' FROM entradas e INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;