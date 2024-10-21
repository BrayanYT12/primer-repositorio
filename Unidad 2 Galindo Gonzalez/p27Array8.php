<?php
/*CBTIS89
programa que muestra numeros pares
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
$numeros = array();

for ($j=1;$j<=100;$j++)
{ $numeros[]=$j;}

foreach ($numeros as $valor)
if($valor % 2 == 0)

	{echo $valor." ";}

?>