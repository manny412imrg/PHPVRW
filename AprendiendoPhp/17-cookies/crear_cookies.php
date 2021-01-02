<?php

/* 
COOKIES
 * es un ficherito que se almacena en el ordenador del usuario que visite la web con el fin de recordar datos o rastrear cierta informacion o comportamiento del mismo en la web
 */

// crear cookies

//setcookie("nombre de la cookie","valor que solo puede ser texto", caducidad, ruta, dominio);

//cookie basica
setcookie("micookie", "valor de mi galleta");

//cookies con expiracion

setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>