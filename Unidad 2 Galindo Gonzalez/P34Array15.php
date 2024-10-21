<?php
/*cbtis89
programa que convierte los datos de un arreglo en una cadena de texto y de forma contraria es decir convierte una cadena de texto a elementos del arreglo
BRAYAN DANIEL GALINDO GONZALEZ
3°A Programacion Matutino
*/
//almacena datos de un arreglo
$arraydatos = ["ulises","erick","cesar"];
//convierte un array en una cadena de texto
$string = implode(" ", $arraydatos);
echo "cadena de testo <br>";
echo $string;
echo "<br>","<br>";

//cadena de texto a separar
$cadena = "tercero de programacion matutino";
//convierte una cadena de texto en un array
$array = explode (" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "arreglo con datos de tipo string <br>";
//imprime los elementos del arreglo
for($i=0; $i<$longitud; $i++)
{//se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?>