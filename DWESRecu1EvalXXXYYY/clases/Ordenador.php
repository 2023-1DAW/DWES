<?php

class Ordenador extends Equipo
{
    private float $ghz;
    function __construct($id, $averiado, $ghz)
    {
        parent::__construct($id, $averiado);
        $this->ghz = $ghz;
    }
    function __toString()
    {
        return "Ordenador - " . parent::__toString() . ". $this->ghz GHz";
    }

    public function getGhz()
    {
        return $this->ghz;
    }
}
