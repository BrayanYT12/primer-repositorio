<?php
/* CBTIS89
Brayan Daniel Galindo Gonzalez
Programacion 3A T.M.
programa que almacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimensional llmado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas
*/
$Alumnos = array ("luz", "Fer", "Leo", "Ale",);
$Calificaciones = array(6,4,5,
	                    7,9,8,
	                    7,9,5,
	                    5,4,6);
$promedio = array ()
$status = array ()
for($i=0;$i<3;$i++)
{for($i=0;$i<3;$i++)	
{$promedio=$Calificaciones[$i]+$Calificaciones[$i]
}
foreach ($Alumnos as $Alumnos){
	if ($promedio<6){
		echo "REPROBADO";
	}
	else if ($promedio <= 6){
		echo "APROBADO";
	}
echo "CBTIS 89<br>";
echo "Alumnos -------- Promedio -------- Status --------<br>";

for ($i = 0; $i <3; $i++) {
    echo $Alumnos[$i] . " --------------- ";
    echo $Promedio[$i] . " --------------- ";
    echo $Status[$i] . " --------------- ";
}
?>


