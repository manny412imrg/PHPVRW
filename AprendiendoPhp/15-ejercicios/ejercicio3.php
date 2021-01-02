<?php

/* 
Hacer un programa que compruebe si una variable está vacía y si está vacía 
rellenarla con texto en minuscula y mostrarlo en mayusculas
 */

$variable = "   ";

if(!empty(trim($variable))){
    echo 'tiene contenido';
}else{
    echo 'vacio';
    $variable = "contenido";
    echo ' ahora tiene contenido'.'<br>';
}
echo strtoupper($variable);