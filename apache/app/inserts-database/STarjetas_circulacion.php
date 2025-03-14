<?php
// Obtener los datos del formulario
$criterio = $_REQUEST['criterio'];
$atributo = $_REQUEST['atributo']; // Atributo por defecto

// Crear instrucción SQL
$SQL = "SELECT * FROM tarjetas_circulacion WHERE $atributo LIKE '%$criterio%';";

// Enviar instrucción a MySQL
include("Controlador.php");
$conexion = Conectar();
$resultSet = Ejecutar($conexion, $SQL);

// Procesar los datos
$n = mysqli_num_rows($resultSet);
$columnas = mysqli_field_count($conexion);

// Iniciar la tabla HTML
print("<table border='1'>");
print("<tr>
        <th>FolioCirculacion</th>
  <th>IdPago</th>
  <th>NumConstancia</th>
  <th>Origen</th>
  <th>CveVehicular</th>
  <th>Tipo</th>
  <th>Uso</th>
  <th>RPA</th>
  <th>Operacion</th>
  <th>PlacaAnt</th>
  <th>OficinaExpendidora</th>
  <th>Movimiento</th>
  <th>Vigencia</th>
      </tr>");

// Mostrar los datos en la tabla
for ($i = 0; $i < $n; $i++) {
    $fila = mysqli_fetch_row($resultSet);
    print("<tr>");
    for ($j = 0; $j < $columnas; $j++) {
        print("<td>".$fila[$j]."</td>");
    }
    print("</tr>");
}

print("</table>");

// Mostrar el número de registros encontrados
print("<p>Registros Encontrados = " . $n . "</p>");

// Cerrar conexión
mysqli_close($conexion);
?>


