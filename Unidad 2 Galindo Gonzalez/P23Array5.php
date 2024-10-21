<?php
/* CBTIS 89
programa que imprime el precio de una fruteria
BRAYAN DANIEL GALINDO
3A programacion Matutino
*/
$equipo = array("25"=> 'manzana', '40
'=> 'mango', '35'=> 'limon', '20'=>'naranja');
echo "** FRUTERIA DEL SUR **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El kilo de ".$jugador . " cuesta "
. $posicion;
echo "<br>", "<br>";
}
?>