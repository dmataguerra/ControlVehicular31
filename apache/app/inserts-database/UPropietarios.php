<?php
  include("Controlador.php");
  $IdPropietario = $_GET['IdPropietario'];
  $CURP = $_GET['CURP'];

  $SQL = "UPDATE propietarios SET CURP = '$CURP' WHERE IdPropietario = '$IdPropietario';";

  $conn =  Conectar(); 

  $ResultSet = Ejecutar($conn,$SQL);
  $numRows = mysqli_affected_rows($conn);
  mysqli_close($conn);  
  if($numRows == 1){
    print("1 Registro actualizado correctamente"); 
  }
  else{
    print("0 registros actualizados");
  }
?>

