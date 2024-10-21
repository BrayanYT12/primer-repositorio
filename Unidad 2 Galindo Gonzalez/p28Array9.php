<?php
/*CBTIS89
programa que es un arreglo que muestra el precio de camisa playera bermuda pantalones
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
$Ropa = array("$100 " => "playera ","$250 "=>"camisa
" ,"$300 "=>"pantalones ","$200 "=>"bermuda ");

echo "** TIENDA DE ROPA **", "<br>","<br>";
foreach($Ropa as $precio=>$prenda)
{echo "La ". $prenda . " tiene un costo de ". $precio;
echo "<br>","<br>";
}
?>