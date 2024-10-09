<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
</head>

<body>
    <h2>Operaciones</h2>

    <?php
    echo "<h3>Operaciones aritméticas</h3>";
    $a = 4;
    $b = 9;
    $suma = $a + $b;
    echo "La suma de " . $a . " más " . $b . " es " . $suma . "<br>";
    echo "La suma de $a más $b es $suma<br>";
    echo 'La suma de $a más $b es $suma<br>';   //NO interpreta las variables
    
    //Potencia (a elevado a b):
    $potencia = $a ** $b;
    echo "$potencia<br>";
    echo 1 + $a * $b . "<br>";  //37
    echo (1 + $a) * $b . "<br>";    //45
    
    //$a++;
    //echo $a . "<br>";
    
    $a = 2;
    $b = 3;
    $c = $a++ + $b;
    echo "c es $c, a es $a";    //c es 5, a es 3
    
    $a = 2;
    $b = 3;
    $c = ++$a + $b;
    echo "c es $c, a es $a";    //c es 6, a es 3
    
    ?>
    <h3>Operadores de comparación</h3>
    <?php
    $x = 2;
    $y = 2;
    $iguales = $x == $y;
    echo "$iguales <br>";
    echo gettype($iguales);
    $a = "juan";
    $b = "juan";
    echo $a == $b;

    $x = 2;
    $y = "2";
    $iguales = $x == $y;    //true
    echo "<br>---$iguales <br>";
    $iguales = $x === $y;    //false
    echo "<br>----$iguales <br>";

    $distintos = $a <> $b;  //Operador equivalente a !=
    $distintos = $a != $b;  //Lo mismo que arriba
    
    $a = 5;
    $b = 5;
    $nave = $a <=> $b;
    echo "----..$nave<br>";
    ?>
    <h3>Operadores lógicos</h3>
    <?php
    //AND: && o and
    $a = true;
    $b = true;
    $c = $a && $b;
    echo "$c<br>";

    $c = $a and $b; //and es igual que &&
    echo "$c<br>";

    $c = $a || $b;
    $c = $a or $c;  //or es igual que ||
    
    ?>

    <h3>Condicionales</h3>
    <?php
    $edad = 11;
    //if (condicion) { sentencias; }
    if ($edad >= 18) {
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor";
    }

    echo "<br>";
    $edad = 11;
    //if (condicion) { sentencias; }
    if ($edad >= 18) {
        echo "Eres mayor de edad";
    } elseif ($edad >= 18) {
        echo "Eres menor";
    } elseif ($edad >= 12) {
        echo "Adolescente";
    } elseif ($edad >= 5) {
        echo "Niño";
    } else {
        echo "Bebé";
    }
    echo "<br>";

    ?>
    <h2>Switch</h2>
    <?php
    $num = 5;
    switch ($num) {
        case 0:
            echo "Cero";
            break;
        case 1:
            echo "Uno";
            break;
        case 2:
            echo "Dos";
            break;
        default:
            echo "Nada";
    }

    //Quiero mostrar si el número es menor a tres, tres u otra cosa.
    $num = 9;
    switch ($num) {
        case 0:
        case 1:
        case 2:
            echo "menor";
            break;
        case 3:
            echo "igual";
            break;
        default:
            echo "mayor";
    }

    echo "<h2>Bucles</h2>";
    for ($i = 0; $i <= 5; $i++) {
        echo "$i, ";
    }

    //Transforma el bucle anterior a un while
    $i = 10;
    while ($i <= 5) {
        echo "$i, ";
        $i++;
    }

    $i = 10;
    do {
        echo "$i, ";
        $i++;
    } while ($i <= 5);



    echo "<br><br><br>";
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo "$i, ";
    }


    echo "<br><br><br><br><br><br><br><br><br><br><br>";
    ?>
</body>

</html>