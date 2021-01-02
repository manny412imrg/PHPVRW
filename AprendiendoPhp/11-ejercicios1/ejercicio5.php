<?php

/*
  Hacer un programa que muestre todos los numero entre 2 numeros que nos lleguen por la URL usando _GET
 */

if (isset($_GET['numer']) && isset($_GET['numer2']) && ($_GET['numer'])!=($_GET['numer2'])) {

    $numero1 = $_GET['numer'];
    $numero2 = $_GET['numer2'];

    //$diferencia = (abs($numero1-$numero2)-1);

    if ($numero1 >= $numero2) {
        $diferencia = $numero1 - $numero2 - 2;
        $numero = $numero2 + 1;
    } else {
        $diferencia = $numero2 - $numero1 - 2;
        $numero = $numero1 + 1;
    }

    for ($i = 0; $i <= $diferencia; $i++) {
        echo $numero . '<br>';
        $numero++;
    }
} 
else {
    echo 'escribe bien los numeros';
}
