<?php

/* 
//Bucle While
 * es una estructura de control que itera o repite la ejecucion de una serie de 
 * instrucciones muchas veces o tantas veces como sea necesario en base a una 
 * condicion que el bucle lleva
 */

/*
while(condicion){bloque de instrucciones}
*/
$numero = 0;
while($numero <= 100){
    echo $numero;
    if($numero != 100){
        echo ', ';
    }
    $numero++;
    //echo '<br>';
};
echo '<hr>';
//ejemplo

if (isset($_GET['numero'])){
    //'castear' o cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{$numero = 1;};

echo '<h1> Tabla de multiplicar del numero $numero</h1>';

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador =".($numero*$contador).'<br>';
    $contador++;
}
echo '<br>';

/*DO WHILE
do{
    //bloque de instrucciones
}while(condicion);
 */
$edad = 17;
$contador = 1;


do{
    echo "tienes acceso al local privado $contador";
    echo '<hr>';
    $contador++;
}while($edad >= 18 && $contador <= 10);
