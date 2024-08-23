<?php
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.invalid{
    border: 1px dotted darkred;
}

</style>
<body>
<?php

if (isset($_POST["enviar"])) {
    $dni=$_POST["dni"];
    $nombre = $_POST['nombre'];
    $passWord = $_POST['passWord'];
    $edad = $_POST['edad'];
    if (!isset($_SESSION["clientes"])){
        $_SESSION["clientes"]=array();
    }
    $_SESSION["clientes"][$dni]=array("nombre"=>$nombre,"edad"=>$edad, "passWord"=>$passWord);
    var_dump($_SESSION["clientes"]);
    foreach ($_SESSION["clientes"] as $dni => $cliente) {

            echo "<br>El nombre es: ".$cliente["nombre"]."<br>";
            echo "El edad es: ".$cliente["edad"]."<br>";
            echo "El password es: ".$cliente["passWord"]."<br>";
            echo "El DNI es: ".$dni."<br>";

    }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  class="validar" novalidate>
    <input type="text" name="dni" placeholder="Indica tu dni" required>
    <input type="text" name="nombre" placeholder="Indica tu nombre" required>
    <input type="password" name="passWord" placeholder="Indica tu passWord" required>
    <input type="number" name="edad" placeholder="Indica tu edad" required>
    <input type="submit" name="enviar" value="Enviar">
</form>
<script>
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.validar')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()

                    const inputs = form.querySelectorAll('input');
                    inputs.forEach(input => {
                        if (!input.checkValidity()) {
                            input.classList.add('invalid');
                        } else {
                            input.classList.remove('invalid');
                        }
                    });
                }
            }, false)
        })
    })();

</script>
</body>
</html>
