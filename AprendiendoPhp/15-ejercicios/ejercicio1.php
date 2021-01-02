<?php

/* 
Hacer un programa que tenga un array con 8 numeros enteros
 * 1.- Recorrer y mostrarlo
 * 2.- Ordenarlo y mostrarlo
 * 4.- Mostrar su longitur
 * 5.- Buscar algun elemento
 */

$arraisito = [21,72,13,54,65,16,27,68];
echo '<ul>';
foreach ($arraisito as $arraisote){
    echo '<li>'.$arraisote.'</li>';
}
echo '</ul>';

sort($arraisito);

echo '<ul>';
foreach ($arraisito as $arraisote){
    echo '<li>'.$arraisote.'</li>';
}
echo '</ul>';

echo count($arraisito);

$arraisote = array_search( 54 , $arraisito);


if(!empty($arraisote)){
    var_dump($arraisote);
}else{echo "el numero no existe";}
