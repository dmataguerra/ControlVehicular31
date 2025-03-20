<?php
include("Controlador.php");

$IdLicencia = $_REQUEST['IdLicencia'] ?? '';
$conn = Conectar();

$resultSet = Ejecutar($conn, "SELECT * FROM licencias WHERE IdLicencia = '$IdLicencia';");

$row = mysqli_fetch_row($resultSet);

mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Licencia</title>
  </head>
  <body>
    <main>
      <form method="get" action="../inserts-database/ULicencias.php">
        <label>IdLicencia</label>
        <input type="number" name="IdLicencia" id="IdLicencia" required value="<?php echo htmlspecialchars($row[0]); ?>"> 
        <label>ValidoHasta</label>
        <input type="date" name="ValidoHasta" id="ValidoHasta" required value="<?php echo htmlspecialchars($row[1]); ?>">
        <label>Antiguedad</label>
        <input type="text" name="Antiguedad" id="Antiguedad" required maxlength="11" value="<?php echo htmlspecialchars($row[2]); ?>">
        <label>Restriccion</label>
        <input type="text" name="Restriccion" id="Restriccion" required maxlength="50" value="<?php echo htmlspecialchars($row[3]); ?>">
        <label>NumEmergencia</label>
        <input type="text" name="NumEmergencia" id="NumEmergencia" required maxlength="15" value="<?php echo htmlspecialchars($row[4]); ?>">
        <label>DonadorOrganos</label>
        <input type="text" name="DonadorOrganos" id="DonadorOrganos" required maxlength="2" value="<?php echo htmlspecialchars($row[5]); ?>">
        <label>FechaExp</label>
        <input type="date" name="FechaExp" id="FechaExp" value="<?php echo htmlspecialchars($row[6]); ?>">
        <label>IdConductor</label>
        <input type="number" name="IdConductor" id="IdConductor" required maxlength="11" value="<?php echo htmlspecialchars($row[7]); ?>">
        <br>
        <input type="submit" value="Update">
      </form>
    </main>
    <footer>
    </footer>
  </body>
</html>

