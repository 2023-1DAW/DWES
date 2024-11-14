
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php

    if (!isset($_SESSION["registrado"])){
        header("Location: ./formualrio/formXY.php");
        exit();
    }
   
    $nombre = $_SESSION["n"];
    $tel = $_SESSION["t"];
    $tipo = $_SESSION["tipo"];



    echo "<p>Tu nombre es $nombre, tu teléfono es $tel.";
    if (empty($tipo)) {
        echo "No has marcado ninguna opción</p>";
    } else {
        echo "Tu elección es $tipo</p>";
    }

    ?>
</body>

</html>