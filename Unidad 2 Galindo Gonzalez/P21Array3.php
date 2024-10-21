<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo
BRAYAN DANIEL GALINDO
3A programacion Matutino
*/

$arraynombres = array('Karina', 'Marco', 'Rocío','
Roberto', 'Fer', "Juan");
//Se obtiene el número de elementos
 $longitud = count ($arraynombres);
//Recorre todos los elementos
for($i=0; $i<$langitud; $i++)
{ //Se obtiene el valor de cada elemento
echo $arraynombres [$i];
echo "<br>";
}
?>