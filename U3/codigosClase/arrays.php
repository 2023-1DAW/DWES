<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h1>Arrays en PHP</h1>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Declaración de arrays:
    // Forma 1:
    $numeros = array(4, -3, 9, 56);
    echo "$numeros[20]<br>"; // Sale 9
    
    // Forma 2:
    $nombres = ["luz", "juan", "alberto"];
    //echo "$nombres[4]<br>"; // Warning
    
    // Forma 3:
    $aprobados[0] = true;
    $aprobados[1] = false;
    $aprobados[2] = false;
    //Las posiciones 3 y 4 no existen (null)
    $aprobados[5] = true;   //Si es indexado, no hacer esto.
    if ($aprobados[3]) {
        echo "Aprobado";
    } else {
        echo "No aprobado";
    }

    //Recorrerlos:
    for ($i = 0; $i < count($numeros); $i++) {

    }

    echo "<h2>Repaso de arrays</h2>";
    //Indexados:
    $dias = array("lunes", "martes", "miércoles", "jueves", "viernes");
    for ($i = 0; $i < count($dias); $i++) {
        echo $dias[$i] . "<br>";
    }
    foreach ($dias as $dia) {
        echo $dia . "<br>";
    }
    //Otra forma de declararlos:
    $meses = ["ene", "feb", "mar", "abr"];
    $meses[4] = "may";  //Lo mete en la posición 4
    $meses[] = "jun";   //Se inserta al final (push)
    $meses[2] = "febrero";  //sustituye (no inserta)
    
    //Asociativos
    $nombres = array(
        "321654T" => "Juan",
        "987654Y" => "Luisa",
        "654321K" => "AJuan"
    );
    /*, 1 => "Alberto",
    true => "Julia");*/ //Mejor no mezclar tipos en los arrays
    
    echo "<br><br><br>";
    foreach ($nombres as $n) {
        echo $n . "<br>";
    }
    foreach ($nombres as $clave => $valor) {
        echo "$clave --- $valor <br>";
    }

    echo "<h3>Ordenado con sort:</h3>";
    //sort($nombres); //Si lo aplico a arrays asociativos pierdo las claves.
    foreach ($nombres as $clave => $valor) {
        echo "$clave --- $valor <br>";
    }

    echo "<h3>Ordenado con asort (por valor de menor a mayor):</h3>";
    asort($nombres); //Si lo aplico a arrays asociativos pierdo las claves.
    foreach ($nombres as $clave => $valor) {
        echo "$clave --- $valor <br>";
    }
    print_r($nombres);
    var_dump($nombres);

    if (isset($nombres["987654Y"])) {
        echo $nombres["987654Y"];
    } else {
        echo "no existe.";
    }

    if (isset($edades)) {
        echo "si";
    } else {
        echo "no ";
    }

    echo "<br><br><br>";
    echo "<br><br><br>";
    echo "<br><br><br>";
    echo "<br><br><br>";


    ?>
</body>

</html>