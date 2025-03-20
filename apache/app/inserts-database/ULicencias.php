<?php
include("Controlador.php");

$IdLicencia     = $_GET['IdLicencia']     ?? '';
$ValidoHasta    = $_GET['ValidoHasta']    ?? '';
$Antiguedad     = $_GET['Antiguedad']     ?? '';
$Restriccion    = $_GET['Restriccion']    ?? '';
$NumEmergencia  = $_GET['NumEmergencia']  ?? '';
$DonadorOrganos = $_GET['DonadorOrganos'] ?? '';
$FechaExp       = $_GET['FechaExp']       ?? '';
$IdConductor    = $_GET['IdConductor']    ?? '';

$SQL = "UPDATE licencias 
           SET ValidoHasta    = '$ValidoHasta',
               Antiguedad     = '$Antiguedad',
               Restriccion    = '$Restriccion',
               NumEmergencia  = '$NumEmergencia',
               DonadorOrganos = '$DonadorOrganos',
               FechaExp       = '$FechaExp',
               IdConductor    = '$IdConductor'
         WHERE IdLicencia     = '$IdLicencia';";

$conn = Conectar();
$resultSet = Ejecutar($conn, $SQL);
$numRows = mysqli_affected_rows($conn);
mysqli_close($conn);

if ($numRows == 1) {
    print("1 Registro actualizado correctamente");
} else {
    print("0 registros actualizados");
}
?>

