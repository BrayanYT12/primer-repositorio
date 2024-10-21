<?php
/* CBTIS 89
programa que ase un arreglo con carreras del 89
BRAYAN DANIEL GALINDO
3A programacion Matutino
*/
$equipo = array("programacion"=> 'brayan', 'albañil
'=> 'ulises', 'construccion'=> 'cesar', 'arquitectura'=>'erick');
echo "** carreras del cbtis89 **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "el alumno del cbtis 89 ".$jugador . " estudia la carrera de "
. $posicion;
echo "<br>", "<br>";
}
?>