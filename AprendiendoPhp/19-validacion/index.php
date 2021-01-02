
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <h1>Formulario HTML</h1>
        
        <?php 
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan valores'){
                echo '<strong style="color:red">Introduce todos los datos del formulario</strong>';
            }
        }
        if($error == 'nombre'){
             echo '<strong style="color:red">Introduce bien el nombre</strong>';
        }
        if($error == 'apellido'){
             echo '<strong style="color:red">Introduce bien el apellido</strong>';
        }
        if($error == 'edad'){
             echo '<strong style="color:red">Introduce bien la edad</strong>';
        }
        if($error == 'email'){
             echo '<strong style="color:red">Introduce bien el email</strong>';
        }
        if($error == 'password'){
             echo '<strong style="color:red">Introduce bien el password (min 5)</strong>';
        }        
        
        
        
        
        ?>
        <form action="procesar.php" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required="required" pattern="[A-Za-z]+">
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" required="required" pattern="[A-Za-z]+">
            </p> 
            <p>
                <label for="edad">edad</label>
                <input type="number" name="edad" required="required" pattern="[0-9]+">
            </p>
            <p>
                <label for="email">email</label>
                <input type="email" required="required" name="email">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" required="required" name="password">
            </p>
            <input type="submit" value="enviar">            
        </form>
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

