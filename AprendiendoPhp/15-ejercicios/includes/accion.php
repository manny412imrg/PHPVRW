<?php
include 'aventura.php';
include 'deporte.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$accion = ['GTA', 'COD', 'PUGB'];
foreach ($accion as $fila){
    $fila[] = $accion[1];
    $fila[] = $aventura[1];
    $fila[] = $deporte[1];
}