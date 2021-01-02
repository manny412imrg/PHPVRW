<?php

if(!empty( $_POST['email'])){
    $email = $_POST['email'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        echo 'coloca correctamente el email';
    }else{
    
        echo'email guardado correctamente';
    }
    
}else{
    echo 'llena el formulario';
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <p><?= $email ?></p>     

    </body>
</html>