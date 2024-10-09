<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones por valor y por referencia</title>
</head>

<body>
    <?php
    $z = 1;
    $z = aumenta($z);
    var_dump($z);

    function aumenta($a)
    {
        $a++;
        return $a;
    }


    $z = 1;
    aumentaPorReferencia($z);
    var_dump($z);
    function aumentaPorReferencia(&$a)
    {
        $a++;
    }

    $n1 = 1;
    $n2 = 2;
    $n3 = 3;
    $n4 = 4;
    dolorDeCabeza($n1, $n2, $n3, $n4);
    echo "<p>$n1 $n2 $n3 $n4 </p>";
    function dolorDeCabeza($a, &$b, &$c, $d)
    {
        $a += 3;
        $b += 3;
        $c += 3;
        $d += 3;
    }

    echo sumaNumeros(1, 4, 9);
    echo sumaNumeros(1, 4, 9, 15, 24);
    echo sumaNumeros(1);
    echo sumaNumeros();

    function sumaNumeros(...$numeros)
    {
        if (count($numeros) == 0) {
            //No hace falta esta comprobación de errores porque todo funciona igual.
        }
        var_dump($numeros);
        //numeros es un array que contiene todos los parámetros que le he pasado.
        $suma = 0;
        foreach ($numeros as $n) {
            $suma += $n;
        }
    }

    //Otra forma de hacer funciones con número variable de parámetros:
    function sumaNumerosV2()
    {

    }

    /*
        ¡¡Esto no se puede hacer!!
        cosa(1,2,3,4,5);
        cosa(1,2,3,"a","b");
        cosa(1,2,3,"a","b", 5, 6);
        function cosa(...$numeros, ...$palabras){
        }
        */

    echo mayorOMenor(true);    //Que imprima 9
    //echo mayorOMenor(false, 3, 7, 9, 11);   //Que imprima 3
    
    //echo mayorOMenor(false, 3, 7, 9, 11, "hola"); //Mejor no mezclar tipos.
    
    function mayorOMenor($mayor, ...$numeros)
    {
        //si $mayor es true, devuelvo el mayor de los números
        //si $mayor es false, devuelvo el menor de los números
        if (count($numeros) == 0) {
            return false;
        }

        $resultado = $numeros[0];
        if ($mayor) {
            //Calculo el mayor
            foreach ($numeros as $n) {
                if ($n > $resultado) {
                    $resultado = $n;
                }
            }
        } else {
            //Calculo el menor
            foreach ($numeros as $n) {
                if ($n < $resultado) {
                    $resultado = $n;
                }
            }
        }
        return $resultado;
    }

    //Si no recibe un segundo parámetro, se reste automáticamente 1.
    function restarCantidad($numero, $cantidad = 1)
    {
        $numero -= $cantidad;
        return $numero;
    }
    echo restarCantidad(3, 9); //-6
    echo restarCantidad(3); //2 (que le quite 1 por defecto)
    
    function saludar($nombre = "Desconocide", $tratamiento = "D./Dña.")
    {
        echo "<p>Hola $tratamiento $nombre</p>";
    }
    saludar("Pepa", "Sra.");    //Sra. Pepa
    saludar("Juan");    //D./Dña. Juan
    saludar();  //D./Dña. Desconocide

    ?>

</body>

</html>