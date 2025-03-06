<?php
    include("Controlador.php");
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  $SQL = "INSERT INTO propietarios(IdPropietario, CURP) VALUES('$IdPropietario', '$CURP');";

    $conn =  Conectar(); // Create connection

    $ResultSet = Ejecutar($conn,$SQL);// Execute the query
    mysqli_close($conn); // Close the connection
    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
?>
