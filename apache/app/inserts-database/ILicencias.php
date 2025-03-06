<?php
    include("Controlador.php");
    $IdLicencia = $_REQUEST['IdLicencia'];
    $ValidoHasta = $_REQUEST['ValidoHasta'];
    $Antiguedad = $_REQUEST['Antiguedad'];
    $Restriccion = $_REQUEST['Restriccion'];
    $NumEmergencia = $_REQUEST['NumEmergencia'];
    $DonadorOrganos = $_REQUEST['DonadorOrganos'];
    $FechaExp = $_REQUEST['FechaExp'];
    $IdConductor = $_REQUEST['IdConductor'];

    $SQL = "INSERT INTO licencias VALUES('$IdLicencia','$ValidoHasta','$Antiguedad','$Restriccion','$NumEmergencia','$DonadorOrganos','$FechaExp','$IdConductor');";
    //print($SQL);
    
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