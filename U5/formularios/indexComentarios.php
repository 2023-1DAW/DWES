<?php
session_start();

//Aquí puedo controlar desde dónde ha llegado el cliente que me visita.
//En este caso, la segunda comprobación no es imprescindible, solo sería necesaria si
//quiero hacer cosas diferentes dependiendo de qué página de origen venga
if (!isset($_SESSION["origin"])) {
    header("Location: ./formComentarios.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquí tu comentario</title>
</head>

<body>
    <?php
    //var_dump($_SESSION);

    if ($_SESSION["origin"] == "formComment") {
        echo "<p>Tu comentario: " . $_SESSION["comment"] . "</p>";
        if ($_SESSION["public"]) {
            echo "<p>Sí";
        } else {
            echo "<p>No";
        }
        echo " quieres que sea público.</p>";
    }elseif($_SESSION["origin"] == "com2") {
        echo $_SESSION["product"];
        var_dump($_SESSION);
    }
    ?>
</body>

</html>