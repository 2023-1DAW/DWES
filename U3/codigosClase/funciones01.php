<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    //phpinfo();
    //xdebug_info();
    //define("xdebug.show_local_vars",1);
    echo "hola";
        function suma($a, $b){
            $s = $a + $b;
            return $s;
        }

        $num1 = 3;
        $num2 = 9;
        echo suma($num1, $num2);

        echo suma(4, "9");
        echo suma(4.6, 9.2);
        

        echo "<br><br><br>";

        //Función que reciba un array indexado
        //y que lo imprima separado por comas
        $saludos = ["hola", "buenos dias", "adios"];
        var_dump($saludos);
        imprimeArray($saludos);
        function imprimeArray($array){
            foreach($array as $valor){
                echo "$valor, ";
            }
        }

        //Función que reciba dos parámetros: primero un array indexado 
        // y segundo un string que será el separador.
        // Devuelve (NO IMPRIME) cada valor del array separado por 
        // el separador
        //imprimeArray($saludos, "->");  //hola->buenos dias->adios
        echo "<br><br><br>";
        $saludos = ["hola", "buenos dias", "adios"];
        function imprimeArraySeparador($array, $separador){
            $cadena = "";
            foreach ($array as $valor) {
                $cadena .= $valor . $separador;
                //equivale a $cadena = $cadena . $valor. $separador;
            }
            return $cadena;
        }
        $resultado = imprimeArraySeparador($saludos, "->");
        echo $resultado;

        function aumenta($a){
            $a++;
            return $a;
        }

        $z = 2;
        //$resultado = aumenta($a) + 4;
        aumenta($z);

        $z = aumenta($z);

        echo "<br><br><br><br>";
        echo "<br><br><br><br>";
        echo "<br><br><br><br>";
        echo "$z";
        echo "<br><br><br><br>";

        function aumentaPorReferencia(&$a){
            $a++;
            //return $a;
        }

        $x = 7;
        aumentaPorReferencia($x);
        echo "<br><br><br><br>";
        echo "----->La x vale: $x";    //      a) 8
        echo "<br><br><br><br>";
        $y = 10;
        aumentaPorReferencia($y);
        echo "----->$y";    //11

        $t = 9;
        //$t = aumentaPorReferencia($t);
        var_dump($t);

        //funcion aumentar tres variables: aumenta en 1 las tres variables parámetros
        function aumentaTresVariables(&$a, &$b, $c){
            $a = 123;
            $b++;
            $c++;
        }
        $p = 1; $q = 5; $r = 7;
        aumentaTresVariables($p, $q, $r);
        $nueva = $p + 1;    //nueva = 
        echo "<p>las variables son $p, $q y $r</p>";    //123, 6, 8


    ?>
</body>
</html>