<?php
// Incluir el archivo de conexión
require_once "conexion.php";

// Obtener la patente del formulario
$patente = $_POST["patente"];

// Consultar los datos del vehículo
$query = "SELECT * FROM vehiculos WHERE patente = '$patente'";
$resultado = $conn->query($query);

// Mostrar los datos del vehículo
if ($resultado->num_rows > 0) {
    $vehiculo = $resultado->fetch_assoc();

    echo "<h2>Datos del Vehículo</h2>";
    echo "<p><strong>Modelo:</strong> " . $vehiculo["modelo"] . "</p>";
    echo "<p><strong>Patente:</strong> " . $vehiculo["patente"] . "</p>";
    echo "<p><strong>Asientos Disponibles:</strong> " . $vehiculo["asientos_disponibles"] . "</p>";
    echo "<p><strong>Nombre del Conductor:</strong> " . $vehiculo["nombre_conductor"] . "</p>";
    echo "<p><strong>Área:</strong> " . $vehiculo["area"] . "</p>";
    echo "<p><strong>Jornada:</strong> " . $vehiculo["jornada"] . "</p>";
} else {
    echo "<h2>No se encontró ningún vehículo con la patente $patente.</h2>";
}

// Cerrar la conexión
$conn->close();
?>