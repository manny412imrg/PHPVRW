<?php
include 'includes/cabecera.php';
?>
        <div>
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba de la página de inicio</p>
        </div>  
        <hr>    
        <footer>Todos los derechos reservados &copy; Ivan Romero<?= date('Y') ?></footer>

    </body>
</html>
<?php

/*
 *Para importar archivos.
 * include (no extricto, si hay fallos sigue con la ejecucion sin errores incluso duplicados)
 * include_once(poco extricto, si hay fallos sigue con la ejecucion sin errores)
 * require (extricto, no permite fallos pero si se puede duplicar)
 * require_once(muy extricto, solo permite ficheros bien escritos)
 * 
 *   */