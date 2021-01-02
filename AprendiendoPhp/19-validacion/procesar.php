<?php
$error = 'faltan valores';

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $error = 'ok';

$nombre = ($_POST['nombre']);
$apellido = ($_POST['apellido']);
$edad = ($_POST['edad']);
$email = ($_POST['email']);
$password = ($_POST['password']);


//VALIDAR EL NOMBRE
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
    };
    if(!is_string($apellido) || preg_match("/[0-9]/", $apellido)){
        $error = 'apellido';
    };
    if(!is_numeric($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    };
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    };
    if(empty($password) || strlen($password)< 5){
        $error = 'password';
    };
    
    
}else{
    $error = 'faltan valores';
    header("location:index.php?error=$error");
}
if($error != 'ok'){
    header("location:index.php?error=$error");
};
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php if($error == 'ok') :?>
        <p><?= $nombre ?></p>
        <p><?= $apellido ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>     
        
        <?php endif; ?>
    </body>
</html>

