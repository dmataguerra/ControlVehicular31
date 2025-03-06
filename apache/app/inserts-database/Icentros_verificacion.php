<?php
  include("Controlador.php");
  $idCentro = $_POST['IdCentro'];
  $idDomicilio = $_POST['IdDomicilio'];
  $nombre = $_POST['Nombre'];

  $SQL = "INSERT INTO centros_verificacion(IdCentro, IdDomicilio, Nombre) VALUES('$idCentro', '$idDomicilio', '$nombre');";

  $conn = Conectar(); 

  $ResultSet =  Ejecutar($conn,$SQL);// Execute the query

  mysqli_close($conn); // Close the connection
  
  if($ResultSet == 1){
      print("Actualizado correctamente"); //Process the result
  }
  else{
      print("Error al actualizar".$ResultSet->error);
  }
?>
