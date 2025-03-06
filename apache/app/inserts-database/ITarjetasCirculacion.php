<?php
    include("Controlador.php");
    $FolioCirculacion = $_REQUEST['FolioCirculacion'];
    $IdPago = $_REQUEST['IdPago'];
    $NumConstancia = $_REQUEST['NumConstancia'];
    $Origen = $_REQUEST['Origen'];
    $CveVehicular = $_REQUEST['CveVehicular'];
    $Tipo = $_REQUEST['Tipo'];
    $Uso = $_REQUEST['Uso'];
    $RPA = $_REQUEST['RPA'];
    $Operacion = $_REQUEST['Operacion'];
    $PlacaAnt = $_REQUEST['PlacaAnt'];
    $OficinaExpendidora = $_REQUEST['OficinaExpendidora'];
    $Movimiento = $_REQUEST['Movimiento'];
    $Vigencia = $_REQUEST['Vigencia'];

    $SQL = "INSERT INTO tarjetas_circulacion VALUES('$FolioCirculacion','$IdPago','$NumConstancia','$Origen','$CveVehicular','$Tipo','$Uso','$RPA','$Operacion','$PlacaAnt','$OficinaExpendidora','$Movimiento','$Vigencia');";

    $conn = Conectar(); // Create connection
    $ResultSet = Ejecutar($conn,$SQL);// Execute the query
    
    mysqli_close($conn); // Close the connection
    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
    
?>