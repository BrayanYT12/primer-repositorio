<?php
/* CBTIS 89
programa que almacena datos en un arreglo y los imprime
BRAYAN DANIEL GALINDO
3A programacion Matutino
*/
$nombre = "Jaimico";
$array = array(1, 2, 3, "casa", $nombre);

$longitud = count($array);

for($i=0; $i<$longitud; $i++)
{ 
echo $array[$i];
echo "<br>";
}
?>