<?php
/* CBTIS 89
Brayan Daniel Galindo Gonzalez
Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0.
Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0.
*/


    $Nombre = array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");
    $Edad = array(20, 35, 75, 40, 15, 51);
    echo "Nombre----Edad----Grupo1----Grupo2----Grupo3";

    for ($i = 0; $i < count($Nombre); $i++) {
        $Grupo1 = 0;
        $Grupo2 = 0;
        $Grupo3 = 0;


        if ($Edad[$i] < 18) {
            $Grupo1 = 1;
        } elseif ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
            $Grupo2 = 1;
        } elseif ($Edad[$i] >= 50) {
            $Grupo3 = 1;
        }
      echo "<br>";
        echo "<br>" . $Nombre[$i] . "---------";
        echo   $Edad[$i] . "--------";
        echo   $Grupo1 . "-------------";
        echo   $Grupo2 . "-------------";
        echo   $Grupo3 . "";
    }