!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form action="procesar.php" method="POST" enctype="multipart/form-data">
            <p>
                <label for="email">email</label>
                <input type="email" name="email">
            </p>
            <input type="submit" value="Enviar datos">
        </form>
    </body>
</html>



