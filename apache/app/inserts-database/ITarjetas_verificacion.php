<?php
  $FolioVerificacion = $_GET['FolioVerificacion'];
  $HoraSalida = $_GET['HoraSalida'];
  $MotivoVerificacion = $_GET['MotivoVerificacion'];
  $FolioCertificado = $_GET['FolioCertificado'];
  $Semestre = $_GET['Semestre'];
  $TipoServicio = $_GET['TipoServicio'];
  $FechaExp = $_GET['FechaExp'];
  $HoraEntrada = $_GET['HoraEntrada'];
  $IdCentro = $_GET['IdCentro'];
  $IdSerie = $_GET['IdSerie'];
  $IdPago = $_GET['IdPago'];

  $SQL = "INSERT INTO tarjetas_verificacion(FolioVerificacion, HoraSalida, MotivoVerificacion, FolioCertificado, Semestre, TipoServicio, FechaExp, HoraEntrada, IdCentro, IdSerie, IdPago) VALUES('$FolioVerificacion', '$HoraSalida', '$MotivoVerificacion', '$FolioCertificado', '$Semestre', '$TipoServicio', '$FechaExp', '$HoraEntrada', '$IdCentro', '$IdSerie', '$IdPago');";
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
