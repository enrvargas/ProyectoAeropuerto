<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Datos del Viaje</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        
        .form-container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
            font-weight: bold;
        }
        
        input[type="date"],
        input[type="time"],
        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ingresar Datos del Viaje</h1>
        <form method="POST" action="conexion.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
            <br><br>
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required>
            <br><br>
            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" required>
            <br><br>
            <label for="cantidad_asientos">Cantidad de Asientos:</label>
            <input type="number" id="cantidad_asientos" name="cantidad_asientos" required>
            <br><br>
            <input type="submit" value="Buscar Vehículos">
        </form>
    </div>
</body>
</html>