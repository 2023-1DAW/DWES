<?php
$id = $peso = $especie = "";
$enferma = false;
$idErr = $pesoErr = $especieErr = "";
$errores = false;

include "./funciones/funciones.php";
include "./bd/funcionesBD.php";
include_once "./clases/Oveja.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = securizar($_POST["id"]);
    $peso = securizar($_POST["peso"]);
    $especie = securizar($_POST["especie"]);
    if (isset($_POST["enferma"])) {
        $enferma = true;
    }

    //Comprobar errores
    if (empty($id)) {
        $idErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($peso)) {
        $pesoErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($especie)) {
        $especieErr = "Campo obligatorio";
        $errores = true;
    }

    if (!$errores) {
        //Crear objeto Oveja
        $o = new Oveja($id, $peso, $especie, $enferma);
        var_dump($o);

        //Guardar en la BD
        guardarOveja($o);

        //Ir a index.php
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
    <title>Nueva oveja</title>
    <style>
        label.err {
            color: red;
        }

        input.err {
            border-color: red;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        ID: <input type="text" name="id"
            value="<?php echo $id; ?>"
            class="<?php if (!empty($idErr)) echo "err"; ?>">
        <label class="err"><?php echo $idErr; ?></label>
        <br>
        Peso: <input type="text" name="peso"
            value="<?php echo $peso; ?>"
            class="<?php if (!empty($pesoErr)) echo "err"; ?>">
        <label class="err"><?php echo $pesoErr; ?></label>
        <br>
        Especie: <input type="text" name="especie"
            value="<?php echo $especie; ?>"
            class="<?php if (!empty($especieErr)) echo "err"; ?>">
        <label class="err"><?php echo $especieErr; ?></label>
        <br>
        Enferma: <input type="checkbox" name="enferma" <?php if ($enferma) echo "checked"; ?>>
        <br>
        <input type="submit" value="Crear"><br>
    </form>
</body>

</html>