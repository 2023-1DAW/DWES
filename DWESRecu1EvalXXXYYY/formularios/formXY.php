<?php
session_start();
$asig = "";
$apr = $errores = false;
$asigErr = "";
include "../funciones/funcionesXY.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asig = securizar($_POST["asig"]);
    if (empty($asig)) {
        $asigErr = "Campo obligatorio";
        $errores = true;
    }
    if (isset($_POST["apr"])){
        $apr = true;
    }

    if (!$errores){
        $_SESSION["asig"] = $asig;
        $_SESSION["apr"] = $apr;
        header("Location: ./home.php");

    }

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        label.error {
            color: red;
        }
        input.error{
            border-color: red;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Asignatura: <input type="text" name="asig" class="<?php if (!empty($asigErr)) echo "error"; ?>">
        <label class="error"><?php echo $asigErr; ?></label>
        <br>
        <input type="checkbox" name="apr" <?php if ($apr) echo "checked"; ?>> Apruebo<br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>