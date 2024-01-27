<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form id="encuestaForm" action="guardar_respuestas.php" method="post">
        <!-- Pregunta 1 -->
        <div class="pregunta">
            <label for="respuesta1">Pregunta 1: ¿Cómo te sientes hoy?</label>
            <input type="text" name="respuesta1" required>
        </div>

        <!-- Pregunta 2 -->
        <div class="pregunta">
            <label for="respuesta2">Pregunta 2: ¿Cuál es tu edad?</label>
            <input type="number" name="respuesta2" required>
        </div>

        <!-- Pregunta 3 -->
        <div class="pregunta">
            <label for="respuesta3">Pregunta 3: ¿Cuál es tu número de teléfono?</label>
            <input type="tel" name="respuesta3" required>
        </div>

        <!-- Agrega más preguntas según sea necesario -->

        <button type="submit">Guardar y Siguiente</button>
    </form>
</div>

<script src="script.js"></script>
</body>
</html>