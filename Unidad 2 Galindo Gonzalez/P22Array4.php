<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los imprime
BRAYAN DANIEL GALINDO
3A programacion Matutino
*/

$equipo = array("portero"=> 'Julio', 'defensa
'=> 'Diego', 'medio'=> 'Jair', 'delantero'=>' Rafa');
echo "** SELECCIÓN NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El Jugador ".$jugador . " es el "
. $posicion;
echo "<br>", "<br>";
}
?>