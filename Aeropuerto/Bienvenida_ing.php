<!DOCTYPE html>
<html>
<head>
    <title>Totem de Bienvenida</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        
        .totem {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            color: #333;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .button:hover {
            background-color: #45a049;
        }
        .language-select {
            position: absolute;
            left: 20px;
            bottom: 20px;
            background-color: #4caf50;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .language-select select {
            background-color: #4caf50;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            appearance: none;
            outline: none;
            font-size: 14px;
            font-family: Arial, sans-serif;
            cursor: pointer;
        }
        
        .language-select select option {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="totem">
        <h1>Welcome to Transfer</h1>
        <p>Press the button to continue:</p>
        <a class="button" href="datos_pasajero.php">Continue</a>
    </div>
    <div class="language-select">
        <form action="bienvenida.php" method="post">
            <select name="language" onchange="this.form.submit()">
                <option value="es">Languaje</option>
                <option value="en">spanish</option>
                <option value="en">French</option>
                <option value="en">Chinese</option>
                <!-- Agrega más opciones de idioma según tus necesidades -->
            </select>
        </form>
    </div>
</body>
</html>