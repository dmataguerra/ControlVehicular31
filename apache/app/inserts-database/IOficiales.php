<?php
    include("Controlador.php");
    $id = $_REQUEST['id'];
    $numero_placa = $_REQUEST['numero_placa'];
    $curp = $_REQUEST['curp'];

    $SQL = "INSERT INTO oficiales VALUES('$id','$numero_placa','$curp');";
    
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