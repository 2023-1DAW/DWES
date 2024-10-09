<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios unidades 2 y 3</title>
</head>
<body>
    <?php

        echo "<h2>Ejercicio 1</h2>";
        $numero = 12;
        $decimal = 12.3;
        $cadena = "hola";
        $verdad = true;
        echo "Entero: $numero - " . gettype($numero);
        echo "<br>Double: $decimal - " . gettype($decimal);
        echo "<br>String: $cadena - " . gettype($cadena);
        echo "<br>Boolean: $verdad - " . gettype($verdad);

        echo "<h2>Ejercicio 2</h2>";
        $a = 4;
        $b = 3;
        echo "$a mod $b = " . $a % $b;
        echo "<br>$a ^ $b = " . $a ** $b;

        echo "<h2>Ejercicio 3</h2>";
        $nombre = "Sete";
        $apellidos = "Ruiz García";
        $nacimiento = 1987;
        echo "<table border=1>
                <tr><td>Nombre</td><td>$nombre</td></tr>
                <tr><td>Apellidos</td><td>$apellidos</td></tr>
                <tr><td>Año de nacimiento</td><td>$nacimiento</td></tr>
                </table>";

        echo "<h2>Ejercicio 4</h2>";
        $edad = 39;
        echo "<p>Actualmente tienes $edad años, 
            dentro de diez tendrás " . $edad+10 . ". 
            Te quedan " . 60-$edad . " para jubilarte.</p>";

        echo "<h2>Ejercicio 5</h2>";
        $precio = 1100;
        echo "<p>El precio $precio es ";
        if ($precio >= 1000){
            echo "caro";
        }elseif ($precio > 100){
            echo "medio";
        }else{
            echo "barato";
        }
        echo ".</p>";

        echo "<h2>Ejercicio 6</h2>";
        $hora = 3;
        $minuto = 59;
        $segundo = 59;

        $segundo++;
        if ($segundo >= 60){
            $segundo = 0;

            $minuto++;
            if ($minuto >= 60){
                $minuto = 0;

                $hora++;
                if ($hora >= 24){
                    $hora = 0;
                }
            }
        }
        echo "<p>Son las $hora:$minuto:$segundo.</p>";

        echo "<h2>Ejercicio 7</h2>";
        $maximo = 12;
        for ($i=1; $i <= $maximo; $i++) { 
            echo "$i, ";
        }
        echo "<br>";
        
        echo "<h2>Ejercicio 8</h2>";
        echo "<ul>";
        for ($i=9; $i <= 15; $i++) { 
            echo "<li>$i</li>";
        }
        echo "</ul>";

        echo "<h2>Ejercicio 9</h2>";
        echo "<p>";
        for ($i=0; $i <= 10; $i++) { 
            if ($i % 2 == 0){
                echo "$i, ";
            }
        }
        echo "</p>";

        echo "<h2>Ejercicio 10</h2>";
        echo "<ol>";
        for ($i=50; $i >= 20; $i--) { 
            if ($i % 3 != 0 && $i % 7 != 0){
                echo "<li>$i</li>";
            }
        }
        echo "</ol>";

        echo "<h2>Ejercicio 11</h2>";
        $suma = 0;
        for ($i=0; $i <= 10; $i++) { 
            $suma += $i;
        }
        echo "<p>La suma es $suma.</p>";

        echo "<h2>Ejercicio 12</h2>";
        $numero = 4;
        $factorial = 1;
        for ($i=1; $i <= $numero; $i++) { 
            $factorial *= $i;
        }
        echo "<p>El factorial es $factorial.</p>";

        echo "<h2>Ejercicio 13</h2>";
        $base = 3;
        $exponente = 4;
        $potencia = 1;
        for ($i=0; $i < $exponente; $i++) { 
            $potencia *= $base;
        }
        echo "<p>$base elevado a $exponente es $potencia.</p>";

        echo "<h2>Ejercicio 14</h2>";
        $i = 0;
        $potencia = 1;
        while ($i < $exponente) {
            $potencia *= $base;
            $i++;
        }
        echo "<p>$base elevado a $exponente es $potencia.</p>";

        echo "<h2>Ejercicio 15</h2>";
        $numero = 7;
        echo "<table border=1><tr><th>a</th><th>b</th><th>resultado</th></tr>";
        for ($i=0; $i <= 10; $i++) { 
            echo "<tr><td>$numero</td><td>$i</td><td>" . $i*$numero . "</td></tr>";
        }


        echo "</table>";

        echo "<h2>Ejercicio 16: Fibonacci</h2>";
        $a = 0;
        $b = 1;
        $num=20;

        for ($i=0; $i < 20; $i++) { 
            echo "$a, ";
            $c=$a+$b;
            $a=$b;
            $b=$c;
        }

        echo "<h2>Ejercicio 17</h2>";
        $filas = 3;
        $columnas = 5;
        for ($i=0; $i < $filas; $i++) { 
            for ($j=0; $j < $columnas; $j++) { 
                echo "* ";
            }
            echo "<br>";
        }

        echo "<h2>Ejercicio 18</h2>";
        $filas = 5;
        for ($i=0; $i <= $filas; $i++) { 
            for ($j=0; $j < $i; $j++) { 
                echo "* ";
            }
            echo "<br>";
        }

        echo "<h2>Ejercicio 19</h2>";
        $filas = 5;
        for ($i=0; $i <= $filas; $i++) { 
            for ($j=1; $j <= $i; $j++) { 
                echo "$j ";
            }
            echo "<br>";
        }

        echo "<h2>Ejercicio 20</h2>";
        echo "<p>En un fichero php+css aparte.</p>";

        echo "<h2>Ejercicio 21</h2>";
        $cadena = "esto es una cadena";
        echo "<p>Longitud: " . strlen($cadena) . "</p>";
        $cadena++;
        echo "<p>$cadena -> Se suma uno al último caracter.</p>";
        $cadena = "  esto est una cadena  ";
        $cadenaTrim = trim($cadena);
        echo "<p>$cadena</p>";
        echo "<p>$cadenaTrim</p>";
    ?>
</body>
</html>