<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Más pruebas con la misma BD</title>
</head>

<body>
    <?php
    $server = "127.0.0.1";  //127.0.0.1
    $user = "root";
    $pass = "Sandia4you";
    $dbname = "daw";
    //Me conecto:
    $conexion = new mysqli($server, $user, $pass, $dbname);

    if ($conexion->connect_error) {
        echo "Ha habido errores en la conexión<br>";
        //Si no puedo continuar mi app sin la conexión, termino la ejecución del script:
        exit();
    } else {
        echo "Conectado<br>";
    }

    buscarPorNombre($conexion, "Sara");

    function buscarPorNombre($conexion, $nombre)
    {
        $sql = "SELECT pass, nombre, email FROM alumnos
                    WHERE nombre = ?";
        //1. La mando a la BD:
        $preparedStatement = $conexion->prepare($sql);
        //$preparedStatement es un objeto mysqli_stmt
        //2. Hago en bind
        $preparedStatement->bind_param("s", $nombre);
        //3. Asignar valores a la variable $nombre -> YA ESTÁ HECHO!
        //4. Lanzarla a la bd
        $preparedStatement->execute();
        //5. En el caso de SELECT: tengo que hacer un get_result() para conseguir el mysqli_result
        $resultados = $preparedStatement->get_result();
        echo "<ol>";

        //Este bucle es similar a hacer while($fila = $resultados->fetch_assoc())
        $fila = $resultados->fetch_assoc();
        while ($fila != null) {
            echo "<li>{$fila["nombre"]} {$fila["email"]} {$fila["pass"]}</li>";
            $fila = $resultados->fetch_assoc();
        }

        echo "</ol>";
    }
    modificarNombre($conexion, "Juan", "Sara");

    function modificarNombre($conexion, $nombreAntiguo, $nombreNuevo)
    {
        $sql = "UPDATE alumnos set nombre = ? where nombre = ?";
        //1. A la BD:
        $preparedStatement = $conexion->prepare($sql);
        //2. Bind:
        $preparedStatement->bind_param("ss", $nombreNuevo, $nombreAntiguo);
        //3. Ya tiene los valores, no hago nada más
        //4. Lanzarla
        if ($preparedStatement->execute()) {
            if ($preparedStatement->affected_rows > 0) {
                echo "Actualizadas " . $preparedStatement->affected_rows . "<br>";
            } else {
                echo "Nada que actualizar<br>";
            }
        }
    }

    

    ?>
</body>

</html>