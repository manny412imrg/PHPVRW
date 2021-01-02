<!Doctipe HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>imprimir por pantalla</title>
    </head>
    <body>
        <h1>Curso en PHP</h1>
    
    <?="Este es un atajo de echo"?>
    <?php
    //Titular de la seccion (Este comentario es a nivel de servidor)
    echo '<h3>Listado de videojuegos</h3>';
    echo '<ul>'
         .'<li>GTA</li>'
         .'<li>Doom</li>'
         .'<li>Mario Bros</li>'
          ,'</ul>';
    
    echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
    ?>

    
    </body>
</html>


