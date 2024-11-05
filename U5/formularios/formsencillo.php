<?php

$nombre = $edad = "";
$nombreErr = $edadErr = "";
$errores = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Aquí dentro hago la validación
    //Como el nombre es obligatorio: 
    if (!empty($_POST["name"])) {
        //Sí ha rellenado el nombre
        $nombre = $_POST["name"];
    } else {
        $nombreErr = "El nombre es obligatorio";
        $errores = true;
    }

    //Igual con la edad
    if (!empty($_POST["age"])) {
        //Sí ha rellenado el nombre
        $edad = $_POST["age"];
    } else {
        $edadErr = "La edad es obligatoria";
        $errores = true;
    }

    //Mañana hago un array donde se guarden todos los nombres introducidos
}

//Comprobaciones en caso de que sea de tipo GET:
//if (isset($_GET["name"])) {
//    echo "<p>Hola {$_GET["name"]}.</p>";
//}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario sencillito para cogerles cariño</title>
    <style>
        input.err{
            border-color: red;
        }
        label.error{
            color: red;
            font-size: small;
        }
    </style>
</head>

<body>
    <form method="POST" action="./formsencillo.php"> <!-- esto se debe mejorar -->
        <label>Nombre *: </label>
        <input 
            type="text"
            name="name"
            value="<?php echo $nombre; ?>"
            class="<?php echo empty($nombreErr) ? "" : "err"; ?>">
        <?php
        if (!empty($nombreErr)) {
            echo "<label class='error'>$nombreErr</label>";
        }
        ?>
        <br>
        <label>Edad *: </label>
        <input
            type="number"
            name="age"
            value="<?php echo $edad; ?>"
            class="<?php echo empty($edadErr) ? "" : "err"; ?>">
        <?php
        if (!empty($edadErr)) {
            echo "<label class='error'>$edadErr</label>";
        }
        ?>
        <br>
        <input type="submit" name="enviar" value="Envío">
        <input type="reset">
    </form>

    <?php
    if (!$errores) {
        echo "<p>Te damos la bienvenida, $nombre. Tienes $edad años.</p>";
    }

    ?>
</body>

</html>