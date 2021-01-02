<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [2,1,4,5,3,7,2];


//Buscar dentro de un array

$resul = array_search('Alfredo', $cantantes);
var_dump($resul);


//Ordenar Arrays


asort($numeros);
sort($cantantes);
var_dump ($numeros);

//Añadir elementos a un Array
$cantantes[] = "natos";
$cantantes[] = "natos";
array_push($cantantes, "Wow");

//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice = array_rand($cantantes);

echo $cantantes[$indice];

var_dump ($cantantes);

//Dar la vuelta 

$numeros = array_reverse($numeros);
var_dump($numeros);

//Contar numeros de elementos

echo count($numeros);
echo sizeof($numeros);