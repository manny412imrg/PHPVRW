<?php

/* 
 * FUNCIONES:
Conjunto de ordenes agrupados con un nombre en concreto t qye oyedeb reutilizarse solamente invocando tantas veces como queramos.
 * 
 * //Declarar funcion
 * funcion NombreDeMiFuncion($parametros){
 * Bloque / conjunto de instrucciones}
 * 
 * //Para llamar a la funcion
 * NombreDeMiFuncion($parametros);
 */
//Ejemplo 1

function MuestraNombre(){
    echo 'Victor<br>';
    echo 'Ivn<br>';
    echo 'Roberto<br>';
    echo 'Jose<br>';
    echo '<hr>';
}
MuestraNombre();
MuestraNombre();

function tabla($numero){
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";
    for($i=1; $i <= 10; $i++){
        echo $numero*$i.'<br>';
        
    }
}
if(isset($_GET['numer'])){
tabla($_GET['numer']);
}else{
    echo 'No existe numero';
}
function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $divicion = $numero1/$numero2;
    
    if($negrita){
        echo "<h1>";
    }
    
    echo "Suma: $suma <br>";
    echo "resta: $resta <br>";
    echo "multiplicacion: $multiplicacion <br>";
    echo "divicion: $divicion <br>";
    echo "<hr>";
        if($negrita){
        echo "</h1>";
    }
    
}
calculadora(10, 30, true);


function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellido($nombre){
    $texto = "El apellido es : $nombre";
    return $texto;
}

function devuelve($nombre, $apellido){
    
    $texto = getNombre($nombre).getApellido($apellido);
    return $texto;
}
echo(devuelve('ivan', 'romero'));

