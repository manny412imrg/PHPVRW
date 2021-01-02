<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido">
            </p>
            <input type="submit" value="Enviar datos">
        </form>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

