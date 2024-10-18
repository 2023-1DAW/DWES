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
        $cadena = strtolower($cadena);
        $vocales = ["a", "e", "i", "o", "u"];
        for ($i = 0; $i < strlen($cadena); $i++) {
            if (in_array($cadena[$i], $vocales)) {
                $contador++;
            }
        }
        return $contador;
    }
    var_dump(cuentaVocales("hola adios A"));
    var_dump(cuentaVocales("hz"));
    var_dump(cuentaVocales(""));

    echo "<h2>Ejercicio 6</h2>";
    function aumentaODisminuye($numero, $boolean)
    {
        if ($boolean) {
            return $numero + 1;
        } else {
            return $numero - 1;
        }
    }
    var_dump(aumentaODisminuye(3, true));
    var_dump(aumentaODisminuye(3, false));

    echo "<h2>Ejercicio 7</h2>";
    function esPar($n)
    {
        if ($n % 2 == 0) {
            return true;
        }
        return false;
    }
    var_dump(esPar(4));
    var_dump(esPar(5));

    echo "<h2>Ejercicio 8</h2>";
    function arrayAletatorio($tam, $min, $max)
    {
        for ($i = 0; $i < $tam; $i++) {
            $array[$i] = rand($min, $max);
        }
        return $array;
    }
    var_dump(arrayAletatorio(7, -5, 5));
    var_dump(arrayAletatorio(3, -100, 100));

    echo "<h2>Ejercicio 9</h2>";
    function arrayPares($array)
    {
        $ret = [];
        foreach ($array as $n) {
            if ($n % 2 == 0) {
                $ret[] = $n;
            }
        }
        return $ret;
    }
    var_dump(arrayPares([1, 2, 1, 2, 3, 4, 5, 6, 7]));
    var_dump(arrayPares([1, 3, 5, 7]));
    var_dump(arrayPares([2, 4, 6, 8, 0]));

    echo "<h2>Ejercicio 10</h2>";
    function digitos($num)
    {
        return strlen($num);
    }
    var_dump(digitos(12345));
    var_dump(digitos(0));

    echo "<h2>Ejercicio 11</h2>";
    define("DK", 0.13);
    function dk2eur($cant)
    {
        return $cant * DK;
    }
    function eur2dk($cant)
    {
        return $cant / DK;
    }
    echo "<p>100 euros son " . eur2dk(100) . " coronas danesas</p>";
    echo "<p>100 coronas danesas son " . dk2eur(100) . " euros</p>";

    echo "<h2>Ejercicio 12</h2>";
    function modifica(&$numero, $cantidad){
        $numero += $cantidad;
    }
    $a = 1;
    $b = 3;
    modifica($a, $b);
    echo "<p>a es $a --- b es $b</p>";  //a es 4 --- b es 3

    function modificaPorValor($numero, $cantidad){
        $numero += $cantidad;
        return $numero;
    }
    $a = 1;
    $b = 3;
    $a = modificaPorValor($a, $b);
    echo "<p>a es $a --- b es $b</p>";  //a es 4 --- b es 3

    ?>
</body>

</html>