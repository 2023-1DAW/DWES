<?php
session_start();
$email = $pass1 = $pass2 = "";
$emailErr = $pass1Err = $pass2Err = $passErr = "";
$errores = false;
include "./funcionesBD.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    if (empty($email)) {
        $emailErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($pass1)) {
        $pass1Err = "Campo obligatorio";
        $errores = true;
    }
    if (empty($pass2)) {
        $pass2Err = "Campo obligatorio";
        $errores = true;
    }
    if ($pass1 != $pass2) {
        $passErr = "Tienen que ser iguales";
        $errores = true;
    }

    if (!$errores) {
        //Guardo el mail en la sesión
        $_SESSION["email"] = $email;
        $_SESSION["origen"] = "singup";

        //Guardo en la BD:
        crearTabla();
        if (!existeUsuario($email)) {
            //Me voy al index:
            header("Location: ./index.php");

            insertarUsuario($email, $pass1);

            //Crear cookie conectado
            setcookie("conectado", $email, time() + 60 * 10, "/");


            exit();
        } else {
            $emailErr = "Ya existe un usuario con ese email";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="" method="POST">
        Email: <input type="email" name="email"
            class="<?php if (!empty($emailErr)) echo "error"; ?>" value="">
            <label><?php echo $emailErr;?></label><br>
        Contraseña: <input type="password" name="pass1"
            class="<?php if (!empty($pass1Err)) echo "error"; ?>" value=""><br>
        Repite contraseña: <input type="password" name="pass2" class="" value=""><br>
        <input type="Submit" value="Enviar">
    </form>
    <p>Haced dos funciones en el fichero funcionesBD.php:<br>
        1. conectar():mysqli (devuelve la conexión a la BD) <br>
        2. crearTabla() <br>
        3. insertarUsuario($email, $pass) (¡¡La tiene que hashear!!) </p>
</body>

</html>