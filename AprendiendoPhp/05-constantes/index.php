<?php

/* 
constantes.- Es un contenedor de informacion que no puede variar
 */

define('nombre', 'Ivan Romero G');
define('web', 'Ivan Romero Web');



$web = "ivan romero web".'<hr>';
echo '<h1>'.nombre.'</h1>';
echo $web;
$web = "otro nombre";
echo $web;

//Constantes Predefinidas

echo PHP_OS;
