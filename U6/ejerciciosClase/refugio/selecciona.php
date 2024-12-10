<?php
session_start();
$id = $peso = "";
$idErr = $pesoErr = "";
$errores = false;

include "./bd/funcionesBD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    if (isset($_POST["modificarOveja"])) {
        $_SESSION["oveja"] = $_POST["oveja"];
        header("Location:./modificarOveja.php");
        exit();
    } elseif (isset($_POST["eliminarOveja"])) {
        eliminarOveja($_POST["oveja"]);
    } elseif (isset($_POST["modificarVaca"])) {
        $_SESSION["vaca"] = $_POST["vaca"];
        header("Location:./modificarVaca.php");
        exit();
    } elseif (isset($_POST["eliminarVaca"])) {
        eliminarVaca($_POST["vaca"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona animal</title>
</head>

<body>
    <?php
    //Obtengo las vacas y ovejas de la BD
    $vacas = leerVacas();
    $ovejas = leerOvejas();
    ?>
    <h3>Ovejas</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <select name="oveja">
            <?php
            while ($o = $ovejas->fetch_assoc()) {
                echo   "<option value=" . $o['id'] . ">" . $o['id'] . " - " . $o['peso'] . "kg </option>";
            }
            ?>
        </select>
        <input type="submit" name="modificarOveja" value="Modificar">
        <input type="submit" name="eliminarOveja" value="Eliminar">
    </form>
    <h3>Vacas</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <select name="vaca">
            <?php
            while ($v = $vacas->fetch_assoc()) {
                echo   "<option value=" . $v['id'] . ">" . $v['id'] . " - " . $v['peso'] . "kg </option>";
            }
            ?>
        </select>
        <input type="submit" name="modificarVaca" value="Modificar">
        <input type="submit" name="eliminarVaca" value="Eliminar">
    </form>
</body>

</html>