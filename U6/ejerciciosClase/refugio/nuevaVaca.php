<?php
$id = $peso = "";
$idErr = $pesoErr = "";
$errores = false;

include "./funciones/funciones.php";
include "./bd/funcionesBD.php";
include_once "./clases/Vaca.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = securizar($_POST["id"]);
    $peso = securizar($_POST["peso"]);

    //Comprobar errores
    if (empty($id)) {
        $idErr = "Campo obligatorio";
        $errores = true;
    }
    if (empty($peso)) {
        $pesoErr = "Campo obligatorio";
        $errores = true;
    }

    if (!$errores) {
        //Crear objeto Oveja
        $v = new Vaca($id, $peso);
        //var_dump($v);

        //Guardar en la BD
        guardarVaca($v);

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
    <title>Nueva vaca</title>
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
        <input type="submit" value="Crear"><br>
    </form>
</body>

</html>