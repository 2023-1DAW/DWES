<?php
declare(strict_types=1);
//1 quiere decir que sí son tipos estrictor
//por defecto es 0.
//Solo puede tener los valores 0 o 1.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    echo suma(3, 9);
    echo "<br>";
    //echo suma(3, 9.2);    Da error
    //echo "<br>";
    
    function imprimeTipos($a, int $b): void
    {
        echo "<p>la primera variable es " . gettype($a)
            . " y la segunda " . gettype($b) . "</p>";
    }
    imprimeTipos(4, 9);
    imprimeTipos("hola", 9);
    //  imprimeTipos(2, "hola");    // Da error
    //imprimeTipos(1, 2, 3, 4, 5, 6); //No hay problema (pero la función imprimeTipos ignora los últimos valores)
    
    echo "<h3>Los nombres de las funciones pueden estar en variables</h3>";
    $func = "suma";
    $resultado = $func(4, 6);
    echo $func;
    echo "<p>Resultado: $resultado. He llamado a la funcion $func.</p>";

    $func = "imprimeTipos";
    $resultado = $func(4, 6);
    //echo "<p>Resultado: $resultado</p>";
    ?>
</body>

</html>