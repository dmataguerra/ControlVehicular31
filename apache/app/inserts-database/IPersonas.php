<?php
    include("Controlador.php");
    $CURP = $_REQUEST['CURP'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoP = $_REQUEST['ApellidoP'];
    $ApellidoM = $_REQUEST['ApellidoM'];
    $FechaNac = $_REQUEST['FechaNac'];
    $Sexo = $_REQUEST['Sexo'];
    $Firma = $_REQUEST['Firma'];

    $SQL = "INSERT INTO personas VALUES('$CURP','$Nombre','$ApellidoP','$ApellidoM','$FechaNac','$Sexo','$Firma');"; 

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