<?php
class Oveja extends Animal
{
    private string $especie;
    private bool $enferma;

    function __construct($id, $peso, $especie, $enferma)
    {
        parent::__construct($id, $peso);
        $this->especie = $especie;
        $this->enferma = $enferma;
    }

    function __toString()
    {
        $ret = parent::__toString() . " - $this->especie - ";
        if ($this->enferma) {
            $ret .= "sí está enferma";
        } else {
            $ret .= "no está enferma";
        }
        return $ret;
    }
}
