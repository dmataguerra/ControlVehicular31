<?php
  //Abrir archivo
  $NombreArchivo = "filesito.txt";  
  $Manejador = fopen($NombreArchivo, "a");
  
  //Leer o Escribir 
  fwrite($Manejador, "hola");

  //Escribir archivo
  fclose($Manejador);
?>
