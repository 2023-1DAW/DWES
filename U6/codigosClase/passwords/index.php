<?php
session_start();
//TODO: si no viene de login/signup, que no le deje entrar
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <a href="./cerrarSesion.php">Cerrar sesión</a>
    <?php
    echo "<p>Hola, $email.</p>";
    ?>
</body>

</html>