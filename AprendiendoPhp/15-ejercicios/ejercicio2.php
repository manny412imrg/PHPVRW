<?php

/* 
Escribir un programa con php que añada valores a un array 
mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
 */

$conunt = 1;
$valores;

for($i=0; $i <= 120; $i++){
    array_push($valores, "elementos -".$i);
}
var_dump($valores);