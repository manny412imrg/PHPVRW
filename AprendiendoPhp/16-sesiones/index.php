<?php

/* 
SESIONES
 * Almacenar y persistir datos del usuario mientras que navega en un sitio web hsata que cierra sesion o cierra el navegador
 */

//Inicia la sesion
session_start();

//variable local
$variable_normal = "soy una cadena de texto";

//variable de sesion
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal.'<br>';
echo $_SESSION["variable_persistente"];