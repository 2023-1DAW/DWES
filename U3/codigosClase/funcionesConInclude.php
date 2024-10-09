
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Llamo a funciones en otros ficheros</h2>

    <?php

        //Incluir el fichero con las funciones:
        include("./functions/functions.php"); //También sin paréntesis

        //echo multiplicacion(3, 5);
        //echo "$saludo";
        echo "FIN";     


    ?>
</body>
</html>