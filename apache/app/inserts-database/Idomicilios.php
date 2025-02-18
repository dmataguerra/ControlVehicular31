<?php
  $IdDomicilio = $_GET['IdDomicilio'];
  $NumInt = $_GET['NumInt'];
  $NumExt = $_GET['NumExt'];
  $CP = $_GET['CP'];
  $Estado = $_GET['Estado'];
  $Ciudad = $_GET['Ciudad'];
  $Colonia = $_GET['Colonia'];
  $Calle = $_GET['Calle'];

  $SQL = "INSERT INTO domicilios(IdDomicilio, NumInt, NumExt, CP, Estado, Ciudad, Colonia, Calle) VALUES('$IdDomicilio', '$NumInt', '$NumExt', '$CP', '$Estado', '$Ciudad', '$Colonia', '$Calle');";
  
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
