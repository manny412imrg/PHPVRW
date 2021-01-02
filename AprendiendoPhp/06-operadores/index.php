<?php

/* 
Operadores Aritmeticos
 */
$numero1 = 45;
$numero2 = 10;

echo '<h2>'.'estas son las operaciones basicas'.'</h2>';
echo 'Suma: '.($numero1+$numero2).'<br>';
echo 'Resta: '.($numero1-$numero2).'<br>';
echo 'Producto: '.($numero1*$numero2).'<br>';
echo 'Divicion: '.($numero1/$numero2).'<br>';
echo 'Resto: '.($numero1%$numero2).'</br>';

// Operadores incremento y decremento

$year = 2019;
//incremento (pre-incremento ++$year)
$year++;
//decremento (pre-decremento $year = 1 - $year)
$year = $year - 1;

echo'<h1>'.$year.'</h1>';

//operadores de asignacion

$edad = 55;
echo $edad.'<br>';
//$edad = $edad + 5
echo 'la edad es '.($edad+5).'<br>';
echo 'la edad es '.($edad-5);