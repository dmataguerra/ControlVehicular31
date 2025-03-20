<?php
// UConductores.php
include("Controlador.php");

// 1. Retrieve form data from POST
$idConductor = $_POST['idConductor'] ?? '';
$CURP        = $_POST['CURP']        ?? '';

// 2. Build the UPDATE query
$SQL = "
  UPDATE conductores
     SET CURP = '$CURP'
   WHERE idConductor = '$idConductor'
";

// 3. Execute the query
$conn      = Conectar();
$ResultSet = Ejecutar($conn, $SQL);
$numRows   = mysqli_affected_rows($conn);
mysqli_close($conn);

// 4. Report how many rows were updated
if ($numRows == 1) {
  echo "1 Registro actualizado correctamente";
} else {
  echo "0 registros actualizados";
}
?>

