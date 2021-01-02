<?php

/* 
recoger 2 numeros por la url por un parametro (get) y hacer las operaciones basicas
 */
if(isset($_GET['numer']) && isset($_GET['numer2'])){
$numero1= $_GET['numer'];
$numero2=$_GET['numer2'];

echo $numero1+$numero2.'<br>';
echo $numero1*$numero2.'<br>';
echo $numero1-$numero2.'<br>';
echo $numero1/$numero2.'<br>';
}
else{ echo 'inctroduce los numero correctamente';}


