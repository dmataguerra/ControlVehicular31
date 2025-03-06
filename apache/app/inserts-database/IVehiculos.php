<?php
    include("Controlador.php");
    $IdSerie = $_REQUEST['IdSerie'];
    $FolioCirculacion = $_REQUEST['FolioCirculacion'];
    $IdPropietario = $_REQUEST['IdPropietario'];
    $Color = $_REQUEST['Color'];
    $Ano = $_REQUEST['Ano'];
    $Clase = $_REQUEST['Clase'];
    $Combustible = $_REQUEST['Combustible'];
    $NIV = $_REQUEST['NIV'];
    $NumCilindros = $_REQUEST['NumCilindros'];
    $Modelo = $_REQUEST['Modelo'];
    $Marca = $_REQUEST['Marca'];
    
    $SQL = "INSERT INTO vehiculos VALUES('$IdSerie','$FolioCirculacion','$IdPropietario','$Color','$Ano','$Clase','$Combustible','$NIV','$NumCilindros','$Modelo','$Marca');";

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