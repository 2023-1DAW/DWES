<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tablasMultiplicarEstilos.css" />
    <title>Document</title>
</head>

<body>
    <?php
    echo "<table><tr><th class='x'>X</th>";
    //Primero la fila de headers (1  2  3  4 ...)
    for ($i = 0; $i < 10; $i++) {
        echo "<th class='horizontal'>$i</th>";
    }
    echo "</tr>";
    //Después el resto de la tabla:
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            if ($j == 0) {
                echo "<th class='vertical'>$i</th>";
            }
            $mul = $i * $j;
            echo "<td>$mul</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>