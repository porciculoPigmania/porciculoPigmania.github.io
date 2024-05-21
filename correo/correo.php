<?php

    // Verifica si la solicitud es POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recibe los datos del formulario
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

        // Puedes realizar otras validaciones y procesamientos aquí

        // Devuelve una respuesta (puedes personalizar según tus necesidades)
        $response = [
            'message' => 'OK',
            'data' => [
                'nombre' => $nombre,
                'email' => $email,
                'telefono' => $telefono,
                'mensaje' => $mensaje
            ]
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Devuelve una respuesta para solicitudes que no son POST
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Invalid Request']);
    }
?>
