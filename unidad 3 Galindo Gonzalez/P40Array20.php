<?php 
/* CBTIS89
Brayan Daniel Galindo Gonzalez
Programacion 3A T.M.
Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los números pares, en el $Arreglo2 van los números impares, en el $Arreglo3 va la suma de los números correspondiente al mismo índice
*/




$array1 = array();
$array2 = array(); 
$array3 = array(); 

for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $array1[] = $i; 
    } else {
        $array2[] = $i; 
    }
}


for ($i = 0; $i < count($array1); $i++) {
   
    if (isset($array2[$i])) {
        $array3[] = $array1[$i] + $array2[$i];
    } else {
        $array3[] = $array1[$i]; 
    }
}
echo "CBTIS 89<br>";
echo "Array1 ------- Array2 ------- Array3<br>";

for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . " --------- ";
    echo (isset($array2[$i]) ? $array2[$i] : " ") . " -------- ";
    echo $array3[$i] . "<br>";
}
?>
