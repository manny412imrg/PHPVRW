<?php

/* 
Variables locales.- Las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro, a no ser que haga un return.
Variables Globales.- Las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 */

//variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;
}


echo holaMundo().'<br>';

//funciones variables

function buenasDias(){
    return "Hola! Buenos dias ";
}
function buenasTardes(){
    return "Hey!! Que tal la comida"; 
}
function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas noches!!";
}

//$horario = $_GET['horario'];
$horario = 'Tardes';
$mi = "buenas".$horario;
echo $mi().'<br>';
echo time().'<br>';

echo date("d-M-y");

//Matematicas
echo '<br>';
echo "Raiz cuadrada de 10: ".sqrt(10);
echo '<br>';
echo "Numero aleatorio entre 10 y 40".rand(1,20);
echo '<br>';
echo "Numero pi".pi();
echo '<br>';
echo 'El redondeo es: '.round(3.4292, 2);



//Mas funciones generales



echo '<br>';
echo gettype($frase);
echo '<br>';

//Eliminar variables / indice
$year = 2020;
unset($year);

//comprobar variable vacia y trim para borrar espacios
$texto = "  ";
if(empty(trim($texto))){
    echo "La variable esta vacía";
} else {
    echo "La variable tiene contenido";
}
echo '<br>';

//Contar caracteres de un string
$cadena = 12345;
echo strlen($cadena).'<br>';
echo '<br>';

//Encontrar caracter
$frase = "La vida es bella";

echo strpos($frase, "vida");

//remplazar contenido de un string
echo '<br>';
echo str_replace("vida", "moto", $frase);

//Mayus y minus
echo '<br>';
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);