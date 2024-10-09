<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = "HOLA@GMAIL.COM";   //Imagina que esto viene de un form
        $userFromDB = "hola@gmail.com"; //Imagino que esto viene de tu BD

        //Comparo las dos variables y debería ser true
        if (strcasecmp($user, $userFromDB) == 0){
            echo "Son iguales";
        }else{
            echo "No son iguales";
        }
        
        //Otra opción
        $user = strtolower($user);
        if ($user == $userFromDB){
            echo "----Son iguales";
        }else{
            echo "----No son iguales";
        }
        ?>
</body>
</html>