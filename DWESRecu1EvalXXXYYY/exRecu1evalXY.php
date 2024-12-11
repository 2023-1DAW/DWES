<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación</title>
</head>

<body>

<h2>Ejercicio 1</h2>
<h3>Ejercicio 1.1</h3>
<?php

$alumnado = [
    "1234W" => [
        "name" => "Amir",
        "edad" => 21,
        "matricula" => true
    ],
    "2345X" => [
        "name" => "Laura",
        "edad" => 17,
        "matricula" => false
    ],
    "3456Y" => [
        "name" => "Juan",
        "edad" => 23,
        "matricula" => true
    ],
    "4567Z" => [
        "name" => "Martin",
        "edad" => 12,
        "matricula" => false
    ]
];


//Imprime por pantalla con un echo la edad de la alumna con DNI 2345X. Tendrás que acceder a través de los elementos del array asociativo $alumnado.
echo "<p>" . $alumnado["2345X"]["edad"] . "</p>";

//Imprime por pantalla los nombres de todo el alumnado en una lista ordenada:
echo "<ol>";
foreach ($alumnado as $a) {
    echo "<li>{$a["name"]}";
    if ($a["matricula"]) {
        echo " sí ";
    } else {
        echo " no ";
    }
    echo "tiene matrícula</li>";
}
echo "</ol>";

//Imprime por pantalla los nombres de las personas mayores de edad en una lista desordenada.
//Para ello, tienes que utilizar un bucle, y acceder a los datos a través del array asociativo $alumnado.
//La salida tiene que ser como la siguiente:
echo "<ul>";
foreach ($alumnado as $dni => $a) {
    if ($a["edad"] > 18) {
        echo "<li>{$a["name"]} tiene {$a["edad"]} años y su DNI es $dni.</li>";
    }
}
echo "</ul>";

?>
<h3>Ejercicio 1.2</h3>
<?php
include "./funciones/funcionesXY.php";
var_dump(factorial(4));
var_dump(factorial(5));
var_dump(factorial(-3));
?>

?>
<h2>Ejercicio 2</h2>
<?php
include "./clases/Equipo.php";
include "./clases/Movil.php";
include "./clases/Ordenador.php";

$m1 = new Movil("98MN", false, "Android");
$o1 = new Ordenador("12QW", false, 2.1);
$o1->averiar();
echo "<p>$m1</p>";
echo "<p>$o1</p>";
?>

</body>

</html>