<?php
session_start();

//Si tengo una cookie llamada "conectado" me voy al index:
var_dump($_COOKIE);
var_dump($_SESSION);
if (isset($_COOKIE["conectado"])) {
    //header("Location: ./index.php");
    //exit();
}


$email = $pass = "";
$emailErr = $passErr = "";
$errores = false;
include "./funcionesBD.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    if (empty($email)) {
        $emailErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($pass)) {
        $pass1Err = "Campo obligatorio";
        $errores = true;
    }



    if (!$errores) {
        if (isset($_POST["con"])) {
            setcookie("conectado", $email, time() + 60 * 10, "/");
            //setcookie("otra", $email, time() + 60);
        } else {
            //TODO: eliminar cookie = ponerle una fecha pasada
            setcookie("conectado", $email, time() - 3600, "/");
        }
        //Guardo el mail en la sesión
        $_SESSION["email"] = $email;

        if (verificarUsuario($email, $pass) > 0) {
            //Voy al index
        } else {
            //errrores de login
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>

<body>
    <form action="" method="POST">
        Email: <input type="email" name="email"
            class="<?php if (!empty($emailErr)) echo "error"; ?>" value=""><br>
        Contraseña: <input type="password" name="pass"
            class="<?php if (!empty($passErr)) echo "error"; ?>" value=""><br>
        <input type="checkbox" name="con"> Mantenerme conectado <br>
        <input type="Submit" value="Enviar">
    </form>
</body>

</html>