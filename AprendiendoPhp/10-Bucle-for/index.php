<?php

/* 
 FOR
 * 
 * for (expresion inicial, condicion, incremento del contador(expresion inicial)){
         Bloques de instrucciones
    }
 */

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
    //echo "<p>$resultado</p>";
    
};


echo "<h1>El resultado es: $resultado</h1>";
$numero = 45;

// Tabla de multiplicar con el bucle for

for ($contador = 1; $contador <= 10; $contador++){
    
    if($numero == 45){
        echo 'no se puede mostrar estas operaciones';
        break;
    }
    echo "$numero x $contador = ".($numero*$contador).'<br>';
}