<?php
//Validación de datos
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario sencillito para cogerles cariño</title>
</head>

<body>
    <form method="POST" action="./formsencillo.php"> <!-- esto se debe mejorar -->
        <label>Nombre: </label>
        <input type="text" name="name"><br>
        <input type="submit" name="enviar" value="Envío">
        <input type="reset">
    </form>

    <?php

    var_dump($_POST);
    var_dump($_GET);

    //var_dump($_SERVER);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>He llegado a través del formulario.</p>";

        echo "<p>El nombre introducido es: {$_POST['name']}</p>";
        //La línea de arriba es similar a:
        echo "<p>El nombre introducido es: " . $_POST['name'] . "</p>";

        //Mañana hago un array donde se guarden todos los nombres introducidos
    } else {
        echo "<p>Primera visita.</p>";
    }


    ?>
</body>

</html>