<?php
/*CBTIS89
programa que muestra gato o perro y al ultimo pone caballo
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>