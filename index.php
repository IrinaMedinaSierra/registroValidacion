<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="validate.js" defer></script>
</head>
<body>
<form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()" novalidate class="needs-validation">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <input type="submit" value="Iniciar sesión">
</form>
</body>
</html>
