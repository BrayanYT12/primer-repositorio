<?php
/*cbtis89
programa que ase un arreglo que suma 2 arreglos resta multiplica y divide
BRAYAN DANIEL GALINDO GONZALEZ
3°A Programacion Matutino
*/
$arraydatos1 =array (10,20,30,40,50);
$arraydatos2 =array (3,7,6,15,18,);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();
$longitud = count ($arraydatos1);
for($i=0; $i<$longitud; $i++)
{
$arraysuma[$i] = $arraydatos1[$i]+$arraydatos2[$i];	
$arrayresta[$i] = $arraydatos1[$i]-$arraydatos2[$i];
$arraymulti[$i] = $arraydatos1[$i]*$arraydatos2[$i];
$arraydivi[$i] = $arraydatos1[$i]/$arraydatos2[$i];
}
echo "suma entre arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $arraydatos1[$i]." + ".$arraydatos2[$i]." = ".$arraysuma[$i];
echo "<br>";

}

echo "resta entre arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $arraydatos1[$i]." - ".$arraydatos2[$i]." = ".$arrayresta[$i];
echo "<br>";
}

echo "multiplicacion entre arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $arraydatos1[$i]." * ".$arraydatos2[$i]." = ".$arraymulti[$i];
echo "<br>";
}

echo "divicion entre arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $arraydatos1[$i]." / ".$arraydatos2[$i]." = ".$arraydivi[$i];
echo "<br>";
}








?>