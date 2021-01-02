<?php

/*
 * condicionales
 * IF
 * if(condicion){instrucciones}
 * else{otras instrucciones}
 * 
 * 
 * //operadores de comparacion
 * == igual
 * ===identico
 * != diferente
 * <>diferente
 * >mayor que
 * >= mayor o igual
 * <menor que
 * a <= b a menor o igual que b
 * 
 * //operadores logicos
 * 
 * && and
 * || or
 *  ! no
 * and and
 * or or
 * 
 */

$color = 'verde';
if ($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'el color no es rojo';
}
echo '<br>';

$year = 2019;
if ($year < 2019) {
    echo 'estamos en el 2019';
} else {
    echo 'no estamos en el 2019';
}
echo '<br>';
//Ejemplo 3


$continente = 'Europa';
$ciudad = "Madrid";
$nombre = "David Extremadura";
$edad = 32;
$mayoria_edad = 18;

if ($edad > 18) {
    echo '<h2>' . $nombre . ' es mayor de edad' . '</h2>';
    echo '<h3> y es de ' . $ciudad;
    if ($continente == 'Europa') {
        echo ' es de madrid';
    } else {
        echo ' no es Europeo';
    };
} else {
    echo $nombre . 'es menor de edad';
}
echo '<br>';
//ejemplo 4
$dia = 4;
if ($dia == 1) {
    echo 'el dia es lunes';
} elseif ($dia == 2) {
    echo 'es martes';
} elseif ($dia == 3) {
    echo 'es miercoles';
} elseif ($dia == 4){
    echo 'es jueves';
}
//ejemplo 4 con switch
echo '<hr>';
switch ($dia){
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    default:
        echo 'fin de semana';
}
echo '<br>';
//GOTO
goto marca;
echo '<h3>instruccion 1</h3>';
echo '<h3>instruccion 2</h3>';
echo '<h3>instruccion 3</h3>';
echo '<h3>instruccion 4</h3>';

marca:
    echo 'me he saltado 4 echos';
    
//ejemplo 5
$edad1 = 18;
$edad2 = 64;

$edad_oficial = 18;
echo '<hr>';
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'esta en la edad oficial para trabajar';
}else{
    echo 'es un invalido';
}
echo '<br>';

$pais = 'mexico';

if($pais == 'mexico' || $pais == 'españa' || $pais == 'colombia'){
    echo 'En este pais se habla español';
}else{
    echo 'no se habla español';
}
