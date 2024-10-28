<?php
//require_once "./Animal.php";
class Perro extends Animal implements Nado
{

    //Constructor: no hace falta porque coge el de la superclase.

    //__toString?

    public function __toString(): string
    {
        return "Perro " . parent::__toString();
    }

    public function ladrar()
    {
        return "guau";
    }

    public function nadar(int $km, float $velocidad): string{
        return "Soy un perro y he nadado $km km a una velocidad de $velocidad km/h";
    }
}
/*
$p = new Perro("herv");
echo "<p>$p</p>";
*/