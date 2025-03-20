<?php
  include("controlador.php");
  $UserName = $_REQUEST['UserName'];
  $Password = $_REQUEST['Password'];
  $SQL = "SELECT * FROM usuarios WHERE UserName = '$UserName'";
  $conn = Conectar();
  $resultSet = Ejecutar($conn, $SQL);
  $row = mysqli_fetch_row($resultSet);
  $n = mysqli_num_rows($resultSet);

  if($n == 0){
    print("Usuario o contrasena incorretos");
  }

  else{
  print("El usuario existe<br>");
  if($row[1] == $Password){
    print("Contrasena correcta");
    if($row[3] == "1" && $row[4] == "0"){
      print("<br>Bienvenido Usuario Tipo ".$row[2]);
    }
    else{
      print("<br>Usuario no autorizado");
    }
  }

  else{
    print("Contrasena incorrecta");
  }
  }

  mysqli_close($conn);
?>
