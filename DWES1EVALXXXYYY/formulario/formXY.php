<?php
session_start();

$n1 = $n2 = $suma = "";
$n1Err = $n2Err = "";
$errores = false;
function securizar($c)
{
    return htmlspecialchars(stripslashes(trim($c)));
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);
    // He llegado aquí después de hacer clic en el botón submit
    $n1 = securizar($_POST['n1']);
    $n2 = securizar($_POST['n2']);
    if (empty($n1)) {
        $n1Err = "Campo obligatorio";
        $errores = true;
    }
    if (empty($n2)) {
        $n2Err = "Campo obligatorio";
        $errores = true;
    }
    if (isset($_POST["sumar"])) {
        $suma = true;
    } else {
        $suma = false;
    }

    if (!$errores){
        //Guardo en una sesión los valores que quiero pasar a la siguiente página:
        $_SESSION["n1"] = $n1;
        $_SESSION["n2"] = $n2;
        $_SESSION["op"] = $suma;
        header("Location:../indexXY.php");
        exit();
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
        input.err {
            border-color: red;
        }

        label.err {
            color: red;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Número 1: *<input type="number" name="n1" value="<?php echo $n1; ?>"
            class="<?php if (!empty($n1Err)) echo "err"; ?>">
        <label class="err"><?php echo $n1Err; ?></label>
        <br>
        Número 2: *<input type="number" name="n2" value="<?php echo $n2; ?>"
            class="<?php if (!empty($n2Err)) echo "err"; ?>">
        <label class="err"><?php echo $n2Err; ?></label>
        <br>
        ¿Sumar?: <input type="checkbox" name="sumar">
        <br>
        <input type="submit">

    </form>
</body>

</html>