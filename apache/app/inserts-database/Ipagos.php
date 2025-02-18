<?php
  $id = $_POST['id'];
  $transaccion = $_POST['transaccion'];
  $folio = $_POST['folio'];
  $fechaLimPago = $_POST['fechaLimPago'];
  $Importe = $_POST['Importe'];
  $TipoPago = $_POST['TipoPago'];
  $FechayHora = $_POST['FechayHora'];
  $CodigoBarras = $_POST['CodigoBarras'];

  $SQL = "INSERT INTO pagos(id, transaccion, folio, fechaLimPago, Importe, TipoPago, FechayHora, CodigoBarras) VALUES('$id', '$transaccion', '$folio', '$fechaLimPago', '$Importe', '$TipoPago', '$FechayHora', '$CodigoBarras');";
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "controlvehicular31";

  $conn = new mysqli($servername, $username, $password, $dbname); // Create connection

  $ResultSet = mysqli_query($conn, $SQL); // Execute the query
  mysqli_close($conn); // Close the connection
  if($ResultSet == 1){
      print("Actualizado correctamente"); //Process the result
  }
  else{
      print("Error al actualizar".$ResultSet->error);
  }
?>
