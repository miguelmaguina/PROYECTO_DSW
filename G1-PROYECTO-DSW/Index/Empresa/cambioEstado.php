<?php

//Llamando a una pequeña conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyfinal_dsw_g1";

//Obtener id que solicita cambio
$id_clienteCambio = $_POST['id_clienteCambio'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Consulta SQL
$sql = "UPDATE Review SET Estado=0 WHERE ID_Cliente = {$id_clienteCambio}";

// Ejecutar consulta
if (mysqli_query($conn, $sql)) {
  echo "Cambio de estado (ahora 0) exitoso";
  header("Location: verProductoEmp2.php");
} else {
  echo "Error al aceptar cliente: " . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);

?>