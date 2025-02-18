<?php
  $FolioMultas = $_REQUEST['FolioMultas'];
  $IdPago = $_REQUEST['IdPago'];
  $FolioVerificacion = $_REQUEST['FolioVerificacion'];
  $FolioCirculacion = $_REQUEST['FolioCirculacion'];
  $IdSerie = $_REQUEST['IdSerie'];
  $IdOficial = $_REQUEST['IdOficial'];
  $Causa = $_REQUEST['Causa'];
  $Observaciones = $_REQUEST['Observaciones'];
  $Region = $_REQUEST['Region'];
  $FechaExp = $_REQUEST['FechaExp'];
  $Estado = $_REQUEST['Estado'];
  $Descripcion = $_REQUEST['Descripcion'];
  $Tipo = $_REQUEST['Tipo'];
  $FechaHora = $_REQUEST['FechaHora'];

  $SQL = "INSERT INTO multas(FolioMultas, IdPago, FolioVerificacion, FolioCirculacion, IdSerie, IdOficial, Causa, Observaciones, Region, FechaExp, Estado, Descripcion, Tipo, FechaHora) VALUES('$FolioMultas', '$IdPago', '$FolioVerificacion', '$FolioCirculacion', '$IdSerie', '$IdOficial', '$Causa', '$Observaciones', '$Region', '$FechaExp', '$Estado', '$Descripcion', '$Tipo', '$FechaHora');";
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
