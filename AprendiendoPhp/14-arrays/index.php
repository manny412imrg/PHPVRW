<?php

/* 
Array.- Es una coleccion de datos/valores, bajo un unico nombre.
 * y para acceder a esos valores podemos usar un indice numerico o alfanumerico
 */
$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El Señor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'victoroblesweb.com'
);

// recorrer con for

echo "<h1> Listado de peliculas </h1>";
echo "<ul>";
for( $i=0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo "</ul>";

//recorrer con for each
echo '<ul>';
foreach($cantantes as $cantante){
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

//Array multidimencionales

$contactos = [
    array (
        'nombre' => 'antonio',
        'email' => 'antonioweb'
    ),
    array(
        'nombre' => 'luis',
        'email' => 'luis@web'
    ),
    array(
        'nombre' => 'salvador',
        'email' =>  'salvador.com'
    )    
];
foreach ($contactos as $contacto){
    echo $contacto['nombre'].'<br>';
} 