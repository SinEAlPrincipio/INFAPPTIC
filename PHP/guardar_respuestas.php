<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexión a la base de datos (reemplaza los valores con los tuyos)
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "encuestas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recoger las respuestas del formulario y guardar en la base de datos
    $preguntas = ['respuesta1', 'respuesta2', 'respuesta3']; // Agrega más preguntas aquí
    foreach ($preguntas as $pregunta) {
        $respuesta = $_POST[$pregunta];
        $stmt = $conn->prepare("INSERT INTO respuestas (pregunta, respuesta) VALUES (?, ?)");
        $stmt->bind_param("ss", $pregunta, $respuesta);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();
}
?>
