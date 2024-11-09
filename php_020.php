<?php
   $nota = 7;
   
   switch ($nota) {
       case 0:
       case 1:
       case 2:
       case 3:
       case 4:
           echo "La nota $nota es suspenso";
           break;
       case 5:
           echo "La nota $nota es suficiente";
           break;
       case 6:
           echo "La nota $nota es bien";
           break;
       case 7:
       case 8:
           echo "La nota $nota es notable";
           break;
       case 9:
       case 10:
           echo "La nota $nota es sobresaliente";
           break;
       default:
           echo "La nota no es válida";
   }
?>