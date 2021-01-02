<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir archivo php</title>
    </head>
    <body>
        <h1>Subir imagenes php</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">

            <input type="file" name="archivo"><br>
            <input type="submit" name="enviar">

        </form>
        <h2>Listado de imagenes</h2>
        <?php
        $gestor = opendir('./images');
        
        if ($gestor) :
            while (($images = readdir($gestor)) !== false) :

                if ($images != '.' && $images != '..') :
                    echo "<img src='images/$images' width='200px'><br>";
                endif;
            endwhile;
        endif;
        ?>
    </body>
</html>

<?php
