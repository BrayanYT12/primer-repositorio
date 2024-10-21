<?php
/*CBTIS89
programa que los imprime los numeros ascendete y decendente
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>