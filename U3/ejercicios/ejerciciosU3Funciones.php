<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase 3: funciones</title>
</head>

<body>
    <?php
    echo "<h2>Ejercicio 1</h2>";
    function imprimeMayor($a, $b)
    {
        if ($a > $b) {
            echo "<p>$a</p>";
        } else {
            echo "<p>$b</p>";
        }
    }
    imprimeMayor(4, 5);
    imprimeMayor(9, 5);

    echo "<h2>Ejercicio 2</h2>";
    function mayor($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }
    echo "<p>" . mayor(4, 5) . "</p>";
    echo "<p>" . mayor(9, 5) . "</p>";

    //Otra forma:
    function mayorV2($a, $b)
    {
        return $a > $b ? $a : $b;
    }
    echo "<p>" . mayorV2(4, 5) . "</p>";
    echo "<p>" . mayorV2(9, 5) . "</p>";

    echo "<h2>Ejercicio 3</h2>";
    function esMayor($a, $b)
    {
        return $a > $b;
    }
    var_dump(esMayor(4, 5));
    var_dump(esMayor(9, 5));
    var_dump(esMayor(9, 9));

    echo "<h2>Ejercicio 4</h2>";
    function cuentaCaracteres($cadena)
    {
        return strlen($cadena);
    }
    var_dump(cuentaCaracteres("hola"));
    var_dump(cuentaCaracteres("1234 678"));
    var_dump(cuentaCaracteres(""));

    echo "<h2>Ejercicio 5</h2>";
    function cuentaVocales($cadena)
    {
        $contador = 0;
        $vocales = ["a", "e", "i", "o", "u"];
        for ($i = 0; $i < strlen($cadena); $i++) {
            if (in_array($cadena[$i], $vocales)) {
                $contador++;
            }
        }
        return $contador;
    }
    var_dump(cuentaVocales(""));

    echo "<h2>Ejercicio 6</h2>";

    echo "<h2>Ejercicio 7</h2>";

    echo "<h2>Ejercicio 8</h2>";

    echo "<h2>Ejercicio 9</h2>";

    echo "<h2>Ejercicio 10</h2>";

    echo "<h2>Ejercicio 11</h2>";

    ?>
</body>

</html>