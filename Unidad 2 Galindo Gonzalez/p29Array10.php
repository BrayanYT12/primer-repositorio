<?php
/*CBTIS89
programa que muestra un nombre crea un array con un variable de nombre de personas si el nombre concide con el del arreglo dira este nombre concide con el del array
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
$name=0;
$nombre= "Erick";
$nombres = array ("Juan","Pedro","Ulises","Erick");
foreach ($nombres as $persona) {

	if ($persona==$nombre){
		$name=1;
		echo "El nombre ".$nombre." esta en el array";
	}

}
if($name==0){
	echo "El nombre ".$nombre." no esta en el array";
}
?>