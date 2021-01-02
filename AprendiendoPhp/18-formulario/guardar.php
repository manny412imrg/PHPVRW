<?php

if(isset($_POST['titulo'])&& isset($_POST['descripcion'])){
    echo $_POST['titulo'].'<br>'.$_POST['descripcion'];
}
