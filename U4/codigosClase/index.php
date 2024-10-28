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
    require_once "./clases/Nado.php";
    require_once "./clases/Animal.php"; //Este sobraría, pero como tiene _once no hay problema
    require_once "./clases/Perro.php";
    require_once "./clases/Leon.php";
    //$a = new Animal("herv");
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

    $t2->cambiarColor("azul");
    var_dump($t2);

    //Estáticas:

    $t3 = new TrianguloEquilatero(5, 6);
    var_dump($t3->calcularArea());  //15
    //Esto se puede hacer, pero es raro llamar a un método estático desde un objeto
    var_dump($t3->calcularAreaTriangulo(7, 10)); //35

    //Para llamar a un método estático:
    var_dump(TrianguloEquilatero::calcularAreaTriangulo(7, 10));

    //Si llamamos a un traibuto estático lo que hace en realidad es 
    //crear un no estático y asignarle el valos a ese atributo de ese objeto.
    $t3->id = 3;
    var_dump($t3->id);  // 3

    $t2->id = 2;
    var_dump($t2);  // 2

    var_dump($t3);  // A. 2      B. 3
    //Para acceder a un atributo estático:


    TrianguloEquilatero::$id = 9;
    var_dump(TrianguloEquilatero::$id);

    ?>

    <h2>Métodos de PHP para trabajar con clases</h2>

    <?php
    require_once "./clases/Cuadrado.php";
    $c1 = new Cuadrado(4);
    if ($c1 instanceof Cuadrado) {
        echo "<p>Sí 1</p>"; //Sí
    } else {
        echo "<p>No 1</p>";
    }

    if ($c1 instanceof Poligono) {
        echo "<p>Sí 2</p>"; //Sí
    } else {
        echo "<p>No 2</p>";
    }

    var_dump(get_class($c1));   //"Cuadrado"

    var_dump(get_class_methods("Cuadrado"));
    var_dump(get_class_vars("Cuadrado"));   //No sale nada, porque no hay ninguno público

    class_alias("Cuadrado", "C");
    $tNuevo = new C(6,"azul");
    var_dump($tNuevo);

    $perro = new Perro("var");
    echo $perro->nadar(5,2);


    ?>
</body>

</html>