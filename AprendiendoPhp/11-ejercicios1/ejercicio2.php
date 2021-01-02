<?php

/* 
Sacar todo los numero pares del 1 al 100
 */
$numero = 1;
$numero2 = 1;
$resul = 0;
$numero3 = 0;
while($numero<101){
    $resul = ($numero % 2);
    if($resul == 0){
        echo "$numero".' ,';
    }
    $numero++;
}
$numero3++;
echo '<br>';
echo 'este es el ejercicio con for';
for($i = 0; $i <= 100; $i++){
    $resul = ($numero2 % 2);
    if($resul == 0){
        echo "$numero2".' ,';
    }
    $numero2++;
}
$numero3++;
echo "$numero3";