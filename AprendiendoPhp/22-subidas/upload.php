<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/png' || $tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/gif'){
    
    if(!is_dir('images')){
        mkdir('images', 0777);
        header("Refresh: 5; URL = index.php");
    };
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    echo '<h1>Exito al subir el archivo</h1>';
    header("Refresh: 5; URL = index.php");
}else{
    header("Refresh: 5; URL = index.php");
    echo '<h1>sube el archivo correcto por favor</h1>';
}


die();