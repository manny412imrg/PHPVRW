<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido">
            </p>
            <p>
                <label for="boton">Boton</label>
                <input type="button" name="boton" value="click">
            </p>
            <p>
                <label for="sexo">Sexo</label>
                mujer: <input type="checkbox" name="sexo" value="mujer">
                hombre: <input type="checkbox" name="sexo" value="hombre">
                otro: <input type="checkbox" name="sexo" value="otro">
            </p>
            <p>
                <label for="colo">Color</label>
                <input type="color" name="color">
            </p>
            <p>
                <label for="date">Date</label>
                <input type="date" name="date">
            </p>
            <p>
                <label for="correo">email</label>
                <input type="email" name="correo">
            </p>

            <p>
                <label for="file">file</label>
                <input type="file" name="file" multiple="multiple">
            </p>
            <p>
                <label for="number">numero</label>
                <input type="number" name="number">
            </p>
            <p>
                <label for="contra">Password</label>
                <input type="password" name="contra">
            </p>
            <p>
                <label for="radio">radio</label>
                AMERICA:<input type="radio" name="radio" value="america">
                EUROPA:<input type="radio" name="radio" value="europa">
                ASIA:<input type="radio" name="radio" value="asia">
            </p>
            <p>
                <label for="web">URL</label>
                <input type="url" name="web">
            </p>
            <p>
                <label for="textarea">textarea</label>
                <textarea name="textarea"></textarea>
            </p>
            <select name="textarea">
                <option value="spiderman">Spiderman</option>
                <option value="batman">Batman</option>
                <option value="la_jungla">La jungla de cristal</option>
                <option value="gran_torino">Gran torino</option>
            </select>
            <input type="submit" value="Enviar datos">
        </form>
    </body>
</html>

<?php
