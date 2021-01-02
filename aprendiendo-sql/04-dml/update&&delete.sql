#MODIFICAR FILAS / ACTUALIZAR DATOS#

UPDATE usuarios SET fecha = curdate() WHERE nombre = NULL;

#BORRAR REGISTROS#

DELETE FROM usuarios where email = 'admin@gmail.com';