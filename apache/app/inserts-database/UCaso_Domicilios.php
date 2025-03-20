<?php
include("Controlador.php");

$compuesta = $_POST['compuesta'];
$CURP = $_POST['CURP'];
$IdDomicilio = $_POST['IdDomicilio'];

$SQL = "
  UPDATE caso_domicilios
     SET IdDomicilio = '$IdDomicilio',
         CURP      = '$CURP'
   WHERE compuesta = '$compuesta'
";

$conn = Conectar();
$ResultSet = Ejecutar($conn, $SQL);
$numRows   = mysqli_affected_rows($conn);
mysqli_close($conn);

if ($numRows == 1) {
  echo "1 Registro actualizado correctamente";
} else {
  echo "0 registros actualizados";
}
?>

