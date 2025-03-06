<?php
  include("Controlador.php");
  $id = $_POST['id'];
  $transaccion = $_POST['transaccion'];
  $folio = $_POST['folio'];
  $fechaLimPago = $_POST['fechaLimPago'];
  $Importe = $_POST['Importe'];
  $TipoPago = $_POST['TipoPago'];
  $FechayHora = $_POST['FechayHora'];
  $CodigoBarras = $_POST['CodigoBarras'];

  $SQL = "INSERT INTO pagos(id, transaccion, folio, fechaLimPago, Importe, TipoPago, FechayHora, CodigoBarras) VALUES('$id', '$transaccion', '$folio', '$fechaLimPago', '$Importe', '$TipoPago', '$FechayHora', '$CodigoBarras');";
  
  $conn =  Conectar(); // Create connection
  $ResultSet = Ejecutar($conn,$SQL);// Execute the query
  mysqli_close($conn); // Close the connection
  if($ResultSet == 1){
      print("Actualizado correctamente"); //Process the result
  }
  else{
      print("Error al actualizar".$ResultSet->error);
  }
?>
