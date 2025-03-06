<?php
  $id=$_REQUEST['id'];
  //Crear instruccion SQL
  $SQL = "DELETE FROM oficiales WHERE id = '$id'";
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
