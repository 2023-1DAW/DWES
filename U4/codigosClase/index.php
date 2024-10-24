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
    require_once "./clases/Animal.php"; //Este sobraría, pero como tiene _once no hay problema
    require_once "./clases/Perro.php";
    require_once "./clases/Leon.php";
    $a = new Animal("herv");
    $p = new Perro("car");
    echo "<p>" . $p->ladrar() . "</p>";
    $l = new Leon("c", 3, false);
    echo "<p>" . $l->rugir() . "</p>";
    echo "<p>$p</p>";
    echo "<p>$l</p>";

    ?>

    <h2>Pruebas con los poligonos</h2>
    <?php
    require_once "./clases/Poligono.php";
    require_once "./clases/TrianguloEquilatero.php";
    $t1 = new TrianguloEquilatero(4.8, 5.3);
    var_dump($t1->calcularArea());
    var_dump($t1->calcularPerimetro());
    echo "<p>$t1</p>";
    $t2 = new TrianguloEquilatero(1.8, 3.3, "rojo");
    var_dump($t2->calcularArea());
    var_dump($t2->calcularPerimetro());
    echo "<p>$t2</p>";
    //$p = new Poligono(5); //Error: no puedo instanciar una clase abstracta
    
    ?>

</body>

</html>