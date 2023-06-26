<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menú Conductor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #333;
            margin-top: 30px;
        }

        p {
            margin-bottom: 5px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            text-align: left;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Menú Conductor</h1>
    <h2>Lista de Pasajeros</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nombre_de_la_base_de_datos";

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    // Obtener la lista de pasajeros y sus detalles desde la tabla "viajes"
    $query = "SELECT * FROM viajes";
    $resultado = $conn->query($query);

    // Mostrar la información de los pasajeros
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<p><strong>Fecha:</strong> " . $fila["fecha"] . "</p>";
            echo "<p><strong>Hora:</strong> " . $fila["hora"] . "</p>";
            echo "<p><strong>Destino:</strong> " . $fila["destino"] . "</p>";
            echo "<p><strong>Cantidad de Asientos:</strong> " . $fila["cantidad_asientos"] . "</p>";
            echo "<p><strong>Nombre del Pasajero:</strong> " . $fila["nombre_pasajero"] . "</p>";
            // Obtener los datos del pasajero relacionados con el viaje actual


            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "<p>No hay viajes registrados.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</body>
</html>