<?php

abstract class Animal
{
    private String $alimentacion;
    private int $patas;

    //Constructor: alimentación y patas opcional 
    //(si no indico lo contrario, tendrá 4 patas)
    public function __construct($alimentacion, $patas = 4)
    {
        $this->alimentacion = $alimentacion;
        $this->patas = $patas;
    }

    //Sin getters ni setters

    //Sobrescribir __toString
    public function __toString(): string
    {
        return $this->alimentacion . ", tiene " . $this->patas . " patas";
    }

}

class AnimalV2
{
    public function __construct(
        private String $alimentacion,
        private int $patas = 4
    ) {}
}
/*
$a = new AnimalV2("carv", 7);
var_dump($a);/*/