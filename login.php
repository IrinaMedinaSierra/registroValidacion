<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validar en el servidor
    if (empty($username) || empty($password)) {
        die("Por favor, rellene todos los campos.");
    }

    // Aquí iría la lógica para verificar las credenciales, por ejemplo, con una base de datos
    // Ejemplo básico
    $valid_user = "usuario";
    $valid_password = "contraseña123";

    if ($username === $valid_user && $password === $valid_password) {
        echo "Inicio de sesión exitoso.";
        // Redirigir a otra página si es necesario
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Método de solicitud no válido.";
}
