<?php
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  $SQL = "INSERT INTO propietarios(IdPropietario, CURP) VALUES('$IdPropietario', '$CURP');";

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "controlvehicular31";

    $conn = new mysqli($servername, $username, $password, $dbname); // Create connection

    $ResultSet = mysqli_query($conn, $SQL); // Execute the query
    mysqli_close($conn); // Close the connection
    if($ResultSet == 1){
        print("Actualizado correctamente"); //Process the result
    }
    else{
        print("Error al actualizar".$ResultSet->error);
    }
?>
