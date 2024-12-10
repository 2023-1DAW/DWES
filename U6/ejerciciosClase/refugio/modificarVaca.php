<?php
session_start();
include "./bd/funcionesBD.php";
include "./funciones/funciones.php";

if (!isset($_SESSION["vaca"])) {
    header("Location:./selecciona.php");
    exit();
}

$pesoErr = $especieErr = "";
$errores = false;

$idVaca = $_SESSION["vaca"];
$vaca = leerVaca($idVaca);
//var_dump($vaca);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = securizar($_POST["peso"]);

    //Comprobar errores
    if (empty($peso)) {
        $pesoErr = "Campo obligatorio";
        $errores = true;
    }
    if (!$errores) {
        $vaca->setPeso($peso);
        actualizarVaca($vaca);
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
    <title>Modificar vaca</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        ID: <input type="text" name="id"
            value="<?php echo $vaca->getId(); ?>"
            readonly>
        <br>
        Peso: <input type="text" name="peso"
            value="<?php echo $vaca->getPeso(); ?>"
            class="<?php if (!empty($pesoErr)) echo "err"; ?>">
        <label class="err"><?php echo $pesoErr; ?></label>
        <br>
        <input type="submit" value="Modificar"><br>
    </form>
</body>

</html>