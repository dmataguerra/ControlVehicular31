<?php
include("Controlador.php");
$IdConductor = $_REQUEST['IdConductor'];
$conn = Conectar();
$resultSet = Ejecutar($conn, "SELECT * FROM conductores WHERE IdConductor = '$IdConductor'");
$row = mysqli_fetch_row($resultSet);
mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Actualizar Conductor</title>
  </head>
  <body>
    <label>Conductores</label>
    <form method="POST" action="../inserts-database/UConductores.php">
      <label>idConductor</label>
      <input 
        type="number" 
        name="idConductor" 
        id="idConductor" 
        required 
        maxlength="11"
        value="<?php echo $row[0]; ?>"
      >

      <label>CURP</label>
      <input 
        type="text" 
        name="CURP" 
        id="CURP" 
        required
        minlength="18"
        maxlength="18"
        pattern="[A-Z]{4}[0-9]{6}[HM]{1}[A-Z]{5}[A-Z0-9]{2}"
        value="<?php echo $row[1]; ?>"
      >
      
      <br>
      <input type="submit" value="Update">
    </form>
  </body>
</html>

