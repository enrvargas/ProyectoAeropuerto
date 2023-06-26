<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados de búsqueda de vehículos</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        
        h2 {
            color: #333;
        }
        
        p {
            margin-bottom: 5px;
        }
        
        form {
            margin-top: 10px;
        }
        
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nombre_de_la_base_de_datos";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }
    
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $destino = $_POST['destino'];
    $cantidadAsientos = $_POST['cantidad_asientos'];
    
    // Establecer el conjunto de caracteres de la conexión
    $conn->set_charset("utf8");

    // Insertar los datos del viaje en la base de datos
    $query = "INSERT INTO viajes (nombre_pasajero, fecha, hora, destino, cantidad_asientos) VALUES ('$nombre', '$fecha', '$hora', '$destino', '$cantidadAsientos')";
    if ($conn->query($query) === true) {
        echo "Los datos del viaje se han almacenado correctamente en la base de datos.";
    } else {
        echo "Error al almacenar los datos del viaje: " . $conn->error;
    }    
    // Obtener la cantidad de asientos desde el formulario
    $cantidadAsientos = $_POST["cantidad_asientos"];

    // Consultar los vehículos con igual o mayor cantidad de asientos
    $query = "SELECT * FROM vehiculos WHERE asientos_disponibles >= $cantidadAsientos";
    $resultado = $conn->query($query);

    // Mostrar los vehículos encontrados
    if ($resultado->num_rows > 0) {
        echo "<h2>Vehículos encontrados</h2>";
        while ($vehiculo = $resultado->fetch_assoc()) {
            echo "<p><strong>Modelo:</strong> " . $vehiculo["modelo"] . "</p>";
            echo "<p><strong>Patente:</strong> " . $vehiculo["patente"] . "</p>";
            echo "<p><strong>Asientos Disponibles:</strong> " . $vehiculo["asientos_disponibles"] . "</p>";
            echo "<p><strong>Nombre del Conductor:</strong> " . $vehiculo["nombre_conductor"] . "</p>";
            echo "<p><strong>Área:</strong> " . $vehiculo["area"] . "</p>";
            echo "<form method='POST' action='qr.png'>";
            echo "<input type='hidden' name='patente' value='" . $vehiculo["patente"] . "'>";
            echo "<input type='submit' value='Seleccionar y pagar'>";
            echo "</form>";
            echo "<hr>";
        }
    } else {
        echo "<h2>No se encontraron vehículos con los asientos disponibles especificados.</h2>";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>