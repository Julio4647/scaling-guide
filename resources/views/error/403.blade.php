<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Acceso Denegado</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            text-align: center;
            padding: 50px;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: auto;
        }

        h1 {
            color: #dc3545;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>403 - Acceso Denegado</h1>
        <p>Lo siento, no tienes permiso para acceder a esta página.</p>
        <button onclick="goBack()">Regresar</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
