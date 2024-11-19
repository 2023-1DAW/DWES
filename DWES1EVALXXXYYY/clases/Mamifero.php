<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/DWES1EVALXXXYYY/clases/Animal.php";
class Mamifero extends Animal
{
    private int $meses;

    function __construct($especie, $peso, $meses)
    {
        parent::__construct($especie, $peso);
        $this->meses = $meses;
    }

    function __toString()
    {
        return parent::__toString() . " Gesta durante $this->meses meses.";
    }
}
