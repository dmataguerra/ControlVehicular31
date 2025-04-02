<?php
include("Controlador.php");

$Idpropietario = $_REQUEST['IdPropietario'] ?? '';
$conn = Conectar();

$resultSet = Ejecutar($conn, "SELECT * FROM propietarios WHERE IdPropietario = '$Idpropietario';");

$row = mysqli_fetch_row($resultSet);

mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <main>
        <form method="get" action="../inserts-database/UPropietarios.php">
        <label>IdPropietario</label>
        <input type="number" name="IdPropietario" id="IdPropietario" required value="<?php echo htmlspecialchars($row[0]); ?>"> 
        <label>CURP</label>
        <input type="text" name="CURP" id="CURP" value="<?php echo htmlspecialchars($row[1]); ?>"> 
        <br>
        <input type="submit" value="Update">
        </form> 
    </main>
  </body>
</html>

