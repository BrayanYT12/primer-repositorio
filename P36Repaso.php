<?php
/*cbtis89
programa que ase un arreglo que muestra los precios de los dulces en una dulceria 
BRAYAN DANIEL GALINDO GONZALEZ
3°A Programacion Matutino
*/
// Arreglo que contiene los precios de diferentes dulces en una dulceria
$precios_dulces = array(
    "chocolates" => 300,
    "bombones" => 250,
    "paletas" => 100,
    "churros" => 240,
    "dulces de tamarindo" => 150,
    "banderillas" => 140,
    "dulcecitos" => 100,
    "lucas" => 190,
    "papitas" => 400

);

// Mostrar los precios
echo "Precios de la dulceria:";
echo "<br>";
foreach ($precios_dulces as $dulces => $precio) {
    echo "$dulces= $precio";
    echo "<br>";
  }


?>