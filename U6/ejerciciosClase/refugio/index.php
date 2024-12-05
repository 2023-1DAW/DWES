<?php
include "./bd/funcionesBD.php";

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
    $vacas = leerVacas();
    echo "VACAS<br>
        <table border=1>
            <tr><td>Id</td><td>Peso</td>
        </tr>";
    while ($v = $vacas->fetch_assoc()) {
        echo "<tr><td>{$v['id']}</td><td>{$v['peso']}</td></tr>";
    }
    echo "</table>";

    $ovejas = leerOvejas();
    echo "OVEJAS<br>
        <table border=1>
            <tr><td>Id</td><td>Peso</td><td>Especie</td><td>Enferma</td>
        </tr>";
    while ($o = $ovejas->fetch_assoc()) {
        $enf = $o['enferma'] == 1 ? "Sí" : "No";
        echo "<tr><td>{$o['id']}</td><td>{$o['peso']}</td><td>{$o['especie']}</td><td>$enf</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>