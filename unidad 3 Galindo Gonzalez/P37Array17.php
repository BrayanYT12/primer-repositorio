<?php
/*
cbtis89
programa que con un array que pase una lista de nombres y si esta el nombre salta un texto el alumono a asistido a su clase y diga el dia que asistio y si no esta salta el dialogo "el. alumno $Nombre no asistio a su clase "."el dia .$dia "
BRAYAN DANIEL GALINDO GONZALEZ
3°A Programacion Matutino
*/
$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivo = array();
$arraynegativo = array();
$sumaPositivos = 0; 
$sumaNegativos = 0; 

/* ciclo para determinar los pares guardandolo en un array*/
for ($i = 0; $i < count($arraynumeros); $i++) {
    if ($arraynumeros[$i] >= 0) {
        $arraypositivo[] = $arraynumeros[$i];
        $sumaPositivos += $arraynumeros[$i]; // Sumamos los positivos
    } else {
        $arraynegativo[] = $arraynumeros[$i];
        $sumaNegativos += $arraynumeros[$i]; // Sumamos los negativos
    }
}


	echo " numeros positivos </P>";
 /*ciclo que va a mostra el valor de array positivo*/
for ($i=0; $i <count($arraypositivo) ; $i++) { 
	echo $arraypositivo[$i];
	echo "<br>"; 
}
echo "<br>Suma de positivos: $sumaPositivos<br>";
	echo " numeros Negativos </P> ";
/*ciclo que va a mostra el valor de array negativo*/
for ($i=0; $i <count($arraynegativo) ; $i++) { 
	echo $arraynegativo[$i];
	
	echo "<br>"; 
}
echo "<br>Suma de negativos: $sumaNegativos<br>";

?>
