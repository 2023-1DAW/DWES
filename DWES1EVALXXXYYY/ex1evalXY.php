<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen primera evaluación</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <h3>Ejercicio 1.1</h3>
    <?php

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $array[$i][$j] = ($i + 1) * ($j + 1);
        }
    }
    var_dump($array);

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($i == $j) {
                $array2[$i][$j] = "si";
            } else {
                $array2[$i][$j] = "no";
            }
        }
    }
    var_dump($array2);
    ?>

    <h3>Ejercicio 1.2</h3>
    <?php
    include "./funcionesXY.php";
    var_dump(pontencia(4, 3));
    var_dump(pontencia(4));
    var_dump(pontencia(2, 8));

    var_dump(promedio(1, 2, 4, 3));
    var_dump(promedio());
    var_dump(promedio(-2, 3, -7));

    $resultado = promedio();
    if ($resultado == false) {
        echo "<p>No has metido números</p>";
    } else {
        echo "<p>La media es $resultado</p>";
    }

    ?>

    <h3>Ejercicio 1.3</h3>
    <?php
    $p = [
        "Juan" => 21,
        "Ahmed" => 3,
        "Sonia" => 12
    ];
    ksort($p);

    echo "<ol>";
    foreach ($p as $nombre => $edad) {

        echo "<li>$nombre tiene $edad años</li>";
    }
    echo "</ol>";

    //echo "<p>{$_SERVER['PHP_SELF']}</p>";

    ?>

    <h2>Ejercicio 2</h2>
    <?php

    //No hago el include de Animal porque ya está en las hijas -> con rutas absolutas
    include "./clases/Ave.php";
    include "./clases/Mamifero.php";

    $a1 = new Ave("Avestruz", 625, false);
    $a1->engordar(5);
    $a2 = new Ave("Colibrí", 4, true);
    $m = new Mamifero("Perro", 450, 2);
    $animales = [$a1, $a2, $m];
    echo "<ul>";
    foreach ($animales as $a) {
        echo "<li>$a</li>";
    }
    echo "</ul>";


    ?>

</body>

</html>