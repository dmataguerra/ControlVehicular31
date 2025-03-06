<?php
    include("Controlador.php");
    $compuesta = $_POST['compuesta'];
    $CURP = $_POST['CURP'];
    $IdDomicilio = $_POST['IdDomicilio'];


    $SQL = "INSERT INTO caso_domicilios VALUES('$compuesta','$CURP','$IdDomicilio');";
    
    $conn = Conectar();

    $ResultSet = Ejecutar($conn,$SQL);

    mysqli_close($conn);

    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
?>
