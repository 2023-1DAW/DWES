<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    if (isset($_SESSION["asig"]) && isset($_SESSION["apr"])) {
        if ($_SESSION["apr"]) {
            echo "Sí vas a aprobar " . $_SESSION["asig"];
        } else {
            echo "No vas a aprobar " . $_SESSION["asig"];
        }
    } else {
        echo "No tengo datos.";
    }
    ?>
</body>

</html>