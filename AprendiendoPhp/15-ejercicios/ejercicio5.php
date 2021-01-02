<?php
include 'includes/accion.php';
include 'includes/aventura.php';
include 'includes/deporte.php';
/*
  Crear un array con el contenido de la tabla
 * 
 * ACCCION  AVENTURA    DEPORTE
 * GTA      ASSASIN     FIFA
 * COD      CRASH       PES
 * PUGB     PRINCE      MOTO GP
  cada columna que venga en un fichero separado (includes)
 *  */

$ex = [
    'ACCION' => $accion,
    'AVENTURA' => $aventura,
    'DEPORTES' => $deportes
];

var_dump($ex);
$titulos = (array_keys($ex));
var_dump($titulos);

foreach($titulos as $titulo){
    foreach ($ex[$titulo] as $titulo){
        var_dump($titulo);
    }
}

?>

<table border="1">
    <thead>
        <tr>
            <?php foreach($titulos as $titulo):?>
                <th><?=$titulo?></th>
            <?php endforeach;?>

        </tr>
    </thead>
    <tbody>
        <tr>
            
            <?php ?>

            
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
