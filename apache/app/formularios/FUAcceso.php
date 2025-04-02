<?php
  include("Controlador.php");
  $IdAcceso = $_REQUEST['IdAcceso'] ?? '';
  $conn = Conectar();
  $resultSet = Ejecutar ($conn, "SELECT * FROM accesos WHERE IdAcceso = '$IdAcceso';");
  $row = mysqli_fetch_row($resultSet);
?>
<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Actualizar Accesos</title>
  </head>
  <body>
    <main>
      <form method="get" action="../inserts-database/UAccesos.php">
        <label>IdAcceso</label>
        <input type="number" name="IdAcceso" id="IdAcceso" required value="<?php echo htmlspecialchars($row[0]); ?>"> 
        <label>Usuario</label>
        <input type="text" name="Usuario" id="Usuario" required value="<?php echo htmlspecialchars($row[1]); ?>"> 
        <label>Contrasena</label>
        <input type="text" name="Contrasena" id="Contras`ena" required value="<?php echo htmlspecialchars($row[2]); ?>"> 
        <br>
        <input type="submit" value="Update">
      </form> 
    </main>
  </body>
