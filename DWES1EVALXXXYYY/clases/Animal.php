<?php

abstract class Animal
{
    private string $especie;
    private int $peso;

    function __construct($especie, $peso){
        $this->especie = $especie;
        $this->peso = $peso;
    }

    public function engordar($gramos)
    {
        $this->peso += $gramos;
    }

    function __toString(){
        return $this->especie . ": animal de " . $this->peso . "g.";
    }
}
