<?php
//require_once "./Animal.php";
class Perro extends Animal
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
}
/*
$p = new Perro("herv");
echo "<p>$p</p>";
*/