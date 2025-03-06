<?php
  function Conectar(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "ControlVehicular31";
    
    $conn = mysqli_connect( $server , $user , $password , $db );    
    return $conn;
}

  function Ejecutar($conn, $SQL){
  $resultSet = mysqli_query($conn, $SQL) or die (mysqli_error($conn));
  return $resultSet;
  }

  function Procesar(){}
?>
