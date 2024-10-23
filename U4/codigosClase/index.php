<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de POO</title>
</head>

<body>
    <h2>Pruebas con la clase Circunferencia</h2>

    <?php
    require "./clases/Circunferencia.php";
    $c = new Circunferencia(5);
    //echo $c->info();
    echo $c;
    ?>

    <h2>Pruebas con la clase Punto</h2>
    <?php
    require "./clases/Punto.php";
    $p = new Punto(4, 9);
    //echo $p->__tostring(); //La llamada a __tostring() es redundante
    echo $p;
    $p->setOtro(9000);
    echo $p->getOtro();
    $p2 = new Punto(7, 9, "rojo");
    echo "<br>$p2";
    ?>

    <h2>Pruebas con las clases de animales</h2>
    <?php
    require_once "./Animal.php"; //Este sobraría, pero como tiene _once no hay problema
    require_once "./Perro.php";
    require_once "./Leon.php";
    $a = new Animal("herv");
    $p = new Perro("car");
    echo "<p>" . $p->ladrar() . "</p>";
    $l = new Leon("c", 3, false);
    echo "<p>" . $l->rugir() . "</p>";
    echo "<p>$p</p>";
    echo "<p>$l</p>";

    ?>

</body>

</html>