<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays bidimensionales</title>
</head>

<body>
    <?php
    $contador = 1;
    for ($i = 0; $i < 6; $i++) {   //i son filas
        for ($j = 0; $j < 3; $j++) { //j son columnas
            $bid[$i][$j] = $contador;
            $contador++;
        }
    }
    var_dump($bid);
    var_dump(count($bid));      //6
    var_dump(count($bid[0]));      //3

    for ($i = 0; $i < count($bid); $i++) {
        for ($j = 0; $j < count($bid[$i]); $j++) {
            echo $bid[$i][$j] . " ";
        }
        echo "<br>";
    }


    //Crea un array bidimensional de 10 filas y 10 columnas y rellénalos 
    //con números aleatorios entre 0 y 500. Asegúrate de que ningún número 
    //se repite. Imprime el contenido del array bidimensional en una <table>.

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

    var_dump($array);
    var_dump(in_array(3, $array));  //false
    var_dump(in_array([10, 11, 12, 13, 14, 15, 16, 17, 18, 19], $array));  //true
    var_dump(in_array(3, $array[0]));  //true


    /*
    $prueba = [1, 2, 5];
    var_dump(in_array(1, $prueba)); //true
    var_dump(in_array(5, $prueba)); //true

    var_dump(isset($prueba));   //true
    var_dump(isset($prueba[0]));   //true
    var_dump(isset($prueba[3]));   //false
    var_dump($prueba[2]);
    */
    ?>
</body>

</html>