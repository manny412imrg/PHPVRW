<?php


if(!empty ($_POST['number1']) && !empty($_POST['number2'])){
    $numero1 = $_POST['number1'];
    $numero2 = $_POST['number2'];
    
    
    if(isset($_POST['multiplicar'])){
        $resultado = $numero1*$numero2;
    }elseif (isset ($_POST['sumar'])) {
        $resultado = $numero1+$numero2;
    }elseif (isset ($_POST['restar'])) {
        $resultado = $numero1-$numero2;
    }elseif(isset ($_POST['dividir'])){
        $resultado = $numero1/$numero2;
    }
}else{
    echo 'escribe los datos de entrada';
}

?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form method="POST" action="">
            <p>
                <label for="number1">numero</label>
                <input type="number" name="number1" pattern="[1-9]+">
            </p>
            <p>
                <label for="number2">numero 2</label>
                <input type="number" name="number2" pattern="[1-9]+" >
            </p>
            <p>
                <label for="sumar">Sumar</label>
                <input type="submit" name="sumar" value="Sumar">
            </p>
            <p>
                <label for="restar">Restar</label>
                <input type="submit" name="restar" value="Restar">
            </p>
            <p>
                <label for="multiplicar">multiplicar</label>
                <input type="submit" name="multiplicar" value="Multiplicar">
            </p>
            <p>
                <label for="dividir">dividir</label>
                <input type="submit" name="dividir" value="Dividir">
            </p>
            <h3>el resultado es</h3>
            <?php if(!empty($resultado)){ echo $resultado; }  ?>
        </form>
    </body>
</html>
<?php  ?>