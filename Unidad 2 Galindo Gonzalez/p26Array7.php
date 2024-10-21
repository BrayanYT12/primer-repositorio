<?php
/*CBTIS89
programa que 
Brayan Daniel Galindo Gonzalez
3A programacion turno matutino
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>