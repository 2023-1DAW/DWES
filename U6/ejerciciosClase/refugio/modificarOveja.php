<?php
session_start();
include "./bd/funcionesBD.php";
include "./funciones/funciones.php";

if (!isset($_SESSION["oveja"])) {
    header("Location:./selecciona.php");
    exit();
}

$pesoErr = $especieErr = "";
$errores = false;

$idOveja = $_SESSION["oveja"];
$oveja = leerOveja($idOveja);
//var_dump($oveja);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = securizar($_POST["peso"]);
    $especie = securizar($_POST["especie"]);
    $enferma = false;
    if (isset($_POST["enferma"])) {
        $enferma = true;
    }

    //Comprobar errores
    if (empty($peso)) {
        $pesoErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($especie)) {
        $especieErr = "Campo obligatorio";
        $errores = true;
    }
    if (!$errores) {
        $oveja->setPeso($peso);
        $oveja->setEnferma($enferma);
        $oveja->setEspecie($especie);
        actualizarOveja($oveja);
        header("Location: ./index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar oveja</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        ID: <input type="text" name="id"
            value="<?php echo $oveja->getId(); ?>"
            readonly>
        <br>
        Peso: <input type="text" name="peso"
            value="<?php echo $oveja->getPeso(); ?>"
            class="<?php if (!empty($pesoErr)) echo "err"; ?>">
        <label class="err"><?php echo $pesoErr; ?></label>
        <br>
        Especie: <input type="text" name="especie"
            value="<?php echo $oveja->getEspecie(); ?>"
            class="<?php if (!empty($especieErr)) echo "err"; ?>">
        <label class="err"><?php echo $especieErr; ?></label>
        <br>
        Enferma: <input type="checkbox" name="enferma" <?php if ($oveja->getEnferma()) echo "checked"; ?>>
        <br>
        <input type="submit" value="Modificar"><br>
    </form>
</body>

</html>