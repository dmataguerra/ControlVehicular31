<?php
  $IdConductor=$_REQUEST['IdConductor'];
  //Crear instruccion SQL
  $SQL = "DELETE FROM conductores WHERE IdConductor = '$IdConductor'";
  //Enviar consulta al SMDB
  include("Controlador.php");
  $conn = Conectar();
  $ResultSet = Ejecutar ($conn,$SQL); 
  //Interpretar Resultados
  $FilasAfectadas = mysqli_affected_rows($conn);
  if($FilasAfectadas == 0){
    print("0 registros eliminados");
  }
  else{
    print("1 registro(s) eliminado(s)");
}
 mysqli_close($conn);
?>
