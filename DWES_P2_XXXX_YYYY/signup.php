<?php
include "./funciones/funciones.php";
$email = $pass1 = $pass2 = $fecha = $genero = "";
$emailErr = $pass1Err = $pass2Err = $passDif = "";
$errores = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = securizar($_POST["email"]);
    $pass1 = securizar($_POST["pass1"]);
    $pass2 = securizar($_POST["pass2"]);
    $fecha = securizar($_POST["fecha"]);
    $genero = securizar($_POST["genero"]);

    if (empty($email)) {
        $emailErr = "Campo obligatorio";
        $errores = true;
    }

    if (empty($pass1)) {
        $pass1Err = "Campo obligatorio";
        $errores = true;
    } elseif (empty($pass2)) {
        $pass2Err = "Campo obligatorio";
        $errores = true;
    } elseif ($pass1 != $pass2) {
        $passDif = "Las contraseñas no coinciden";
        $errores = true;
    }

    //COOKIES:
    setcookie("email", $email, time() + 60 * 5, "/");    //Esta cookie durará 5 minutos, visible en toda la app ("/")
    setcookie("fecha", $fecha, time() + 60 * 60 * 24 * 30, "/"); //Dura 1 mes, visible en toda la app
    setcookie("fecha", "", time() - 3600);    //Eliminar una cookie



    var_dump($_COOKIE);

    if (!$errores) {
        //SESION
        //header("Location: ./index.php");
        //exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
</head>

<body>
    <?php
    include "./partes/menu.php";
    ?>
    <div class="contenedor">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="fila">
                <div class="col25">
                    <label>Email: *</label>
                </div>
                <div class="col75">
                    <input type="text" name="email"><br>
                </div>
            </div>
            <div class="fila">
                <div class="col25">
                    <label>Contraseña: *</label>
                </div>
                <div class="col75">
                    <input type="password" name="pass1">
                </div>
            </div>
            <div class="fila">
                <div class="col25">
                    <label>Repite la contraseña: *</label>
                </div>
                <div class="col75">
                    <input type="password" name="pass2">
                </div>
            </div>
            <div class="fila">
                <div class="col25">
                    <label>Fecha de nacimiento:</label>
                </div>
                <div class="col75">
                    <input type="date" name="fecha">
                </div>
            </div>
            <div class="fila">
                <div class="col25">
                    <label>Tu género favorito:</label>
                </div>
                <div class="col75">
                    <select name="genero">
                        <option value="novela">Novela</option>
                        <option value="ensayo">Ensayo</option>
                        <option value="teatro">Teatro</option>
                    </select>
                </div>
            </div>
            <div class="fila">
                <input type="submit" value="Entrar">
                <input type="reset" value="Borrar">
            </div>
        </form>
    </div>
</body>

<?php
include "./partes/pie.php";
?>

</html>