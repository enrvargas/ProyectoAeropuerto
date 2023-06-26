<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nombre_de_la_base_de_datos";

// Obtener los datos enviados desde el formulario de inicio de sesión
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Consultar la base de datos para validar el inicio de sesión
$query = "SELECT * FROM vehiculos WHERE nombre_conductor = '$nombre' AND contrasena = '$contrasena'";
$resultado = $conn->query($query);

// Verificar si se encontró un conductor con los datos ingresados
if ($resultado->num_rows == 1) {
    // Inicio de sesión válido
    // Redirigir al conductor a la página de menú del conductor
    header("Location: menu_chofer.php");
    exit;
    // Ejemplo de redirección a otra página
    // header("Location: pagina_destino.php");
} else {
    // Inicio de sesión inválido
    echo "Inicio de sesión inválido. Por favor, verifique los datos ingresados.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>