<?php

class Movil extends Equipo
{
    private string $so;
    function __construct($id, $averiado, $so)
    {
        parent::__construct($id, $averiado);
        $this->so = $so;
    }
    function __toString()
    {
        return "Móvil - " . parent::__toString() . ". Sistema operativo: $this->so";
    }

    public function getSo()
    {
        return $this->so;
    }
}
