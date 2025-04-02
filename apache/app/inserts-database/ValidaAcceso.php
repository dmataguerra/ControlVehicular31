<?php
include("controlador.php");

$UserName = $_REQUEST['UserName'];
$Password = $_REQUEST['Password'];
$conn = Conectar();

// Obtener los datos del usuario
$SQL = "SELECT * FROM usuarios WHERE username = '$UserName'";
$resultSet = Ejecutar($conn, $SQL);
$row = mysqli_fetch_assoc($resultSet);
$n = mysqli_num_rows($resultSet);

if ($n == 0) {
    die("Usuario o contraseña incorrectos");
}

if ($row['bloqueo'] == 1) {
    die("Usuario bloqueado");
}

if ($row['status'] == 0) {
    die("Status no autorizado");
}

print("El usuario existe<br>");

$contador = $row['intento'];

if ($row['password'] == $Password) {
    print("Contraseña correcta");

    $SQL = "UPDATE usuarios SET intento = 0 WHERE username = '$UserName'";
    Ejecutar($conn, $SQL);
    if($row['tipo'] == 'A'){
    header("Location:../formularios/MenuA.html");
    }else if ($row['tipo'] == 'U'){ 
    header("Location:../formularios/MenuU.html");
    }
} else {
  $contador++;     
  $intentos_restantes = 3 - $contador;

    print("Contraseña incorrecta<br>Le quedan $intentos_restantes intentos");

    $SQL = "UPDATE usuarios SET intento = $contador WHERE username = '$UserName'";
    Ejecutar($conn, $SQL);

    if ($contador >= 3) {
        $SQL = "UPDATE usuarios SET bloqueo = 1 WHERE username = '$UserName'";
        Ejecutar($conn, $SQL);
        die("<br>Usuario bloqueado por demasiados intentos fallidos.");
    }
}

mysqli_close($conn);
?>

