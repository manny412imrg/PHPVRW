<?php
/*
//abrir archivo
$archivo = fopen('fichero.txt', 'a+');

//leer contenido

while (!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido.'<br>';
}

//escribir en un archivo

fwrite($archivo, '**soy un archivo de php**');


//cerrar archivo
fclose($archivo);
 * 
 */
//copiar un fichero txt
//copy('fichero.txt', 'fichero_copy.txt')or die('error al copiar');

//cambiar el nombre
//rename('fichero.txt', 'archivito_recopiadito.txt');

//eliminar
//unlink("archivito_recopiadito.txt") or die('error al eliminar');

if(file_exists("fichero_copy.txt")){
    echo 'el archivo existe';
}else{
    echo 'el archivo no existe';
}