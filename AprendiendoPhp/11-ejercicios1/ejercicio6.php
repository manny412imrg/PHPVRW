<?php

/*
  Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
 */
echo "<table border = '1' style='width:100%'>";

echo '<tr>';
for ($j = 1; $j <= 10; $j++) {
    echo "<th style ='border: 1px solid black;'>" . "tabla del: " . $j . '</th>';
}
echo '</tr>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . "<h3> $j x $i : " . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo "</table>";
