<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase 2: arrays</title>
</head>

<body>
    <?php
    echo "<h2>Ejercicio 1</h2>";
    for ($i = 0; $i < 20; $i++) {
        $aleatorios[] = rand(10, 50);
    }
    echo "<p>";
    for ($i = 0; $i < 20; $i++) {
        echo "$aleatorios[$i], ";
    }
    echo "</p>";

    ###########################################################################
    echo "<h2>Ejercicio 2</h2>";
    $suma = 0;
    $max = $aleatorios[0];
    $min = $aleatorios[0];
    foreach ($aleatorios as $n) {
        $suma += $n;
        if ($n < $min) {
            $min = $n;
        }
        if ($n > $max) {
            $max = $n;
        }
    }
    echo "<p>La suma es $suma. La media es " . $suma / count($aleatorios) .
        ". El máximo es $max, y el mínimo es $min.</p>";

    ###########################################################################
    echo "<h2>Ejercicio 3</h2>";
    $alturas = ["Fatima" => 1.70, "Luz" => 1.68, "Amir" => 1.81, "Pedro" => 1.74, "María" => 1.75];
    echo "<table border=1><tr><th>Nombre</th><th>Altura</th></tr>";
    $suma = 0;
    foreach ($alturas as $n => $a) {
        echo "<tr><td>$n</td><td>$a</td></tr>";
        $suma += $a;
    }
    echo "<tr><td>MEDIA</td><td>" . $suma / count($alturas) . "</td></tr></table>";

    ###########################################################################
    echo "<h2>Ejercicio 4</h2>";
    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = rand(0, 100);
        $cuadrados[$i] = $numeros[$i] ** 2;
        $cubos[$i] = $numeros[$i] ** 3;
    }

    echo "<table border=1><tr><th>Valor</th><th>Cuadrado</th><th>Cubo</th></tr>";
    for ($i = 0; $i < count($numeros); $i++) {
        echo "<tr><td>$numeros[$i]</td><td>$cuadrados[$i]</td><td>$cubos[$i]</td></tr>";
    }
    echo "</table>";

    ###########################################################################
    echo "<h2>Ejercicio 5</h2>";
    $alumnado = ["Fatima", "Alberto", "Amir", "Denis"];
    $notas = [7.8, 4.1, 6.8, 9.3];
    $matriculas = [true, true, false, false];
    echo "<ul>";
    for ($i = 0; $i < count($alumnado); $i++) {
        echo "<li>$alumnado[$i] tiene un $notas[$i] y ";
        if ($matriculas[$i]) {
            echo "sí ";
        } else {
            echo "no ";
        }
        echo "está matriculade.</li>";
    }
    echo "</ul>";

    ###########################################################################
    echo "<h2>Ejercicio 6</h2>";
    $temp = [
        "Enero" => 14.8,
        "Febrero" => 19,
        "Marzo" => 25.2,
        "Abril" => 30.9,
        "Mayo" => 29.1,
        "Junio" => 37,
        "Julio" => 38.1,
        "Agosto" => 40,
        "Septiembre" => 31.6,
        "Octubre" => 30.1,
        "Noviembre" => 18.6,
        "Diciembre" => 13.1
    ];
    echo "<table border=1><tr>";
    foreach (array_keys($temp) as $m) {
        echo "<td>$m</td>";
    }
    echo "</tr><tr>";
    foreach ($temp as $t) {
        echo "<td>$t</td>";
    }
    echo "</tr></table>";

    ###########################################################################
    echo "<h2>Ejercicio 7</h2>";
    echo "<table border=1>";
    foreach ($temp as $m => $t) {
        echo "<tr><td>$m</td><td>";
        for ($i = 0; $i < $t; $i++) {
            echo "-";
        }
        echo "</td></tr>";
    }

    echo "</table>";

    ###########################################################################
    echo "<h2>Ejercicio 8</h2>";
    $tempMaxMin = [
        "Enero" => [14.8, -1.8],
        "Febrero" => [19, -1.8],
        "Marzo" => [25.2, -1.6],
        "Abril" => [30.9, 5.1],
        "Mayo" => [29.1, 8.3],
        "Junio" => [37, 13.4],
        "Julio" => [38.1, 17.4],
        "Agosto" => [40, 15.1],
        "Septiembre" => [31.6, 10.7],
        "Octubre" => [30.1, 7.5],
        "Noviembre" => [18.6, 3],
        "Diciembre" => [13.1, -0.2]
    ];
    echo "<table border=1><tr><th>Mes</th><th>Máx</th><th>Mín</th></tr>";
    foreach ($tempMaxMin as $m => $t) {
        echo "<tr><td>$m</td><td>$t[0]</td><td>$t[1]</td></tr>";
    }
    echo "</table>";

    ###########################################################################
    echo "<h2>Ejercicio 9</h2>";
    $numeros = [
        ["as", 11],
        ["dos", 0],
        ["tres", 10],
        ["cuatro", 0],
        ["cinco", 0],
        ["seis", 0],
        ["siete", 0],
        ["sota", 2],
        ["caballo", 3],
        ["rey", 4]
    ];
    $palos = ["oros", "copas", "espadas", "bastos"];
    $puntos = 0;
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, count($numeros) - 1);
        $p = rand(0, count($palos) - 1);
        $cartas[] = $numeros[$n][0] . " de " . $palos[$p];
        $puntos += $numeros[$n][1];
    }
    echo "<p>Aquí hay 10 cartas aleatorias:</p><ul>";
    foreach ($cartas as $c) {
        echo "<li>$c</li>";
    }
    echo "</ul>";
    echo "<p>El total de puntos es $puntos.</p>";

    ###########################################################################

    echo "<h2>Ejercicio 10</h2>";
    if (isset($cartas)) {
        unset($cartas);
    }
    $puntos = 0;
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, count($numeros) - 1);
        $p = rand(0, count($palos) - 1);
        //Verifico si había salido ya
        $carta = $numeros[$n][0] . " de " . $palos[$p];
        while ($i != 0 and in_array($carta, $cartas)) {
            $n = rand(0, count($numeros) - 1);
            $p = rand(0, count($palos) - 1);
            $carta = $numeros[$n][0] . " de " . $palos[$p];
        }
        $cartas[] = $carta;
        $puntos += $numeros[$n][1];
    }
    echo "<p>Aquí hay 10 cartas aleatorias:</p><ul>";
    foreach ($cartas as $c) {
        echo "<li>$c</li>";
    }
    echo "</ul>";
    echo "<p>El total de puntos es $puntos.</p>";


    ###########################################################################
    echo "<h2>Ejercicio 11</h2>";
    $dicc = [
        "Desarrollo" => "Development",
        "Lenguaje" => "Language",
        "Depurar" => "Debug",
        "Ejecutar" => "Run",
        "Probar" => "Test",
        "Funcion" => "Function",
        "Vector" => "Array",
        "Proyecto" => "Project"
    ];
    $aleat = rand(0, count($dicc) - 1);
    foreach ($dicc as $esp => $eng) {
        if ($aleat == 0) {
            echo "<p>$esp - $eng</p>";
        }
        $aleat--;
    }


    echo "<h2>Ejercicio 12</h2>";
    
    $array=[];
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            $numero = rand(0, 200);
            while (contiene($numero, $array)) {
                $numero = rand(0, 500);
            }
            $array[$i][$j] = $numero;
        }
    }

    function contiene($elemento, $bidimensional)
    {
        if (!isset($bidimensional)){
            return false;
        }
        for ($i = 0; $i < count($bidimensional); $i++) {
            for ($j = 0; $j < count($bidimensional[$i]); $j++) {
                if ($elemento == $bidimensional[$i][$j]) {
                    return true;
                }
            }
        }
        return false;
    }
    echo "<table border=1>";
    foreach ($array as $filas) {
        echo "<tr>";
        foreach ($filas as $n) {
            echo "<td>$n</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>