<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera app web</title>
</head>
<body>
    <p>El siguiente párrafo está generado por PHP</p>
    <p>
        <?php
            echo "hola mundo!";
            //Esto es un comentario
            /* de varias líneas
            asdf */
            #Otra forma de comentario.
        ?>
    </p>
    <?php
        echo("otro echo<br>");
        print "esto está con print";
        print "<p>hola</p>";
    ?>
    <h2>Variables</h2>
    <?php 
        // int numero = 6;
        // Tipo entero:
        $numero = 3;
        echo $numero;
        echo gettype($numero);
        echo "<br>";
        $numero = 3.3;
        echo $numero;
        echo gettype($numero);
        echo "<br>";
        $numero = "hola";
        echo $numero;
        echo gettype($numero);
        // Mejor no jugar con los tipos de las variables
        echo "<br>";
        $caracter = 'a';
        echo gettype($caracter);
        $b = true;
        echo gettype($b);

        //PHP es case sensitive!
        $horaclase = 5;
        $horaClase = 5; //Esto es otra variable distinta

        $horaClase = 10;
        echo $horaclase;
        echo $horaClase;

        
        $a = 5 + $nada;
        echo $a;

        $a = 1;
        $b = 2;
        $suma = $a + $b;
        //Quiero imprimir "1 + 2 = 3"
        echo "<p>" . $a . " + " . $b . " = " . $suma . "</p>";
        echo "<p>$a + $b = $suma</p>";
        
        $cadena1 = "hola";
        $cadena2 = 'buenos dias';
        echo '<p>$a + $b = $suma</p>';

        define("PI", 3.1416);
        const SALUDO_NOCHE = "Buenas noches";
        echo PI;
        echo "<br>";

        define("IVA", 0.21);
        echo PHP_MAJOR_VERSION;

        echo __FILE__;
    ?>
</body>
</html>