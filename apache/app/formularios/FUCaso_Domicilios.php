<?php
include("Controlador.php");
$compuesta = $_REQUEST['compuesta'];
$conn = Conectar();
$resultSet = Ejecutar($conn, "SELECT * FROM caso_domicilios WHERE compuesta = '$compuesta'");
$row = mysqli_fetch_row($resultSet);
mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Actualizar Casos_Domicilio</title>
  </head>
  <body>
    <main>
      <label>CasoDomicilios</label>
      <form method="POST" action="../inserts-database/UCaso_Domicilios.php">

        <label>compuesta</label>
        <input 
          type="text" 
          name="compuesta" 
          id="compuesta" 
          required
          value="<?php echo htmlspecialchars($row[0]); ?>"
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
          value="<?php echo htmlspecialchars($row[1]); ?>"
        >

        <label>IdDomicilio</label>
        <input 
          type="number" 
          name="IdDomicilio" 
          id="IdDomicilio" 
          required
          value="<?php echo htmlspecialchars($row[2]); ?>"
        >

        <br>
        <input type="submit" value="Update">
      </form>
    </main>
  </body>
</html>

